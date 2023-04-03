@extends('admin.layout.adminLayout')
@section('title','Non-Business')
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
                        <h3 class="f_s_25 f_w_700 dark_text">Non-Business</h3>
                        <ol class="breadcrumb page_bradcam mb-0">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                            <li class="breadcrumb-item active">Non-Business</li>
                        </ol>
                    </div>
                    <div class="page_title_right">
                        <div class="add_button ms-2">
                            <a href="{{url('/addnonbusiness')}}" class="btn_1">Add Non-Business User</a>
                            <a href="{{url('/nonbusiness/exportcsv')}}" class="btn_1">Downloadcsv</a>
                           <a href="{{url('/nonbusiness/exportexcel')}}" class="btn_1">Downloadexcel</a>
                        </div>
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
                                <h4>Non-Business User List</h4>
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
                                        <form action="{{url('/search-nonbusiness')}}" method="post">
                                                @csrf
                                                <div class="search_field">
                                                    <input type="search" class="form-control" placeholder="Search content here..." name="search">
                                                </div>
                                                <button type="submit"><i class="ti-search"></i> </button>
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
                                                <th scope="col">Sr No.</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">User Name</th>
                                                <th scope="col">Email Id</th>
                                                <th scope="col">Contact Number</th>
                                                <th scope="col">DOB</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($non_business as $list)
                                            <tr>
                                            <th scope="row" style="padding-top: 18px;">
                                                    <input type="radio" class="radio"> {{$count++}}
                                                </th>
                                                <td>{{$list['name']}}</td>
                                                <td>{{$list['username']}}</td>
                                                <td>{{$list['email']}}</td>
                                                <td>{{$list['phone_no']}}</td>
                                                <td>{{$list['dob']}}</td>
                                                
                                                <td>
                                                    <div class="action_btns d-flex justify-content-center">
                                                        <a href="{{url('/view-nonbusiness/'.base64_encode($list['id']))}}" class="action_btn mr_10"> <i
                                                                class="far fa-eye"></i> </a>
                                                        <a href="{{url('/edit-nonbusiness/'.base64_encode($list['id']))}}" class="action_btn mr_10"> <i
                                                                class="far fa-edit"></i> </a>
                                                        <a href="{{url('/delete-nonbusiness/'.base64_encode($list['id']))}}" class="action_btn"> <i
                                                                class="fas fa-trash"></i> </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center arws">
                                        {!! $non_business->links() !!}
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
