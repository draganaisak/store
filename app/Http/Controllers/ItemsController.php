<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateItemsRequest;
use App\Models\Item;
use App\Models\Tag;

class ItemsController extends Controller
{
    public function index()
    {
        $items = Item::with('tags')
            ->orderBy('name', 'asc')
            ->where('is_available', 1)
            ->paginate(5);
        info($items);
        return view('/home-page', compact('items'));
    }

    public function create()
    {
        $tags = Tag::all();

        return view('items.create', compact('tags'));
    }

    public function store(CreateItemsRequest $request)
    {
        info($request);
        $data = $request->validated();

        $item =  Item::create($data);
        $item->tags()->attach($request->tag_id);

        return redirect('/');
    }

    public function show(Item $item, Tag $tag)
    {
        return view('items.show', compact('item', 'tag'));
    }
}
