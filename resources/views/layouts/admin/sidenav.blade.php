<nav class="fixed-top align-top" id="sidebar-wrapper" role="navigation">
<div class="simplebar-content" style="padding: 0px;">
{{--    <a class="sidebar-brand" href="{{ route('admin.dashboard') }}"><span class="align-middle"> Dashboard </span></a>--}}
        <ul class="navbar-nav align-self-stretch">
            <li class="has-sub">
                <a class="nav-link collapsed text-left" href="#collapseExample2" role="button" data-toggle="collapse" ><i class="flaticon-user"></i>  <i class = "fa fa-users"></i> Manage</a>
                <div class="collapse menu mega-dropdown" id="collapseExample2">
                    <div class="dropmenu" aria-labelledby="navbarDropdown">
                        <div class="container-fluid ">
                            <div class="row">
                                <div class="col-lg-12 px-2">
                                    <div class="submenu-box">
                                        <ul class="list-unstyled m-0">
                                            <li><a href="{{ route('racks') }}"><i class = "fa fa-user"></i> &nbsp;Racks</a></li>
                                            <li><a href="{{ route('books') }}"><i class = "fa fa-user"></i> &nbsp;Books</a></li>
                                            <li><a href="{{ route('add_book') }}"><i class = "fa fa-user"></i> &nbsp;add new book</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <!--End section -->

{{--            <li class="has-sub">--}}
{{--                <a href="{{ route('admin.categories.index') }}" class="nav-link text-left active"  role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-list"></i>  Categories </a>--}}

{{--                <ul class="nav-pills nav-stacked" style="list-style-type:none; margin-left: -20px;">--}}
{{--                    <li><a href="{{ route('admin.categories.index') }}"><i class = "fa fa-list"></i>&emsp;Manage Categories</a></li>--}}
{{--                    <li><a href="{{ route('admin.categories.create') }}"><i class = "fa fa-plus"></i>&emsp;Add New</a></li>--}}
{{--                </ul>--}}
{{--            </li>--}}
{{--            <li class="">--}}
{{--                <a href = "{{ route('admin.subcategories.index') }}" class="nav-link text-left active"  role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-list"></i>  Subcategories </a>--}}
{{--                <ul class="nav-pills nav-stacked" style="list-style-type:none; margin-left: -20px;">--}}
{{--                    <li><a href="{{ route('admin.subcategories.index') }}"><i class = "fa fa-list"></i>&emsp;Manage Subcategories</a></li>--}}
{{--                    <li><a href="{{ route('admin.subcategories.create') }}"><i class = "fa fa-plus"></i>&emsp;Add New</a></li>--}}
{{--                </ul>--}}
{{--            </li>--}}



            <!-- Start Section -->
            <!-- <li class="has-sub">
                <a class="nav-link collapsed text-left" href="#collapseExample3" role="button" data-toggle="collapse" ><i class="flaticon-user"></i>   Investigations</a>
                <div class="collapse menu mega-dropdown" id="collapseExample3">
                    <div class="dropmenu" aria-labelledby="navbarDropdown">
                        <div class="container-fluid ">
                            <div class="row">
                                <div class="col-lg-12 px-2">
                                    <div class="submenu-box">
                                        <ul class="list-unstyled m-0">
                                            <li><a href="">Pending Investigations</a></li>
                                            <li><a href="">Active Investigations</a></li>
                                            <li><a href="">Completed Investigations</a></li>
                                            <li><a href="">Cancelled Investigations</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li> -->
            <!--End section -->
        </ul>
    </div>
</nav>
