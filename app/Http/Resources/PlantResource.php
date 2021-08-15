<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PlantResource extends JsonResource
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
            'plant' => $this->plant,
            'description' => $this->description,
            'countries' => $this->countries->map->name,
             'family' => $this->families->id,
        ];
    }
}
