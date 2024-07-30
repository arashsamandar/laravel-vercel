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
        session(['success' => 'Form PERSISTED submitted successfully']);
        return view('tests.home');
    }

    public function showCachedDataPage(): View
    {
        $sessionData = session('success');
        return view('tests.cachedData', compact('sessionData'));
    }

    public function showFormPage(): View
    {
        return view('tests.cachedData');
    }

}
