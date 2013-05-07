@layout('layouts/professor')
@section('content')

<script>
function add_more_text_box(parent_id, child_name, child_id)
{
  var myTable=document.getElementById(parent_id);
  var oDiv, oInput;
  oDiv = document.createElement('div');
  oDiv.setAttribute('id', 'Name');
  myTable.appendChild(oDiv);

  oInput = document.createElement('input');
  oInput.setAttribute('type', 'text');
  oInput.setAttribute('name', child_name);
  oInput.setAttribute('id', child_id);
  oDiv.appendChild(oInput);
}
var child_id = 1;
function child()
{
  return child_id++;
}
</script>


 <form id="add_more" name="add_more" method="post" action="">
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
  </div> 
    <div id="add_more_div">
        <label>Add Prerequisite </label>
         <div><input type="text" id="add_more" name="add_more[]" ></div>
    </div>
       <a href="javascript:;" onclick="return add_more_text_box('add_more_div','add_more[]',child());">Add Another Pre-req</a>
  </fieldset>
</form> 

@endsection


















<!--citation: -http://www.tutorialsscripts.com/free-java-scripts/dom/html-element/create-dynamic-multiple/add-more-text-box.php-->
