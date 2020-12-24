<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateItemsRequest;
use App\Models\Item;

class ItemsController extends Controller
{
    public function create()
    {
        return view('items.create');
    }

    public function store(CreateItemsRequest $request)
    {
        info($request);
        $data = $request->validated();
        Item::create($data);

        return redirect('/');
    }
}
