<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Schema;
use Tests\TestCase;

class ExampleTest extends TestCase
{

    public function arash_echo_functionality(): void
    {
        require_once 'E:/Programmer-Codes/Laravel/laravel-vercel-late-2024/laravel-vercel/database/migrations/2024_07_30_120200_create_logs_table.php';
        $this->assertTrue(true);
    }

    public function test_create_example_logs(){
        $this->assertDatabaseHas('users', ['name' => 'arash']);
    }

    public function create_log_table(){
        require_once 'E:/Programmer-Codes/Laravel/laravel-vercel-late-2024/laravel-vercel/database/migrations/2024_07_30_120200_create_logs_table.php';
        $className = 'CreateLogsTable';
        try {
            $class = new $className();
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
        echo "\n passed the logics of referencing Migration file";
        if(Schema::hasTable('logs')){
            $class->down();
            echo "\nBroght down the 'logs' table";
        }
        $class->up();
        echo "\nFinished creating 'logs' table";
    }

    public function assert_logs_database_exists(){
        $this->assertTrue(DB::table('logs')->exists());
    }

    public function assert_logs_exists(){
        $this->assertTrue(Schema::hasTable('logs'));
    }

    public function getUsers_endPoint(){
        $response = $this->get('/infoPage');
        $response->assertStatus(200);
        $responseData = $response->json();
        Log::info('Arash Response IS : ',$responseData);
    }
}
