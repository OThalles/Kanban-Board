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

    public function create($request)
    {
        $data = [
            'title' => $request->title,
            'body' => $request->body,
        ];

        $validatorTask = Validator::make($request->all(),
        [
            'title' => 'required',
            'body' => 'required',
        ], [
            'title.required' => 'É necessário um título para a tarefa.',
            'body.required' => "É necessário um objetivo para a tarefa.",
        ]);

        if($validatorTask->fails()){
            return response()->json(['errors' => $validatorTask->errors()], 422);
        }

        $newTask = $this->taskRepository->create($data);
        if($newTask){
            return response()->json(['response' => $newTask], 200);
        }



    }

}
