<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class managerResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'=>$this->id,
            'name'=>$this->name,
            'user Name'=>$this->userName,
            'school Name'=>$this->school->name,
            'school Location'=>$this->school->location,
            'school type'=>$this->school->type,
            'school level'=>$this->school->level,
        ];
    }
}
