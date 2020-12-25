@extends('layouts.app')

@section('title', 'Add item')

@section('content')
    <h1>Add item</h1>
    <form method="POST" action="/items/create">
        @csrf
        <div class="mb-3">
             <label for="name" class="form-label">Item name</label>
            <input
                type="text"
                id="name"
                name="name"
                class="form-control"
            >
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input
                type="text"
                id="description"
                name="description"
                class="form-control"
            >
        </div>
        <div class="mb-3">
            <label for="tag" class="form-label">Section</label>
            <select
                id="tag"
                name="tag"
                class="form-control"
                multiple
            >
                @foreach($tags as $tag)
                    <option value="{{$tag->id}}">
                        {{$tag->name}}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="is_available" name="is_available" value="1">
            <label class="form-check-label" for="is_available">Available</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
