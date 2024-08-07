<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class ArashEchoCommands extends Command
{
    protected $signature = 'arash';

    protected $description = 'Command description';

    public function handle()
    {
        // get all users and print their names
        $users = User::all();
        foreach ($users as $user) {
            $this->info($user->name);
            $this->info($user->email);
            $this->output->newLine();
        }
    }
}
