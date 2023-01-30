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

    public function getOne()
    {
        return '';
    }

    public function create($data): void
    {
        Kanban::create($data);
    }
}
