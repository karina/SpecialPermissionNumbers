@layout('layouts/professor')

@section('content')

  {{ Form::open() }}
    <fieldset>
      <div class="row">
        <div class="requestblock">
          <h6> Course Number: {{ $req->course_id}} </h6>
            First Section Choice: {{ $req->first}} <br>
            Second Section Choice:{{ $req->second}}<br>
            Third Section Choice:{{ $req->third}}<br>
            NET ID: {{ $req->net_id}}<br>
            Status: {{$req->status}}<br><br><br>
        </div>
      </div>

       

      <div class="row">
        <div class="large-6 columns">
          {{ Form::label('ranking','Ranking:') }}
          {{ Form::select('Ranking', array('UNDECIDED' => 'Undecided', 'LOW PRIORITY' => 'Low Priority', 'NORMAL PRIORITY' => 'Normal Priority', 'HIGH PRIORITY' => 'High Priority'), $req->rating) }} 
        </div>
        
        <div class="large-6 columns">
					<input class="nice blue radius button" type="submit" value="Update Rank">
        </div>
      </div>
    </fieldset>
    {{ Form::close() }}

@endsection
