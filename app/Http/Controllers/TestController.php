<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

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

    public function showLogs()
    {
        $logPath = '/tmp/laravel.log';

        if (!file_exists($logPath)) {
            return response()->json(['error' => 'Log file not found'], 404);
        }

        $logContents = file_get_contents($logPath);

        if ($logContents === false) {
            return response()->json(['error' => 'Unable to read log file'], 500);
        }

        // You can return the log contents as plain text
        return response('<pre>' . htmlspecialchars($logContents) . '</pre>', 200)
            ->header('Content-Type', 'text/html');

        // Alternatively, you can return it as JSON
        // return response()->json(['logs' => $logContents]);
    }


    public function addTwoNumbers(Request $request)
    {
        $a = $request->input('a');
        $b = $request->input('b');
        $result = $a + $b;
        return $result;
    }
}
