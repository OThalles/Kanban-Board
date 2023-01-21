<?php

namespace App\Services;

use App\Interfaces\StatusRepositoryInterface;

class StatusService
{
    protected $statusRepository;

    public function __construct(StatusRepositoryInterface $statusRepository)
    {
        $this->statusRepository = $statusRepository;
    }
}
