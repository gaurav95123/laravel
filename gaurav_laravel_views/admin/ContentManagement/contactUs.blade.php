@extends('admin.layout.adminLayout')
@section('title','UserManagement')
@section('content')
<style>
    .arws nav svg{
        width:35px;
    }
</style>
<div class="container-fluid p-0 ">
    <div class="row">
        <div class="col-12">
            <div class="page_title_box d-flex flex-wrap align-items-center justify-content-between">
                <div class="page_title_left">
                    <h3 class="f_s_25 f_w_700 dark_text">Contact Us</h3>
                    <ol class="breadcrumb page_bradcam mb-0">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                        <li class="breadcrumb-item active">Contact Us</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="white_card card_height_100 mb_30">
                <div class="white_card_header">
                    <div class="box_header m-0"></div>
                </div>
                <div class="white_card_body">
                    <div class="QA_section">
                        <div class="white_box_tittle list_header">
                            <h4>List</h4>
                            <div class="box_right d-flex lms_block align-items-center">
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
                                        <form action="{{url('/search-contactus')}}" class="position-relative">
                                            @csrf
                                            <div class="search_field">
                                                <input type="search" placeholder="Search content here...">
                                            </div>
                                            <button type="submit"> <i class="ti-search" value="send"></i> </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive mb_30">
                            <div class="QA_table mb_30">
                                <table class="table lms_table_active">
                                    <?php $count = 1; ?>
                                    <thead>
                                        <tr>
                                            <th scope="col">Sr No.</th>
                                            <th scope="col">Full Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Phone No.</th>
                                            <th scope="col">Subject</th>
                                            <th scope="col">Message</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($contact as $key => $list)
                                        <tr>
                                            <th scope="row">{{$count++}}</th>
                                            <td>{{$list['fullname']}}</td>
                                            <td>{{$list['email']}}</td>
                                            <td>{{$list['phone_no']}}</td>
                                            <td>
                                                {{$list['subject']}}
                                            </td>
                                            <td>
                                                {{$list['message']}}
                                            </td>

                                            <td>
                                                <div class="action_btns d-flex justify-content-center">
                                                    <a href="{{url('/viewcontactus')}}" class="action_btn mr_10"> <i class="far fa-eye"></i>
                                                    </a>
                                                    <a class="action_btn mr_10" data-bs-toggle="modal" data-bs-target="#Modal_faq_Reply"><i class="far fa-share-square"></i>
                                                    </a>
                                                    <a href="{{url('/delete/'.base64_encode($list['id']))}}" class="action_btn"> <i class="fas fa-trash"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>

                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center arws">
                            {!! $contact->links() !!}
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

<!-- -----------modal-faq-Edit----------------->
<div class="modal fade view_faq_Modal modal-center" id="Modal_faq_Reply" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">Reply</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="div_question">
                    <form action="{{url('/contactus')}}" method="post">
                        @csrf
                        <div class="mb-3">
                            <textarea class="form-control" id="exampleFormControlTextarea1" name="reply" rows="4"></textarea>
                        </div>
                </div>
            </div>
            <div class="modal-footer justify-content-center mb-3">
                <a href="{{url('/contactus')}}" class="btn_1 Outline_btnnn">Close</a>
                <a class="btn_1"><input type="submit" class="btn_1" value="send"></a>
                </form>
            </div>
        </div>
    </div>
</div>