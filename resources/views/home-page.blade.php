@extends('layouts.app')

@section('title', 'Home')
    
@section('content')
    <h1>Items</h1>
    <ul>
        @foreach ($items as $item)
            <li>
                <a>{{$item->name}}</a>
            </li>
        @endforeach
    </ul>
@endsection