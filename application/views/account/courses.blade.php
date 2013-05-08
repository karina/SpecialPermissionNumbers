@layout('layouts/student')

@section('content')

  {{ Form::open() }}
    <div class="row">

      <div class="large-6 columns">
        {{ Form::label('course_id','Course') }}
        {{ Form::text('course_id', 'e.g. 214') }}
      </div>
      <div class="large-6 columns">
        {{ Form::label('grade','Grade') }}
        {{ Form::text('grade', 'e.g 94.3') }}
      </div>
    </div>

    <div class="row">
      <div class="large-6 columns">
        <input type="submit" value="Add Course" class="button">
      </div>
    </div>
  {{ Form::close() }}



@endsection
