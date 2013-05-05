@layout('layouts/student')
@section('content')
<form method="POST" action="/index.php/special/request_sp"  > 
  <fieldset>
    <legend>Request a Course Special Permission</legend>

    <div class="row">
      <div class="large-6 columns">
        <label for= "coursenum"> Course Number</label>
        <input type="text" name="coursenum" id="coursenum" >
      </div>

    </div>


       <div class="row">
          <div class="large-6 columns">
           <label>Section Choice 1</label>
             <input type="text" name="sec1" id="sec1">
           </div>
          <div class="large-6 columns">
            <label>Section Choice 3</label>
            <input type="text" name="sec3" id="sec3">
          </div>
      </div>
      <div class="row">
          <div class="large-6 columns">
              <label>Section Choice 2</label>
              <input type="text" name="sec2" id= "sec2">
          </div>
      </div> 



    <div class="row">
      <div class="large-6 columns">
        <input class="nice blue radius button request_sp" type="submit" value="Submit">
      </div>
    </div>

   </fieldset>
   </form>


@endsection
