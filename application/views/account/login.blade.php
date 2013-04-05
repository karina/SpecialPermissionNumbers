@layout('layouts/main')

@section('content')
	<form>
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
					<input class="nice blue radius button prof_submit" type="submit" value="Login" action="???">
				</div>			

				<div class="small-3 columns">
					<input class="nice blue radius button prof_submit" type="reset">
				</div>			
			</div>

		</fieldset>
	</form>
	
	<!-- link to home -->
	<div>
		<a href="WHERE DOES THIS GO??">Home</a>
	</div>