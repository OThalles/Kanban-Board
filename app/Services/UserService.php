<?php
namespace App\Services;

use App\Interfaces\UserRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserService
{
    protected $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function newUser(Request $request)
    {
    $credentials = Validator::make($request->all(),
                    [
                    'name' => 'required',
                    'email' => 'required|email|unique:users',
                    'password' => 'required',
                    'confirmPassword' => 'required'
                    ]);

        if($credentials){
            $this->userRepository->create($request->all());
        }
    }
}
