<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateTagsRequest;

class TagsController extends Controller
{
    public function create()
    {
        return view('tags.create');
    }

    public function store(CreateTagsRequest $request)
    {
        $data = $request->validated();
        Tag::create($data);

        return redirect('/');
    }
}
