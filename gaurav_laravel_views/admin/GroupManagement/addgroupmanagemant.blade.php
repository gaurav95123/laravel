@extends('admin.layout.adminLayout')
@section('title','Add Group Management')
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
                        <h3 class="f_s_25 f_w_700 dark_text">Add Group Management</h3>
                        <ol class="breadcrumb page_bradcam mb-0">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                            <li class="breadcrumb-item "><a href="{{url('/business/manage')}}">Add Group Management</a></li>
                            <li class="breadcrumb-item active">Add Group Management</li>
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
                               
                                    
                                <div class="row">
                                    <div class="col-xl-12">
                                    <div class="col-xl-12 mt-4">
                                    <div class="white_card box-shadow-grey mt-4">
                                        <div class="white_card_body p-3">
                                            <div class="tile" id="tile-1">

                                                <div class="tab-content" id="myTabContent">
                                                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                                        <form action="{{url('/add_groupmanagement')}}" method="post" id="group" enctype="multipart/form-data">
                                                            @csrf
                                                            <div class="row">
                                                            <div class="col-xl-12">
                                                                <div class="uploadImage-main">
                                                                    <div class="image-container m-auto">
                                                        
                                                                        <img src="{{asset('admin/common/img/user_profile.png')}}"
                                                                            alt="" name="image"  id="hol">
                                                                        <div class="upld-btn">
                                                                            <i class="fa fa-edit"></i>
                                                                            <input type="file" name="profile_image" id="img"> 
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- <input type="hidden" name="userId"> -->
                                                                <div class="col-xl-6">
                                                                    <div class="form-group">
                                                                        <label for="">Role</label>
                                                                        <Select class="form-select" id="test" onchange="getComboA(this)" name="role">
                                                                             <option value=""></option>
                                                                            <option value="business">business</option>
                                                                            <option value="user">user</option> 
                                                                        </Select>  
                                                                    </div>
                                                                </div>
                                                                        <!-- <option value="business">Business</option>
                                                                            <option value="user">Non_business</option> -->

                                                                <div class="col-xl-6" id="business_id">
                                                                    <div class="form-group">
                                                                        <label for="">business 
                                                                     </label>
                                                                        <Select class="form-select" name="user_id">
                                                                            <option value="">--Select--</option>
                                                                            @foreach($business as $listt)
                                                                            <option value="{{($listt['id'])}}">{{($listt['username'])}}</option>
                                                                            @endforeach
                                                                        </Select>                                                          
                                                                    </div>
                                                                </div>

                                                                <div class="col-xl-6" id="users">
                                                                    <div class="form-group">
                                                                        <label for="">user
                                                                        </label>
                                                                        <Select class="form-select" name="user_id">
                                                                        <option value="">--Select--</option>
                                                                            @foreach($role as $list)
                                                                            <option value="{{($list['id'])}}">{{($list['username'])}}</option>
                                                                            @endforeach
                                                                        </Select>                                                             
                                                                    </div>
                                                                </div>
                                                              
                                                                <div class="col-xl-12">
                                                                    <div class="form-group"><label for="">Post Description</label>
                                                                        <textarea class="form-control" name="content" id="" cols="50" rows="1"></textarea>
                                                                    </div>
                                                                </div>

                                                                <div class="col-xl-12">
                                                                    <div class="form-group">
                                                                        <label for=""> 	Group_catagory </label>
                                                                        <Select class="form-select" name="Group_catagory">
                                                                            <option value=""></option>
                                                                            <option value="Technology">Technology</option>
                                                                            <option value="Cooking">Cooking</option>                                                                        
                                                                        </Select>
                                                                    </div>
                                                                </div>
                                                                <!-- <div class="form-group">
                                                                    <label for="usr">MemberId</label>
                                                                    <input type="text" class="form-control" name="memberId" id="">
                                                                  </div>
                                                                  <div class="form-group">
                                                                    <label for="usr">isDeleted</label>
                                                                    <input type="text" class="form-control" name="isDeleted" id="">
                                                                  </div> -->

                                                                <div class="col-xl-12 text-center mt-3">
                                                                    <!-- <button class="btn_1 me-3">Add Post</button> -->
                                                                    <input type="submit" value="Save" class="btn_1 me-3">
                                                                    <a class="btn_2" href="{{url('/groupmanagement')}}">back</a>

                                                                </div>

                                                            </div>
                                                        </form>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>                                       
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12 mt-4">
                                            <div class="white_card box-shadow-grey mt-4">
                                                <div class="white_card_body p-3">
                                                    <div class="tile" id="tile-1">
                                                        <div class="tab-content" id="myTabContent">
                                                            <div class="tab-pane fade show active" id="home"
                                                                role="tabpanel" aria-labelledby="home-tab">
                                                                <div class="row">
                                                                                                                                                                   
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                   
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
                "user_id": {
                    required: true,
                },
                "content": {
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
                "user_id": {
                    required: "Please select user name",
                },
                "content": {
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
        if (value == 'business_id') {
            $('#business_id').show();
            $('#users').hide();
        }else if (value != 'business_id'){
            $('#users').show();
            $('#business_id').hide();
        }
    }
</script>

<script type="text/javascript">
    $(document).ready(function () {
        $('#ima').on('change', function () {
            $('#hol').attr('src', URL.createObjectURL(event.target.files[0]));
        });
    });
</script>

@stop






