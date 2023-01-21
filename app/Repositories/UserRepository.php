<?php
namespace App\Repositories;
use App\Interfaces\UserRepositoryInterface;
use App\Models\User;

class UserRepository implements UserRepositoryInterface
{
    public function create($data)
    {
        $query = User::create($data);
    }
}
