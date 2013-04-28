@layout('layouts/student_account')

  @section('notifications')

    @if (Session::has('success'))
      <div data-alert class="alert-box success">
        Your information has been changed!
        <a href="#" class="close">&times;</a>
      </div>
    @endif
  
  @endsection
  
  @section('legend')
    Edit Student Account
  @endsection
  
  @section('fields') 
  
    <div class="row">
      <div class="large-6 columns">
        {{ Form::label('email_addr','Email Address') }}
        {{ Form::text('email_addr', $student->email_addr) }}
      </div>
      
      <div class="large-6 columns">
        {{ Form::label('major','Major') }}
        {{ Form::text('major', $student->major) }}
      </div>
    </div>

    <div class="row">
      <div class="large-4 columns">
        {{ Form::label('gpa','GPA') }}
        {{ Form::text('gpa', $student->gpa) }}
      </div>
  
      <div class="large-4 columns">
        {{ Form::label('credits','Credits') }}
        {{ Form::text('credits', $student->credits) }}
      </div>
  
      <div class="large-4 columns">
        {{ Form::label('grad_year','Graduation Year') }}
        {{ Form::text('grad_year', $student->grad_year) }}
      </div>
    </div>
  @endsection
