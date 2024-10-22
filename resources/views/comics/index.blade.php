@extends('layouts.app')

@section('main_content')
    @foreach ($comics as $item)
    <ul>
        <li>
            <a href="{{ route('comics.show', $item->id) }}">{{ $item->id }} - {{ $item->title }}</a>
        </li>
    </ul>
    @endforeach
@endsection