<?php
namespace App\Repositories;

use App\Interfaces\KanbanRepositoryInterface;
use App\Models\Kanban;


class KanbanRepository implements KanbanRepositoryInterface
{
    public function getKanbans($user)
    {
        $data = Kanban::where('user_id', $user->id)->get();
    }

    public function getOne()
    {
        return '';
    }
}
