@extends('admin.layout.adminLayout')
@section('title','Post Managment')
@section('content')

        <div class="main_content_iner ">
            <div class="container-fluid p-0">
                <div class="row">
                    <div class="col-12">
                        <div class="page_title_box d-flex flex-wrap align-items-center justify-content-between">
                            <div class="page_title_left">
                                <h3 class="f_s_25 f_w_700 dark_text">view Report Management</h3>
                                <ol class="breadcrumb page_bradcam mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                                    <!-- <li class="breadcrumb-item"><a href="reportUserManagement.php"></a> -->
                                    </li>
                                    <li class="breadcrumb-item active">View Report Management</li>
                                </ol>
                            </div>
                            <div class="page_title_right">
                                <div class="add_button ms-2">
                                    <!-- <a href="userAdd.php" class="btn_1">Add New User</a> -->
                                </div>
                            </div>
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
                                    <div class="QA_table mb_30">
                                        <div class="user-info-main mt-3">
                                            <ul>
                                                <li>
                                                    <div class="info-title">
                                                        <div class="info-title-sub">
                                                            <h6>User_Id</h6>
                                                        </div>
                                                        <div>
                                                            <p>: Josep Jones </p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="info-title">
                                                        <div class="info-title-sub">
                                                            <h6>Reported User_Id</h6>
                                                        </div>
                                                        <div>
                                                            <p>: Jabby Jones </p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="info-title">
                                                        <div class="info-title-sub">
                                                            <h6>Subject </h6>
                                                        </div>
                                                        <div>
                                                            <p>: lorem ipsum</p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="info-title">
                                                        <div class="info-title-sub">
                                                            <h6>Reason </h6>
                                                        </div>
                                                        <div>
                                                            <p>: Lorem ipsum, dolor sit amet consectetur adipisicing
                                                                elit. Quia neque maxime illo culpa consequuntur
                                                                nesciunt. </p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="info-title">
                                                        <div class="info-title-sub">
                                                            <h6>Additional Comments </h6>
                                                        </div>
                                                        <div>
                                                            <p>:flsfsf </p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="info-title">
                                                        <div class="info-title-sub">
                                                            <h6>Date </h6>
                                                        </div>
                                                        <div>
                                                            <p>: 02 Jan, 2023 </p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="info-title">
                                                        <div class="info-title-sub">
                                                            <h6>Status </h6>
                                                        </div>
                                                        <div>

                                                            <span class="status_btn bg-info">Reported</span>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="blck_bttn text-center mt-5">
                                            <button class="btn_1">Block User</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                    </div>
                </div>
            </div>
        </div>
@stop
