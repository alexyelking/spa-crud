<?php

namespace App\Http\Resources\Record;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class RecordDataResource extends JsonResource
{
    public $resource;

    public function toArray($request)
    {
        return [
            "id" => $this->resource->id,
            "name" => $this->resource->name,
            "surname" => $this->resource->surname,
            "patronym" => $this->resource->patronym,
            "category" => $this->resource->category,
            "number_of_tickets" => $this->resource->number_of_tickets,
        ];
    }
}
