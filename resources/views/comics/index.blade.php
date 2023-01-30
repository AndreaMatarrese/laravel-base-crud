@extends('layouts.base')

@section('content')
<h1>Comics</h1>
    <div class="cards col-10 m-auto g-4 row row-cols-6">
        @foreach($comics as $comic)
            <div class="card border-0">
                <img src="{{ $comic->thumb }}" alt="img">
                <h3>{{ $comic->title }}</h3>
                <div>{{ $comic->series }}</div>
                <!-- <div>{{ $comic->description }}</div> -->
                <div>{{ $comic->price }}</div>
                <div>{{ $comic->sale_date }}</div>
                <div>{{ $comic->type }}</div>
            </div>
        @endforeach
    </div>
@endsection
