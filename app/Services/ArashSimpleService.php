<?php

namespace App\Services;

class ArashSimpleService
{
    private SomeOtherService $otherService;

    public function __construct(SomeOtherService $otherService)
    {
        $this->otherService = $otherService;
    }

    public function getArashNameFromSomeOtherService(): string{
        return $this->otherService->getMyName();
    }
}
