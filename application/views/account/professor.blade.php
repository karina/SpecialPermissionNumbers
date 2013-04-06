@layout('layouts/main')

@section('content')
  <form method="POST" action="/index.php/account/professor">
    <fieldset>
      <legend>Create a Professor Account</legend> 

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
          <input type="text" name="email">
        </div>
        <div class="large-6 columns">
         <label>Password Confirmation</label>
         <input type="text" name="password_confirmation">
        </div>
      </div>

      <div class="row">
        <div class="large-6 columns">
          <input class="nice blue radius button prof_submit" type="submit" value="Submit">
        </div>
      </div>

    </fieldset>
  </form>

