<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\User;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    public function arash_test_two(): void{
        User::create([
            'name' => 'arash',
            'email' => 'arash.internet@gmail.com',
            'password' => bcrypt('samandar10')
        ]);
        $this->assertDatabaseHas('users', [
            'name' => 'arash',
            'email' => 'arash.internet@gmail.com',
        ]);
    }

    public function test_to_check(){
        $this->get('/up')->assertStatus(200);
    }
}
