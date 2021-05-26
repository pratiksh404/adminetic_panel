<?php

namespace App\Http\Livewire\Admin\Table;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Spatie\Activitylog\Models\Activity;

class ActivityTable extends Component
{
    public $filterType = null;

    public function render()
    {
        $activities = $this->getActivities();
        return view('livewire.admin.table.activity-table', compact('activities'));
    }

    public function getActivities()
    {
        if ($this->isAuthorized()) {
            if ($this->filterType == 1) { } else {
                return Activity::latest()->get();
            }
        } else {
            abort(403);
        }
    }

    private function isAuthorized(): bool
    {
        return Auth::user()->hasRole('admin') || Auth::user()->isSuperAdmin();
    }
}
