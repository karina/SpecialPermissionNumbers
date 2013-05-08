@layout('layouts/professor')
@section('content')


<form method="POST" action="/index.php/special/addprereq">
  <fieldset>
        <div class="row">
          <div class="large-6 columns">
           @if (Session::has('error'))
             <div class="alert alert-box">
               {{ Session::get('error') }}
               <a href="" class="close">&times;</a>
             </div>
           @endif
          </div>
        </div>
        
        
           <label>Set Number </label>
           <input type="text"  name="set_id">
           <label>Course Number </label>
           <input type="text"  name="course_id">
           <label>Add Prerequisite </label>
           <input type="text"  name="prereq">
        
         <input class="nice blue radius button submitprereq" type="submit" value"submit">

  </fieldset>
</form> 

@endsection

