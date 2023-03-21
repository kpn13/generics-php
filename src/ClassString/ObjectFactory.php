<?php

namespace Kpn13\GenericsPhp\ClassString;

class ObjectFactory
{
    /**
     * @template T of object
     * @param class-string<T> $className
     * @return T
     */
    public static function genericMake(string $className): object
    {
        return new $className;
    }

    public static function nonGenericMake(string $className): object
    {
        return new $className;
    }
}
