<!DOCTYPE html>
<html>

  <head>
    <title>Your Account</title>
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
              <a href="/index.php/account/professor">Account</a>
              <ul class="dropdown">
                <li>
                  <a href="/index.php/account/student_edit">Edit Account</a>
                </li>
                <li class="divider"></li>
                <li>
                  <a href="/index.php/special/request_sp">Request Special Perm Number</a>
                </li>
              </ul>
            </li>
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


