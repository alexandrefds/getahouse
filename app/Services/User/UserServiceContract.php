<?php

namespace App\Services\User;

interface UserServiceContract
{
    public function userCreate(array $data): array;
}
