@layout('layouts/student')
@section('content')

  @foreach($requests as $req) 
   <div class="requestblock">
       <h6> Course Number: {{ $req->course_id}} </h4>
            First Section Choice: {{ $req->first}} <br>
            Second Section Choice:{{ $req->second}}<br>
            Third Section Choice:{{ $req->third}}<br>
    </div>
    <br>
  @endforeach
<form method="POST" action=/index.php/special/all_requests>
  <fieldset>
    <div class="drop">
      <div class="large-6 columns">
      <label> Drop Course</label>
       <input type="text" name="coursenumber" id="coursenumber">
      </div>
    </div>

    <div class="row">
      <div class="large-6 columns">
          <input class="nice blue radius button allrequests_submit">
      </div>
    </div>




  </fieldset>
</form>

@endsection
