@layout('layouts/main')
@section('content')
<form method="POST" action="request_sp.php"  > 
  <fieldset>
    <legend>Request a course special permission</legend>

    <div class="row">
      <div class="large-6 columns">
        <label> Course Number</label>
        <input type="text" name="coursenum">
      </div>
      <div class= "large-6 colums">
        <label> Course Section </label>
        <input type="text" name="coursesec">
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
          <div class="large-6 columns">
              <label>Prerequesite3</label>
              <input type="text" name="prereq3">
          </div>

       <div class="row">
          <div class="large-6 columns">
           <label>section choice 1</label>
             <input type="text" name="prereq1">
           </div>
          <div class="large-6 columns">
            <label>section choice 2</label>
            <input type="text" name="prereq2">
          </div>
          <div class="large-6 columns">
              <label>section choice  3</label>
              <input type="text" name="prereq3">
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
