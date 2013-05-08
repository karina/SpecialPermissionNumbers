@layout('layouts/student')
@section('content')

  @foreach($requests as $req) 
<fieldset>
   <div class="requestblock">
     <div class="row">
        <div class="large-6 columns">
       <h6> Course Number: {{ $req->course_id}} </h4>
            First Section Choice: {{ $req->first}} <br>
            Second Section Choice:{{ $req->second}}<br>
            Third Section Choice:{{ $req->third}}<br>
        </div>
        <div class="large-6 columns">
          <a href="/index.php/special/check_num/{{$req->id}}">Check Status</a>
        </div>
      </div>
    </div>

</fieldset>
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
          <input class="nice blue radius button allrequests_submit" type="submit" value="drop"  >
      </div>
    </div>




  </fieldset>
</form>

@endsection
