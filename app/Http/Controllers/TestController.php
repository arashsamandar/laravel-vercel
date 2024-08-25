<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Services\ArashSimpleService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class TestController extends Controller
{
    public function redisTest(){
        try {
            Redis::set('test_key', 'It works!');
            return Redis::get('test_key');
        } catch (\Exception $e) {
            return 'Redis connection failed: ' . $e->getMessage();
        }
    }

    public function showInfoPage(): JsonResponse {
        return response()->json([
            'users' => User::all(),
            'File-Path' => str_replace(base_path(), '', __FILE__)
        ]);
    }

    public function addTwoNumbers(Request $request)
    {
        $a = $request->input('a');
        $b = $request->input('b');
        $result = $a + $b;
        return $result;
    }

    public function checkingMyServiceAndProvider(): JsonResponse
    {
        $arashService = \app()->make(ArashSimpleService::class);
        $arashAnswer = $arashService->getArashNameFromSomeOtherService();
        return response()->json(['answer' => $arashAnswer]);
    }

    public function returnStringInJsonResponse(): JsonResponse {
        $arashStringValue = 'some shit';
        try{
            $arashStringValue = App\ArashClass\ArashSampleClass::returnsDummyString();
        }catch (\Exception $e){
            $this->fail($e->getMessage());
        }
        return response()->json(['answer' => $arashStringValue]);
    }
}
