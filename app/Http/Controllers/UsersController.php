<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Services\ArashSimpleService;
use Illuminate\Http\JsonResponse;

class UsersController extends Controller
{
    public function __construct(){
    }

    public function getUsers_by_id($id){
        return User::find($id);
    }

    public function checkingMyServiceAndProvider(): JsonResponse
    {
//        $arashService = App::make(ArashSimpleService::class);
        $arashService = \app()->make(ArashSimpleService::class);
        $arashAnswer = $arashService->getArashNameFromSomeOtherService();
        return response()->json(['answer' => $arashAnswer]);
    }
}
