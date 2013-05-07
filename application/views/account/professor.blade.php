@layout('layouts/main')

@section('content')
  <form method="POST" action="/index.php/account/professor">
    <fieldset>
      <legend>Create a Professor Account</legend> 

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
          <input class="nice blue radius button prof_submit" type="submit" value="Submit">
        </div>
      </div>

    </fieldset>
  </form>

@endsection
