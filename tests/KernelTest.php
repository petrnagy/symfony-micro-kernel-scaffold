<?php

declare(strict_types=1);

namespace App\Tests;

use App\Kernel;
use PHPUnit\Framework\TestCase;

final class KernelTest extends TestCase
{
    public function testDevEnvironmentRegistersWebProfilerBundle(): void
    {
        $kernel = new Kernel('dev', false);
        $bundleClasses = array_map(static fn (object $bundle): string => $bundle::class, $kernel->registerBundles());

        self::assertContains('Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle', $bundleClasses);
        self::assertContains('Symfony\\Bundle\\TwigBundle\\TwigBundle', $bundleClasses);
        self::assertContains('Symfony\\Bundle\\WebProfilerBundle\\WebProfilerBundle', $bundleClasses);
    }

    public function testProdEnvironmentDoesNotRegisterWebProfilerBundle(): void
    {
        $kernel = new Kernel('prod', false);
        $bundleClasses = array_map(static fn (object $bundle): string => $bundle::class, $kernel->registerBundles());

        self::assertContains('Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle', $bundleClasses);
        self::assertContains('Symfony\\Bundle\\TwigBundle\\TwigBundle', $bundleClasses);
        self::assertNotContains('Symfony\\Bundle\\WebProfilerBundle\\WebProfilerBundle', $bundleClasses);
    }
}
