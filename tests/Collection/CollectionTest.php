<?php

namespace Kpn13\GenericsPhp\Tests\Collection;

use Kpn13\GenericsPhp\Bar;
use Kpn13\GenericsPhp\Collection\GenericCollection;
use Kpn13\GenericsPhp\Collection\NonGenericCollection;
use Kpn13\GenericsPhp\Foo;
use PHPUnit\Framework\TestCase;

class CollectionTest extends TestCase
{
    public function testGenericCollection(): void
    {
        /** @var GenericCollection<Foo> $collection */
        $collection = new GenericCollection();
        $collection->add(new Foo());
        self::assertSame('foo', $collection->get(0)->foo());
    }

    public function testNonGenericCollection(): void
    {
        /** @var NonGenericCollection<Foo> $collection */
        $collection = new NonGenericCollection();
        $collection->add(new Foo());
        self::assertSame('foo', $collection->get(0)->foo());
    }
}