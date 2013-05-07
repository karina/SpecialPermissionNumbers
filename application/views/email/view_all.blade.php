@layout('layouts/professor')

@section('content')

  <table>
    <tr>
      <th>Date</th>
      <th>Content</th>
    </tr>
  
  @foreach ( $emails as $email)
    <tr>
      <td>{{ $email->updated_at }}</td>
      <td>{{ Str::limit($email->email_body, 50) }}</td>
    </tr>
  @endforeach

  </table>  

  
	<div class="small-3 columns">
    <a href="{{ URL::to('email/new_email') }}" class="medium button">New Email</a>
  </div>


@endsection
