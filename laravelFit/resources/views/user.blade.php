@extends('layouts.app')

@section('title')
Info for {{ $user-name }}
@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                Info for {{ $user->name }}
                  <a href="/users/{{ $user->name }}"></a>
                </div>

                <div class="panel-body">
                  <ul class="list-group">
                    <li class="list-group-item">
                      <p>Name</p>: {{ $user->name }}
                    </li>
                    <li class="list-group-item">
                      <p>Email</p>: {{ $user->email }}
                    </li>
                  </ul>

                  <hr>

                  @if ($user->meals->isEmpty())
                    <h3>{{ $user->name }} has no meals.</h3>
                  @else
                    <ul class="form-group">
                      @foreach ($user->meals as $meal)
                      <li class="list-group-item">
                        <span><b>{{ $meal->foodName }}</b></span>
                      </li>
                      @endforeach
                    </ul>
                  @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<!-- <h2>{{ $user->name }}</h2>
<p>{{ $user->email }}</p>

<ul>
  @foreach($meals as $meal)
    {{ $meal->meal }}
  @endforeach -->


<!-- @extends('layout')

@section('title')
Create a User
@stop -->

<!-- @section('content')
  <h1>Let's Make Some Users.</h1>

    <hr>

  <form action="/users" method="post">
    <fieldset class="form-group">
      <label for="name" >Name</label>
      <input name="name" class="form-control" placeholder="Name" required>
    </fieldset>

    <fieldset class="form-group">
      <label for="email" >Email</label>
      <input name="email" class="form-control" placeholder="Email" required>
    </fieldset>

    <fieldset class="form-group">
      <label for="password" >Password</label>
      <input type="password"
             name="password"
             class="form-control"
             placeholder="Password"
             required>
    </fieldset>

    <button class="btn btn-primary">Submit</button>

    {{ csrf_field() }}
  </form>
 -->
<!-- @stop -->
