<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisterController extends Controller
{
  
    public function teacherRegisterIndex()
    {
        if (\Illuminate\Support\Facades\Auth::user()->ust_id===2) {
            return view('auth.registerAdm');
        }else{
            return redirect('/dashboard');
        }
        
    }
    public function storeTeacher(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'ust_id'=>2,
        ]);

        event(new Registered($user));
        return redirect('/teacher/register');
    }
    # code...
}
    

