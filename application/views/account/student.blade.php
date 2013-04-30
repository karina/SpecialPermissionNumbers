@layout('layouts/student_account')

@section('legend')
Create Student Account
@endsection
         @section('fields') 
          <div class="row">
            <div class="large-6 columns">
              {{ Form::label('net_id','NetID') }}
              {{ Form::text('net_id') }}
            </div>
            
            <div class="large-6 columns">
              {{ Form::label('passwd','Password') }}
              {{ Form::password('passwd') }}
            </div>
          </div>

          <div class="row">
            <div class="large-6 columns">
              {{ Form::label('email_addr','Email Address') }}
              {{ Form::text('email_addr') }}
            </div>
            
            <div class="large-6 columns">
              {{ Form::label('password_confirmation','Password Confirmation') }}
              {{ Form::password('password_confirmation') }}
            </div>
          </div>

          <div class="row">
            <div class="large-6 columns">
              {{ Form::label('ruid','RUID') }}
              {{ Form::text('ruid') }}
            </div>
            
            <div class="large-6 columns">
              {{ Form::label('major','Major') }}
              {{ Form::text('major') }}
            </div>
          </div>

          <div class="row">
            <div class="large-4 columns">
              {{ Form::label('gpa','GPA') }}
              {{ Form::text('gpa') }}
            </div>
        
            <div class="large-4 columns">
              {{ Form::label('credits','Credits') }}
              {{ Form::text('credits') }}
            </div>
        
            <div class="large-4 columns">
              {{ Form::label('grad_year','Graduation Year') }}
              {{ Form::text('grad_year') }}
            </div>
          </div>
<div class="create_request_button">
    
      <div class="large-6 columns">
        <a href="{{URL::to('/../special/request_sp')}}" class="medium button account">Request a Course Special Permission</a>
      </div>  
    </div>
          @endsection
