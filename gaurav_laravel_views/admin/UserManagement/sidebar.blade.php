<nav class="sidebar">
    <div class="logo d-flex justify-content-center">
        <a class="large_logo me-3" href="{{url('/dashboard')}}">
            <img src="../public/admin/common/img/logokvsselect 1.png" style="width: 80px;" alt="">
        </a>
        <!-- <a class="small_logo" href="index.html">Admin Panel</a> -->
        <div class="sidebar_close_icon d-lg-none">
            <i class="ti-close"></i>
        </div>
    </div>
    <ul id="sidebar_menu">
        <li class="">
         
            <a href="{{url('/dashboard')}}" aria-expanded="false">
                <div class="nav_icon_small">
                    <i class="ti-desktop"></i>

                </div>
                <div class="nav_title">
                    <span>Dashboard</span>
                </div>
            </a>
        </li>
     
        <!-- <li class="">
            <a href="clientManagement.php" aria-expanded="false">
                <div class="nav_icon_small">
                    <i class="ti-user"></i>
                </div>
                <div class="nav_title">
                    <span>
                        Client Management</span>
                </div>
            </a>
        </li>
        <li class="">
            <a href="/LoveSecretAdminLaravel/moderatorPanel.php" aria-expanded="false">
                <div class="nav_icon_small">
                    <i class="far fa-user-circle"></i>
                </div>
                <div class="nav_title">
                    <span>Moderator Management</span>
                </div>
            </a>
        </li>
        <li class="">
            <a href="fakeProfileManagement.php" aria-expanded="false">
                <div class="nav_icon_small">
                    <i class="far fa-id-badge"></i>
                </div>
                <div class="nav_title">
                    <span>Fake Profile Management</span>
                </div>
            </a>
        </li>
        <li class="">
            <a href="activityManagement.php" aria-expanded="false">
                <div class="nav_icon_small">
                    <i class="far fa-thumbs-up"></i>
                </div>
                <div class="nav_title">
                    <span>Activity Management</span>
                </div>
            </a>
        </li> -->
        <li class="">
            <a class="has-arrow" aria-expanded="false">
                <div class="nav_icon_small">
                     <i class="ti-user"></i>
                    <!-- <img src="img/menu-icon/6.svg" alt=""> -->
                </div>
                <div class="nav_title">
                    <span>User Management</span>
                    <!-- <span class="@if(@$page=='businessmanage') active @endif">
              <a href="{{url('/business/manage')}}" >
                <i class="fa fa-home"></i>
                <span class="link-title ">&nbsp;User Management</span>
              </a>
            </span> -->
                </div>
            </a>

            <ul>

            <li class="@if(@$page=='businessmanage') active @endif">
              <a href="{{url('/business/manage')}}" >
                <i class="fa fa-home"></i>
                <span class="link-title ">&nbsp;Business Management </span>
              </a>
            </li>

            <li class="@if(@$page=='dashboard') active @endif">
              <a href="{{url('/nonbusiness/manage')}}" >
                <i class="fa fa-home"></i>
                <span class="link-title">&nbsp;Non Business Management </span>
              </a>
            </li>

                <!-- <li><a href="{{url('/nonbusiness/manage')}}">Non Business Management</a></li> -->
                <!-- <li><a href="/LoveSecretAdminLaravel/reportUserManagement.php">Reported Client Management</a></li>
                <li><a href="historyOfActivityNotification.php">Activity Notification</a></li>
                <li><a href="blockedClientByClient(s).php">Blocked Client By Client(s)</a></li> -->
            </ul>
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
                <!-- <li><a href="/kvs/paymentManagement.php">Adjust Payment Packages</a></li> -->
                <li><a href="{{url('/reportclient/manage')}}">Reported Client Management</a></li>
                <li><a href="{{url('/activitynotification')}}">Activity Notification</a></li>
                <!-- <li><a href="/LoveSecretAdminLaravel/contactUs.php">Contact Us</a></li> -->
            </ul>
        </li>
        <li class="">
            <a class="has-arrow" aria-expanded="false">
                <div class="nav_icon_small">
                    <i class="ti-align-left"></i>
                </div>
                <div class="nav_title">
                    <span>Content Management</span>
                </div>
            </a>

            <ul>
                <li><a href="{{url('/termsconditions')}}">Terms & Conditions</a></li>
                <li><a href="{{url('/privacypolicy')}}">Privacy Policy</a></li>
                <!-- <li><a href="/LoveSecretAdminLaravel/FAQ.php">FAQ</a></li> -->
                <li><a href="{{url('/contactus')}}">Contact Us</a></li>
                <li><a href="{{url('/walkthrough')}}">Walkthrough</a></li>
            </ul>
        </li>
        <!-- <li class="">
         
         <a href="{{url('/walkthrough')}}" aria-expanded="false">
             <div class="nav_icon_small">
                 <i class="ti-desktop"></i>

             </div>
             <div class="nav_title">
                 <span>Walkthrough</span>
             </div>
         </a>
        </li> -->

        <li class="">
        <a href="{{url('/busines')}}" aria-expanded="false">
             <div class="nav_icon_small">
                 <i class="ti-desktop"></i>

             </div>
             <div class="nav_title">
                 <span>Business Enquiry</span>
             </div>
         </a>
        </li>


        <li class="">
        <a href="{{url('/businesscategory')}}" aria-expanded="false">
             <div class="nav_icon_small">
                 <i class="ti-desktop"></i>

             </div>
             <div class="nav_title">
                 <span>Business Category</span>
             </div>
         </a>
        </li>
        











        <!-- <li class="">
            <a href="reportsList.php" aria-expanded="false">
                <div class="nav_icon_small">
                    <i class="far fa-flag"></i>
                </div>
                <div class="nav_title">
                    <span>Report Management</span>
                </div>
            </a>
        </li> -->
        <!-- <li class="">
            <a class="has-arrow" aria-expanded="false">
                <div class="nav_icon_small">
                    <i class="far fa-address-card"></i>
                </div>
                <div class="nav_title">
                    <span>About Us</span>
                </div>
            </a>
            <ul>
                <li><a href="aboutUS.php">About Us Content</a></li>
                <li><a href="aboutHowItWorks.php">About How it Works</a></li>
            </ul>
        </li> -->
        <!-- <li class="">
            <a class="has-arrow" aria-expanded="false">
                <div class="nav_icon_small">
                    <i class="ti-home"></i>
                </div>
                <div class="nav_title">
                    <span>Home Management</span>
                </div>
            </a>
            <ul>
                <li><a href="homeManagement.php">Home Manage</a></li>
                <li><a href="homeSecondSection.php">Home Dating Better</a></li>
                <li><a href="homeHowItWorks.php">How It Works</a></li>
            </ul>
        </li> -->
        <!-- <h4 class="menu-text"><span>LAYOUT</span> <i class="fas fa-ellipsis-h"></i> </h4> -->
        <!-- <li class="">
            <a class="has-arrow" aria-expanded="false">
                <div class="nav_icon_small">
                    <img src="img/menu-icon/4.svg" alt="">
                </div>
                <div class="nav_title">
                    <span>Themes</span>
                </div>
            </a>
            <ul>
                <li><a href="dark_sidebar.html">Dark Sidebar</a></li>
                <li><a href="light_sidebar.html">light Sidebar</a></li>
            </ul>
        </li>  -->
    </ul>
</nav>