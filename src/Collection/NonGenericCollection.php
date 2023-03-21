<?php

namespace Kpn13\GenericsPhp\Collection;

class NonGenericCollection
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