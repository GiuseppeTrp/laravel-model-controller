@extends('layouts/app')
@section('content')

<div class="container py-5">
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
        @foreach ($movies as $movie)
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{$movie->title}}</h5>
                    <p class="card-text">{{$movie->original_title}}</p>
                    <p class="card-tex d-flex flex-column">
                        <span>Production: {{$movie->nationality}}</span>
                        <span> Vote: {{$movie->vote}}</span>
                        <span>Date: {{$movie->date}}</span>
                    </p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection