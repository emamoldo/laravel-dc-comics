@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col">
            <img src="{{$comic->thumb}}" alt="">
        </div>
        <div class="col">
            <h2>{{$comic->title}}</h2>
            <p>{{$comic->description}}</p>

            <div class="metadata">
                <strong>Date:</strong> {{$comic->sale_date}} <br>
                <strong>Price:</strong> {{$comic->price}}
            </div>
        </div>
    </div>
</div>
@endsection