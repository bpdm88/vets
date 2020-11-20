<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Cracker;

class CrackerTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function setUp() : void
    {
        $this->cracker = new Cracker();
    }

    public function test1()
    {
        $this->assertSame("a", $this->cracker->decrypt("!")); // tests that a = !
    }

    public function test2()
    {
        $this->assertSame("ab", $this->cracker->decrypt("!)")); // tests two letters together
    }

    public function test3()
    {
        $this->assertSame("ba", $this->cracker->decrypt(")!")); // tests letters other way round
    }

    public function test4()
    {
        $this->assertSame("b a", $this->cracker->decrypt(") !")); // tests for spaces & dictionary
    }

    public function test5()
    {
        $this->assertSame("ben m", $this->cracker->decrypt(").c b")); // tests for part dictionary
    }

    public function testFull()
    {
        $this->assertSame("hello mum", $this->cracker->decrypt("&.aad bjb")); // tests for full dictionary
    }
}
