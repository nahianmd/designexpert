
<!--=============================================== NAVBAR ===========================================-->

<nav class="navbar navbar-expand-lg site-header sticky-top d-flex justify-content-between align-items-center">

    <!-- Brand -->
    <a class="navbar-brand brand d-md-block d-lg-block d-xl-block d-sm-none d-none " href="/">
        Full Banger
    </a>

    <div class="nav-search">
        <div class="input-group search-field">
            <input type="text" class="form-control border-0" placeholder="Search" aria-label="Recipient's username" aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-outline-secondary border-0 bg-white" type="button"><i class="far fa-search"></i></button>
            </div>
        </div>
    </div>

    <!-- large Nav -->
    <ul class="navbar-nav d-none d-md-inline-flex d-sm-none d-lg-inline-flex d-xl-inline-flex flex-row right-nav align-items-center">

        <li class="nav-item">
            <a class="nav-link" href="#"><i class="far fa-home-alt"></i></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#"></i><span class=""><i class="far fa-comment"></i></span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#"></i><span class=""><i class="far fa-bell"></i></span></a>
        </li>

        <li class="nav-item dropdown">
            
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                <img src="/images/avatars/law.jpg" alt="" class="nav-avatar"> <span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                <a class="dropdown-item mb-3" href="">
                    <i class="fal fa-user-circle mr-3"></i> Profile
                </a>

                <a class="dropdown-item mb-3" href="">
                    <i class="fal fa-cog mr-3"></i> Settings & Privacy
                </a>

                <a class="dropdown-item mb-3" href="">
                    <i class="fal fa-question-circle mr-3"></i> Help & Support
                </a>

                <div class="dropdown-divider"></div>

                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    <i class="fal fa-sign-out-alt mr-3"></i> {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </li>
        
    </ul>
</nav>



