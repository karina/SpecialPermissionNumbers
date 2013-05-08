@layout('layouts/professor')

@section('content')

  <table>
    <tr>
      <th>Room Number</th>
      <th>Max Number of Seats</th>
    </tr>
  
  @foreach ( $rooms as $room)
    <tr>
      <td>{{ $room->room_num }}</td>
      <td>{{ $room->max_seats }}</td>
    </td>
  @endforeach

  </table>  

  
	<div class="small-3 columns">
    <a href="{{ URL::to('room/add') }}" class="medium button">Add a Room</a>
  </div>

  </div>			
@endsection
