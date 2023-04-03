@extends('admin.layout.adminLayout')
@section('title','Edit GroupManagement')
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
                        <h3 class="f_s_25 f_w_700 dark_text">Edit Group Management</h3>
                        <ol class="breadcrumb page_bradcam mb-0">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Edit Group Management</a></li>
                            <li class="breadcrumb-item"><a href="">Edit Group Management</a></li>
                            <li class="breadcrumb-item active">Edit Group Management</li>
                        </ol>
                    </div>
                    <div class="page_title_right">
                        <div class="add_button ms-2">
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
                                                    <form action = "{{url('/edit_groupmanagement/'.base64_encode($view['id']))}}" method="post" id = "basic-form">
                                                     @csrf
                                                    <div class="row">
                                                    <div class="col-xl-12">
                                                            <div class="uploadImage-main">
                                                                <div class="image-container m-auto">
                                                                <img src="{{$view['profile_image']}}"
                                                                        alt="" name="image"  id="hol">
                                                                    <div class="upld-btn">
                                                                        <i class="fa fa-edit"></i>
                                                                        <input type="file" name="image" id="img"> 
                                                                    </div>
                                                                </div>
                                                            </div>

                                                             <div class="col-xl-6">
                                                             <div class="col-xl-12">
                                                                            <div class="col-xl-6">
                                                                                <div class="form-group">
                                                                                    <label>UserId </label>
                                                                                    <input type="text" 
                                                                                        class="form-control"  name="userid" value="{{$view['userId']}}"
                                                                                        placeholder="UserID"   minlength="3"   id="username"  required >
                                                                                </div>
                                                                        </div>
                                                                </div>
                                                                

                                                            
                                                                <div class="col-xl-6">
                                                                    <div class="form-group">
                                                                        <label>Description </label>
                                                                        <input type="text" 
                                                                            class="form-control"  name="description" value="{{$view['Description']}}"
                                                                            placeholder="Description"   minlength="3"   id="username"  required >
                                                                    </div>
                                                                </div>

                                                                <div class="col-xl-6" >
                                                                <div class="col-xl-6">
                                                                    <div class="form-group">
                                                                        <label>Group Catagory </label>
                                                                        <input type="text" 
                                                                            class="form-control"  name="category" value="{{$view['Group_catagory']}}"
                                                                            placeholder="Group_catagory"   minlength="3"   id="username"  required >
                                                                    </div>
                                                                </div>
                                                            </div>
                                                               

                                                
                                            </div>
                                        </div>
                                    <div class="col-xl-12 text-center mt-3">
                                    <!-- <button class="btn_1">Back</button> -->
                                    <input type="submit" name="submit" class="btn_1" value="Update">

                                    <a href="{{url('/groupmanagement')}}" class="btn_1">Back</a> 
                                </div>
                                </div>
                            </form>
                            </div>
                        
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="col-12">
            </div> -->
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

        $('#business').hide();
        $('#user').hide();

    });
</script>

<script>
      function getComboA(selectObject) {
        var value = selectObject.value;
        if (value == 'business') {
            $('#business').show();
            $('#user').hide();

        } else if (value != 'business') {
            $('#user').show();
            $('#business').hide();
        }
    }
</script>



 @stop

