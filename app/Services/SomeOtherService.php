<?php

namespace App\Services;

class SomeOtherService
{
    const HELLO = 'hello';
    private string $myName = 'arash salamander';

    public function getMyName(): string {
        return $this->myName;
    }
}
