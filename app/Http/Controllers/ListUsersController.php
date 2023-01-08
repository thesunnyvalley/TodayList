<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;

class ListUsersController extends Controller
{
    public function index() {
        return view('welcome',['ListUsers' => users::where('id')->get()]);
    }
    //
}
