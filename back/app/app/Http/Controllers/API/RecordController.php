<?php

namespace App\Http\Controllers\API;

use App\Models\Record;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RecordController extends Controller
{
    public function index()
    {
        // Вывод всех записей
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
