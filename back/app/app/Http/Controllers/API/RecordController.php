<?php

namespace App\Http\Controllers\API;

use App\Models\Record;
use App\Models\Category;

use App\Http\Controllers\Controller;

use App\Http\Requests\Record\CreateRequest;
use App\Http\Requests\Record\UpdateRequest;

use App\Http\Resources\Record\RecordDataResource;
use App\Http\Resources\Record\RecordMetaResource;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class RecordController extends Controller
{
    public function index(Request $request)
    {
        $records = Record::paginate($request->limit);
        return Response::ok(["data" => RecordDataResource::collection($records), "meta" => new RecordMetaResource($records)]);
    }

    public function create(CreateRequest $request)
    {
        $total_price = $this->getTotalPrice($request->category_id, $request->number_of_tickets);

        $entry = $request->all();
        $entry['total_price'] = $total_price;

        $record = Record::create($entry);

        return Response::ok(["record" => new RecordDataResource($record)]);
    }

    public function show(Record $record)
    {
        return Response::ok(["record" => new RecordDataResource($record)]);
    }

    public function update(UpdateRequest $request, Record $record)
    {
        $category_id = $request->category_id ?: $record->category_id;
        $number_of_tickets = $request->number_of_tickets ?: $record->number_of_tickets;

        $total_price = $this->getTotalPrice($category_id, $number_of_tickets);

        $entry = $request->all();
        $entry['total_price'] = $total_price;

        $record->update($entry);

        return Response::ok(["record" => new RecordDataResource($record)]);
    }

    public function getTotalPrice($category_id, $number_of_tickets): int
    {
        $price = Category::find($category_id)->price;

        return $number_of_tickets * $price;
    }

    public function destroy(Record $record)
    {
        $record->delete();
        return Response::ok();
    }
}
