<?php
namespace App\Services;

use App\Interfaces\KanbanRepositoryInterface;
use Illuminate\Support\Facades\Validator;

class KanbanService
{
    protected $kanbanRepository;

    public function __construct(KanbanRepositoryInterface $kanbanRepository)
    {
        $this->kanbanRepository = $kanbanRepository;
    }

    public function getOne($request, $user)
    {
        $data = [
            'user_id' => $user,
            'id' => $request->id
        ];

        $req = $this->kanbanRepository->getOne($data);
        if($req);
        {
            return $req;
        }

        return false;

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

        $validatorKanban = Validator::make($request->all(),
            [
                'name' => 'required'
            ],['name.required' => 'O campo de nome não pode estar vazio']);

        if($validatorKanban->fails()){
            return redirect()->back()->withErrors($validatorKanban);
        }

        $newKanban = $this->kanbanRepository->create($data);
        return redirect()->back();

    }
}
