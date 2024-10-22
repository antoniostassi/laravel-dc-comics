@extends('layouts.app')

@section('main_content')
    @foreach ($comics as $item)
        {{ $item->title }}
    @endforeach
@endsection