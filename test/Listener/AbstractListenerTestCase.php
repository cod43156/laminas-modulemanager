<?php

declare(strict_types=1);

namespace LaminasTest\ModuleManager\Listener;

use Laminas\Loader\ModuleAutoloader;
use LaminasTest\ModuleManager\ResetAutoloadFunctionsTrait;
use PHPUnit\Framework\TestCase;

use function dirname;

/**
 * Common test methods for all AbstractListener children.
 */
class AbstractListenerTestCase extends TestCase
{
    use ResetAutoloadFunctionsTrait;

    /** @before */
    protected function registerTestAssetsOnModuleAutoloader(): void
    {
        $autoloader = new ModuleAutoloader([
            dirname(__DIR__) . '/TestAsset',
        ]);
        $autoloader->register();
    }
}
