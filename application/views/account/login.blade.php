@layout('layouts/main')

@section('content')
  @if (Session::has('login_errors'))
    <div data-alert class="alert-box">
      Incorrect login information. <a href="{{ URL::to('/') }}" class="alert-link">Create Account</a>
      <a href="#" class="close">&times;</a>
    </div>
  @endif

  <form method="POST" action="/index.php/account/login">
		<fieldset>
			<legend>Login</legend>

			<div class="row">
				<div class="large-6 columns"> 
					<label for="netid">NetID </label>
					<input type="text" name="netid">
				</div>
			</div>

			<div class="row">
				<div class="large-6 columns"> 
					<label for="passwd">Password </label>
					<input type="password" name="password">
				</div>

				<div class="small-3 columns">
					<input class="nice blue radius button prof_submit" type="submit" value="Login">
				</div>			

				<div class="small-3 columns">
					<input class="nice blue radius button prof_submit" type="reset">
				</div>			
			</div>

		</fieldset>
	</form>
@endsection
