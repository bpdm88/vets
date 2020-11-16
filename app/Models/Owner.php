<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    use HasFactory;

    protected $fillable = ["first_name", "last_name", "telephone", "email", "address_1", "address_2", "town", "postcode"];

    public function fullName() : string 
    {
        return "{$this->first_name} {$this->last_name}";
    }

    public function fullAddress() : string 
    {
        $fullAddress = [$this->address_1, $this->address_2, $this->postcode, $this->town];
        $seperated = implode(", ", $fullAddress);
        return $seperated;
    }

    public function formattedPhoneNumber() : string
    {   
        $string = $this->telephone;
        $code = substr($string, 0, 4);
        $number= substr($string, 5);
        return "{$code} {$number}";
    }

    public static function haveWeBananas($number)
    {
      if ($number === 0) {
        return "No we have no bananas";
     }
      
      if ($number === 1) {
        return  "Yes we have {$number} banana";
      }

        return "Yes we have {$number} bananas";
    }

    public static function doesEmailExist(string $email) : bool
    {
        return Owner::where('email', '=', $email)->get()->isNotEmpty();
    }
 }
