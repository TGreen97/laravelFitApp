@extends ('layouts.app')

@section('title')
Meals for {{ $user-name }}
@stop

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading">
          {{ $user-name }}'s Meals
            <a href="/users/{{ $user->id }}"></a>
        </div>
        <div class="panel-body">
          @if ($user->meals->isEmpty())
            <h3>{{ $user->name }} has no meals</h3>
          @else
            <ul class="form-group">
                @foreach($user->meals as $meal)
                  <li class="list-group-item">
                      <p>{{$meal->foodName}}</p>
                  </li>
                @endforeach
            </ul>
          @endif

          <form action="/users/{{ $user->id }}/meals/cre" method="post">

            {{ csrf_field() }}

            <fieldset class="field-group">
              <label for="foodName">Food Name: </label>
              <input type="text"class="form-control" name="foodName" rows="1" placeholder="Food Eaten">
            <fieldset>

            <fieldset class="field-group">
              <label for="protein">Protein: </label>
              <textarea class="form-control" name="protein" rows="1" placeholder="Protein/g"></textarea>
            <fieldset>

            <fieldset class="field-group">
              <label for="carbohydrates">Carbohydrates: </label>
              <textarea class="form-control" name="carbohydrates" rows="1" placeholder="Carbs/g"></textarea>
            <fieldset>

            <fieldset class="field-group">
              <label for="fat">Fat: </label>
              <textarea class="form-control" name="fat" rows="1" placeholder="Fat/g"></textarea>
            <fieldset>

            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
