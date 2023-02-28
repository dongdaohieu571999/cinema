@extends('website.layout.index')
@section('content')

<div class="login-page">
  <div class="form">
    <form class="login-form" action="{{route('auth.login')}}" method="POST">
      @csrf
      <input type="text" placeholder="email" name="email"/>
        @if ($errors -> has ('email')) 
        {{$errors -> first('email')}}
        @endif
      <input type="password" placeholder="password" name="password"/>
        @if ($errors -> has ('password')) 
        {{$errors -> first('password')}}
        @endif
      <button>login</button>
      <p class="message">Not registered? <a href="/register">Create an account</a></p>
    </form>
  </div>
</div>
@endsection