
@extends('admin2.layout.index')

@section('content')

<div class="card">
    <div class="card-body">
        <h4 class="card-title">User Management</h4>
            <a href="/addUser"><button class="btn btn-gradient-primary mr-2">+ Add a User</button></a>
            <br> </br>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th> # </th>
                        <th> Username </th>
                        <th> Full Name </th>
                        <th> Email Address </th>                        
                        <th> Phone </th>
                        <th> Avatar </th>
                        <th> Action </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td> 1 </td>
                        <td> thuyht </td>
                        <td> Thuy Hoang Thu </td>
                        <td> thuyhtbh00335@fpt.edu.vn </td>
                        <td> Phone </td>
                        <td> Avatar Here </td>
                        <td> 
                            <a href="/editUser"><button type="submit" class="btn btn-gradient-primary mr-2">Edit</button></a>
                            <button class="btn btn-light">Delete</button>
                        </td>
                    </tr>
                    <!-- <tr class="table-warning">
                        <td> 2 </td>
                        <td> Messsy Adam </td>
                        <td> Flash </td>
                        <td> $245.30 </td>
                        <td> July 1, 2015 </td>
                    </tr>
                    <tr class="table-danger">
                        <td> 3 </td>
                        <td> John Richards </td>
                        <td> Premeire </td>
                        <td> $138.00 </td>
                        <td> Apr 12, 2015 </td>
                    </tr>
                    <tr class="table-success">
                        <td> 4 </td>
                        <td> Peter Meggik </td>
                        <td> After effects </td>
                        <td> $ 77.99 </td>
                        <td> May 15, 2015 </td>
                    </tr>
                    <tr class="table-primary">
                        <td> 5 </td>
                        <td> Edward </td>
                        <td> Illustrator </td>
                        <td> $ 160.25 </td>
                        <td> May 03, 2015 </td>
                    </tr> -->
                    </tbody>
                </table>
        </div>
    </div>
@endsection
