@layout('layouts/professor')
@section('content')
<h4> Special Permission requests </h4>
  @foreach($allrequests as $req)
<fieldset>
 <div class="row">
   <div class="requestblock">
       <h6> Course Number: {{ $req->course_id}} </h6>
            @if ($req->status == 0)
            First Section Choice: {{ $req->first}} &mdash;<a href="/index.php/special/give_perm/{{ $req->id }}/{{ $req->first }}">Give Number</a><br>
            Second Section Choice:{{ $req->second}} &mdash; <a href="/index.php/special/give_perm/{{ $req->id }}/{{ $req->second }}">Give Number</a><br>
            Third Section Choice:{{ $req->third}} &mdash; <a href="/index.php/special/give_perm/{{ $req->id }}/{{ $req->third }}">Give Number</a><br>
            @else
            Given Special Permission Number!<br>
            @endif
            NET ID: {{ $req->net_id}}<br>
            Status: 
            @if ($req->status == 1) 
              Waiting for Student to Add Number 
            @elseif ($req->status ==2 ) Student Used Number 
            @else
              No Number Assigned Yet
            @endif<br>
            Ranking: {{$req->rating}}<br>
            Comment: {{ $req->comment }} <br>
           <div class="large-3 columns">
            <br> <a class="nice blue radius button prof_view_req_edit" href="/index.php/ranking/edit_rank/{{ $req->id }}">Edit Rank</a>
           </div>
          <div class="large-3 columns">
            <br> <a class="nice blue radius button prof_view_req_edit" href="/index.php/special/comment/{{ $req->id }}">Edit Comment</a>
        </div>
    </div>
</fieldset>
    <br>
  @endforeach

@endsection
