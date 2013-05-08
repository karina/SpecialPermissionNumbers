@layout('layouts/professor')

@section('content')

  {{ Form::open() }}
    <fieldset>
      <div class="row">
        <div class="large-3 columns">
          Course Number: {{ $req->course_id}}
        </div>
        <div class="large-3 columns">
            NET ID: {{ $req->net_id}}
        </div>
        <div class="large-3 columns">
          Status: {{ $req->status }}
        </div>
      </div>
      
      <div class="row">
        <div class="large-3 columns">
          First Section Choice: {{ $req->first}} <br>
        </div>
        <div class="large-3 columns">
          Second Section Choice:{{ $req->second}}<br>
        </div>
        <div class="large-3 columns">
          Third Section Choice:{{ $req->third}}
        </div>
      </div>

      <div class="row">
        {{ Form::select('Ranking', array('UNDECIDED' => 'Undecided', 'LOW PRIORITY' => 'Low Priority', 'NORMAL PRIORITY' => 'Normal Priority', 'HIGH PRIORITY' => 'High Priority'), $req->rating) }} 
      </div>
    </fieldset>
    {{ Form::close() }}

@endsection
