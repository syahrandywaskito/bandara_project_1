<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{

    /**
     *  * view halaman login
     * 
     *  @return  View
     */
    public function Login() : View
    {
        # masuk ke halaman /login
        return view('auth.login');
    }

    /**
     *  * Mengecek Authentication dari input pada login page
     * 
     *  @param Request $request
     *  @return RedirectResponse
     */
    public function Authenticate(Request $request) : RedirectResponse
    {
        # validasi data yang diinputkan user
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|regex:/^(?=.*[A-Z])(?=.*\d)[A-Za-z\d]{8,}$/',
        ],
        [
            'password.regex' => 'Password tidak cocok dan harus mengandung setidaknya satu huruf kapital, satu angka, dan memiliki panjang minimal 8 karakter.',
        ]
        );

        # mengambil nama sesuai dengan email
        $fullname = User::where('email', request()->input('email'))->value('name');

        # variabel untuk success message 
        $successMessage = "Selamat datang $fullname";

        # Kondisi jika credential cocok dengan Auth
        if (Auth::attempt($credentials)) {

            $request->session()->regenerate();
            return redirect()->route('dashboard')->with('success', $successMessage);
        }

        # return ke halaman sebelumnya jika salah dengan error message
        return back()->withErrors([
            'email' => 'Kredensial yang Anda berikan tidak cocok dengan catatan kami',
            
        ]);
    }

    /**
     *  * view halaman register 
     * 
     *  @return View
     */

    public function Register() : View
    {
        # masuk ke halaman /register
        return view('auth.register');
    }

    /**
     *  * Memasukkan data register ke database dan login
     * 
     *  @param Request $request
     *  @return RedirectResponse
     */

    public function Store(Request $request) : RedirectResponse
    {
        $request->validate([
            'name' => 'required|string|min:2',
            'email' => 'required|email|unique:users',
            'password' => 'required|regex:/^(?=.*[A-Z])(?=.*\d)[A-Za-z\d]{8,}$/',
            'position' => 'required|string|not_in:Pilih Jabatan',
        ],
        [
            'password.regex' => 'Password harus mengandung setidaknya satu huruf kapital, satu angka, dan memiliki panjang minimal 8 karakter.',
            'position.not_in' => 'Pilih jabatan yang sesuai',
            'name.min' => 'Tuliskan nama lengkap lebih dari satu huruf',
        ]);

        $position = '';

        if($request->input('position') == 'input'){
            $position = $request->input('other_position');
        }

        else {
            $position = $request->input('position');
        }

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'position' => $position,
        ]);

        $name = $request->name;

        $credentials = $request->only('email', 'password');

        Auth::attempt($credentials);

        $request->session()->regenerate();

        return redirect()->route('dashboard')->with('success', "Selamat Datang $name, Terima Kasih sudah mendaftar");
    }

    /**
     *  * Mengecek Apakah pengguna sudah login atau belum saat masuk ke halaman dashboard
     * 
     */

    public function Dashboard()
    {
        if (Auth::check()) {
            return view('admin.dashboard');
        }

        return redirect()->route('login')->withErrors([
            'email' => 'Please login to access the dashboard'
        ]);
    }

    /**
     *  * Logout dengan memutus session dan meregerate token
     */

    public function Logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login')->with('success','Anda berhasil logout');
    }
}

