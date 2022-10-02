<?php

namespace App\Http\Controllers\API;

use App\Models\Record;
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
        $record = Record::create($request->only(['name', 'surname', 'patronymic', 'category', 'number_of_tickets']));
        return Response::ok(["record" => new RecordDataResource($record)]);
    }

    public function edit(Record $record)
    {
        return Response::ok(["record" => new RecordDataResource($record)]);
    }

    public function update(UpdateRequest $request, Record $record)
    {
        $record->update($request->only(['name', 'surname', 'patronymic', 'category', 'number_of_tickets']));
        return Response::ok(["record" => new RecordDataResource($record)]);
    }

    public function destroy(Record $record)
    {
        $record->delete();
        return Response::ok();
    }
}
