<?php

namespace App\Repositories\Auth;

use App\Exceptions\AuthException;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthRepository 
{

    protected $entity;

    public function __construct(User $usuario)
    {
        $this->entity = $usuario;
    }
    
    public function login($credentials) 
    {

        if (Auth::attempt($credentials->toArray())) {
            $user = Auth::user();
            $user->token = $user->createToken('token');
            return $user;
        } else {
            throw new AuthException('Credenciais inválidas');
        }

    }
}