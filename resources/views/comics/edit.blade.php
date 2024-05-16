@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Add a new Comic</h1>

    <form action="{{route('comics.update', $comic)}}" method="post">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" name="title" id="title" aria-describedby="helpId"
                placeholder="Title" value="{{$comic->title}}" />
            <small id="helpId" class="form-text text-muted">Add a Title for the Comic</small>
        </div>

        <div class="mb-3">
            <label for="thumb" class="form-label">Image</label>
            <input type="text" class="form-control" name="thumb" id="thumb" aria-describedby="helpId"
                placeholder="https://" value="{{$comic->thumb}}" />
            <small id="helpId" class="form-text text-muted">Add the image for the Comic</small>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" name="description" id="description"
                rows="6">{{$comic->description}}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Update the Comic</button>
    </form>
</div>
@endsection