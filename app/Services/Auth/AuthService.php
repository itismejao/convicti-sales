<?php

namespace App\Services\Auth;

use App\Repositories\Auth\AuthRepository;

class AuthService
{
    protected $repository;

    public function __construct(AuthRepository $authRepository)
    {
        $this->repository = $authRepository;
    }

    public function login($credentials) 
    {
        return $this->repository->login($credentials);
    }
}