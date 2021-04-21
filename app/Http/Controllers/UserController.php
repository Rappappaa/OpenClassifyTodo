<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login(){
        if(!Auth::check()) return view('login');
        return redirect()->route('home');
    }

    public function register(){
        if(!Auth::check()) return view('register');
        return redirect()->route('home');
    }

    public function login_action(){
        if(!Auth::check()) {
            $user = User::Where(['email' => request('inputEmail'), 'password' => request('inputPassword'), 'deleted_at' => null])->First();
            if ($user != null) {
                Auth::login($user);
                if($user->isadmin == true) return redirect()->route('admin_index');
                return redirect()->route('home');

            }
        }
        return redirect()->route('login');
    }

    public function register_action()
    {
        if(!Auth::check()){

            $check = User::Where('email',request('inputEmail'))->First();

            if($check){
                return redirect()->route('home');
            }else{
                $user = User::create([
                    'namesurname' => request('inputNameSurname'),
                    'email' => request('inputEmail'),
                    'password' => request('inputPassword'),
                    'created_at' => Carbon::now()
                ]);

                if($user){
                    Auth::login($user);
                    return redirect()->route('home');
                }
            }
        }else{
            return redirect()->route('home');
        }
    }

    public function logout_action(){
        if(auth()->check()) {
            auth()->logout();
            return redirect()->route('home');
        }else{
            return redirect()->route('home');
        }
    }
}
