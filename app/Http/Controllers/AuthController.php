<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\AuthRequest;
use App\Http\Resources\LoginResource;
use App\Services\Auth\AuthService;

class AuthController extends Controller
{
    protected $service;
    
    public function __construct(AuthService $authService)
    {
        $this->service = $authService;
    }
    
    public function login(AuthRequest $request)
    {
        $usuario = $this->service->login($request);
        return new LoginResource($usuario);
    }
}
