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
                  <a href="/index.php/account/studentedit">Edit Account</a>
                </li>
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

      @yield('notifications')
          
      {{ Form::open() }}
        <fieldset>
          <legend>@yield('legend')</legend>

          @yield('fields')
          <div class="row">
            <div class="large-2 columns">
              <input class="nice blue radius button student_submit" type="submit" value="Submit">
            </div>
          
            <div class="large-2 columns">
              <input class="nice blue radius button student_reset" type="reset">
            </div>
          </div>
        </fieldset>
      {{ Form::close() }}  
    </div>
  </body>
</html>
