<?php

namespace Confee\Units\Auth\Http\Controllers;

use Codecasts\Support\Http\Controller;
use Confee\Units\Auth\Http\Requests\LoginRequest;
use Illuminate\Contracts\Auth\Guard;
use Tymon\JWTAuth\Facades\JWTAuth;

class LoginController extends Controller
{
    /**
     * @var Guard
     */
    protected $guard;

    public function __construct(Guard $guard)
    {
        $this->guard = $guard;
    }

    public function login(LoginRequest $request)
    {
        if ($this->guard->attempt($request->all())) {
           return $this->sendLoginSuccessResponse();
        }

        return $this->sendLoginFailedResponse();
    }

    protected function sendLoginFailedResponse()
    {
        return [
            'failed' => 'Invalid Credentials.'
        ];
    }

    protected function sendLoginSuccessResponse()
    {
        return [
            'token' => $this->generateToken(),
        ];
    }

    protected function generateToken()
    {
        return JWTAuth::fromUser($this->guard->user());
    }
}
