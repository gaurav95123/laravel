@extends('admin.layout.adminLayout')
@section('title','Edit Business Requirement Management')
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
                        <h3 class="f_s_25 f_w_700 dark_text">Edit Business Requirement Management</h3>
                        <ol class="breadcrumb page_bradcam mb-0">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Edit Business Requirement Management</a></li>
                            <li class="breadcrumb-item"><a href="">Edit Business Requirement Management </a></li>
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
                            
                            <form action = "{{url('/edit_businessrequirement/'.base64_encode($businesreq['id']))}}" method="post" id = "form"  enctype="multipart/form-data">
                                @csrf
                                <div class="row">

                                <div class="col-xl-12">
                                        <div class="uploadImage-main">
                                            <div class="image-container m-auto">
                                                @if($businesreq['BusinessRequirment_image'])
                                                <img src="{{url(BusinessImagePath.'/'.$businesreq['BusinessRequirment_image'])}}" width="150px"   id="hol" height="150px" alt="">
                                                @else
                                                <img src="{{asset('admin/common/img/user_profile.png')}}" alt="" width="150px" height="150px" id="hol">
                                                @endif
                                                
                                                <div class="upld-btn">
                                                    <i class="fa fa-edit"></i>
                                                    <input type="file" name="BusinessRequirment_image" id="img" value="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-12">
                                         <div class="col-xl-6">
                                            <div class="form-group">
                                                <label>UserId </label>
                                                <input type="text" 
                                                    class="form-control"  name="userid" value="{{$businesreq['userId']}}"
                                                    placeholder="UserID"   minlength="3"   id="username"  required >
                                            </div>
                                    </div>

                                    <div class="col-xl-12">
                                         <div class="col-xl-6">
                                            <div class="form-group">
                                                <label>Business_category </label>
                                                <input type="text" 
                                                    class="form-control"  name="business_category" value="{{$businesreq['business_category']}}"
                                                    placeholder="Business_Category"   minlength="3"   id="username"  required >
                                            </div>
                                    </div>
                                    <div class="col-xl-12">
                                         <div class="col-xl-6">
                                            <div class="form-group">
                                                <label>Country </label>
                                                <input type="text" 
                                                    class="form-control"  name="country_id" value="{{$businesreq['country']}}"
                                                    placeholder="country"   minlength="3"   id="username"  required >
                                            </div>
                                    </div>
                                    <div class="col-xl-12">
                                         <div class="col-xl-6">
                                            <div class="form-group">
                                                <label>City </label>
                                                <input type="text" 
                                                    class="form-control"  name="city" value="{{$businesreq['city']}}"
                                                    placeholder="city"   minlength="3"   id="username"  required >
                                            </div>
                                    </div>
                                    <div class="col-xl-12">
                                         <div class="col-xl-6">
                                            <div class="form-group">
                                                <label>State </label>
                                                <input type="text" 
                                                    class="form-control"  name="State" value="{{$businesreq['state']}}"
                                                    placeholder="state"   minlength="3"   id="username"  required >
                                            </div>
                                    </div>
                                    <div class="col-xl-12">
                                         <div class="col-xl-6">
                                            <div class="form-group">
                                                <label>Required_goods </label>
                                                <input type="text" 
                                                    class="form-control"  name="Required_goods" value="{{$businesreq['Required_goods']}}"
                                                    placeholder="Required_goods"   minlength="3"   id="username"  required>
                                            </div>
                                    </div>
                                    <div class="col-xl-12 text-center mt-3">
                                    <!-- <button class="btn_1">Back</button> -->
                                    <input type="submit" name="submit" class="btn_1" value="edit">

                                    <a href="{{url('/businessrequirement')}}" class="btn_1">Back</a> 
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

    <script type="text/javascript">
    $(document).ready(function () {
        $('#img').on('change', function () {
            $('#hol').attr('src', URL.createObjectURL(event.target.files[0]));
        });
    });
</script>

<script>  
$(document).ready (function () {  
  $("#form").validate ({
    ignore:[],
    rules:{
        "userid":{
                    required: true,
        }
        "business_category":{
                    required: true,
        }  
        "country_id":{
                    required: true,
        }  
            "city":{
                    required: true,
        }  
            "State":{
                    required: true,
        }  
         "Required_goods":{
                    required: true,
        }  
        
            },
            messages:{
                "userid":{
                    required: "Please Enter userid",
                },
                "business_category":{
                    required: "Please Enter business_category",
                },
                "country_id":{
                    required: "Please Enter country_id",
                },
                "city":{
                    required: "Please Enter city",
                },
                "State":{
                    required: "Please Enter state",
                },
                "Required_goods":{
                    required: "Please Enter Required_goods",
                },
            }
});  
});  
</script>  

<!-- 
<script>
$('#username').keypress(function( e ) {
       if(e.which === 32) 
         return false;
    });

</script> -->

 @stop

