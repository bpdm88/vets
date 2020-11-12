<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Owner;

class OwnerTest extends TestCase
{
    use RefreshDatabase;

    public function testExample()
    {
        $owner = new Owner();
        $owner->first_name = "Larry";
        $owner->last_name = "Test";
        $owner->telephone = "01179786578";
        $owner->email = "test@gmail.com";
        $owner->address_1 = "25 The Test Lane";
        $owner->address_2 = "Bedminster";
        $owner->town = "Bristol";
        $owner->postcode = "BS3 9TH";
        $owner->save();

        $ownerFromDB = Owner::first();

        $this->assertSame($ownerFromDB->postcode, "BS3 9TH");
    }

    public function testDoesEmailExist()
    {
        $owner = new Owner();
        $owner->first_name = "Larry";
        $owner->last_name = "Test";
        $owner->telephone = "01179786578";
        $owner->email = "test@gmail.com";
        $owner->address_1 = "25 The Test Lane";
        $owner->address_2 = "Bedminster";
        $owner->town = "Bristol";
        $owner->postcode = "BS3 9TH";
        $owner->save();
        
        $this->assertTrue(true === Owner::doesEmailExist("test@gmail.com"));

        $this->assertTrue(false === Owner::doesEmailExist("newemail@gmail.com"));

    }
}
