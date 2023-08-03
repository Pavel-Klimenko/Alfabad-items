<?php

namespace App\Http\Controllers;

use App\Models\Items;


class ItemsController extends Controller
{
    public function getItems()
    {
        $items = Items::all();
        return view('items', compact('items'));
    }
}
