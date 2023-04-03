<nav class="sidebar">
    <div class="logo d-flex justify-content-center">
        <a class="large_logo me-3" href="{{url('/dashboard')}}">
            <img src="../public/admin/common/img/logokvsselect 1.png" style="width: 80px;" alt="">
        </a>
        <div class="sidebar_close_icon d-lg-none">
            <i class="ti-close"></i>
        </div>
    </div>

    <ul id="sidebar_menu">

                <li>
                    <a href="{{url('/dashboard')}}" aria-expanded="false">
                        <div class="nav_icon_small">
                            <i class="ti-desktop"></i>

                        </div>
                        <div class="nav_title">
                            <span>Dashboard</span>
                        </div>
                    </a>
                </li>
                <li class="">
                    <a class="has-arrow" aria-expanded="false">
                        <div class="nav_icon_small">
                            <i class="ti-user"></i>
                            <!-- <img src="img/menu-icon/6.svg" alt=""> -->
                        </div>
                        <div class="nav_title">
                            <span>User Management</span>
                        </div>
                    </a>

                    <ul>
                        <li><a href="{{url('/business/manage')}}">Business User</a></li>
                        <li><a href="{{url('/nonbusiness/manage')}}">Non Business User</a></li>
                        <li><a href="{{url('/businesscategory')}}">Business Category</a></li>
                        <li><a href="{{url('/busines')}}">Business Enquiry</a></li>                        
                    </ul>
                </li>
                <li>
                    <a href="{{url('/posts/manage')}}" aria-expanded="false">
                        <div class="nav_icon_small">
                            <i class="ti-user"></i>
                            <!-- <img src="img/menu-icon/6.svg" alt=""> -->
                        </div>
                        <div class="nav_title">
                            <span>Posts Management</span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="{{url('/groupmanagement')}}" aria-expanded="false">
                        <div class="nav_icon_small">
                            <i class="ti-desktop"></i>

                        </div>
                        <div class="nav_title">
                            <span>Groups Management</span>
                        </div>
                    </a>
                </li>

                <li>
                    <a href="{{url('/reportreason')}}" aria-expanded="false">
                        <div class="nav_icon_small">
                            <i class="ti-desktop"></i>

                        </div>
                        <div class="nav_title">
                            <span>Report Reason</span>
                        </div>
                    </a>
                </li>
                <li>






                <li>
                    <a href="{{url('/businessrequirement')}}" aria-expanded="false">
                        <div class="nav_icon_small">
                            <i class="ti-desktop"></i>

                        </div>
                        <div class="nav_title">
                            <span>Business Requirement Management</span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="{{url('/rmanagement')}}" aria-expanded="false">
                        <div class="nav_icon_small">
                            <i class="ti-desktop"></i>

                        </div>
                        <div class="nav_title">
                            <span>Reports Management</span>
                        </div>
                    </a>
                </li>
                <li class="">
                    <a class="has-arrow" aria-expanded="false">
                        <div class="nav_icon_small">
                            <i class="ti-align-left"></i>
                        </div>
                        <div class="nav_title">
                            <span>General Management</span>
                        </div>
                    </a>

                    <ul>
                        <ul>
                                                    
                        <li><a href="{{url('/reportclient/manage')}}">Feed Management</a></li>
                        <li><a href="{{url('/activitynotification')}}">Notification</a></li>
                        </ul>

                    </ul>
                </li>
                
                <li class="">
                    <a class="has-arrow" aria-expanded="false">
                        <div class="nav_icon_small">
                            <i class="ti-align-left"></i>
                        </div>
                        <div class="nav_title">
                            <span>content Management</span>
                        </div>
                    </a>

                    <ul>
                        <li><a href="/kvsAdmin/aboutUS.php">About Us</a></li>
                        <!-- <li><a href="/kvsAdmin/contactUs.php">Contact Us</a></li> -->
                        <li><a href="{{url('/termsconditions')}}">Terms & Conditions</a></li>
                        <li><a href="{{url('/privacypolicy')}}">Privacy Policy</a></li>
                        <li><a href="/kvsAdmin/FAQ.php">FAQ</a></li>
                        <li><a href="{{url('/contactus')}}">Help & Support</a></li> 
                        <li><a href="{{url('/walkthrough')}}">Walkthrough</a></li>                    
                    </ul>
                </li>
                <li>
                    <a class="has-arrow" aria-expanded="false">
                        <div class="nav_icon_small">
                            <i class="ti-desktop"></i>

                        </div>
                        <div class="nav_title">
                            <span>Generate Reports</span>
                        </div>
                    </a>
                    <ul>
                        <li><a href="{{url('/user_list')}}">List Of Users</a></li>
                        <li><a href="{{url('/posts_list')}}">List Of Posts</a></li>
                        <li><a href="{{url('/req_list')}}">List Of Business Requirement</a></li>
                        <li><a href="{{url('/list_group')}}">List Of Groups</a></li>
                        <li><a href="">List of Reports</a></li>                       
                    </ul>
                </li>
    </ul>
</nav>



