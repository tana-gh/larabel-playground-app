<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SomeJsonResource extends JsonResource
{
    public static $wrap = '';

    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'name' => $this->resource['name']
        ];
    }
}
