<?php

namespace App\Http\Controllers;

use App\Services\KanbanService;
use App\Http\Controllers\StatusController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Kanban;

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

        $statuses = $this->kanbanService->getKanbanStatuses($request->id);
        return view('Kanban', ['data' => $data, 'statuses' => $statuses]);
    }

    public function create(Request $request)
    {
        header('Content-Type: application/json');
        $newKanban = $this->kanbanService->create($request, Auth::user()->id);
        $status = new StatusController();
        $status->create($newKanban->id);

        return redirect()->back();

    }

}
