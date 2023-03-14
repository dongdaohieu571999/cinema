@extends('admin2.layout.index')

@section('content')
<div class="card">
    <div class="card-body">
                        <h4 class="card-title">Seat Management</h4>
                        <p class="card-description"> Add New Seat </p>
                        <form class="forms-sample" action="{{ route ('seat.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf                       
                        <div class="form-group">
                            <label for="exampleInputPhone1">Hall</label>
                            <select name="hall_id" class="form-control">
                                @foreach($halls as $hall)
                                <option value="{{$hall->hall_id}}">{{$hall->hall_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3">Seat Row</label>
                            <select name="seat_row" class="form-control">
                                <option value="T1">T1</option>
                                <option value="T2">T2</option>
                                <option value="T3">T3</option>
                                <option value="T4">T4</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3">Seat Number</label>
                            <select name="seat_number" class="form-control">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                            </select>
                        </div>                              
                        <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
                        <a href="/SeatManagement"><button class="btn btn-light" style="pointer-events:none">Cancel</button></a>
                        </form>
                    </div>
</div>
@endsection