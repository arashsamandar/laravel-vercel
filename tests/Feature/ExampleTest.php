<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\User;
use Illuminate\Support\Facades\Log;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    public function test_getUsers_endPoint(){
        $response = $this->get('/infoPage');
        $response->assertStatus(200);
        $responseData = $response->json();
        Log::info('Arash Response IS : ',$responseData);
    }
}
