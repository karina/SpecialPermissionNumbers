@layout('layouts/professor')
@section('content')
  <form method="POST" action="/index.php/account/professor/create_sp">
    <fieldset>
      <legend>Add Special Permission Number</legend>

      <div class"row">
        <div class "large-12 columns">
          <p id="instructions">Add a special permission number here:</P>
        </div>
      </div>

      <div class="row">
        <div class="large-6 columns">
          <label>Course Number</label>
          <input type="text" name="coursenumber" id="coursenumber">
        </div>
        <div class="large-6 columns">
          <label>Course Section</label>   
          <input type="text" name="coursesection" id="coursesection">
        </div>
      </div>

      <div class="row">
        <div class="large-6 columns">
          <label>Special Permission Number</label>
          <input type="text" name="spnum" id="spnum">
        </div>
      </div>

      <div class="row">
        <div class="large-6 columns">
          <input class="nice blue radius button create_sp" type="submit" value="Submit">
        </div>
      </div>

    </fieldset>
  </form>

@endsection
