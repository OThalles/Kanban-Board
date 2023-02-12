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

    public function index(Request $request)
    {
        $data = $this->kanbanService->getOne($request, Auth::User()->id);
        return view('Kanban', ['data' => $data]);
    }

    public function create(Request $request)
    {
        header('Content-Type: application/json');
        return $this->kanbanService->create($request, Auth::user()->id);;
    }

}
