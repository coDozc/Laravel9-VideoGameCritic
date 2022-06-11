<style>
    .textlab {
        color: white;
        margin: 10px;
        margin-top: 15px;
    }
</style>

<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
            <li>
                <div class="user-img-div">
                    <img src="{{asset('assets')}}/assets/img/user.png" class="img-thumbnail" />

                    <div class="inner-text">
                        {{Auth::user()->name}}
                        <br />
                        <a class="nav-link" href="/logoutuser" style="color:white"><i class="fa fa-arrow-circle-down"></i>LOGOUT</a>
                    </div>
                </div>

            </li>

            <li class="active-menu">
                <a href="/admin"><i class="fa fa-home "></i>Dashboard</a>
            </li>

            <li class="active">
                <a href="#"><i class="fa fa-box-open"></i>Orders <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse in" style="">
                    <li>
                        <a href="invoice.html"><i class="fa fa-circle"></i>New Orders</a>
                    </li>
                    <li>
                        <a href="pricing.html"><i class="fa fa-circle"></i>Accepted Orders</a>
                    </li>
                    <li>
                        <a href="component.html"><i class="fa fa-circle"></i>Shipping Orders</a>
                    </li>
                    <li>
                        <a href="social.html"><i class="fa fa-circle"></i>Completed Orders</a>
                    </li>


                </ul>
            </li>
            <li class="active-menu">
                <a href="/admin/category"><i class="fa fa-braille "></i>Categories</a>
            </li>
            <li class="active-menu">
                <a href="/admin/game"><i class="fa fa-gamepad "></i>Game</a>
            </li>
            <li class="active-menu">
                <a href="/admin/comment"><i class="fa fa-comments "></i>Comment</a>
            </li>
            <li class="active-menu">
                <a href="/admin/faq"><i class="fa fa-question "></i>FAQ</a>
            </li>
            <li class="active-menu">
                <a href="{{route('admin.message.index')}}"><i class="fa fa-message "></i>Messages</a>
            </li>
            <li class="active-menu">
                <a href="/admin/users"><i class="fa fa-user"></i>Users</a>
            </li>
            <li class="active-menu">
                <a href="/admin/social"><i class="fa-solid fa-users text-green-50"></i>Social</a>
            </li>


            <li  class="textlab">LABELS</li>
            <li class="nav-item">
                <a href="/admin/setting" class="nav-link"><i class="fa fa-bars"></i>Settings</a>
            </li>
    </div>

</nav>
