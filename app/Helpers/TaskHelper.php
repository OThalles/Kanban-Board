<?php

namespace App\Helpers;
Use App\Models\Task;


class TaskHelper {

    public function findTaskByStatus($status){
        $array = [];
        $task = Task::whereIn('status_id', $status)->orderBy('status_id')->get();

        return $task;
    }

    public function getTasks($status)
    {
        $getData = $this->findTaskByStatus($status);
        return $getData;
    }
}
