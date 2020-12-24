<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateItemsRequest;
use App\Models\Item;

class ItemsController extends Controller
{
    public function index()
    {
        $items = Item::orderBy('name', 'asc')->get();

        return view('/home-page', compact('items'));
    }

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
