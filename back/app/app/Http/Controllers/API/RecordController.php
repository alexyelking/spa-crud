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

        $entry = [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'category_id' => $request->category_id,
            'number_of_tickets' => $request->number_of_tickets,
            'total_price' => $total_price
        ];

        $record = Record::create($entry);

        return Response::ok(["record" => new RecordDataResource($record)]);
    }

    public function update(UpdateRequest $request, Record $record)
    {
//        $category = $request->category;
//        $number_of_tickets = $request->number_of_tickets;
//        if ($category == 'Student') {
//            $total_price = $this->student_price * $number_of_tickets;
//        } elseif ($category == 'Pensioner') {
//            $total_price = $this->pensioner_price * $number_of_tickets;
//        } else {
//            $total_price = $this->ordinary_price * $number_of_tickets;
//        }
//        $record->update([
//            'first_name' => $request->first_name,
//            'last_name' => $request->last_name,
//            'category' => $category,
//            'number_of_tickets' => $number_of_tickets,
//            'total_price' => $total_price,
//        ]);
//        return Response::ok(["record" => new RecordDataResource($record)]);
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
