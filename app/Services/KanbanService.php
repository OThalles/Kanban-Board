<?php
namespace App\Services;

use App\Interfaces\KanbanRepositoryInterface;

class KanbanService
{
    protected $kanbanRepository;

    public function __construct(KanbanRepositoryInterface $kanbanRepository)
    {
        $this->kanbanRepository = $kanbanRepository;
    }

    public function getKanbans($user)
    {
        return $this->kanbanRepository->getKanbans($user);
    }

    public function create($request,$user)
    {
        $data = [
            'name' => $request->name,
            'user_id' => $user
        ];

        return $this->kanbanRepository->create($data);
    }
}
