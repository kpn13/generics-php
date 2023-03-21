<?php

namespace Kpn13\GenericsPhp\Tests\Template;

use Kpn13\GenericsPhp\Template\Identity;
use PHPUnit\Framework\TestCase;

class IdentityTest  extends TestCase
{
    public function testGenericIdentity(): void
    {
        $identity = new Identity();
        self::assertSame('foo', $identity->genericIdentity('foo'));
        self::assertSame(42, $identity->genericIdentity(42));
        self::assertSame(true, $identity->genericIdentity(true));
        // phpstan knows that the return type is array, so we can access to the first element
        self::assertSame('foo', $identity->genericIdentity(['foo'])[0]);
    }

    public function testNonGenericIdentity(): void
    {
        $identity = new Identity();
        self::assertSame('foo', $identity->nonGenericIdentity('foo'));
        self::assertSame(42, $identity->nonGenericIdentity(42));
        self::assertSame(true, $identity->nonGenericIdentity(true));
        // phpstan doesn't know that the return type is array, so it throw a warning
        self::assertSame('foo', $identity->nonGenericIdentity(['foo'])[0]);
    }
}