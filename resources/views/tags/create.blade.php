@extends('layouts.app')

@section('title', 'Add tag')
    
@section('content')
<h1>Add tag</h1>
<form method="POST" action="/tag/create">
    @csrf
    <div class="mb-3">
         <label for="name" class="form-label">Tag name</label>
        <input
            type="text"
            id="name"
            name="name"
            class="form-control"
        >
    <button type="submit" class="btn btn-primary">Submit</button>
</form>