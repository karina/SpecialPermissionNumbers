@layout('layouts/professor')
@section('content')

<script>
function add_more_text_box(parent_id, child_id)
{
  var myTable=document.getElementById(parent_id);
  var oDiv, oInput;
  oDiv = document.createElement('div');
  myTable.appendChild(oDiv);

  oInput = document.createElement('input');
  oInput.setAttribute('type', 'text');
  oInput.setAttribute('name', child_id);
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
 
    <div id="add_more_div">
        <label>Add Prerequisite </label>
         <div><input type="text" id="add_more" name="child_id" /></div>
    </div>
       <a href="javascript:;" onclick="return add_more_text_box('add_more_div',child());">Add Another Pre-req</a>
  </fieldset>

    <input class="nice blue radius button addprereq_submit" type="submit" value="submit">

</form> 

@endsection


















<!--citation: -http://www.tutorialsscripts.com/free-java-scripts/dom/html-element/create-dynamic-multiple/add-more-text-box.php-->
