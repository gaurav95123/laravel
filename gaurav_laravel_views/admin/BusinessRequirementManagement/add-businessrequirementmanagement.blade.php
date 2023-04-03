@extends('admin.layout.adminLayout')
@section('title',' Add Business Requirement Management')
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
                        <h3 class="f_s_25 f_w_700 dark_text"> Add Business Requirement Management</h3>
                        <ol class="breadcrumb page_bradcam mb-0">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                            <li class="breadcrumb-item "><a href="{{url('/add_businessrequirement')}}">Add Business Requirement Management</a></li>
                            <li class="breadcrumb-item active">Add Business Requirement Management</li>
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
                                <form action="{{url('/add_businessrequirement')}}" method="post" id="add" enctype="multipart/form-data">
                                    @csrf
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="uploadImage-main">
                                            <div class="image-container m-auto">

                                          
                                                <img src="{{asset('admin/common/img/user_profile.png')}}" alt="" id="hol">
                                                
                                                <div class="upld-btn">
                                                    <i class="fa fa-edit"></i>
                                                    <input type="file" name="BusinessRequirment_image" id="img">
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

                                                                    <div class="col-xl-6" >
                                                                        <div class="form-group" >
                                                                            <label for="">
                                                                            UserId</label>
                                                                            <input type="text"
                                                                                class="form-control"
                                                                                name="userid"
                                                                                placeholder="Enter user_id" id="form1">
                                                                        </div>
                                                                        
                                                                    </div>

                                                                    <div class="col-xl-6" >
                                                                        <div class="form-group" >
                                                                            <label for="">
                                                                            Business_category</label>
                                                                            <input type="text"
                                                                                class="form-control"
                                                                                name="business_category"
                                                                                placeholder="Enter Business category" id="form1">
                                                                        </div>
                                                                        
                                                                    </div>
                                                                    <div class="col-xl-6">
                                                                        <div class="form-group">
                                                                            <label for="">Country
                                                                                </label>
                                                                            <input type="text"
                                                                                class="form-control"
                                                                                name="country_id"
                                                                                placeholder="Enter Country">
                                                                        </div>
                                                                    </div>

                                                                    
                                                                    <div class="col-xl-6">
                                                                        <div class="form-group">
                                                                            <label for="">City
                                                                                </label>
                                                                            <input type="text"
                                                                                class="form-control"
                                                                                name="city"
                                                                                placeholder="Enter City">
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-xl-6">
                                                                        <div class="form-group">
                                                                            <label for="">State
                                                                                </label>
                                                                            <input type="text"
                                                                                class="form-control"
                                                                                name="state"
                                                                                placeholder="Enter State" id="number_only">
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-xl-6">
                                                                        <div class="form-group">
                                                                            <label for="">Required_goods
                                                                                </label>
                                                                            <input type="text"
                                                                                class="form-control"
                                                                                name="Required_goods"
                                                                                placeholder="Enter Required_goods" id="number_only">
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-xl-12 text-center mt-3">                                                                    
                                                                        <input type="submit" class="btn_1" value="save">
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
                            </form>
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

<script type="text/javascript">
    $(document).ready(function () {
        $('#img').on('change', function () {
            $('#hol').attr('src', URL.createObjectURL(event.target.files[0]));
        });
    });
</script>

<script>
    $(document).ready(function() {

        $("#add").validate({
            ignore: [],

            rules: {
                "userid": {
                    required: true,
                },
                "business_category": {
                    required: true,
                },
                "country_id": {
                    required: true,
                },

                "city": {
                    required: true,
                },
                "state": {
                    required: true,
                },
                "Required_goods": {
                    required: true,
                },
            },

            messages: {
                "userid": {
                    required: "Please add userid",
                },
                "business_category": {
                    required: "Please add business_category",
                },
                "country_id": {
                    required: "Please add country id",
                },
                "city": {
                    required: "Please add city",
                },
                "state": {
                    required: "Please add the state",
                },
                "Required_goods": {
                    required: "Please select the Required goods",
                },

            },
        });
    });
</script>



<!-- <script>

$('#username').keypress(function( e ) {
       if(e.which === 32) 
         return false;
    });

</script> -->



@stop