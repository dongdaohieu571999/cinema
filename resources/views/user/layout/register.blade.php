@extends('user/layout/index')
@section('content')
<div class="login-page">
  <div class="form">
    <form class="login-form">
      <input type="text" name="username" placeholder="username"/>
      <input type="password"name="password" placeholder="password"/>
      <input type="email" name="email" placeholder="email address"/>
      <input type="text" name="user_fullname" placeholder="full name"/>
      <input type="text" name="phone" placeholder="phone"/>
      <button>create</button>
      <p class="message">Already registered? <a href="/login">Sign In</a></p>
    </form>
  </div>
</div>
@endsection