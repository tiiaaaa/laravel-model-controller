@extends('layouts.main')

@section("title", "Laravel Model Controller ")

@section("main-content")
    <div class="container-fluid">
        <section class="row p-5">
            {{-- foreach che cicla su movies e restituisce ogni singolo film --}}
            @foreach ($movies as $movie)
                <div class="col-3">
                    {{-- Singola Card --}}
                    <div class="card mb-4">
                        {{-- <img src="..." class="card-img-top" alt="..."> --}}
                        <div class="card-body text-center">
                            <h3 class="card-title fw-bold">{{ $movie->title }}</h3>
                            <p class="card-text fs-5 m-0">{{ $movie->original_title }}</p>
                            <p class="mb-1">{{ $movie->nationality }}</p>
                            <pre class="fs-6 m-0">{{ $movie->date }}</pre>
                            <pre class="fs-6 m-0">{{ $movie->vote }}</pre>
                            {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                        </div>
                    </div>
                </div>
            @endforeach
        </section>

    </div>

@endsection
