<?php

namespace App;

class Cracker
{
    private $dictionary = [
        "!" => "a",
        ")" => "b",
        "#" => "c",
        "(" => "d",
        "." => "e",
        "*" => "f",
        "%" => "g",
        "&" => "h",
        ">" => "i",
        "<" => "j",
        "@" => "k",
        "a" => "l",
        "b" => "m",
        "c" => "n",
        "d" => "o",
        "e" => "p",
        "f" => "q",
        "g" => "r",
        "h" => "s",
        "i" => "t",
        "j" => "u",
        "k" => "v",
        "l" => "w",
        "m" => "x",
        "n" => "y",
        "0" => "z",
        " " => " ",
    ];
    
    public function decrypt(string $code) 
    {
        $answer = "";

        $letters = str_split($code, 1);  // splits the string in to an arry of letters

        foreach ($letters as $letter) {  // filters through each letter of the code

            foreach ($this->dictionary as $key => $value) { // filters through each letter in dictionary

                if ($letter === $key) { // if the letter matches the dictionary concat it to the answer
                    $answer .=$value;
                }
            }
        }
        return $answer; // returns the string 
    }
}

