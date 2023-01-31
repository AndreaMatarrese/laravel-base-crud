@extends('layouts.base')

@section('content')
<h1>Comics show</h1>
            <div class="card col-8 m-auto border-0">
                <img src="{{ $comic->thumb }}" alt="img" class="col-5">
                <h3>{{ $comic->title }}</h3>
                <div>{{ $comic->series }}</div>
                <div>{{ $comic->description }}</div>
                <div>{{ $comic->price }}</div>
                <div>{{ $comic->sale_date }}</div>
                <div>{{ $comic->type }}</div>
            </div>
@endsection
