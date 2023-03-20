<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class Poll extends JsonResource
{
    
    public function toArray(Request $request): array
    {
        return [
            'title'=>mb_strimwidth($this->title, 0, 5, '...'),
        ];
    }
}
