<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\Owner;

class BananaTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertSame(Owner::haveWeBananas(1), "Yes we have 1 banana");

        $this->assertSame(Owner::haveWeBananas(-12), "Yes we have -12 bananas");
    }
}
