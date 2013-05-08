@layout('layouts/professor')
@section('content')
<h4> Special Permission requests </h4>
  @foreach($allrequests as $req)
<fieldset>
 <div class="row">
   <div class="requestblock">
       <h6> Course Number: {{ $req->course_id}} </h6>
            First Section Choice: {{ $req->first}} <br>
            Second Section Choice:{{ $req->second}}<br>
            Third Section Choice:{{ $req->third}}<br>
            NET ID: {{ $req->net_id}}<br>
            Status: {{$req->status}}<br>
            Ranking: {{$req->rating}}<br>
           <div class="large-3 columns">
            <br> <a class="nice blue radius button prof_view_req_edit" href="{{ URL::to(ranking/edit_rank/$req->id }}">Edit Rank</a></div>
          <div class="large-3 columns">
            <br> <input class="nice blue radius button prof_view_req_edit" type="submit" value="edit status">           </div>     
        </div>
    </div>
</fieldset>
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
      <input class="nice blue radius button prof_view_req_drop" type="submit" value="submit">
    </div>
  </div>

  </fieldset>
</form>

@endsection
