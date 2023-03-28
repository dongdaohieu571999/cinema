@INCLUDE('website.layout.head')

@if(session()->has('user'))
    @INCLUDE('website.layout.navbar-admin-log')
@else
    @INCLUDE('website.layout.navbar-unlog')
@endif

<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                <img class="rounded-circle mt-5" width="150px" src="{{url('/')}}/UserCSS/Users_Avatar/{{Auth::user()->avatar}}">
                <span class="font-weight-bold">{{Auth::user()->full_name}}</span>
                <span class="text-black-50">{{Auth::user()->email}}</span>
                <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button"><a href="{{ route('user.booking.history') }}">Order History</a></button></div>
            </div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Your Profile</h4>
                </div>                
                <div class="row mt-3">
                    <form action="{{ route('user.self.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <table>
                        <input type="hidden" class="form-control1" name="user_id" value="{{Auth::user()->user_id}}">
                        <input type="hidden" class="form-control1" name="role_id" value="{{Auth::user()->role_id}}">
                            <tr>
                                <td class="form-control1">Email</td>
                                
                                <td class="form-control1"><input type="text" class="form-control1" name="email" value="{{Auth::user()->email}}"></td>
                            </tr>
                            <tr><td><br></td></tr>
                            <tr>
                                <td class="form-control1">Password</td>
                                <td class="form-control1"><input type="password" class="form-control1" name="password" value="{{Auth::user()->password}}"></td>
                            </tr>
                            <tr><td><br></td></tr>
                            <tr>
                                <td class="form-control1">Full Name</td>
                                <td class="form-control1"><input type="text" class="form-control1" name="full_name" value="{{Auth::user()->full_name}}"></td>
                                
                            </tr>
                            <tr><td><br></td></tr>
                            <tr>
                                <td class="form-control1">Phone</td>    
                                <td class="form-control1"><input type="text" class="form-control1" name="phone" value="0{{Auth::user()->phone}}"></td>
                            </tr>
                            <tr><td><br></td></tr>
                            <tr>
                                <td class="form-control1">Avatar</td>    
                                <td class="form-control1"><input type="file" class="form-control1" name="avatar" value="0{{Auth::user()->avatar}}"></td>
                            </tr>
                            
                                
                            
                        </table>
                        <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit">Save Profile</button></div>
                    </form>
                </div>                
                
            </div>
        </div>
        
    </div>
</div>
</div>
</div>

@INCLUDE('website.layout.footer')