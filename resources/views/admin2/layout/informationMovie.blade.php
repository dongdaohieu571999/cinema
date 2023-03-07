
@extends('admin2.layout.index')

@section('content')
    <div class="about-section">
        <h1> Information of Movie</h1>
        <p>Be careful when editing or removing information from movies!!</p>
    </div>

    <h2 style="text-align:center">Team 2</h2>
    <div class="row">
        <div class="column">
            <div class="card">
                <img src="#" alt="" style="width:100%">
                <div class="container">
                    <h2>Movie name: </h2>
                    <p class="title">ID: </p>
                    <p>Directors:</p>
                    <p>Actors: </p>
                    <p>Genre: </p>
                    <p>Premiere: </p>
                    <p>Duration: </p>
                    <p>Language: </p>
                    <p>Description: </p>
                    <p><button class="button">Edit</button></p>
                    <p><button class="button">Delete</button></p>
                </div>
            </div>

            @foreach($movie as $key => $value)
                <img src="{{$value -> $movie_banner}}" alt="" style="width:100%">
                <div class="container">
                    <h2>Movie name: {{ $value->movie_name }}</h2>
                    <p class="title">ID: </p>
                    <p>Directors: {{ $value->movie_director }}</p>
                    <p>Actors: {{ $value->movie_actor }}</p>
                    <p>Genre: {{ $value->movie_genre }}</p>
                    <p>Premiere: {{ $value->movie_premiere }}</p>
                    <p>Duration: {{ $value->movie_duration }}</p>
                    <p>Language: {{ $value->movie_language }}</p>
                    <p>Description: {{ $value->movie_description }}</p>
                    <button class="button">
                        <a href="{{asset('movie/edit/'.$value->$movie)}}">Edit</a>
                    </button>
                    <button class="button">
                        <a href="{{asset('movie/delete/'.$value->movie_id)}}" onclick="return confirm('Bạn có chắc muốn xóa?')">Delete</a>
                    </button>
                </div>
            @endforeach
        </div>


    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
        }

        html {
            box-sizing: border-box;
        }

        *, *:before, *:after {
            box-sizing: inherit;
        }

        .column {
            float: left;
            height: auto;
            width: 33.3%;
            margin-bottom: 16px;
            padding: 0 8px;
        }

        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            margin: 8px;
        }

        .about-section {
            padding: 50px;
            text-align: center;
            background-color: #474e5d;
            color: white;
        }

        .container {
            padding: 0 16px;
        }

        .container::after, .row::after {
            content: "";
            clear: both;
            display: table;
        }

        .title {
            color: grey;
        }

        .button {
            border: none;
            outline: 0;
            display: inline;
            padding: 8px;
            color: white;
            background-color: #000;
            text-align: center;
            cursor: pointer;
            width: 45%;
        }

        .button:hover {
            background-color: #555;
        }

        @media screen and (max-width: 650px) {
            .column {
                width: 100%;
                display: block;
            }
        }
    </style>
@endsection
