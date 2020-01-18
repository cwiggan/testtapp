<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::user()->status === 1 && Auth::user()->type == 1) {
            return redirect('admin');
        }

        if (Auth::user()->status === 1) {
            return redirect('approved');
        }
        return redirect('/unapproved');

    }

    public function unapproved()
    {
        return view('unapproved');
    }

    public function approved()
    {
        return view('appoved');
    }

    public function admin()
    {
        $users = User::all();
        return view('admin', compact('users'));

    }

    public function approveUser(User $user)
    {
        $user->status = 2;
        $user->save();
        return redirect('/admin');
    }

    public function unapproveUser(User $user)
    {
        $user->status = 0;
        $user->save();
        return redirect('/admin');
    }
}
