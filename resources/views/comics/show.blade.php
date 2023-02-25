@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="d-flex">
                <img class="w-25 rounded-1" src="{{$comic['thumb']}}">
                <div class="info ms-5">
                    <h4>{{$comic['title']}}</h4>
                    <p>{{$comic['description']}}</p>
                    <div class="d-flex">
                        <h3>{{$comic['price']}}</h3>
                        <a href="" class="btn btn-warning btn-square ms-2"><i class="fa-solid fa-cart-shopping"></i></a>
                    </div>
                    

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

