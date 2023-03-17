
@extends('admin2.layout.index')

@section('content')

<div class="card">
    <div class="card-body">
        <h4 class="card-title">Movie Management</h4>
        <a href="/addMovie"><button class="btn btn-gradient-primary mr-2">+ Add a Movie</button></a>
            <br> </br>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th> # </th>
                        <th> Movie Name </th>
                        <th> Description </th>
                        <th> Directors </th>
                        <th> Actors </th>
                        <th> Genre </th>
                        <th> Premiere </th>
                        <th> Duration </th>
                        <th> Language </th>
                        <th> Movie Banner </th>
                        <th> Status </th>
                        <th> Action </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($movies as $movie)
                    <tr>
                        <td>{{ $movie->m_id }}</td>
                        <td>{{ $movie->name }}</td>
                        <td>{{ $movie->description }}</td>
                        <td>{{ $movie->director }}</td>
                        <td>{{ $movie->actors }}</td>
                        <td>{{ $movie->genre }}</td>
                        <td>{{ $movie->premiere }}</td>
                        <td>{{ $movie->duration }}</td>
                        <td>{{ $movie->language }}</td>
                        <td><img src="{{ asset('AdminCSS/Movie_Banner/'.$movie->movie_banner) }}" alt="" border= height=300 width=400></td></td>
                        <td>{{ $movie->status }}</td>
                        <td>
                            <a href="{{ route('movie.edit', $movie->m_id) }}"><button type="submit" class="btn btn-gradient-primary mr-2">Edit</button></a>
                            <a href="{{ route('movie.delete', $movie->m_id) }}" onclick="return confirm('Are you sure you want to delete this item?');"><button class="btn btn-light">Delete</button></a>
                            
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
        </div>
    </div>
@endsection
