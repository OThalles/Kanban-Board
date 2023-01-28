<?php

namespace App\Http\Controllers;

use App\Services\KanbanService;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $kanbanService;

    public function __construct(KanbanService $kanbanService)
    {
        $this->kanbanService = $kanbanService;
    }

    public function index()
    {
        $data = $this->kanbanService->getKanbans(Auth::user()->id);

        return view('AllKanbans', ['data' => $data]);
    }
}
