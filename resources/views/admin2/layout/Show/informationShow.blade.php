
@extends('admin2.layout.index')

@section('content')

<div class="card">
    <div class="card-body">
        <h4 class="card-title">Show Management</h4>
            <a  href="{{route('show.add')}}"><button class="btn btn-gradient-primary mr-2">+ Add a Show</button></a>
            <br> </br>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th> # </th>
                        <th> Movie Name </th>
                        <th> Hall ID </th>
                        <th> Start Time </th>
                        <th> End Time </th>                        
                        <th> Show Date </th>
                        <th> Action </th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($shows as $show)
                        <tr>
                            <td>{{ $show->show_id }}
                            <td>{{ $show->mid->name}} </td>
                            <td>{{ $show->hallid->hall_name }}</td>
                            <td>{{ $show->stt_time}} </td>
                            <td>{{ $show->end_time}} </td>
                            <td>{{ $show->showdate}}</td>
                            <td> 
                                <a href="{{route('show.edit', $show->show_id)}}"><button type="submit" class="btn btn-gradient-primary mr-2">Edit</button></a>
                                <a href="{{route('show.delete', $show->show_id)}}" onclick="return confirm('Are you sure you want to delete this item?');"><button class="btn btn-light">Delete</button></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
        </div>
    </div>
@endsection
