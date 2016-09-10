@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading">
          All Users
        </div>
        <div class="panel-body">
          <ul class="list-group">
            @foreach ($users as $user)
              <li class="list-group-item">
                <a href="/users/{{$user->id}}">
                  {{ $user->name }}
                </a>
              </li>
            @endforeach
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection