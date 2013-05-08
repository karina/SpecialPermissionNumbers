@layout('layouts/professor')

@section('content')

  {{ Form::open() }}
    <fieldset>
      
      <div class="row">
        <div class="large-6 columns">
        {{ Form::label('special_num', 'Special Permission Number') }}
        {{ Form::select('special_nums', $arr) }}
        </div>
        
        <div class="large-6 columns">
          <input type="submit" value="Give Number" class="button">
        </div>
      </div>

    </fieldset>

  {{ Form::close() }}

@endsection
