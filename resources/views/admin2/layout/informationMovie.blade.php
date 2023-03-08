
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
                    <th> Action </th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td> id </td>
                    <td> Name </td>
                    <td> Description </td>
                    <td> Directors </td>
                    <td> tui thu viet o day sieu dai cho cau xem nay ^^ </td>
                    <td> Genre </td>
                    <td> Release Date </td>
                    <td> 125m </td>
                    <td> English </td>
                    <td> Banner here </td>
                    <td>
                        <a href="/editMovie"><button type="submit" class="btn btn-gradient-primary mr-2">Edit</button></a>
                        <br>
                        <button class="btn btn-light">Delete</button>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
