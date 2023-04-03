@extends('admin.layout.adminLayout')
@section('title','WalkThrough')
@section('content')

<div class="container-fluid p-0">
    <div class="row">
        <div class="col-12">
            <div class="page_title_box d-flex flex-wrap align-items-center justify-content-between">
                <div class="page_title_left">
                    <h3 class="f_s_25 f_w_700 dark_text">WalkThrough</h3>
                    <ol class="breadcrumb page_bradcam mb-0">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                        <li class="breadcrumb-item active">Walkthrough</li>
                    </ol>
                </div>
                <div class="page_title_right">
                    <div class="add_button ms-2">
                        <a href="" class="btn_1" data-bs-toggle="modal" data-bs-target="#walkthrgh_modl">Add WalkThrough User</a>
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
                            <h4>WalkThrough User list</h4>
                            <div class="box_right d-flex lms_block align-items-center">
                                <div class="dropdown client_drop me-3">
                                    <!-- <a class="btn btn-secondary dropdown-toggle" href="#" role="button"
                                            id="dropdownMenuLink" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            <i class="fa fa-filter me-2" aria-hidden="true"></i>
                                            filter
                                        </a> -->

                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <li><a class="dropdown-item" href="#">Grflirt </a></li>
                                        <li><a class="dropdown-item" href="#">Cyflirt</a></li>
                                        <li><a class="dropdown-item" href="#">LoveSecret</a></li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                        <div class="table-responsive">
                            <div class="QA_table mb_30">
                                <table class="table lms_table_active" id="data">
                                    <?php $count = 1; ?>
                                    <thead>
                                        <tr>
                                            <th scope="col">Sr No.</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">text</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($Walkth as $list)
                                        <tr>
                                            <th scope="row" style="padding-top: 18px;">
                                                 {{$count++}}
                                            </th>
                                            <!-- <td>{{$list['image']}}</td> -->
                                            <!-- <td><img src="{{asset('/var/www/html/kvs_rest_api/public/profileimage'.$list['image'])}}"></td> -->
                                            <td>
                                                <img src="{{asset('https://production.promaticstechnologies.com/kvs_rest_apis/public/walkthrough/'.@$list['image'])}}" alt="image" width="150px" height="100px">
                                            </td>
                                            <td>{{$list['text']}}</td>


                                            <!-- <td>
                                                    <div class="sats_clints">
                                                        <img src="img/mini_logo.png" alt="">
                                                    </div>
                                                </td> -->
                                            <td>
                                                <div class="action_btns d-flex justify-content-center">
                                                    <a href="{{url('/view_walkthrough/'.base64_encode($list['id']))}}" class="action_btn mr_10"> <i class="far fa-eye"></i> </a>
                                                    <a href="{{url('/edit_walkthrough/'.base64_encode($list['id']))}}" class="action_btn mr_10"> <i class="far fa-edit"></i> </a>
                                                    <a href="{{url('/delete_walkthrough/'.base64_encode($list['id']))}}" class="action_btn"> <i class="fas fa-trash"></i> </a>

                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            {!! $Walkth->links() !!}
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

<!-- -----------Modal----------------->
<div class="modal fade view_faq_Modal" id="walkthrgh_modl" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">Add Walkthrough</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form action="{{url('/walkthrough/insert')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="div_question">
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Image</label>
                        <input class="form-control" type="file" id="formFile" name="image">
                        <div class="wlkthrgh_img image-container mt-2">
                            <img src="https://1fid.com/wp-content/uploads/2022/06/tiktok-profile-picture-2-1024x1024.jpg" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="Enter description" name="text">
                        </textarea>
                    </div>
                </div>
            
            </div>
            <div class="modal-footer justify-content-center mb-3">
                <button type="button" class="btn_1 Outline_btnnn" data-bs-dismiss="modal">Close</button>
                <!-- <button type="button" class="btn_1">Save</button> -->
                <a class="btn_1"><input type="submit" class="btn_1"></a> 
            </div>
            </form>
        </div>
    </div>
</div>