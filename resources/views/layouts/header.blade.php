div.row
<nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name') }}
                </a>
            </div>
            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    &nbsp;
                </ul>
                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                   <li  class="dropdown" ><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" >Learn To Code  <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            @if(!empty($progLaguages))
                                @foreach($progLaguages as $laguage )
                                  <li>
                                   <a href="{{ url('/') }}/{{$laguage['slug']}}">{{$laguage['language']}}</a>
                                    <ul class="dropdown-menu" >
                                        @foreach($laguage['framework'] as $framework)
                                           @if($framework['framework_slug'] != '' )
                                             <li>{{$framework['framework_name']}}</li> 
                                           @endif
                                       @endforeach
                                    </ul>
                                  </li>
                               @endforeach
                            @endif
                        </ul>
                   </li>
                   <li><a href="{{ url('/portfolio') }}">Portfolio</a></li>
                   <li><a href="{{ url('/register') }}">Blog</a></li>
                   <li><a href="{{ url('/aboutus') }}">About</a></li>
                   <li><a href="{{ url('/register') }}">Contact</a></li>
                   <li><a href="{{ url('/login') }}">Login</a></li>
                   <li><a href="{{ url('/register') }}">Register</a></li>
               </ul>
            </div>
       </div>
</nav>