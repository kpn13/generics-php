<?php

namespace Kpn13\GenericsPhp\Tests\ClassString;

use Kpn13\GenericsPhp\ClassString\ObjectFactory;
use Kpn13\GenericsPhp\Foo;
use PHPUnit\Framework\TestCase;

class ObjectFactoryTest extends TestCase
{
    public function testGenericMake(): void
    {
        $foo = ObjectFactory::genericMake(Foo::class);
        self::assertSame('foo', $foo->foo());
    }

        public function testNonGenericMake(): void
    {
        $foo = ObjectFactory::nonGenericMake(Foo::class);
        self::assertSame('foo', $foo->foo());
    }
}