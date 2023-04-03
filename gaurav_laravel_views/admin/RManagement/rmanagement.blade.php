@extends('admin.layout.adminLayout')
@section('title','Post Managment')
@section('content')
       
        <div class="main_content_iner ">
            <div class="container-fluid p-0">
                <div class="row">
                    <div class="col-12">
                        <div class="page_title_box d-flex flex-wrap align-items-center justify-content-between">
                            <div class="page_title_left">
                                <h3 class="f_s_25 f_w_700 dark_text">Reports Management</h3>
                                <ol class="breadcrumb page_bradcam mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                                    <li class="breadcrumb-item active">Reports Management</li>
                                </ol>
                            </div>
                            <!-- <div class="page_title_right">
                                <div class="add_button ms-2">
                                    <a href="/LoveSecretAdminLaravel/addNotification.php" class="btn_1">Add Notification</a>
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
                                    <div class="white_box_tittle">
                                        <!-- <h4>Moderator Panel List</h4> -->
                                        <!-- <div class="white_card_body typography position-relative">
                                            <input class="digits new_pickrs" id="minMaxExample" type="text"
                                                placeholder="29 Dec 2022">
                                            <div class="srch_box position-absolute">
                                                <i class="ti-search"></i>
                                            </div>
                                        </div> -->
                                        <div class="box_right d-flex lms_block align-items-center justify-content-end">
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
                                            <!-- <div class="serach_field_2">
                                                <div class="search_inner">
                                                    <form action="{{url('/search_rmanagement')}}" method="post">
                                                        @csrf
                                                        <div class="search_field">
                                                            <input type="search" placeholder="Search content here...">
                                                        </div>
                                                        <button type="submit"> <i class="ti-search"></i> </button>
                                                    </form>
                                                </div>
                                            </div> -->

                                        </div>
                                    </div>
                                    <div class="QA_table mb_30 table-responsive mt-3">

                                        <table class="table yuactive">
                                        <?php $count=1;?>
                                            <thead>
                                                <tr>
                                                    <th scope="col">Sr No.</th>
                                                    <th scope="col"> User_Id</th>
                                                    <th scope="col">Reported User_Id</th>
                                                    <th scope="col">Subject</th>
                                                    <th scope="col">Reason</th>
                                                    <th scope="col">Additional Comment</th>
                                                    <th scope="col">Date</th>
                                                    <th scope="col">Status</th>
                                                    <!-- <th scope="col">Website Logo</th> -->
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                        @foreach($rman as $list)

                                                <tr>
                                                    <th scope="row" style="padding-top: 18px;">
                                                        <input type="radio" class="radio"> {{$count++}}
                                                    </th>

                                                    <td>{{$list['userId']}}</td>
                                                    <td>{{$list['reportUserId']}}</td>
                                                    <td>
                                                        Subject
                                                    </td>
                                                    <td>{{$list['reason']}}</td>
                                                    <td>{{$list['AdditionalComments']}}</td>

                                                    <td>
                                                        02 Jan, 2023
                                                    </td>
                                                    <td>
                                                        <div class="form-check form-switch"
                                                            style="margin-bottom:0;display: flex;justify-content: center;align-items: center;">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="flexSwitchCheckDefault">
                                                        
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="action_btns d-flex justify-content-center">

                                                            <a href="{{url('/view_rmanagement/'.base64_encode($list['id']))}}" class="action_btn mr_10"> <i class="far fa-eye"></i> </a>
                                                            <a href="{{url('/delete_rmanagement/'.base64_encode($list['id']))}}" class="action_btn del_item"> <i class="fas fa-trash"></i> </a>

                                                        </div>
                                                    </td>
                                                </tr>
                                               
                                                </tr>
                                        @endforeach

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
        </div>
        
@stop
