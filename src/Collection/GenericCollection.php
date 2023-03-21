<?php

namespace Kpn13\GenericsPhp\Collection;

/**
 * @template T
 */
class GenericCollection
{
    /**
     * @var array<T>
     */
    private array $items = [];

    /**
     * @param T $item
     */
    public function add(mixed $item): void
    {
        $this->items[] = $item;
    }

    /**
     * @return T
     */
    public function get(int $index): mixed
    {
        return $this->items[$index];
    }
}