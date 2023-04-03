@extends('admin.layout.adminLayout')
@section('title','Edit Posts')
@section('content')

<style>
.error {
    color: red;
    font-size: 18px;
}
</style>
<div class="container-fluid p-0">
    <div class="row">
        <div class="col-12">
            <div class="page_title_box d-flex flex-wrap align-items-center justify-content-between">
                <div class="page_title_left">
                    <h3 class="f_s_25 f_w_700 dark_text"> Edit Post </h3>
                    <ol class="breadcrumb page_bradcam mb-0">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                        <li class="breadcrumb-item "><a href="userManagement.php"> Edit Post Management</a></li>
                        <li class="breadcrumb-item active">Edit Post</li>
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
                <div class="">
                    <div class="box_header m-0">
                    </div>
                </div>
                <div class="white_card_body">
                    <div class="QA_section">
                        <div class="QA_table mb_30">
                            <div class="row">
                                <div class="col-xl-12 mt-4">
                                    <div class="white_card box-shadow-grey mt-4">
                                        <div class="white_card_body p-3">
                                            <div class="tile" id="tile-1">
                                                <form action="" method="post" id="add" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="tab-content" id="myTabContent">
                                                        <div class="tab-pane fade show active" id="home" role="tabpanel"
                                                            aria-labelledby="home-tab">

                                                            <div class="row">

                                                                <div class="col-xl-6">
                                                                    <div class="form-group">
                                                                        <label for="">Post Title
                                                                        </label>
                                                                        <input type="text" class="form-control"
                                                                            name="title" id="post"
                                                                            value="{{$view['title']}}">
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-6">
                                                                    <div class="form-group">
                                                                        <label for="">Role</label>
                                                                        <Select class="form-select" id="test"
                                                                            onchange="getComboA(this)" name="role">
                                                                            <option value=""></option>

                                                                            <option value="business"
                                                                                {{ $view['user_id'] ==  $view['user_id'] ? 'selected' : '' }}>
                                                                                business</option>
                                                                            <option value="user"
                                                                                {{ $view['user_id'] ==  $view['user_id'] ? 'selected' : '' }}>
                                                                                user</option>

                                                                        </Select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-6" id="business">
                                                                    <div class="form-group">
                                                                        <label for="">Business
                                                                        </label>
                                                                        <Select class="form-select" name="user_id">
                                                                            @foreach($role as $listt)
                                                                            <option value="{{($listt['id'])}}">
                                                                                {{($listt['businessname'])}}</option>
                                                                            @endforeach
                                                                        </Select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-6" id="user">
                                                                    <div class="form-group">
                                                                        <label for="">user
                                                                        </label>
                                                                        <Select class="form-select" name="user_id">
                                                                            @foreach($role as $listt)
                                                                            <option value="{{($listt['id'])}}">
                                                                                {{($listt['username'])}}</option>
                                                                            @endforeach
                                                                        </Select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-6">
                                                                    <!-- date picker start -->
                                                                    <div class="form-group dt_wrap">
                                                                        <label for="">Post Time
                                                                        </label>
                                                                        <input id="input_dt" class="inp_same"
                                                                            name="posted_date"
                                                                            value="{{($view['posted_date'])}}" />
                                                                    </div>
                                                                    <!-- date picker End -->
                                                                </div>
                                                                <div class="col-xl-12">
                                                                    <div class="form-group">
                                                                        <label for="">Post Description</label>
                                                                        <textarea class="form-control" rows="5"
                                                                            placeholder="Jack"
                                                                            name="content">{{$view['content']}}</textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-12">
                                                                    <div class="form-group">
                                                                        <label for="">Media</label>
                                                                        <option value=""></option>
                                                                        <Select class="form-select" name="mediaImage">
                                                                            <option value="text"
                                                                                {{ $view['media_type'] ==  $view['media_type'] ? 'selected' : '' }}>
                                                                                Text</option>
                                                                            <option value="images"
                                                                                {{ $view['media_type'] ==  $view['media_type'] ? 'selected' : '' }}>
                                                                                Images</option>
                                                                            <option value="multi_media"
                                                                                {{ $view['media_type'] ==  $view['media_type'] ? 'selected' : '' }}>
                                                                                Multi-Media</option>
                                                                        </Select>
                                                                    </div>
                                                                </div>

                                                                <!-- <div class="col-xl-12">
                                                                    <div class="form-group">
                                                                        <label for="">Images</label>
                                                                         <form action="/file-upload" class="form-control dropzone" id="dropzone">
                                                                            <div class="fallback"> -->
                                                                <!-- <input type="file" name="post_image" value="{{$view['post_image']}}"> -->
                                                                <!-- </div>
                                                                        </form>
                                                                    </div>
                                                                </div> -->

                                                                <div class="col-xl-12">
                                                                    <div class="multipleItems">
                                                                        @foreach($mediaData as $img)
                                                                        <div class="cros-pic" style="">
                                                                            <img src="{{$img['media_url']}}"
                                                                                width="150px" height="150px">
                                                                        </div>
                                                                        @endforeach
                                                                    </div>
                                                                    <div class="image-container w-100">
                                                                        <div class="row mt-3 justify-content-center">
                                                                            <div class="col-md-6 text-center">
                                                                                <div class="upld-ic">
                                                                                    <i class="fa fa-edit"></i>
                                                                                    <input type="file" name="images[]"
                                                                                        id="img" multiple="multiple"
                                                                                        accept="image/*">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- <div class="col-xl-12">
                                                                    <div class="uploadImage-main">
                                                                        <div
                                                                            class="image-container image-edit-container m-auto d-flex">
                                                                            @foreach($mediaData as $img)
                                                                            <div class="position-relative dlt_img">
                                                                                <img src="{{$img['media_url']}}"
                                                                                    id="hol" alt="" id="hol">
                                                                            </div>
                                                                            @endforeach
                                                                            <div class="upld-btn">
                                                                                <i class="fa fa-edit"></i>
                                                                                <input type="file" name="images[]"
                                                                                    id="img" multiple="multiple"
                                                                                    accept="image/*">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div> -->
                                                                <div class="col-xl-12 text-center mt-3 btm_btn">
                                                                    <input type="submit" value="Edit post"
                                                                        class="btn btn-primary">
                                                                    <a class="btn btn-secondary"
                                                                        href="{{url('/posts/manage')}}">back</a>
                                                                </div>
                                                            </div>
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
                </div>
            </div>
        </div>
        <div class="col-12">
        </div>
    </div>
</div>

@endsection


@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.4/jquery.validate.min.js"
    integrity="sha512-FOhq9HThdn7ltbK8abmGn60A/EMtEzIzv1rvuh+DqzJtSGq8BRdEN0U+j0iKEIffiw/yEtVuladk6rsG4X6Uqg=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script type="text/javascript">
$(document).ready(function() {
    $('#img').on('change', function() {
        $('#hol').attr('src', URL.createObjectURL(event.target.files[0]));
    });
});
</script>

<script>
$('#post').bind('keyup blur', function() {
    var node = $(this);
    node.val(node.val().replace(/[^a-z]/g, ''));
});
</script>

<script>
$(document).ready(function() {

    $("#add").validate({
        ignore: [],

        rules: {
            "title": {
                required: true,
            },
            "role": {
                required: true,
            },
            "user_id": {
                required: true,
            },

            "date_of_posted": {
                required: true,
            },
            "content": {
                required: true,
            },
            "media_type": {
                required: true,
            },

        },

        messages: {
            "title": {
                required: "Please add title",
            },
            "role": {
                required: "Please select role",
            },
            "user_id": {
                required: "Please select role",
            },
            "date_of_posted": {
                required: "Please select date_of_posted",
            },
            "content": {
                required: "Please Enter the content",
            },
            "media_type": {
                required: "Please select the media_type",
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
<script>
$('#input_dt').datetimepicker({
    footer: true,
    modal: true
});
</script>
@endsection