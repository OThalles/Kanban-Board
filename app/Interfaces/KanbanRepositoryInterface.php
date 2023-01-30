<?php
namespace App\Interfaces;


Interface KanbanRepositoryInterface
{
    public function getKanbans($user);
    public function create($data);
}
