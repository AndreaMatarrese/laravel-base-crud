@extends('layouts.base')

@section('content')
<h1>Comics</h1>
    @foreach($comics as $comic)
        <div class="card">
            <h3>{{ comic->title }}</h3>
            <img src="{{ comic.thumb }}" alt="img">
            <div>{{ comic->series }}</div>
            <div>{{ comic->description }}</div>
            <div>{{ comic->price }}</div>
            <div>{{ comic->sale_date }}</div>
            <div>{{ comic->type }}</div>
        </div>
    @endforeach
@endsection
