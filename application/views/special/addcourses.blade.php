@layout('layouts/professor')

@section('content')

  {{ Form::open() }}
    <fieldset>
      <legend>Add Courses</legend>
      
      <div class="row">
        <div class="large-3 columns">
          {{ Form::label('course_id', 'Course Number') }}
          {{ Form::text('course_id') }}
        </div>
        
        <div class="large-3 columns">
          {{ Form::label('sec_num', 'Number of Sections') }}
          {{ Form::text('sec_num') }}
        </div>

        <div class="large-3 columns">
          {{ Form::label('max_students', 'Maximum # of Students') }}
          {{ Form::text('max_students') }}
        </div>

        <div class="large-3 columns">
          {{ Form::label('room_id', 'Room Number') }}
          {{ Form::text('room_id') }}
        </div>
      </div>

      <div class="row">
        <div class="large-12 columns">
          {{ Form::label('prereq', 'Prerequisites') }}
          {{ Form::textarea('prereq', 'Enter in prereqs in the form: (111 AND 112) OR (314) OR (211 AND 352)') }}
        </div>
      </div>  

      <div class="large-2 columns">
        <input class="nice blue radius button student_submit" type="submit" value="Submit">
      </div>
    </fieldset>
  {{ Form::close() }}
@endsection
