<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Owner;
use App\Models\Treatment;

class Animal extends Model
{
    use HasFactory;

    protected $fillable = ["name", "type", "date_of_birth", "weight_kg", "height_metres", "biteyness"];

    public function owner()
    {
        return $this->belongsTo(Owner::class);
    }

    public function treatments()
    {
        return $this->belongsToMany(Treatment::class);
    }

    public function setTreatments (array $strings) : Animal // accept an array of strings in 
    {
        $treatments = Treatment::fromStrings($strings); // use Tag::fromStrings method to turn into a collection
        $this->treatments()->sync($treatments->pluck("id")); //sync method on Animal model to add any new treatments or remove unused ones
        return $this;
    }

    public function dangerous() : bool 
    {
        return ($this->biteyness > 3);
    }
}
