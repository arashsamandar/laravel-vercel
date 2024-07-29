<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function addTwoNumbers(Request $request)
    {
        $a = $request->input('a');
        $b = $request->input('b');
        $result = $a + $b;
        return $result;
    }
}
