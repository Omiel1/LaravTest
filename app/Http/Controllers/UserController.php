<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    //
    public function index(){
        return View('users/login');
    }

    public function register(){
        return View('users/register');
    }

    public function login(Request $request){
        $formFields = $request->validate([
            "email" => ['required', 'email'],
            "password" => ['required']
        ]);

        //Try and find user, if found generate session ID
        if(auth()->attempt($formFields)){
            $request->session()->regenerate();

            return redirect('dashboard')->with('message','Succesfully logged in!');
        }

        return back()->withErrors(['email' => "Invalid credentials"])->onlyInput('email');
    }

    public function logout(Request $request){
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect("/")->with('message', "You have been loged out~");
    }

    //Create new user
    public function store(Request $request){
        $formFields = $request->validate([
            'name' => ['required', 'min:5'],
            'email' => ['required', 'email', Rule::unique('users','email')],
            'password' => 'required|min:6'
        ]);

        //Hash password
        $formFields['password'] = bcrypt($formFields['password']);

        //Create user
        $user = User::create($formFields);

        //Login
        auth()->login($user);

        return redirect('/dashboard')->with('message', 'Succesfully loged in!');
    }

    public function postRegister(){
        //return View('login');
    }
}
