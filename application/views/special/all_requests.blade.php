@layout('layouts/student')
@section('content')

  @foreach($requests as $req) 
   <div class="requestblock">
       <h6> Course Number: {{ $req->cid}} </h4>
            First Section Choice: {{ $req->first}} <br>
            Second Section Choice:{{ $req->second}}<br>
            Third Section Choice:{{ $req->third}}<br>
    </div>
    <br>
  @endforeach
<form method="POST" action=/index.php/special/all_request >
  <fieldset>
    <div class="drop">
      <div class="large-6 columns">
      <label> Drop Course</label>
       <input type="text" name="coursenumber" id="coursenumber">
      </div>
    </div>
  </fieldset>
</form>

@endsection
