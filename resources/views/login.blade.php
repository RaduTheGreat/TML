@extends('layouts.master')

@section('content')

<div class="container">
  <div class="card card-login mx-auto mt-5">
    <div class="card-header">Login</div>
    <div class="card-body">
      <form  method="POST" action="{{ route('login-action') }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
          <label for="exampleInputEmail1">Username</label>
          <input name="username" class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input name="password" class="form-control" id="exampleInputPassword1" type="password" placeholder="Password">
        </div>
        <div class="form-group">
          <div class="form-check">
            <label class="form-check-label">
              <input name="remember-password" class="form-check-input" type="checkbox"> Remember Password</label>
          </div>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Login</button>
      </form>
      <div class="text-center">
        <a class="d-block small mt-3" href="register.html">Register an Account</a>
        <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
      </div>
    </div>
  </div>
</div>

@endsection
