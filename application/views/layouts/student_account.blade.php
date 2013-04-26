<!DOCTYPE html>
<html>

  <head>
    <title>Your Account</title>
    {{Asset::styles()}}
  </head>

  <body>
    <div class="container">
      
      <nav class="top-bar">
        <ul class="title-area">
          <li class="name">
            <h1><a href="/">Home</a></h1>
          </li>
        </ul>
        
        <section class="top-bar-section">
          <ul class="left">
            <li class="divider"></li>
            <li class="has-dropdown">
              <a href="/index.php/account/professor">Professor</a>
              <ul class="dropdown">
              </ul>
            </li>
            <li class="divider"></li>
          </ul>
          <ul class="left">
            <li class="has-dropdown">
              <a href="/index.php/account/student">Student</a>
              <ul class="dropdown">
                <li>
                  <a href="/index.php/account/student/edit">Edit Account</a>
                </li>
              </ul>
            </li>
            <li class="divider"></li>
          </ul>
        </section>
      
      </nav>

      {{ Form::open() }}
        <fieldset>
          <legend>@yield('legend')</legend>
          
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
          
          <div class="row">
            <div class="large-2 columns">
              <input class="nice blue radius button student_submit" type="submit" value="Submit">
            </div>
          
            <div class="large-2 columns">
              <input class="nice blue radius button student_reset" type="reset">
            </div>
          </div>
        </fieldset>
      {{ Form::close() }}  
    </div>
  </body>
</html>
