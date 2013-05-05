@layout('layouts/main')
@section('content')

  <form method="POST" action="/index.php/account/professor/create_sp">
    <fieldset>
    <legend>Create a Course Special Permission</legend>

      <div class="row">
           <div class="large-6 columns">
           <label>Course Number</label>
             <input type="text" name="coursenumber" id="coursenumber">
           </div>
          <div class="large-6 columns">
            <label>Course Section</label>   
            <input type="text" name="coursesection"  id="coursesection" >
          </div>
      </div>

       <div class="row">
          <div class="large-6 columns">
           <label>Prerequesite 1</label>
             <input type="text" name="pre1" id="pre1"  >
           </div>
          <div class="large-6 columns">
            <label>Prerequesite 2</label>   
            <input type="text" name="pre2"  id="pre2"  >
          </div>
        </div>
        <div class="row">
          <div class="large-6 columns">
              <label>Prerequesite 3</label> 
              <input type="text" name="pre3" id="pre3">
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
