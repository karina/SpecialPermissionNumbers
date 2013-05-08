@layout('layouts/professor')

@section('content')

  <div class="row">

    @if ($num != NULL)
      <p>Your special permission number is: {{ $num->sp_num }}</p>
      <input type="submit" class="button" value="Use It!">
    @else
      No special permission number yet :(
    @endif
@endsection
