<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;

class AuthController extends Controller
{
    public function getRegisterForm()
    {
        return view('auth.register');
    }

    public function register(RegisterRequest $request)
    {
        info($request);
        $data = $request->validated();
        $data['password'] = bcrypt($data['password']);
        $user = User::create($data);

        auth()->login($user);

        return redirect('/');
    }

    public function getLoginForm()
    {
        return view('auth.login');
    }

    public function login(LoginRequest $request)
    {
        $data = $request->validated();
        $isSuccessful = auth()->attempt($data);

        if($isSuccessful) {
            return redirect('/');
        }

        return back()->withErrors([
            'email' => 'Incorrect email or password'
        ]);
    }
}
