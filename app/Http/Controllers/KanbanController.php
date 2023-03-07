<?php

namespace App\Http\Controllers;

use App\Services\KanbanService;
use App\Traits\TaskTrait;
use App\Traits\StatusTrait;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Kanban;

class KanbanController extends Controller
{
    use TaskTrait;
    protected $kanbanService;

    public function __construct(KanbanService $kanbanService)
    {
        $this->kanbanService = $kanbanService;
    }

    public function index(Request $request)
    {
        $data = $this->kanbanService->getOne($request, Auth::User()->id);



        $pendingTasks = $this->getTasks(0, $request->id);
        $inProgressTask = $this->getTasks(1, $request->id);
        $finalizedTasks = $this->getTasks(2, $request->id);


        return view('Kanban', ['data' => $data,
        'pendingTasks' => $pendingTasks,
        'inProgressTasks' => $inProgressTask,
        'finalizedTasks' => $finalizedTasks,
        'kanban_id' =>$request->segment(2),

        ]);
    }

    public function create(Request $request)
    {
        header('Content-Type: application/json');
        $newKanban = $this->kanbanService->create($request, Auth::user()->id);


        return redirect()->back();

    }

}
