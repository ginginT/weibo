<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Http\Requests;

class UsersController extends Controller
{
    public function create()
    {
        return view('users.create');
    }
}
