<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    public function showLogin()
    {
        $user = Auth::user();
        if (!$user) {
            return view('login1');
        } 
        else {
            if($user->role=="0") {
                return redirect()->route('admin.home');
                print'Admin';
            }
            else{
                print'user';
                return redirect()->route('user.home');
            }
        
        }
    }

    public function verificalogin(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($data)) {
            $user = Auth::user();

            if ($user->role == '0') {
                return redirect()->route('admin.home');
            } else {
                return redirect()->route('user.home');
            }
        } else {
            return back()->withErrors(['message' => 'Credenciales no válidas'])->withInput($request->only('name'));
        }
    }

    public function index()
    {
        // Lógica para la vista del usuario regular
        return view('user.home');
    }
    public function salir()
    {
        Auth::logout();
        return redirect('/login');
    }
}


