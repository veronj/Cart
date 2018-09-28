<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <a class="navbar-brand" href="#">My site</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><i class="fas fa-cart-arrow-down"></i> Cart </a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">User management <span class="caret"></span></a>
          <ul class="dropdown-menu">
          @if(Auth::check())
          <li><a class="dropdown-item" href="{{ route('user.profile') }}">Profile</a></li>
          <li role="separator" class="divider"></li>
          <li><a class="dropdown-item" href="{{ route('user.logout') }}">Logout</a></li>
          @else
          <li><a class="dropdown-item" href="{{ route('user.signup') }}">Sign Up</a></li>
          <li><a class="dropdown-item" href="{{ route('user.signin') }}">Sign In</a></li>
          @endif
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>