@extends('layouts.app')
@section('content')
<div class="container">
    <div class="container d-flex">
        <a href="{{route('comics.create')}}"><button type="button" class="btn btn-primary mt-2">Aggiungi un nuovo Comics</button></a>
    </div>
    <h2 class="my-4"> Comics </h2>
    <div class="row">
        @foreach ($comics as $key => $comic )
            <div class="col-4 my-2">
                <a href="{{route ('comics.show', ['comic' => $comic['id']])}}">
                    <div class="card">
                        <img class="card-img-top img-fluid" src="{{ $comic['thumb']}}" >
                        <div class="card-body">
                            <h5>{{$comic['title']}}</h5>
                            <div class="gestione">
                                <form class="d-inline-block" method="POST" action="{{route('comics.destroy', ['comic' => $comic->id])}}">
                                    @csrf
                                    @method('DELETE')
                                    {{-- data-cicclo --}}
                                        <button type="submit" class="footer-button confirm-delete-button btn btn-danger btn-square"><i class="fa-solid fa-trash"></i></button>
                                    </form>
                                
                                <a href="{{route('comics.edit', $comic)}}" class="btn btn-info btn-square"><i class="fa-solid fa-pen"></i></a>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</div>
@endsection


