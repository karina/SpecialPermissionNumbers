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
            <li class="has-dropdown">
              <a href="/index.php/special/create_sp">Courses</a>
              <ul class="dropdown">
                <li><a href="/index.php/special/create_dp">Create Special Perm Number</a></li>
                <li><a href="/index.php/room/view">View Rooms</a></li>
                <li><a href="/index.php/room/add">Add Rooms</a></li>
              </ul>
             </li>
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
