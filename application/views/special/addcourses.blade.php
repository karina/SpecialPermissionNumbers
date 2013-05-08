@layout('layouts/professor')
@section('content')

<h4>Add Courses</h4>

 <form  method="post" action="">
  <fieldset>
   <div class="row">
      <div class="large-6 columns">
          <label> Course Number </label>
          <input type="text" name="c_id">
      </div>
     <div class="large-6 columns">
          <label> Course Section </label>
          <input type ="text" name="sec_num">
    </div>
     <div class="large-6 columns">
          <label> Maximum Amount of Students Allowed in Course </label>
          <input type ="text" name="max_students">
    </div>
     <div class="large-6 columns">
          <label> Number of Students Currently Enrolled </label>
          <input type ="text" name="num_students">
    </div>
     <div class="large-6 columns">
          <label> Room Number </label>
          <input type ="text" name="room_num">
    </div>

      <div class="row">
        <div class="large-6 columns">
          <input class="nice blue radius button addcourse_submit" type="submit" value="Submit">
        </div>
      </div>

  </fieldset>
</form> 

@endsection


