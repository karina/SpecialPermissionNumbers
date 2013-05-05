@layout('layouts/main')
@section('content')
<form method="POST" action="request_sp.php"  > 
  <fieldset>
    <legend>Request a Course Special Permission</legend>

    <div class="row">
       <div class="large-6 columns">
        <label for= "coursesection"> Course Section</label>
        <input type="text" name="coursesection" id="coursesection" >
      </div>
  
      <div class="large-6 columns">
        <label for= "coursenum"> Course Number</label>
        <input type="text" name="coursenum" id="coursenum" >
      </div>

    </div>

      <div class="row"> 
          <div class="large-6 columns">
           <label>Prerequesite 1</label>
             <input type="text" name="prereq1">
           </div>
          <div class="large-6 columns">
            <label>Prerequesite 2</label>
            <input type="text" name="prereq2">
          </div>
       </div> 
        
        <div class="row">
          <div class="large-6 columns">
              <label>Prerequesite 3</label>
              <input type="text" name="prereq3">
          </div>
        </div>

       <div class="row">
          <div class="large-6 columns">
           <label>Section Choice 1</label>
             <input type="text" name="sec1">
           </div>
          <div class="large-6 columns">
            <label>Section Choice 3</label>
            <input type="text" name="sec3">
          </div>
      </div>
      <div class="row">
          <div class="large-6 columns">
              <label>Section Choice 2</label>
              <input type="text" name="sec2">
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
