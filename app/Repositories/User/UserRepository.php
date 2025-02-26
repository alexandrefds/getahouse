<?php

namespace App\Repositories\User;

use App\Models\User;

class UserRepository implements UserRepositoryContract
{
    public function __construct(private User $model)
    {
    }

    public function userCreate(array $data): User
    {
        return $this->model->create($data);
    }
}
