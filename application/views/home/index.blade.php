
<html>
  <head>
    <title>Special Permission Numbers</title>
    <link rel="stylesheet" href="../css/foundation.min.css">
    <link rel="stylesheet" href="../css/app.css">
  </head>

  <body>
    <?php $status = Session::get('status'); ?>

    <div class="header">
      <img border="0" src="../img/globe.png" alt="OCRS_header" width="650" height="148">
    </div>

    <div class="row">
      <h4 class="welcome">Welcome to the online registration system</h4>
      
      <p class="create_directions"> To Create an account follow the links below </p>
      @if ($status)
        <h3>{{ $status }}</h3>
      @endif
    </div>
  <div class="Buttons">
    <div class="row">
      <div class="large-6 columns">
      </div>
  <div class="profpic">
    <img border="0" src="../img/professors.png" alt="prof_pic" width="150" height="150">
  </div> 
  
   <div class="Create_Prof_button">
      
      <div class="large-6 columns">
        <a href="{{URL::to('account/professor')}}" class="medium button account">Create A Professor Account</a>
      </div>  
    </div>
  
    <div class="Create_Student_button">
      <div class="large-6 columns">
        <a href="{{URL::to('account/student')}}" class="medium button account">Create A Student Account</a>
      </div>  
    </div>
    </div>
    
    <p class="login_directions"> To login to an account follow the link below </p>
    <div class="row">
      <a href="{{URL::to('account/login')}}" class="large button login ">Log In</a>
    </div>
  </div>
  </body>

</html>
