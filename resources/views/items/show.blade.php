@extends('layouts.app')

@section('title', '{{$item->name}}')

@section('content')
    <h1>{{$item->name}}</h1>
    <h3>{{$item->description}}</h3>
    <ul> Section:
        @foreach($item->tags as $tag)
            <li>{{$tag->name}}</li>
        @endforeach
    </ul>
@endsection
