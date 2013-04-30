<!DOCTYPE html>
<html>

  <head>
    <title>Professor Settings</title>
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
            <li><a href="/index.php/special/addcourses">Add Courses</a></li>
            <li class="divider"></li>
            <li><a href="/index.php/special/profcourses">View Courses</a></li>
            <li class="divider"></li>
          </ul>

          @if (Auth::check())
          <ul class="right">
            <li class="divider hide-for-small"></li>
            <li><a href="#">{{ Auth::user()->net_id }}</a></li>
            <li><a href="/index.php/account/logout">Logout</a></li>
          </ul>
          @endif
        </section>
      
      </nav>

      @yield('content')
    </div>
  </body>
</html>
