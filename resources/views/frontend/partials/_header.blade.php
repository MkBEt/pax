  <!--==========================
    Top Bar
  ============================-->
 {{--  <section id="topbar" class="d-none d-lg-block">
    <div class="container clearfix">
      <div class="contact-info float-left">
        <i class="fa fa-envelope-o"></i> <a href="mailto:contact@example.com">contact@example.com</a>
        <i class="fa fa-phone"></i> +1 5589 55488 55
      </div>
      <div class="social-links float-right">
        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
        <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
        <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
        <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
      </div>
    </div>
  </section> --}}

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <h1><a href="{{url('/')}}" class="scrollto">Fia<span>Steem</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#body"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#body">Buy Steem</a></li>
          <li><a href="#wallet">WALLET</a></li>
          <li class="menu-has-children"><a href="">Help</a>
            <ul>
              <li><a href="#">F.A.Q</a></li>
              <li><a href="#">SUPPORT FORUM</a></li>
            </ul>
          </li>
          @if(!Auth::user())
          <li><a href="{{route('login')}}">LOGIN</a></li>
          <li><a href="{{route('register')}}">CREATE ACCOUNT</a></li>
          @else
          <li class="menu-has-children"><a href="">{{Auth::user()->first_name}}</a>
          <ul>
              <li><a href="#">PROFILE</a></li>
              <li><a href="{{route('logout')}}"  onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">LOGOUT</a></li>
              <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
          </ul>
          @endif
        {{--   <li><a href="#team">Team</a></li>
          <li><a href="#contact">Contact</a></li> --}}
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->