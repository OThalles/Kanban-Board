<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Services\UserService;
use Illuminate\Http\Request;


class UserController extends Controller
{
    protected $userService;

    public function __construct(UserService $UserService)
    {
        $this->userService = $UserService;
    }

    public function register()
    {
        view('register');
    }

    public function store(Request $request)
    {
        $this->userService->newUser($request);
    }

    public function auth(Request $request)
    {

    }

    public function logout(Request $request)
    {

    }
}
