<?php

namespace App\Traits;
Use App\Models\Task;

trait TaskTrait
{
    public function findTask($status)
    {
        return Task::where('status', $status)->get();
    }

    public function getTasks(int $status, $kanbanid)
    {
        $getTask = $this->findTask($status);

        return $getTask;

    }

}
