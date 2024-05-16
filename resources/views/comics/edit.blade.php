@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h1>Edit the Comic</h1>

    <form action="{{route('comics.update', $comic)}}" method="post">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title"
                aria-describedby="helpId" placeholder="Title" value="{{old('title')}}" />
            <small id="helpId" class="form-text text-muted">Add a Title for the Comic</small>

            @error('title')
                <div class="text-danger">{{$message}}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="thumb" class="form-label">Image</label>
            <input type="text" class="form-control @error('thumb') is-invalid @enderror" name="thumb" id="thumb"
                aria-describedby="helpId" placeholder="https://" value="{{old('thumb')}}" />
            <small id="helpId" class="form-text text-muted">Add the image for the Comic</small>

            @error('thumb')
                <div class="text-danger">{{$message}}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control @error('description') is-invalid @enderror" name="description"
                id="description" rows="6">{{old('description')}}
            </textarea>

            @error('description')
                <div class="text-danger">{{$message}}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Update the Comic</button>
    </form>
</div>
@endsection