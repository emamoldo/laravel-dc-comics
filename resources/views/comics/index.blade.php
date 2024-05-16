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
                            <!-- Modal trigger button -->
                            <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal"
                                data-bs-target="#modalId-{{$comic->id}}">
                                <i class="fas fa-trash fa-sm fa-fw"></i>
                            </button>

                            <!-- Modal Body -->
                            <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
                            <div class="modal fade" id="modalId-{{$comic->id}}" tabindex="-1" data-bs-backdrop="static"
                                data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId-{{$comic->id}}"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm"
                                    role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalTitleId-{{$comic->title}}">
                                                Attention! Your about to delide: {{$comic->title}}
                                            </h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">Attention!! Your about to delite this record.</div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                Close
                                            </button>

                                            <form action="{{route('comics.destroy', $comic)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">
                                                    Confirm
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
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

        {{$comics->links('pagination::bootstrap-5')}}
    </div>

</div>
@endsection