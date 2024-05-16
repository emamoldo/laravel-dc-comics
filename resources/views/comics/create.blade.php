@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h1>Add a new Comic</h1>

    @include('partials.validation-error')
    <form action="{{route('comics.store')}}" method="post">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title"
                aria-describedby="helpId" placeholder="Title" value="{{old('title')}}" required />
            <small id="helpId" class="form-text text-muted">Add a Title for the Comic</small>

            @error('title')
                <div class="text-danger">{{$message}}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="thumb" class="form-label">Image</label>
            <input type="text" class="form-control @error('thumb') is-invalid @enderror" name="thumb" id="thumb"
                aria-describedby="helpId" placeholder="https://" value="{{old('title')}}" />
            <small id="helpId" class="form-text text-muted">Add the image for the Comic</small>

            @error('thumb')
                <div class="text-danger">{{$message}}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control @error('title') is-invalid @enderror" name="description" id="description"
                rows="6">{{old('description')}}</textarea>

            @error('description')
                <div class="text-danger">{{$message}}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Create the Comic</button>
    </form>
</div>
@endsection