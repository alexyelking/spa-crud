<?php

namespace App\Http\Resources\Record;

use Illuminate\Http\Resources\Json\JsonResource;

class RecordDataResource extends JsonResource
{
    public $resource;

    public function toArray($request): array
    {
        return [
            "id" => $this->resource->id,
            "first_name" => $this->resource->first_name,
            "last_name" => $this->resource->last_name,
            "category" => $this->resource->category->name,
            "number_of_tickets" => $this->resource->number_of_tickets,
            "total_price" => $this->resource->total_price,
        ];
    }
}
