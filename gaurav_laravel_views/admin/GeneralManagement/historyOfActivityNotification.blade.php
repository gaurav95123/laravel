@extends('admin.layout.adminLayout')
@section('title','UserManagement')
@section('content')

    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-12">
                <div class="page_title_box d-flex flex-wrap align-items-center justify-content-between">
                    <div class="page_title_left">
                        <h3 class="f_s_25 f_w_700 dark_text">History of Activity Notification</h3>
                        <ol class="breadcrumb page_bradcam mb-0">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                            <li class="breadcrumb-item active">History of Activity Notification</li>
                        </ol>
                    </div>
                    <!-- <div class="page_title_right">
                        <div class="add_button ms-2">
                            <a href="addHistoryOfActivityNotification.php" class="btn_1">Add History of Activity Notification</a>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="white_card card_height_100 mb_30">
                    <div class="white_card_header">
                        <div class="box_header m-0">
                        </div>
                    </div>
                    <div class="white_card_body">
                        <div class="QA_section">
                            <div class="white_box_tittle list_header justify-content-end">
                                <!-- <h4>Moderator Panel List</h4> -->
                                <div class="box_right d-flex lms_block d-flex align-items-center">
                                    <!-- <div class="dropdown client_drop me-3">
                                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button"
                                            id="dropdownMenuLink" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            <i class="fa fa-filter me-2" aria-hidden="true"></i>
                                            filter
                                        </a>

                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <li><a class="dropdown-item" href="#">Grflirt </a></li>
                                            <li><a class="dropdown-item" href="#">Cyflirt</a></li>
                                            <li><a class="dropdown-item" href="#">LoveSecret</a></li>
                                        </ul>
                                    </div> -->
                                    <div class="serach_field_2">
                                        <div class="search_inner">
                                            <form Active="#">
                                                <div class="search_field">
                                                    <input type="text" placeholder="Search content here...">
                                                </div>
                                                <button type="submit"> <i class="ti-search"></i> </button>
                                            </form>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="QA_table mb_30 table-responsive">

                                <table class="table yuactive">
                                    <thead>
                                        <tr>
                                            <th scope="col">Sr No.</th>
                                            <th scope="col">User Image</th>
                                            <th scope="col">User Name</th>
                                            <th scope="col">Message</th>
                                            <th scope="col">Time</th>
                                            <th scope="col">Date</th>
                                            <!-- <th scope="col">Website Logo</th> -->
                                            <!-- <th scope="col">Status</th> -->
                                            <!-- <th scope="col">Action</th> -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">
                                                1
                                            </th>
                                            <td>
                                                <div class="div_imgs_user">
                                                    <img src="img/profilebox/8.jpg" alt="">
                                                </div>
                                            </td>
                                            <td>Jospeph Jones</td>
                                            <td>
                                                <div class="crets_decor" style="margin: auto;">
                                                    Naren Challepha sent you request
                                                </div>
                                            </td>
                                            <td>07:00 PM</td>
                                            <td>29 Dec 2022</td>
                                            <!-- <td>
                                                <div class="sats_clints">
                                                    <img src="img/main-logo.png" alt="">
                                                </div>
                                            </td> -->
                                            <!-- <td><a href="data_table.html#" class="status_btn">Active</a></td> -->
                                            <!-- <td>
                                                <div class="action_btns d-flex justify-content-center">
                                                    <a href="/LoveSecretAdminLaravel/viewNotification.php" class="action_btn mr_10"> <i
                                                            class="far fa-eye"></i> </a>
                                                    <a href="#" class="action_btn"> <i class="fas fa-trash"></i>
                                                    </a>
                                                </div>
                                            </td> -->
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
            </div>
        </div>
    </div>

@stop