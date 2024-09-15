<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\WelcomeMessage;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Dotenv\Exception\ValidationException;



class AuthController extends Controller
{

    public function register(Request $request){
        $field = $request->validate([
            'name'=>['required','min:3','max:255'],
            'email' => ['required', 'email', 'max:255','unique:users'],
            'password' => ['required','min:3','confirmed'],
        ]);

        $field['password'] = Hash::make($field['password']);


        $user = User::create($field);
        Mail::to($user->email)->send(new WelcomeMessage($user));

        //  return view('auth.login')
        //  ->with('alertMessage',"Registration successfully")->with('type', 'success');
         
        

        
    }
   

    //
    public function getLoginPage(){
        return view('auth.login');
    }
          
    // public function superAdmin(){
    //     return view('auth.superadminlogin');
    // }

    public function authenticate(Request $request) {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
       
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

           
            return redirect()->intended('appointments');
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
        //
        
    }

    public function logout(Request $request){
        Auth::logout();
 
        $request->session()->invalidate();
     
        $request->session()->regenerateToken();
     
        return redirect('homepage');
    }
    public function getToken(Request $request) {
        $request->validate([
             'email' => ['required', 'email'],
             'password' => ['required'],
         ]);
 
    
 
     
 }
    
}