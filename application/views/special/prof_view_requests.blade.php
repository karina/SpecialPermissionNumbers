@layout('layouts/student')
@section('content')

  @foreach($allrequests as $req) 
   <div class="requestblock">
       <h6> Course Number: {{ $req->course_id}} </h4>
            First Section Choice: {{ $req->first}} <br>
            Second Section Choice:{{ $req->second}}<br>
            Third Section Choice:{{ $req->third}}<br>
            NET ID: {{ $req->net_id}}<br>
    </div>
    <br>
  @endforeach
<form method="POST" action=/index.php/special/all_request >
  <fieldset>
    <div class="drop">
      <div class="large-6 columns">
      <label> Drop Student Request</label>
       <input type="text" name="coursenumber" id="coursenumber">
      </div>
    </div>

  <div class="row">
    <div class="large-6 columns">
      <input class="nice blue radius button prof_view_req_submit" type="submit" value="submit">
    </div>
  </div>

  </fieldset>
</form>

@endsection
