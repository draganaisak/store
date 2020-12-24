@extends('layouts.app')

@section('title', 'Add item')
    
@section('content')
<h1>Add item</h1>
<form method="POST" action="/item/create">
    @csrf
    <div class="mb-3">
         <label for="name" class="form-label">Item name</label>
        <input
            type="text"
            id="name"
            name="name"
            class="form-control"
        >
        <label for="description" class="form-label">Description</label>
        <input
            type="text"
            id="description"
            name="description"
            class="form-control"
        >
    </div>
    <div class="mb-3">
            <label for="is_available" class="form-label">Is item available?</label>
            <select
                id="is_available"
                name="is_available"
                class="form-control"
            >
                <option value="">Select</option>
                <option value="true">Yes</option>
                <option value="false">No</option>
            </select>
        </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>