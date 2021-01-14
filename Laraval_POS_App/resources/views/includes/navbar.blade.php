   <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">

            <div class="container">

                <a href="#" data-toggle="modal" data-target="#sidebarModal" class="btn btn-outline rounded-pill">
                    <li class="fa fa-list"></li>
                </a>

                <a href="#" class="btn btn-outline rounded-pill">
                    <li class="fa fa-list"></li> Home
                </a>

                <a href="#" class="btn btn-outline rounded-pill">
                    <li class="fa fa-list"></li> User
                </a>

                <a href="#" class="btn btn-outline rounded-pill">
                    <li class="fa fa-list"></li> Product
                </a>

                <a href="#" class="btn btn-outline rounded-pill">
                    <li class="fa fa-list"></li> Cashier
                </a>

                <a href="#" class="btn btn-outline rounded-pill">
                    <li class="fa fa-list"></li> Report
                </a>

                <a href="#" class="btn btn-outline rounded-pill">
                    <li class="fa fa-list"></li> Transactions
                </a>

                <a href="#" class="btn btn-outline rounded-pill">
                    <li class="fa fa-list"></li> Suppliers
                </a>

                <a href="#" class="btn btn-outline rounded-pill">
                    <li class="fa fa-list"></li> Customers
                </a>

                <a href="#" class="btn btn-outline rounded-pill">
                    <li class="fa fa-list"></li> Incoming
                </a>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

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

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Navbar -->

<style>
    .btn-outline{
        border-color: #0072B5;
        color: #0072B5;
    }
    .btn-outline:hover{
        background-color: #0072B5;
        color: #fff;
    }
</style>
