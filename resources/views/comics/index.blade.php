@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center py-3">
        <h2>Comics</h2>
        <a class="btn btn-primary" href="{{route('comics.create')}}">Add Comics</a>
    </div>
    <div class="table-responsive">
        <table class="table table-striped table-hover table-borderless table-primary align-middle">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Title</th>
                    <th scope="col">Image</th>
                    <th scope="col">Type</th>
                    <th scope="col">Series</th>
                    <th scope="col">Actions</th>

                </tr>
            </thead>
            <tbody class="table-group-divider">
                @forelse ($comics as $comic)
                    <tr class="table-primary">
                        <td scope="row">{{$comic->id}}</td>
                        <td>{{$comic->title}}</td>
                        <td><img width="60" src="{{$comic->thumb}}" alt=""></td>
                        <td>{{$comic->type}}</td>
                        <td>{{$comic->series}}</td>
                        <td>
                            <a href="{{route('comics.show', $comic)}}">Comic Infos</a>
                        </td>
                    </tr>
                @empty
                    <tr class="table-primary">
                        <td scope="row" colspan="8">Nothing Here!</td>
                    </tr>
                @endforelse
            </tbody>
            <tfoot>

            </tfoot>
        </table>

    </div>

</div>
@endsection