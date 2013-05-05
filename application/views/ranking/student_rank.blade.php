@layout('layouts/main')

@section('content')
  
<form  method="POST" action="student_rank.php">
  <fieldset>
    <legend> Ranking Status </legend>
    
      <div class="large-6 columns">
        Student <input type="text" name="thisrank"><br>
      </div>
     
       <div class="large-6 columns">
       <input class="nice blue radius button rank_submit"type="Submit" value="Submit">
      </div>
  </fieldset>
</form>
@endsection


  


