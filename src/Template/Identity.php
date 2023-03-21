<?php

namespace Kpn13\GenericsPhp\Template;

class Identity
{
    /**
     * @template T
     * @param T $value
     * @return T
     */
    public function genericIdentity(mixed $value): mixed
    {
        return $value;
    }

    public function nonGenericIdentity(mixed $value): mixed
    {
        return $value;
    }
}