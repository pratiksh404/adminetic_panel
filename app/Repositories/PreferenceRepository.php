<?php

namespace App\Repositories;

use App\Models\User;
use App\Models\Admin\Role;
use App\Models\Admin\Preference;
use Illuminate\Support\Facades\Cache;
use App\Http\Requests\PreferenceRequest;
use App\Contracts\PreferenceRepositoryInterface;

class PreferenceRepository implements PreferenceRepositoryInterface
{
    // Preference Index
    public function indexPreference()
    {
        $preferences = config('coderz.caching', true)
            ? (Cache::has('preferences') ? Cache::get('preferences') : Cache::rememberForever('preferences', function () {
                return Preference::latest()->get();
            }))
            : Preference::latest()->get();
        return compact('preferences');
    }

    // Preference Create
    public function createPreference()
    {
        $roles = Cache::get('roles', Role::all());
        return compact('roles');
    }

    // Preference Store
    public function storePreference(PreferenceRequest $request)
    {
        $preference = Preference::create($request->validated());
        /* Attaching preference to user */
        $users = User::all();
        if (isset($users)) {
            foreach ($users as $user) {
                if (!isset($preference->roles)) {
                    $preference->users()->attach($user->id, [
                        'enabled' => $preference->active
                    ]);
                } else {
                    if (array_intersect($user->roles->pluck('id')->toArray(), $preference->roles) != null) {
                        $preference->users()->attach($user->id, [
                            'enabled' => $preference->active
                        ]);
                    }
                }
            }
        }
    }

    // Preference Show
    public function showPreference(Preference $preference)
    {
        return compact('preference');
    }

    // Preference Edit
    public function editPreference(Preference $preference)
    {
        $roles = Cache::get('roles', Role::all());
        return compact('preference', 'roles');
    }

    // Preference Update
    public function updatePreference(PreferenceRequest $request, Preference $preference)
    {
        $preference->update($request->validated());
        $users = User::all();
        $preference->users()->sync($users);
    }

    // Preference Destroy
    public function destroyPreference(Preference $preference)
    {
        // Detach Users
        $preference->users()->detach();

        $preference->delete();
    }
}
