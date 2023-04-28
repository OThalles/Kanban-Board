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

    public function getKanbansPerUser($user)
    {
        $getKanbans = User::where('id', $user)->withCount('kanban')->get();
        return $getKanbans;
    }

    public function getUserId($user)
    {
        $simplifiedId = [];
        //Obtem a ultima parte do id do usuário.
        $getUser = User::where('id', $user)->get('id');
        $simplifiedId = explode('-', $getUser->pluck('id')[0]);
        return end($simplifiedId);
    }

    public function getRegistrationDate($user)
    {
        return User::where('id', $user)->get('created_at');
    }
}
