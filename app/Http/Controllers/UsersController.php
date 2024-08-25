<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Services\ArashSimpleService;
use Illuminate\Http\JsonResponse;

class UsersController extends Controller
{
    public function getUsers_by_id($id){
        return User::find($id);
    }
}
