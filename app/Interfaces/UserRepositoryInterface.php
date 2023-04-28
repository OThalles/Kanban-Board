<?php
namespace App\Interfaces;

interface UserRepositoryInterface
{
    public function create($data);
    public function getKanbansPerUser($user);
    public function getUserId($user);
    public function getRegistrationDate($user);
}
