@layout('layouts/main')
@section('content')

  <form method="POST" action="/index.php/account/professor/create_sp">
    <fieldset>
    <legend>Create a course special permission</legend>

    <div class="row">
      <div class="large-6 columns">
        <label> Course Number</label>
        <input type="text" name="netid">
      </div>
    </div>
      <div class="row">
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
              <label>Prerequesite 3</label> 
              <input type="text" name="prereq3">
          </div>
         </div>
 <div class="row">
    <div class="large-6 columns">
      <label>Special Permission number</label>
      <input type="text" name="spnum">
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
