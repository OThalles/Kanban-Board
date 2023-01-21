<?php

namespace App\Http\Controllers;

use App\Services\KanbanService;
use Illuminate\Http\Request;

class KanbanController extends Controller
{
    protected $kanbanService;

    public function __construct(KanbanService $kanbanService)
    {
        $this->kanbanService = $kanbanService;
    }
}
