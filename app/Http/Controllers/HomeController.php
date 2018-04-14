<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function createUser()
    {
      return view('auth.register');
    }

    public function viewAllUser()
    {
      $users = User::paginate(15);
      return view('admin.index',[
        'users' => $users,
      ]);
    }

    public function deleteUser($id)
    {
      $user = User::find($id);
      $user->delete();
    }

    public function apistatus()
    {
      return view('admin.apistatus');
    }
}
