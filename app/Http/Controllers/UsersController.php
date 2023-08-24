<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index() : View
    {

        $users = User::all();

        return view('admin.users.users', compact('users'));
    }
    

}
