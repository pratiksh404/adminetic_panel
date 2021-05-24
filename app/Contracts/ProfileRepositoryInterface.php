<?php

namespace App\Contracts;

use App\Models\Admin\Profile;
use App\Http\Requests\ProfileRequest;

interface ProfileRepositoryInterface
{
    public function showProfile(Profile $profile);

    public function editProfile(Profile $profile);

    public function updateProfile(ProfileRequest $request, Profile $profile);
}
