<?php

namespace App\Logging;

use Monolog\LogRecord;
use Monolog\Handler\AbstractProcessingHandler;
use Illuminate\Support\Facades\DB;

class DatabaseHandler extends AbstractProcessingHandler
{
    protected function write(LogRecord $record): void
    {
        DB::table('logs')->insert([
            'channel' => $record->channel,
            'level' => $record->level->name,
            'message' => $record->message,
            'context' => json_encode($record->context),
            'created_at' => $record->datetime->format('Y-m-d H:i:s'),
            'updated_at' => $record->datetime->format('Y-m-d H:i:s'),
        ]);
    }
}
