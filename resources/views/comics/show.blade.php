@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col">
            <img src="{{$comic->thumb}}" alt="">
        </div>
        <div class="col">
            <h2>{{$comic->title}}</h2>
            <div class="actions">
                <a href="{{route('comics.edit', $comic)}}">
                    <i class="fa fa-pencil" aria-hidden="true"></i>
                </a>

                <a class="text-decoration-none" href="{{route('comics.index')}}">
                    <i class="fas fa-arrow-left fa-sm fa-fw"></i>
                    Back to the comics Page
                </a>
            </div>
            <p>{{$comic->description}}</p>

            <div class="metadata">
                <strong>Date:</strong> {{$comic->sale_date}} <br>
                <strong>Price:</strong> {{$comic->price}}
            </div>
        </div>
    </div>
</div>
@endsection