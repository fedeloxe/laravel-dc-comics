@extends('layouts.app')
@section('content')
<div class="container">
    <h2 class="my-4"> Comics </h2>
    <div class="row">
        @foreach ($comics as $key => $comic )
            <div class="col-4">
                <a href="{{route ('single-comic', ['id' => $key])}}">
                    <div class="card">
                        <img class="card-img-top img-fluid" src="{{ $comic['thumb']}}" >
                        <div class="card-body">
                            <h4>{{$comic['title']}}</h4>
                        </div>
                    </div>

                </a>
            
                
            </div>
        @endforeach
    </div>
</div>
@endsection

