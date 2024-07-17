<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\View\View;

class ShowsTestsPages extends Controller
{
    public function showLoginPage(): View {
        return view('tests.login');
    }

    public function showHomePage(): View {
        return view('tests.home');
    }

    public function showInfoPage(): JsonResponse {
        return response()->json([
            'users' => User::all(),
            'File-Path' => str_replace(base_path(), '', __FILE__)
        ]);
    }

    public function showCachedDataPage(): View
    {
        return view('tests.cachedData');
    }
}
