<?php

namespace Kpn13\GenericsPhp\Implements;

use Kpn13\GenericsPhp\Foo;

/**
 * @implements Repository<Foo>
 */
class FooRepository implements Repository
{
    private array $items = [];

    public function add(mixed $item): void
    {
        $this->items[] = $item;
    }

    public function get(int $index): mixed
    {
        return $this->items[$id];
    }
}
