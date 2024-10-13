<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function dashboard() {
        $role = Auth::user()->role;
        return view("pages.dashboard", ['user_role' => $role]);       
    }
}
