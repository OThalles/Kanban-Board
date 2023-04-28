<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class UserController extends Controller
{
    protected $userService;

    public function __construct(UserService $UserService)
    {
        $this->userService = $UserService;
    }

    public function profile()
    {
        $userId = Auth::User()->id;
        return view('profile', ['kanbansCount' => $this->userService->getKanbansPerUser($userId),
                                'userId' => $this->userService->getUserId($userId),
                                'registrationDate' => $this->userService->getRegistrationDate($userId)
                            ]);
    }

    public function register()
    {
        return view('register');
    }

    public function login()
    {
        return view('login');
    }

    public function store(Request $request)
    {
        return $this->userService->newUser($request);
    }

    public function auth(Request $request)
    {
        return $this->userService->auth($request);
    }

    public function logout(Request $request)
    {
        return $this->userService->logout($request);

    }
}
