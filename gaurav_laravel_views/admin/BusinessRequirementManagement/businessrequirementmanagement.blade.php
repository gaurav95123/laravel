
@extends('admin.layout.adminLayout')
@section('title','Business Requirement Management')
@section('content')
<style>
    .arws nav svg{
        width:35px;
    }
    </style>
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-12">
                <div class="page_title_box d-flex flex-wrap align-items-center justify-content-between">
                    <div class="page_title_left">
                        <h3 class="f_s_25 f_w_700 dark_text"> Business Requirement Management</h3>
                        <ol class="breadcrumb page_bradcam mb-0">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                            <li class="breadcrumb-item active">Business Requirement Management</li>
                        </ol>
                    </div>
                    <div class="page_title_right">
                        <div class="add_button ms-2">
                            <!-- <a href="{{url('/add_businessrequirement')}}" class="btn_1">Add Business Requirement Management</a> -->
                            <!-- <a href="{{url('/businessenquiry/exportcsv')}}" class="btn_1">Download CSV</a> -->
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
                            <div class="white_box_tittle list_header">
                                <h4>Business Requirement List</h4>
                                <div class="box_right d-flex lms_block align-items-center">
                                    <div class="dropdown client_drop me-3">
  
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <li><a class="dropdown-item" href="#">Grflirt </a></li>
                                            <li><a class="dropdown-item" href="#">Cyflirt</a></li>
                                            <li><a class="dropdown-item" href="#">LoveSecret</a></li>
                                        </ul>
                                    </div>
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
                            <div class="table-responsive">
                                <div class="QA_table mb_30">
                                    <table class="table lms_table_active" id="data">
                                    <?php $count=1;?>
                                        <thead>
                                            <tr>
                                            <th scope="col">SNo</th>
                                                    <th scope="col">Posted By</th>
                                                    <th scope="col">Business Details</th>
                                                    <th scope="col">Required</th>
                                                    <th scope="col">Image Optional</th>
                                                    <th scope="col">Business E-mail</th>
                                                    <th scope="col">Business Category</th>
                                                    <th scope="col">Comments</th>
                                                    <th scope="col">Location Detailes</th>
                                                    <th scope="col">Contact Us</th>
                                                    <th scope="col">Assign</th>
                                                    <!-- <th scope="col">Image</th> -->
                                                    <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>  
                                        @foreach($businesreq as $list)
                                            <tr>
                                                <th scope="row" style="padding-top: 18px;">
                                                    <input type="radio" class="radio"> {{$count++}}
                                                </th>
                                                <td>{{@$list['user_details']['username']}}</td>
                                                <td>{{@$list['user_details']['businessname']}}</td>
                                                <td>{{$list['Required_goods']}}</td>
                                                <td><img src = "{{$list['BusinessRequirment_image']}}" width="150px" height="150px"></td>
                                                <td>{{@$list['user_details']['email']}}</td>
                                                <td>{{$list['business_category']}}</td>
                                                <td> {{$list['total_comments']}}</td>
                                                <td>{{$list['country']}}</td>
                                                <td>{{@$list['user_details']['phone_no']}}</td>
                                                <td>{{$list['assigned_user']}}</td>                                                
                                                <td>
                                                    <div>
                                                            <a href="{{url('/view_businessrequirement/'.base64_encode($list['id']))}}" class="action_btn mr_10"> <i class="far fa-eye"></i> </a>
                                                            <!-- <a href="{{url('/edit_businessrequirement/'.base64_encode($list['id']))}}" class="action_btn mr_10"> <i class="far fa-edit"></i> </a> -->
                                                            <a href="{{url('/delete_businessrequirement/'.base64_encode($list['id']))}}" class="action_btn"> <i class="fas fa-trash"></i> </a>
                                                        </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                                    <div class="d-flex justify-center arws">
                                    {!! $businesreqid->links() !!}
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

