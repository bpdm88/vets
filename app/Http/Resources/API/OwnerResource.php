<?php

namespace App\Http\Resources\API;

use Illuminate\Http\Resources\Json\JsonResource;

class OwnerResource extends JsonResource
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
            'first_name'=> $this->first_name,
            'last_name'=> $this->last_name,
            'telephone'=> $this->telephone,
            'email'=> $this->email,
            'full_address'=> $this->fullAddress(),
        ];
    }
}