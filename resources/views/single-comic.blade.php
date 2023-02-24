@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="d-flex">
                <img class=" img-fluid" src="{{$single['thumb']}}">
                <div class="info ms-5">
                    <h4>{{$single['title']}}</h4>

                </div>
            </div>

        </div>

    </div>

</div>



@endsection