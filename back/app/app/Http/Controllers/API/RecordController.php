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
    /**
     * @param Request $request
     * @return void
     */
    public function index(Request $request)
    {
        $records = Record::paginate($request->limit);
        return Response::ok(["data" => RecordDataResource::collection($records), "meta" => new RecordMetaResource($records)]);
    }

    public function store()
    {
        // Сохранение записи
    }

    public function edit($id)
    {
        // Открытие формы обновления записи
    }

    public function update(Request $request, $id)
    {
        // Обновление записи
    }

    public function destroy($id)
    {
        // Удаление конкретной записи
    }
}
