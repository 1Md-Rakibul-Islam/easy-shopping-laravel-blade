<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    function index(Request $request) {

        $data = User::all();

        return view('home', compact('data'));
    }
}
