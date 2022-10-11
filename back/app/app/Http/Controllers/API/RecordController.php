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

/**
 * @property int $student_price
 */
class RecordController extends Controller
{
    public function index(Request $request)
    {
        $records = Record::paginate($request->limit);
        return Response::ok(["data" => RecordDataResource::collection($records), "meta" => new RecordMetaResource($records)]);
    }

    public function create(CreateRequest $request)
    {
        // 100%
        $ordinary_price = 500;
        // 90%
        $student_price = 450;
        // 80%
        $pensioner_price = 400;

        $category = $request->category;
        $number_of_tickets = $request->number_of_tickets;

        if ($category == 'Student') {
            $total_price = $student_price * $number_of_tickets;
        } elseif ($category == 'Pensioner') {
            $total_price = $pensioner_price * $number_of_tickets;
        } else {
            $total_price = $ordinary_price * $number_of_tickets;
        }

        $record = new Record();
        $record->first_name=$request->first_name;
        $record->last_name=$request->last_name;
        $record->category=$category;
        $record->number_of_tickets=$number_of_tickets;
        $record->total_price=$total_price;
        $record->save();

        return Response::ok(["record" => new RecordDataResource($record)]);
    }

    public function update(UpdateRequest $request, Record $record)
    {
        // 100%
        $ordinary_price = 500;
        // 90%
        $student_price = 450;
        // 80%
        $pensioner_price = 400;

        $first_name = $request->first_name;
        $last_name = $request->last_name;
        $category = $request->category;
        $number_of_tickets = $request->number_of_tickets;

        if ($category == 'Student') {
            $total_price = $student_price * $number_of_tickets;
        } elseif ($category == 'Pensioner') {
            $total_price = $pensioner_price * $number_of_tickets;
        } else {
            $total_price = $ordinary_price * $number_of_tickets;
        }

        $record->update([
            'first_name'=>$first_name,
            'last_name'=>$last_name,
            'category'=>$category,
            'number_of_tickets'=>$number_of_tickets,
            'total_price'=>$total_price,
            ]);

        return Response::ok(["record" => new RecordDataResource($record)]);
    }

    public function destroy(Record $record)
    {
        $record->delete();
        return Response::ok();
    }
}
