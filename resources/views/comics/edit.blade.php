@extends('layouts.base')

@section('content')
<div class="col-8 m-auto pt-5">
    <form method="post" action="{{ route('comics.store') }}" class="row g-3">
        @csrf()
    <div class="col-md-6">
        <label for="title" class="form-label">Title</label>
        <input type="text" name="title" class="form-control" id="title" value="{{ $comic->title }}">
    </div>
    <div class="col-md-6">
        <label for="series" class="form-label">Series</label>
        <input type="text" name="series" class="form-control" id="series" value="{{ $comic->series }}">
    </div>
    <div class="col-12">
        <label for="price" class="form-label">Price</label>
        <input type="number" name="price" class="form-control" id="price" placeholder="1234 Main St" value="{{ $comic->price }}">
    </div>
    <div class="col-12">
        <label for="sale_date" class="form-label">Date</label>
        <input type="date" name="sale_date" class="form-control" id="sale_date" value="{{ $comic->sale_date }}">
    </div>
    <div class="col-12">
        <label for="thumb" name="thumb" class="form-label">Thumb</label>
        <input type="text" name="thumb" class="form-control" id="thumb" value="{{ $comic->thumb }}">
    </div>
    <div class="col-12">
        <label for="description" name="description" class="form-label">Description</label>
        <input type="text" name="description" class="form-control" id="description" placeholder="Descrizione" value="{{ $comic->description }}">
    </div>
    <div class="col-md-6">
        <label for="type" class="form-label">Type</label>
        <input type="text" name="type" class="form-control" id="type" value="{{ $comic->type }}">
    </div>

    <div class="col-12">
        <button type="submit" class="btn btn-primary">Modifica</button>
    </div>
    </form>
</div>
@endsection
