@layout('layouts/main')

@section('content')
  <form method="POST" action="/index.php/account/student">
    <fieldset>
      <legend>Create a Student Account</legend> 

      <div class="row">
        <div class="large-6 columns">
          <label>NetID</label>
          <input type="text" name="netid">
        </div>
        <div class="large-6 columns">
          <label>Password</label>
          <input type="text" name="password">
        </div>
      </div>

      <div class="row">
        <div class="large-6 columns">
          <label>Email Address</label>
          <input type="text" name="email_addr">
        </div>
        <div class="large-6 columns">
          <label>Password Confirmation</label>
          <input type="text" name="password_confirmation">
         </div>
      </div>

      <div class="row">
        <div class="large-6 columns">
          <label>RUID</label>
          <input type="text" name="ruid">
        </div>
        <div class="large-6 columns">
          <label>Major</label>
          <input type="text" name="major">
        </div>
      </div>

      <div class="row">
        <div class="large-4 columns">
          <label>GPA</label>
          <input type="text" name="gpa">
        </div>
        <div class="large-4 columns">
          <label>Credits</label>
          <input type="text" name="credits">
        </div>
        <div class="large-4 columns">
          <label>Graduation Year</label>
          <input type="text" name="grad_year">
        </div>
      </div>

      <div class="row">
        <div class="large-2 columns">
          <input class="nice blue radius button student_submit" type="submit" value="Submit">
        </div>
        <div class="large-2 columns">
          <input class="nice blue radius button student_reset" type="reset">
        </div>
      </div>
    </fieldset>
  </form>

