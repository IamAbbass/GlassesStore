
<nav class="navbar navbar-inverse navbar-fixed-top ">
    <div class="container-fluid">
        <div class="navbar-header">
            <button class="navbar-toggle" data-toggle="collapse" data-target="#menu">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="/webapp" class="navbar-brand"><br/><br/><h2 style="margin-right:30px;">WebApp</h2></a>
        </div>
        <div class="collapse navbar-collapse" id="menu">
            <ul class="nav navbar-nav">
                <li class="active slide"><a href="/webapp"><span class="glyphicon glyphicon-home"></span> Home</a>
                    </li>
                
<li class="slide"><a href="Gallery.html"> Gallery</a></li>

@php
    $men=1;
    $women=2;
    $kids=3;
@endphp

                <li class="slide"><a href="/allglasses/{{$men}}"> Men</a></li>
                <li class="slide"><a href="/allglasses/{{$women}}"> Women</a></li>
                <li class="slide"><a href="/allglasses/{{$kids}}"> Kids</a></li>
                        
                        
                        
                   
                
                
                {{-- <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-shopping-bag"></span> Product <span class="caret"></span></a> 
                    <ul class="dropdown-menu" role="menu">
                        <li class="slide"><a href="Flexon Glasses.html">● flexon glasses</a></li>
                        <li class="slide"><a href="Burberry Glasses.html">● burberry glasses</a></li>
                        <li class="slide"><a href="Havana Glasses.html">● havana glasses</a></li>
                        <li class="slide"><a href="Parada Glasses.html">● parada glasses</a></li>
                        
                    </ul>
                </li> --}}
                
                <li class="slide"><a href="Feedback.html">Feed Back</a></li>
                
            </ul>
            <ul class="nav navbar-nav navbar-right">
                 
  @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
<br>
                                    <a href="/profile/{{Auth::User()->id}}">profile</a>

                               

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        <li class="slide"><a href="/MyOrder/{{Auth()->User()->id}}"><span class="glyphicon">&#xe116;</span> MyOrder</a></li>
                        @endguest



                
            </ul>
        </div>
    </div>
</nav>
<!--Navbar End-->
