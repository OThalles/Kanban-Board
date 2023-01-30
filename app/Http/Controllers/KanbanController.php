<?php

namespace App\Http\Controllers;

use App\Services\KanbanService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KanbanController extends Controller
{
    protected $kanbanService;

    public function __construct(KanbanService $kanbanService)
    {
        $this->kanbanService = $kanbanService;
    }

    public function index()
    {

        return view('Kanban');
    }

    public function create(Request $request)
    {
        return $this->kanbanService->create($request, Auth::user()->id);
    }

}
