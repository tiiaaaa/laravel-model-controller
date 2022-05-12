@extends('layouts.main')

@section("title", "Laravel Model Controller ")

@section("main-content")
    <div class="container-fluid">
        <section class="row">
            @foreach ($movies as $movie)
                <div class="col-3">
                    <h2>{{ $movie->title }}</h2>
                    <p>{{ $movie->original_title }}</p>
                </div>
            @endforeach
        </section>

    </div>

@endsection
