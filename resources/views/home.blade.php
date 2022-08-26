@extends('layouts/app')
@section('main_content')
    <section>
        <div class="container">
            <h2>Movies</h2>
            <div class="flex">
                @foreach ($movies as $movie)
                    <div class="card">
                        <div class="film-title">
                            Title: {{$movie->title}}.
                            Original Title: {{$movie->original_title}}.
                        </div>
                        <div class="film-nationality">
                            Nationality: {{$movie->nationality}}.
                        </div>
                        <div class="film-date">
                            Date: {{$movie->date}}.
                        </div>
                        <div class="film-vote">
                            Vote: {{$movie->vote}}.
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection