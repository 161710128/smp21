<header class="header">
    <nav class="navbar navbar-expand-lg navbar-light navbar-static-top" role="navigation">
        <a href="index-2.html" class="logo navbar-brand mr-0">
            <!-- Add the class icon to your logo image or logo icon to add the margining -->
            <img src="{{ asset ('clean/img/logo_blue.png')}}" alt="logo"/>
        </a>
        <!-- Header Navbar: style can be found in header-->
        <!-- Sidebar toggle button-->
        <!-- Sidebar toggle button-->
        <div>
            <a href="javascript:void(0)" class="navbar-btn mr-sm-auto sidebar-toggle" data-toggle="offcanvas" role="button"> <i
                    class="fa fa-fw fa-bars"></i>
            </a>
        </div>
        <div class="navbar-right ml-auto">
            <ul class="nav navbar-nav">
                <li class="dropdown notifications-menu  nav-item dropdown" >
                    <a href="javascript:void(0)" class="dropdown-toggle nav-link dropdown-toggle" data-toggle="dropdown" id="navbarDropdown"> <i
                            class="fa  fa-fw fa-bell-o black"></i>
                        <span class="badge badge-danger">3</span>
                    </a>
                    <ul class="dropdown-menu dropdown-notifications table-striped" aria-labelledby="navbarDropdown">
                        <li>
                            <a href="#" class="notification dropdown-item striped-col">
                                <img class="notif-image rounded-circle" src="{{ asset ('clean/img/authors/avatar7.jpg')}}" alt="avatar-image">
                                <div class="notif-body"><strong>Anderson</strong> shared post from
                                    <strong>Ipsum</strong>.
                                    <br>
                                    <small>Just Now</small>
                                </div>
                                <span class="badge badge-success label-mini msg-lable">New</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="notification dropdown-item">
                                <img class="notif-image rounded-circle" src="{{ asset ('clean/img/authors/avatar6.jpg')}}" alt="avatar-image">
                                <div class="notif-body"><strong>Williams</strong> liked <strong>Lorem Ipsum</strong>
                                    typesetting.
                                    <br>
                                    <small>5 minutes ago</small>
                                </div>
                                <span class="badge badge-success label-mini msg-lable">New</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="notification striped-col dropdown-item">
                                <img class="notif-image rounded-circle" src="{{ asset ('clean/img/authors/avatar5.jpg')}}" alt="avatar-image">
                                <div class="notif-body">
                                    <strong>Robinson</strong> started follwing <strong>Trac Theme</strong>.
                                    <br>
                                    <small>14/10/2014 1:31 pm</small>
                                </div>
                                <span class="badge badge-success label-mini msg-lable">New</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="notification dropdown-item">
                                <img class="notif-image rounded-circle" src="{{ asset ('clean/img/authors/avatar1.jpg')}}" alt="avatar-image">
                                <div class="notif-body">
                                    <strong>Franklin</strong> Liked <strong>Trending Designs</strong> Post.
                                    <br>
                                    <small>5 days ago</small>
                                </div>
                            </a>
                        </li>
                        <li class="dropdown-footer"><a href="javascript:void(0)">View All messages</a></li>
                    </ul>
                </li>
                <!-- User Account: style can be found in dropdown-->
                <li class="dropdown user user-menu nav-item dropdown">
                    <a href="javascript:void(0)" class="dropdown-toggle padding-user nav-link dropdown-toggle" data-toggle="dropdown" id="userDropdown">
                        <img src="{{ asset ('clean/img/authors/user.jpg')}}" class="rounded-circle img-fluid pull-left" alt="User Image">

                        <div class="riot">
                            <span class="fa fa-sort-down caret"></span>
                        </div>

                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <!-- User name-->
                        <li class="user-name text-center">
                            <span>Jayson Wiley</span>
                        </li>
                        <!-- Menu Body -->
                        <li class="p-t-3">
                           <a href="user_profile.html" class="dropdown-item">
                                Profile<i class="fa fa-fw fa-user pull-right mt-1"></i>
                            </a>
                        </li>
                        <li>
                            <a href="edit_user.html" class="dropdown-item">
                                Settings <i class="fa fa-fw fa-cog pull-right  mt-1"></i>
                            </a>
                        </li>
                        <li>
                            <a href="lockscreen.html" class="dropdown-item">
                                Lock <i class="fa fa-fw fa-lock pull-right  mt-1"></i>
                            </a>
                        </li>
                        <li>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                         {{ __('Logout') }}
                     </a>
                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>