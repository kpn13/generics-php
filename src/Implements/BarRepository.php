<?php

namespace Kpn13\GenericsPhp\Implements;

use Kpn13\GenericsPhp\Bar;

/**
 * This repository doesn't use generics.
 */
class BarRepository implements Repository
{
    private array $items = [];

    public function add(mixed $item): void
    {
        $this->items[] = $item;
    }

    public function get(int $index): mixed
    {
        return $this->items[$index];
    }
}
