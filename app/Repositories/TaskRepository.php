<?php
namespace App\Repositories;

use App\Models\Task;
use App\Interfaces\TaskRepositoryInterface;

class TaskRepository implements TaskRepositoryInterface
{
    public function create($data){
        return Task::create($data);
    }

    public function findTaskByStatus($status){
        $array = [];
        $task = Task::whereIn('status_id', $status)->orderBy('status_id')->get();

        return $task;
    }
}
