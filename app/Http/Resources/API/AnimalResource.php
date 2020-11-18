<?php

namespace App\Http\Resources\API;

use Illuminate\Http\Resources\Json\JsonResource;

class AnimalResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'name'=> $this->name,
            'type'=> $this->type,
            'DOB'=> $this->date_of_birth,
            'weight'=> $this->weight_kg,
            'height'=> $this->height_metres,
            'biteyness'=> $this->biteyness,
            'owner'=> $this->owner->fullName(),
            'treatments'=> $this->treatments->pluck("name")
        ];
    }
}
