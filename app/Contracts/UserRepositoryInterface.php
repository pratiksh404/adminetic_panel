<?php

namespace App\Contracts;

use App\Models\User;
use App\Http\Requests\UserRequest;

interface UserRepositoryInterface
{
    public function userIndex();

    public function userCreate();

    public function userStore(UserRequest $request);

    public function userShow(User $user);

    public function userEdit(User $user);

    public function userUpdate(UserRequest $request, User $user);

    public function userDestroy(User $user);

    public function userEditRoute($user);
}
