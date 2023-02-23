<?php
namespace App\Services;

use App\Interfaces\TaskRepositoryInterface;
use Illuminate\Support\Facades\Validator;

class TaskService
{
    protected $taskRepository;

    public function __construct(TaskRepositoryInterface $taskRepository)
    {
        $this->taskRepository = $taskRepository;
    }

    public function create($request, $status)
    {
        $data = [
            'title' => $request->title,
            'body' => $request->body,
            'status_id' => $status
        ];

        $validatorTask = Validator::make($request->all(),
        [
            'title' => 'required',
            'body' => 'required',
        ], [
            'title.required' => 'É necessário um título para a tarefa.',
            'body.required' => "É necessário um objetivo para a tarefa.",
            'kanban_id.required' => "Ocorreu um erro",
        ]);
        if($validatorTask->fails()){
            return redirect()->back()->withErrors($validatorTask);
        }

        $this->taskRepository->create($data);
    }
}
