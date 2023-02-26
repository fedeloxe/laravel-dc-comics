@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">

            <form action="{{route('comics.update', ['comic' => $comic['id']])}}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                  <label for="" class="form-label">Modifica titolo</label>
                  <input type="text" class="form-control" id="" aria-describedby="" name="title" value="{{old('title') ?? $comic->title}}">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Modifica descrizione</label>
                    <textarea rows="5" class="form-control" id="" aria-describedby="" name="description" value="{{old('description') ?? $comic->description}}"></textarea>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Modifica prezzo</label>
                    <input type="text" class="form-control" id="" aria-describedby="" name="price" value="{{old('price') ?? $comic->price}}">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Modifica serie</label>
                    <input type="text" class="form-control" id="" aria-describedby="" name="series" value="{{old('series') ?? $comic->series}}">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Modifica data di vendita</label>
                    <input type="text" class="form-control" id="" aria-describedby="" name="sale_date" value="{{old('sale_date') ?? $comic->sale_date}}">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Modifica tipo</label>
                    <input type="text" class="form-control" id="" aria-describedby="" name="type" value="{{old('type') ?? $comic->type}}">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Modifica link immagine</label>
                    <input type="text" class="form-control" id="" aria-describedby="" name="thumb"value="{{old('thumb') ?? $comic->thumb}}">
                </div>

                <div class="form-group">

                    <button type="submit" class="btn btn-primary">Modifica  Comics</button>
                </div>
              </form>

        </div>
    </div>
</div>
@endsection