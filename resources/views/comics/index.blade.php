@extends('layouts.app')

@section('main_content')
    <div class="btn btn-success m-2">
        <a href="{{ route('comics.create') }}">+ Comic</a>
    </div>
    @foreach ($comics as $item)
    <ul>
        <li>
            <a href="{{ route('comics.show', $item->id) }}">{{ $item->id }} - {{ $item->title }}</a>
            <a class="btn btn-success" href="{{ route('comics.edit', $item->id) }}"> Modifica </a>
            <form onsubmit="return confirm('Are you sure to delete it?')" action="{{ route('comics.destroy', $item->id) }}" class="d-inline-block" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Elimina</button>
            </form>
        </li>
    </ul>
    @endforeach
@endsection

<style> 

    .btn > a { 
        text-decoration:none !important;
        color:white !important;
        font-size:0.9rem;
    }

</style>