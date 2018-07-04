  <!--==========================
    Top Bar
  ============================-->
{{--   <section id="topbar" class="d-none d-lg-block">
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

  <section id="topbar" >
    <div class="container clearfix">
      <div class="contact-info float-left">
        @if(!Auth::user())
          <i class="fas fa-user"></i> <a href="{{route('register')}}">REGISTER</a>
          <i class="fas fa-sign-in-alt"></i><a href="{{route('login')}}">LOGIN</a>
        @else
          <i class="far fa-user"></i> <a href="#">{{Auth::user()->first_name}}</a>
          <i class="fas fa-sign-out-alt"></i><a href="{{route('logout')}}"  onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">LOGOUT</a></li>
              <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
        @endif
      </div>
      <div class="social-links float-right d-none d-lg-block">
        <a href="https://discordapp.com/invite/pPDQRVk" target="_blank" title="Join us on Discord"><i class="fab fa-discord"></i></a>
        <a href="https://steemit.com/@fiasteem" target="_blank" title="Follow us on Steemit">
          <span class="logo">
            <svg class="icon is-hoverable is-activeable is-transit" viewBox="0 0 40 40">
              <path class="logo__steemit" d="M32.7004951,11.3807248 C31.1310771,9.81140963 29.3043776,8.66313021 27.3619013,7.92312792 C28.4939405,4.59311764 32.5075339,3.38104493 32.5075339,3.38104493 C32.5075339,3.38104493 23.1424826,-1.48000457 12.7997611,0.459311764 C9.35218721,1.00793415 6.0461183,3.12587173 3.62767097,5.92001831 C-1.62087426,11.9803819 -0.926213868,21.1028239 5.18422484,26.3083572 C6.1233028,27.1121528 8.22014805,28.3625014 8.2587403,28.4262947 C6.8822836,31.9221676 2.48276772,32.8790671 2.48276772,32.8790671 C2.48276772,32.8790671 8.29733255,36.5152853 16.10583,37.4594261 C18.1769471,37.7145993 20.3767051,37.7783926 22.6536475,37.5359781 C26.2684544,37.2425289 29.8703972,35.3287299 32.6104465,32.6366526 C38.5407881,26.7931863 38.5922444,17.2752258 32.7004951,11.3807248 Z M30.0247661,30.3145765 C27.8121441,32.4835487 24.5060752,33.861484 21.9589871,34.0528639 C20.1580157,34.2314851 18.2284034,34.2570024 16.3759757,34.0273465 C13.6487905,33.6956214 11.680586,32.9428604 9.75097374,32.2156168 C10.7286439,31.271476 11.7063141,29.9700926 12.1051006,28.8473305 C12.3623823,28.1838802 12.3366541,27.4438779 12.0279162,26.7931863 C9.95679906,22.5317938 10.8572848,17.4283297 14.2662664,14.1110781 C16.73617,11.6996913 20.1322875,10.5641706 23.5798614,10.9852064 C26.1140854,11.2914142 28.416756,12.4014176 30.2177274,14.2003887 C34.5915151,18.5893678 34.4371461,26.014908 30.0247661,30.3145765 Z">
              </path>
            </svg>  
          </span>
        </a>
        {{-- <a href="#" class="twitter icon"><img src="{{url('/img/steemit.png')}}"></a> --}}
        {{-- <a href="#" class="facebook"><i class="fab fa-facebook"></i></a> --}}
   {{--      <a href="#" class="instagram"><i class="fab fa-instagram"></i></a>
        <a href="#" class="google-plus"><i class="fab fa-google-plus"></i></a>
        <a href="#" class="linkedin"><i class="fab fa-linkedin"></i></a> --}}
      </div>
    </div>
  </section>

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
          <li class="menu-active"><a href="{{ route('deposit')}}">Deposit Steem/SBD</a></li>
          <li><a href="{{route('wallet')}}">WALLET</a></li>
          <li class="menu-has-children"><a href="">Help</a>
            <ul>
              <li><a href="#">F.A.Q</a></li>
              <li><a href="#">SUPPORT FORUM</a></li>
            </ul>
          </li>
      {{--     @if(!Auth::user())
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
          @endif --}}
        {{--   <li><a href="#team">Team</a></li>
          <li><a href="#contact">Contact</a></li> --}}
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->