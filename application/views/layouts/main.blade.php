<!DOCTYPE html>
<html>

  <head>
    <title>Special Permission Numbers</title>
    {{Asset::styles()}}
  </head>

  <body>
    <div class="container">
      
      <nav class="top-bar">
        <ul class="title-area">
          <li class="name">
            <h1><a href="/">Home</a></h1>
          </li>
        </ul>
        
        <section class="top-bar-section">
          <ul class="left">
            <li class="divider"></li>
            <li class="has-dropdown">
              <a href="/index.php/account/professor">Professor</a>
              <ul class="dropdown">
                  <li>
                   <a href="/index.php/special/create_sp">Create Special Permission</a>
                  <li>
              </ul>
            </li>
            <li class="divider"></li>
          </ul>
          <ul class="left">
            <li class="has-dropdown">
              <a href="/index.php/account/student">Student</a>
              <ul class="dropdown">
                <li>
                  <a href="/index.php/account/student/edit">Edit Account</a>
                </li>
                <li>
                  <a href="/index.php/special/request_sp">Request Special Permission</a>
                <li>
              </ul>
            </li>
            <li class="divider"></li>
          </ul>
        </section>
      
      </nav>
      
      @yield('content')
    
    </div>
  </body>
</html>
