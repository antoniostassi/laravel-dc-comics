@extends('layouts.app')

@section('main_content')
<div class="container p-2">
    <h1>comics.show blade id: {{$comic->id}}</h1>
    <div class="card text-center p-4">
        <div class="row">
            
            <div class="col-6">
                <h1 class="text-danger">{{$comic->title}}</h1>
                <p><strong>Description: <br></strong> {{$comic->description}}</p>
                <p><strong>Series: <br></strong> {{$comic->series}}</p>
                <p><strong>Price: <br></strong> {{$comic->price}}</p>
                <p><strong>Type: <br></strong> {{$comic->type}}</p>
                <div class="artists border p-3">
                    <h5>Artists:</h5>
                    <?php $artistsList = json_decode($comic->artists); ?>
                    @foreach ($artistsList as $artist)
                        <p>{{ $artist }}</p>
                    @endforeach
                </div>
                
            </div>
            <div class="col-6">
                <img src="{{$comic->thumb}}" alt="{{$comic->title}}">
                <div class="writers mt-3 border p-3">
                    <h5>Writers:</h5>
                    <?php $writersList = json_decode($comic->writers); ?>
                    @foreach ($writersList as $writer)
                        <p>{{ $writer }}</p>
                    @endforeach
                </div>
            </div>
        </div>
        
        <?php 
            
        ?>

    </div>
</div>

@endsection

<style lang='scss'>
    .card {
        h1{
            font-size:1.5rem !important;
        }

        p{
            font-size:0.8rem;
            border:1px solid gray;
            border-radius:10px;
            padding:5px;
        }

        img{
            max-width:300px;
            text-align:center;
        }

        ul {
            list-style-type: none;
            li {
                font-size:0.8rem;
            }
        }
    }
    

</style>