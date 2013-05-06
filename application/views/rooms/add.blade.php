@layout('layouts/professor')

@section('content')
  {{ Form::open() }}
    <fieldset>
      <legend>Add a Room</legend>

      <div class="row">
        <div class="large-6 columns">
          {{ Form::label('room_num', 'Room Number') }}
          {{ Form::text('room_num', 'e.g. 208') }}
        </div>
        
        <div class="large-6 columns">
          {{ Form::label('max_seats', 'Maximum Number of Students') }}
          {{ Form::text('max_seats') }}
        </div>

      </div>
      
      <div class="row">
        <div class="large-2 columns">
          <input class="nice blue radius button student_submit" type="submit" value="Submit">
        </div>
    </fieldset>
  {{ Form::close() }}

@endsection
