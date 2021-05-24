<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Profile;
use App\Http\Controllers\Controller;
use App\Contracts\ProfileRepositoryInterface;
use App\Http\Requests\ProfileRequest;

class ProfileController extends Controller
{
    protected $profileRepositoryInterface;

    public function __construct(ProfileRepositoryInterface $profileRepositoryInterface)
    {
        $this->profileRepositoryInterface = $profileRepositoryInterface;
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
        return view('admin.profile.show', $this->profileRepositoryInterface->showProfile($profile));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile $profile)
    {
        return view('admin.profile.edit', $this->profileRepositoryInterface->editProfile($profile));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\ProfileRequest  $request
     * @param  \App\Models\Admin\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(ProfileRequest $request, Profile $profile)
    {
        $this->profileRepositoryInterface->updateProfile($request, $profile);
        return redirect(adminEditRoute('profile', $profile->id))->withInfo('Profile Updated Sucessfully');
    }
}
