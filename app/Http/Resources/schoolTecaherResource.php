<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class schoolTecaherResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return[
            'id'=>$this->id,
            'school name'=>$this->school->name ,
            'school type'=>$this->school->type ,
            'teacher name'=>$this->teacher->name ,
            'subject name'=>$this->teacher->subject,
            'garde name'=>$this->grade->name ?? null
        ];
    }
}
