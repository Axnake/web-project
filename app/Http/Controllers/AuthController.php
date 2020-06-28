<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function auth(Request $request)
	{
		$user = User::where([['login', $request->login],['password', md5($request->password)]])->first();
		if (is_null($user)){
			return "неверный логин или пароль";
		}
		Auth::login($user);
		return back()->withInput();
	}

	public function logout(Request $request)
	{
		Auth::logout();
		return back()->withInput();
	}
	public function reg(Request $request)
	{
		$user = User::where('email_address', $request->email_address)->get();
		if (!is_null($user)){
			return "email уже существует";
		}


		$user = User::create([
			'login'=>$request->login,
			'email_address'=>$request->email_address,
			'status'=>1,
			'password'=>md5($request->password),
		]);
		if (is_null($user)){
			return "Ошибка";
		}
		return "Успешно зарегистрировались";
	}
}