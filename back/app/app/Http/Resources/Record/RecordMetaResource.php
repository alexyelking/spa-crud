<?php

namespace App\Http\Resources\Record;

use Illuminate\Http\Resources\Json\JsonResource;

class RecordMetaResource extends JsonResource
{
    public $resource;

    public function toArray($request): array
    {
        return [
            "rows" => [
                "from" => $this->resource->firstItem(),
                "to" => $this->resource->lastItem(),
                "total" => $this->resource->total(),
            ],
            "navigation" => [
                "page" => $this->resource->currentPage(),
                "page_last" => $this->resource->lastPage(),
                "limit" => $this->resource->perPage(),
            ],
        ];
    }
}
