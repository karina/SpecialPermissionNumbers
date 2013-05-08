@layout('layouts/professor')

@section('content')

  {{ Form::open() }}
    <fieldset>
      <legend>Add a Comment</legend>
      <div class="row">
        {{ Form::textarea('comment', $req->comment) }}
      </div>
      
      <div class="row">
        <input type="submit" value="Save Comment" class="button"> 
    </fieldset>

  {{ Form::close()}}

@endsection
