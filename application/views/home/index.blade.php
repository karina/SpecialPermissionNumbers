<html>

  <head>
    <title>Special Permission Numbers</title>
    <link rel="stylesheet" href="../css/foundation.min.css">
    <link rel="stylesheet" href="../css/app.css">
  </head>

  <body>
    <div class="row">
      <h1 class="welcome">Welcome!</h1>
    </div>

    <div class="row">
      <div class="large-6 columns">
      </div>
      <div class="large-6 columns">
        <a href="{{URL::to('account/professor')}}" class="medium button account">Create A Professor Account</a>
      </div>  
      <div class="large-6 columns">
        <a href="{{URL::to('account/student')}}" class="medium button account">Create A Student Account</a>
      </div>  
    </div>

    <div class="row">
      <a href="{{URL::to('account/login')}}" class="large button login ">Log In</a>
    </div>

  </body>

</html>
