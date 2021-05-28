<?php

namespace App\Providers;

use App\Mixins\AdminMixins;
use App\Repositories\RoleRepository;
use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Route;
use App\Repositories\ProfileRepository;
use Illuminate\Support\ServiceProvider;
use App\Contracts\RoleRepositoryInterface;
use App\Contracts\UserRepositoryInterface;
use App\Repositories\PermissionRepository;
use App\Contracts\ProfileRepositoryInterface;
use App\Contracts\PermissionRepositoryInterface;
use App\Contracts\PreferenceRepositoryInterface;
use App\Contracts\SettingRepositoryInterface;
use App\Repositories\PreferenceRepository;
use App\Repositories\SettingRepository;

class AdminServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        /* Route Macro */
        Route::mixin(new AdminMixins());
        /* Repository Interface Binding */
        $this->repos();
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // Registering Blade Directives
        $this->dierctives();
    }

    protected function dierctives()
    {
        Blade::if('hasRole', function ($roles) {
            $hasAccess = false;
            $roles_array = explode("|", $roles);
            foreach ($roles_array as $role) {
                $hasAccess = $hasAccess || Auth::user()->hasRole($role) || Auth::user()->isSuperAdmin();
            }
            return $hasAccess;
        });
        Blade::directive('setting', function ($setting_name) {
            return "<?php echo setting($setting_name) ?>";
        });
    }

    // Repository Interface Binding
    protected function repos()
    {
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
        $this->app->bind(ProfileRepositoryInterface::class, ProfileRepository::class);
        $this->app->bind(RoleRepositoryInterface::class, RoleRepository::class);
        $this->app->bind(PermissionRepositoryInterface::class, PermissionRepository::class);
        $this->app->bind(SettingRepositoryInterface::class, SettingRepository::class);
        $this->app->bind(PreferenceRepositoryInterface::class, PreferenceRepository::class);
    }
}
