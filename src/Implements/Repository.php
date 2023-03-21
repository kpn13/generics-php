<?php

namespace Kpn13\GenericsPhp\Implements;

/**
 * @template T
 */
interface Repository
{
    /**
     * @param T $item
     */
    public function add(mixed $item): void;

    /**
     * @return T
     */
    public function get(int $index): mixed;
}
