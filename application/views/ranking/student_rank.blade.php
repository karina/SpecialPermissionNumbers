@layout('layouts/professor')

@section('content')

  {{ Form::open() }}
    <fieldset>
      <legend>Ranking Status</legend>
        <table>
          <th>
            <td>Rank</td>
            <td>Student</td>
            <td>Course ID</td>
            <td>Section Choice 1</td>
            <td>Section Choice 2</td>
            <td>Section Choice 3</td>
          </th>

          @foreach ($perms as $perm)
            <tr>
              <td></td>
              <td>{{ $perm->net_id }}</td>
              <td>{{ $perm->cid }}</td>
              <td><a href="/index.php/special/give_special/{{ $perm->first }}">{{ $perm->first }}</a></td>
              <td><a href="/index.php/special/give_special/{{ $perm->second}}">{{ $perm->second}}</a></td>
              <td><a href="/index.php/special/give_special/{{ $perm->third}}">{{ $perm->third}}</a></td>
            </tr>
          @endforeach
        </table>

        <div class="large-6 columns">
          <input class="nice blue radius button rank_submit"type="Submit" value="Update Ranks">
        </div>

    </fieldset>
  
  {{ Form::close() }}

@endsection


  


