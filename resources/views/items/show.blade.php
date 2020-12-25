@extends('layouts.app')

@section('title', '{{$item->name}}')

@section('content')
    <h1>{{$item->name}}</h1>
    <hr>
    <h6>Description:</h3>
    <p>{{$item->description}}</p>
    <ul> Section:
        @foreach($item->tags as $tag)
            <li>{{$tag->name}}</li>
        @endforeach
    </ul>
@endsection
