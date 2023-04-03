@extends('admin.layout.adminLayout')
@section('title','GroupManagement')
@section('content')

    <style>
        .error{
            color:red;
            font-size:18px;
        }
    </style>

<div class="container-fluid p-0">
    <div class="row">
        <div class="col-12">
            <div class="page_title_box d-flex flex-wrap align-items-center justify-content-between">
                <div class="page_title_left">
                    <h3 class="f_s_25 f_w_700 dark_text">GroupManagement</h3>
                    <ol class="breadcrumb page_bradcam mb-0">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                        <li class="breadcrumb-item active">GroupManagement</li>
                    </ol>
                </div>
                <!-- <div class="page_title_right">
                        <div class="add_button ms-2">
                            <a href="{{url('/add_groupmanagement')}}" class="btn_1">Add Group</a>

                        </div>

                    </div> -->
                <div class="page_title_right">
                    <div class="add_button ms-2">
                        <a href="{{url('/add_groupmanagement')}}" class="btn_1" data-bs-toggle="modal" data-bs-target="#add-group">Add Group</a>
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
                            <h4>Group Management List</h4>
                            
                            <div class="box_right d-flex lms_block align-items-center">
                                <div class="serach_field_2">
                                    <div class="search_inner">
                                    <form action="{{url('/search_groupmanagement')}}" method="post">
                                                @csrf
                                                <div class="search_field">
                                                     <!-- <input type="text" placeholder="Search content here...">  -->
                                                     <input type="search" class="form-control" placeholder="Search content here..." name="search">
                                                </div>
                                            <button type="submit"><i class="ti-search"></i></button>
                                    </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <div class="QA_table mb_30">
                                <table class="table lms_table_active" id="data">
                                    <?php $count = 1; ?>
                                    <thead>
                                        <tr>

                                            <th scope="col">Name</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Members</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                   
                                        @foreach($post as $list)
                                        <tr>
                                            <th scope="row" style="padding-top: 18px;">
                                                <input type="radio" class="radio"> {{$count++}}
                                            </th>
                                         
                                            <td> <img src="{{@$list['group_img']['media_url']}}" width="150px" height="150px"></td>
                                            
                                            <td> {{$list['Description']}}</td>
                                            <td>{{$list['memberId']}}</td>
                                            <td>
                                                <div class="action_btns d-flex justify-content-center">
                                                    <a href="{{url('/view_groupmanagement/'.base64_encode($list['id']))}}" class="action_btn mr_10"> <i class="far fa-eye"></i> </a>
                                                    <a href="{{url('/delete_groupmanagement/'.base64_encode($list['id']))}}" class="action_btn del_item"> <i class="fas fa-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>
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
@stop


-----------modal-faq-Edit---------------
<div class="modal fade view_faq_Modal" id="add-group" tabindex="-1" aria-labelledby="exampleModalLabel" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{url('/add_groupmanagement')}}" method="post" id="group" enctype="multipart/form-data">
                @csrf
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Add Group</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="div_question">
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Upload group display picture</label>
                            <!-- <input type="file" class="form-control" name="profile_image" id=""> -->
                            <input class="form-control" type="file" id="formFileMultiple" name="profile_image[]" multiple="multiple" accept="image/*">
                        </div>
                        <div class="mb-3">
                            <div class="form-group">
                                <label for="">Role</label>
                                <Select class="form-select" id="test" onchange="getComboA(this)" name="role">
                                    <option value=""></option>
                                    <option value="business">business</option>
                                    <option value="user">user</option>
                                </Select>
                            </div>
                        </div>
                        <div class="mb-3" id="business_id">
                            <div class="form-group">
                                <label for="">business
                                </label>
                                <Select class="form-select" name="business_id">
                                    <option value="">--Select--</option>
                                    @foreach($business as $key=>$listt)
                                    <option value="{{$listt['id']}}">{{$listt['username']}}</option>
                                    @endforeach
                                </Select>
                            </div>
                        </div>
                        <div class="mb-3" id="users">
                            <div class="form-group">
                                <label for="">user
                                </label>
                                <Select class="form-select" name="user_id">
                                    <option value="">--Select--</option>
                                    @foreach($user as $list)
                                    <option value="{{$list['id']}}">{{$list['username']}}</option>
                                    @endforeach
                                </Select>

                            </div>
                        </div>
                    
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Group Category</label>
                        <select name="Group_catagory" class="form-select" id="" required>
                            <option value=""></option>
                            <option value="Technology">Technology</option>
                            <option value="Cooking">Cooking</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                        <textarea class="form-control" name="Description" id="" cols="50" id="exampleFormControlTextarea1" rows="1"></textarea>
                        </textarea>
                    </div>
                </div>
        </div>
        <div class="modal-footer modal_bg justify-content-center mb-3">
            <button type="button" class="btn_1 Outline_btnnn" data-bs-dismiss="modal">Close</button>
            <input type="submit" value="Save" class="btn_1">
        </div>
        </form>
    </div>
</div>
</div>

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.4/jquery.validate.min.js" integrity="sha512-FOhq9HThdn7ltbK8abmGn60A/EMtEzIzv1rvuh+DqzJtSGq8BRdEN0U+j0iKEIffiw/yEtVuladk6rsG4X6Uqg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.4/jquery.validate.min.js" integrity="sha512-FOhq9HThdn7ltbK8abmGn60A/EMtEzIzv1rvuh+DqzJtSGq8BRdEN0U+j0iKEIffiw/yEtVuladk6rsG4X6Uqg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $(document).ready(function() {

        $("#group").validate({

            rules: {
                "profile_image": {
                    required: true,
                },
                "role": {
                    required: true,
                },
                "business_id": {
                    required: true,
                },
                "user_id": {
                    required: true,
                },
                "Description": {
                    required: true,
                },
                "Group_catagory": {
                    required: true,
                },
            },

            messages: {
                "profile_image": {
                    required: "Please Add Image",
                },
                "role": {
                    required: "Please select role",
                },
                "business_id": {
                    required: "Please select user name",
                },
                "user_id": {
                    required: "Please select user name",
                },
                "Description": {
                    required: "Please Enter the content",
                },
                "Group_catagory": {
                    required: "Please select the Group catagory",
                },
            },
        });
    });
</script>

<script>
    $(document).ready(function() {

        $('#business_id').hide();
        $('#users').hide();

    });
</script>

<script>
    function getComboA(selectObject) {
        var value = selectObject.value;
        
        if (value === 'business') {
            $('#business_id').show();
            $('#users').hide();
        } else if (value != 'business') {
            $('#users').show();
            $('#business_id').hide();
        }
    }
</script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#ima').on('change', function() {
            $('#hol').attr('src', URL.createObjectURL(event.target.files[0]));
        });
    });
</script>

@stop