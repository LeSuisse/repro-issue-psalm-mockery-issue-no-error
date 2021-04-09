<?php

declare(strict_types=1);

namespace Repro;

use PHPUnit\Framework\TestCase;

final class ReproTest extends TestCase
{
    use \Mockery\Adapter\Phpunit\MockeryPHPUnitIntegration;

    public function dataProviderCoveringScopes(): bool
    {
        return ['foo'];
    }
}
