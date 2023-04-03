@extends('admin.layout.adminLayout')
@section('title','View Posts')
@section('content')


<div class="container-fluid p-0">
    <div class="row">
        <div class="col-12">
            <div class="page_title_box d-flex flex-wrap align-items-center justify-content-between">
                <div class="page_title_left">
                    <h3 class="f_s_25 f_w_700 dark_text">View Post Details</h3>
                    <ol class="breadcrumb page_bradcam mb-0">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                        <li class="breadcrumb-item "><a href="">Post Managment</a></li>
                        <li class="breadcrumb-item active">View Post Details</li>
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
                                <div class="tile" id="tile-1">
                                    <div class="user-info-main mt-3">
                                        <ul>
                                            <li>
                                                <div class="info-title">
                                                    <div class="info-title-sub">
                                                        <h6>Post Name </h6>
                                                    </div>
                                                    <div>
                                                        <p>: {{$view['title']}}</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="info-title">
                                                    <div class="info-title-sub">
                                                        <h6>Post Date </h6>
                                                    </div>
                                                    <div>
                                                        <p>: {{$view['posted_date']}}</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="info-title">
                                                    <div class="info-title-sub">
                                                        <h6>Post Description </h6>
                                                    </div>
                                                    <div>
                                                        <p>: {{$view['content']}} </p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <h5>Post Images :</h5>

                                
                                <div class="col-xl-12 my-3">
                                    <div class="multipleItems">
                                    @foreach($mediaData as $listt)
                                        <div class="cros-pic"
                                            style="">
                                            <img src = "{{$listt['media_url']}}" width= "150px" height="150px">
                                        </div>
                                        @endforeach 

                                        <!-- <div class="cros-pic"
                                            style="background-image: url(Screenshot_2023-03-29_15-30-38.png);">
                                            def
                                        </div>
                                        <div class="cros-pic"
                                            style="background-image: url(Screenshot_2023-03-29_15-30-03.png);">
                                            ghi
                                        </div>
                                        <div class="cros-pic"
                                            style="background-image: url(Screenshot_2023-03-29_15-30-38.png);">
                                            jkl
                                        </div> -->
                                    </div>
                                </div>
                             
                                <!-- <div class="col-xl-12 my-3">
                                    <div class="uploadImage-main">
                                        <div class="image-container m-auto">
                                            <img src="{{$view['posts_img']['media_url']}}" alt="">
                                        </div>
                                    </div>
                                </div> -->

                                <!-- <h5>Post Images :</h5>
                                <div class="col-xl-3 my-3">
                                    <div class="uploadImage-main">
                                        <div class="image-container m-auto">
                                            <img src="{{$view['posts_img']['media_url']}}" alt="">
                                        </div>
                                    </div>
                                </div> -->
                                <!-- <div class="col-xl-3 my-3">
                                    <div class="uploadImage-main">
                                        <div class="image-container m-auto">
                                            <img src="{{$view['post_image']}}" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 my-3">
                                    <div class="uploadImage-main">
                                        <div class="image-container m-auto">
                                            <img src="{{$view['post_image']}}" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 my-3">
                                    <div class="uploadImage-main">
                                        <div class="image-container m-auto">
                                            <img src="{{$view['post_image']}}" alt="">
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                        <a href="{{url('/posts/manage')}}" class="btn btn-secondary">back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-12">
</div>


@endsection
@section('scripts')
@endsection





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
                required: "Please select user id",
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