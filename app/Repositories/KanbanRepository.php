<?php
namespace App\Repositories;

use App\Interfaces\KanbanRepositoryInterface;
use App\Models\Kanban;


class KanbanRepository implements KanbanRepositoryInterface
{
    public function getKanbans($user)
    {
        $data = Kanban::where('user_id', $user)->get();
        return $data;
    }

    public function getOne($data)
    {
        $data = Kanban::where('id', $data['id'])->where('user_id', $data['user_id'])->get();
        return $data;

    }

    public function create($data)
    {
        return Kanban::create($data);
    }
}
