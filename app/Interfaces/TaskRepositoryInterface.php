<?php
namespace App\Interfaces;

interface TaskRepositoryInterface
{
    public function create($request);
    public function findTaskByStatus($status);
}
