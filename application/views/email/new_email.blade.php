@layout('layouts/professor')

@section('content')

  <div class="row">
    <h2 class="subheader">Create an Email:</h2>
  </div>

  {{ Form::open() }}

  <div class="row">
    <div class="email_text">
      {{ Form::textarea('content') }}
    </div>
  </div>
  
  <div class="row">
    <div class="large-2 columns">
      <input class="nice blue radius button" type="submit" value="Send">
    </div>
  </div>

  {{ Form::close() }}
@endsection
