<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>UG Music | Welcome</title>

    <!-- CSS -->
    {{ HTML::style('static/css/foundation.css') }}
    {{ HTML::style('static/css/styles.css') }}

    <!-- JS --> 
    {{ HTML::script('static/js/vendor/modernizr.js') }}

  </head>
  <body>
  <nav class="top-bar" data-topbar>
    <ul class="title-area">
      <li class="name">
        <h1><a href="#">UG Music</a></h1>
      </li>
       <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
      <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
    </ul>

    <section class="top-bar-section">
      <!-- Right Nav Section -->
      <ul class="right">
        @if(Auth::guest())
          <li class=""><a href="register">Register</a></li>
          <li class=""><a href="login">Login</a></li>
        @else
           <li class=""><a href="logout">Logout</a></li> 
        @endif   
      </ul>

      <!-- Left Nav Section 
      <ul class="left">
        <li><a href="#">Left Nav Button</a></li>
      </ul>-->
    </section>
  </nav>

  @yield('content')
    
    
    {{ HTML::script('static/js/vendor/jquery.js') }}
    {{ HTML::script('static/js/foundation.min.js') }}
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
