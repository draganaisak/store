@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <h1>Items</h1>
    <ul>
        @foreach ($items as $item)
            <li>
                <a href="{{route('items.show', ['item' => $item->id])}}">
                    {{$item->name}}
                </a>
            </li>
        @endforeach
    </ul>

    {{ $items->links() }}
@endsection
