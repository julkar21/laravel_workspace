@extends('master')

@section('content')

    <form action={{ route('register') }} method="post" enctype="multipart/form-data">
        @csrf

        @if($errors -> any())

        <div>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
        @endif


        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" name="email" value="{{ old('email') }}" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" value="{{ old('password') }}" id="exampleInputPassword1">
          </div>
          <div class="mb-3">
            <label for="exampleInputfile" class="form-label">File</label>
            <input type="file" class="form-control" name="photo" id="exampleInputPassword1">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@stop