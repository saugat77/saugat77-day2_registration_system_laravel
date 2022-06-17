@extends('layouts.base')
@section('content')
    <h1 style="width:30%; margin-left:50px" >Login page</h1>
    <nav aria-label="breadcrumb" style="width:30%; margin-left:50px">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="welcome">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Register</li>
        </ol>
      </nav>
    <div class="login" style="width:30%; margin-left:50px">
                <form>
            <div class="sm-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Remember Me</label>
               <a href="{{url('register')}}" style="float:right;">Sign up</a>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
    </div>
<@endsection