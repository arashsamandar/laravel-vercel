<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class UsersController extends Controller
{
    public function showUsers(): View
    {
        return view('tests.showUserTest');
    }

}