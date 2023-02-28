@extends('website.layout.index')
@section('content')
<div class="login-page">
  <div class="form">
    <form class="login-form" action="{{route('auth.register')}}" method="POST" enctype="multipart/form-data">
      @csrf
      <input type="email" name="email" placeholder="email address" />
        @if ($errors -> has ('email')) 
        {{$errors -> first('email')}}
        @endif
      <input type="password" name="password" placeholder="password" />
        @if ($errors -> has ('password')) 
        {{$errors -> first('password')}}
        @endif
        <input type="password" name="password_confirmation" placeholder="confirm password" value=""/>
      <input type="text" name="full_name" placeholder="full name" />
        @if ($errors -> has ('full_name')) 
        {{$errors -> first('full_name')}}
        @endif
      <input type="text" name="phone" placeholder="phone"/>
      <!-- <select name="role">
        <option class="hidden" selected disabled>Please select role for account</option>
        <option value="1">Admin</option>
        <option value="2">Customer</option>
      </select>
        @if ($errors -> has ('role')) 
        {{$errors -> first('role')}}
        @endif -->
      <button>create</button>
      <p class="message">Already registered? <a href="/login">Sign In</a></p>
    </form>
  </div>
</div>
@endsection