@layout('layouts/student_account')

  @section('legend')
  Edit Student Account
  @endsection
  
  @section('fields') 
  
    <div class="row">
      <div class="large-6 columns">
        {{ Form::label('net_id','NetID') }}
        {{ Form::text('net_id', $student->net_id) }}
      </div>
      
      <div class="large-6 columns">
        {{ Form::label('passwd','New Password') }}
        {{ Form::password('passwd') }}
      </div>
    </div>

    <div class="row">
      <div class="large-6 columns">
        {{ Form::label('email_addr','Email Address') }}
        {{ Form::text('email_addr', $student->email_addr) }}
      </div>
      
      <div class="large-6 columns">
        {{ Form::label('password_confirmation','New Password Confirmation') }}
        {{ Form::password('password_confirmation') }}
      </div>
    </div>

    <div class="row">
      <div class="large-6 columns">
        {{ Form::label('ruid','RUID') }}
        {{ Form::text('ruid', $student->ruid) }}
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
