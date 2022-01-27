@extends('master')

@section('content')

<form action={{ route('login') }} method="post">
    @csrf

    <div class="mb-3">
        <label for="exampleInputUsername" class="form-label">Username</label>
        <input type="text" class="form-control" name="name" value="{{ old('name') }}" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" name="password" value="{{ old('password') }}" id="exampleInputPassword1">
      </div>
      <button type="submit" class="btn btn-primary">Login</button>
</form>
@stop