<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Animal;
use Illuminate\Support\Collection;

class Treatment extends Model
{
    use HasFactory;

    protected $fillable = ["name"];

    public $timestamps = false;

    public function animals()
    {
        return $this->belongsToMany(Animal::class);
    }

    public static function fromStrings(array $strings) : Collection
    {
        return collect($strings)->map(fn($str) => trim($str)) // take an array of strings and turn it in to a collection
                                ->unique()                    // make sure they arent any duplicate strings
                                ->map(fn($str) => Treatment::firstOrCreate(["name" => $str])); // method either finds or creates the treatment 
    }
}
