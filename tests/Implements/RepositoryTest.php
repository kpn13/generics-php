<?php

namespace Kpn13\GenericsPhp\Tests\Implements;

use Kpn13\GenericsPhp\Bar;
use Kpn13\GenericsPhp\Foo;
use Kpn13\GenericsPhp\Implements\BarRepository;
use Kpn13\GenericsPhp\Implements\FooRepository;
use PHPUnit\Framework\TestCase;

class RepositoryTest extends TestCase
{
    public function testGenericFooRepository(): void
    {
        $fooRepository = new FooRepository();
        $fooRepository->add(new Foo());
        $foo = $fooRepository->get(0);
        self::assertSame('foo', $foo->foo());
    }

    public function testNonGenericBarRepository(): void
    {
        $barRepository = new BarRepository();
        $barRepository->add(new Bar());
        $bar = $barRepository->get(0);
        self::assertSame('bar', $bar->bar());
    }
}