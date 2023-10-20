<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;

class ChangePasswordController extends Controller
{
    /**
     *  * Merubah password dari halaman yang sudah dikirim dari email
     * 
     *  @param Request $request
     *  @return RedirectResponse
     */
    public function changePassword(Request $request) : RedirectResponse
    {
        
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
        ]);
    
        $status = Password::reset(

            $request->only('email', 'password', 'password_confirmation', 'token'),
            
            function ($user, $password) {
                
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->setRememberToken(Str::random(60));
    
                $user->save();
    
                event(new PasswordReset($user));
            }
        );
    
        return $status === Password::PASSWORD_RESET
                    ? redirect('/login')->with('success', __($status))
                    : back()->withErrors(['email' => [__($status)]]);
    }
}
