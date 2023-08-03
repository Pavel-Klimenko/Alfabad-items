<?php

namespace App\Http\Controllers;

use App\Models\Items;
use Illuminate\Http\Request;


class ApiController extends Controller
{
    public function addItem(Request $request)
    {
            //проверка на наличие входящих данных
            $arErrors = [];
            if (!$request->uuid) $arErrors[] = 'Не передан uuid товара';
            if (!$request->name) $arErrors[] = 'Не передано название товара';
            if (!$request->amount) $arErrors[] = 'Не передано количество товара';
            if (!$request->price) $arErrors[] = 'Не передана цена товара';
            if (Items::where('uuid', $request->uuid)->exists()) $arErrors[] = 'Товар с таким uuid уже есть а базе';

            if (!empty($arErrors)) {
                $result = ['status' => 'error', 'error_list' => $arErrors];
            } else {
                $arNewItemFields = [
                    'uuid' => $request->uuid,
                    'name' => $request->name,
                    'amount' => $request->amount,
                    'price' => $request->price
                ];

                //добавляем новый товар в базу
                $newItem = Items::create($arNewItemFields);
                $result = [
                    'status' => 'success',
                    'message' => "Товар id $newItem->id добавлен в таблицу",
                ];
            }
            return response()->json($result);
    }
}
