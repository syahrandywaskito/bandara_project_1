<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{

    public function Login() : View
    {
        return view('auth.login');
    }

    public function Authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|regex:/^(?=.*[A-Z])(?=.*\d)[A-Za-z\d]{8,}$/',
        ],
        [
            'password.regex' => 'Password tidak cocok dan harus mengandung setidaknya satu huruf kapital, satu angka, dan memiliki panjang minimal 8 karakter.',
        ]
        );

        $fullname = User::where('email', request()->input('email'))->value('name');

        $successMessage = "Selamat datang $fullname";

        if (Auth::attempt($credentials)) {

            $request->session()->regenerate();
            return redirect()->route('dashboard')->with('success', $successMessage);
        }

        return back()->withErrors([
            'email' => 'Kredensial yang Anda berikan tidak cocok dengan catatan kami',
            
        ]);
    }

    public function Register() : View
    {
        return view('auth.register');
    }

    public function Store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:2',
            'email' => 'required|email|unique:users',
            'password' => 'required|regex:/^(?=.*[A-Z])(?=.*\d)[A-Za-z\d]{8,}$/',
            'position' => 'required|string|not_in:Pilih Jabatan'
        ],
        [
            'password.regex' => 'Password harus mengandung setidaknya satu huruf kapital, satu angka, dan memiliki panjang minimal 8 karakter.',
            'position.not_in' => 'Pilih jabatan yang sesuai',
            'name.min' => 'Tuliskan nama lengkap lebih dari satu huruf',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'position' =>$request->position,
        ]);

        $credentials = $request->only('email', 'password');
        Auth::attempt($credentials);
        $request->session()->regenerate();
        return redirect()->route('dashboard')->with('success', 'berhasil mendadtar dan login');
    }

    public function Dashboard()
    {
        if (Auth::check()) {
            return view('admin.dashboard');
        }

        return redirect()->route('login')->withErrors([
            'email' => 'Please login to access the dashboard'
        ]);
    }

    public function Logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login')->with('success','Anda berhasil logout');
    }
}

