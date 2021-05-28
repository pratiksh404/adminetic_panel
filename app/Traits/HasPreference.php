<?php

namespace App\Traits;

use App\Models\Admin\Preference;
use App\Models\Admin\Role;

trait HasPreference
{
    /**
     * The preferences that belong to the User
     */
    public function preferences()
    {
        return $this->belongsToMany(Preference::class)->withPivot('enabled')->withTimestamps();
    }
}
