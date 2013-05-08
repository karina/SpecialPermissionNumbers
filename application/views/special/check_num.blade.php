@layout('layouts/student')

@section('content')

  <div class="row">

    @if ($num != NULL)
      @if ($num->status == 2)
        You've used this one already!
      @else
        <p>Your special permission number is: {{ $num->sp_num }}</p>
        {{ Form::open() }}
        <input type="submit" class="button" value="Use It!">
      {{ Form::close() }}
      @endif
    @else
      No special permission number yet :(
    @endif

    <a href="/index.php/special/all_requests" class="button">Go Back</a>
@endsection
