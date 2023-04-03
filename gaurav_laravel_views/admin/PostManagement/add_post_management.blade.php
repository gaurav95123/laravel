@extends('admin.layout.adminLayout')
@section('title','Add Posts')
@section('content')

    <style>
        .error {
            color: red;
            font-size: 18px;
        }
    </style>
<!-- <div class="cantainer">
<form action="{{url('/file_upload')}}" method="post" enctype="multipart/form-data" class="dropzone" id="dropzone">
@csrf
<div>
<h4>Upload Multiple Image By Click On Box</h4>
</div>
</form>
</div> -->
<div class="container-fluid p-0">
    <div class="row">
        <div class="col-12">
            <div class="page_title_box d-flex flex-wrap align-items-center justify-content-between">
                <div class="page_title_left">
                    <h3 class="f_s_25 f_w_700 dark_text">Add Post </h3>
                    <ol class="breadcrumb page_bradcam mb-0">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                        <li class="breadcrumb-item "><a href="userManagement.php">Post Management</a></li>
                        <li class="breadcrumb-item active">Add Post</li>
                    </ol>
                </div>
                <div class="container">
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
                                                <div class="tab-content" id="myTabContent">
                                                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                                        <form action="" method="post" id="addpost" enctype="multipart/form-data">
                                                            @csrf
                                                            <div class="row">
                                                                <div class="col-xl-6">
                                                                    <div class="form-group">
                                                                        <label for="">Post Title (please enter only small letters)
                                                                        </label>
                                                                        <input type="text" class="form-control" name="title" id="post">
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-6">
                                                                    <div class="form-group">
                                                                        <label for="">Role</label>
                                                                        <Select class="form-select" id="test" onchange="getComboA(this)" name="role">
                                                                            <option value=""></option>
                                                                            <option value="business">Business</option>
                                                                            <option value="user">user</option>
                                                                        </Select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-6" id="business">                                                               
                                                                    <div class="form-group">
                                                                        <label for="">Business</label>
                                                                        <Select class="form-select" name="business_id">
                                                                            <option value=""></option> 
                                                                                @foreach($business as $data)   
                                                                                <option value="{{$data['id']}}">{{$data['username']}}</option>
                                                                                @endforeach
                                                                        </Select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-6" id="user">
                                                                    <div class="form-group">
                                                                        <label for="">user
                                                                        </label>
                                                                        <Select class="form-select" name="user_id">
                                                                            <option value=""></option>
                                                                                @foreach($user as $listt)
                                                                                <option value="{{$listt['id']}}">{{$listt['username']}}</option>
                                                                                @endforeach
                                                                        </Select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-6">
                                                                    <!-- date picker start -->
                                                                    <div class="form-group dt_wrap">
                                                                        <label for="">Post Date and Time</label>
                                                                        <input id="input_dt" class="inp_same" name="posted_date"/>
                                                                    </div>
                                                                    <!-- date picker End -->
                                                                </div>
                                                                <div class="col-xl-12">
                                                                    <div class="form-group"><label for="">Post Description</label>
                                                                        <textarea class="form-control" name="content" id="" cols="50" rows="1"></textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-12">
                                                                    <div class="form-group">
                                                                        <label for="">Media</label>
                                                                        <Select class="form-select" name="media_type">
                                                                            <option value=""></option>
                                                                            <option value="text">Text</option>
                                                                            <option value="images">Images</option>
                                                                            <option value="multimedia">Multi-Media</option>
                                                                        </Select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-12">
                                                                    <div class="container">
                                                                        <div class="form-group">
                                                                            <label for="formFileMultiple" class="form-label">Browser</label>
                                                                            <input class="form-control" type="file" id="formFileMultiple" name="images[]" multiple="multiple" accept="image/*">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-12 text-center mt-3">
                                                                    <!-- <input type="submit" value="Add Post" class="btn_1 me-3"> -->
                                                                    <input type="submit" class="btn btn-primary" value="Add Post">
                                                                    <a class="btn btn-secondary" href="{{url('/posts/manage')}}">back</a>
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
            </div>
        </div>
        <div class="col-12">
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.4/jquery.validate.min.js" integrity="sha512-FOhq9HThdn7ltbK8abmGn60A/EMtEzIzv1rvuh+DqzJtSGq8BRdEN0U+j0iKEIffiw/yEtVuladk6rsG4X6Uqg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.0/dropzone.min.css">

<script type="text/javascript">
    $(document).ready(function () {
        $('#img').on('change', function () {
            $('#hol').attr('src', URL.createObjectURL(event.target.files[0]));
        });
    });
</script>

<script>
    $(document).ready(function() {
        $('#post').on('input', function() {
            var inputValue = $(this).val();
            var regex = /^[a-z\s]*$/; // Regular expression to match only small letters and spaces
            if (!regex.test(inputValue)) {
            $(this).val(inputValue.replace(/[^a-z\s]/g, '')); // Remove any characters that are not small letters or spaces
            }
        });
    });

</script>

<script>
    $(document).ready(function() {
        $("#addpost").validate({
            // ignore: [],
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

                "posted_date": {
                    required: true,
                },
                "content": {
                    required: true,
                },
                "media_type": {
                    required: true,
                },
                "images[]": {
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
                "posted_date": {
                    required: "Please select date_of_posted",
                },
                "content": {
                    required: "Please Enter the content",
                },
                "media_type": {
                    required: "Please select the media_type",
                },
                "images[]": {
                    required: "Please Add Image",
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