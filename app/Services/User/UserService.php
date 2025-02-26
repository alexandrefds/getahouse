<?php

namespace App\Services\User;

use App\Repositories\User\UserRepositoryContract;
use App\Services\User\UserServiceContract;

class UserService implements UserServiceContract
{
    public function __construct(private readonly UserRepositoryContract $userRepository)
    {
    }

    public function userCreate(array $data): array
    {
        $data["password"] = bcrypt($data["password"]);

        $user = $this->userRepository->userCreate($data);

        return $user->toArray();
    }
}
