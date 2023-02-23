<?php
namespace App\Interfaces;


Interface KanbanRepositoryInterface
{
    public function getOne($id);
    public function getKanbans($user);
    public function create($data);
    public function getKanbanStatuses($kanbanid);
}
