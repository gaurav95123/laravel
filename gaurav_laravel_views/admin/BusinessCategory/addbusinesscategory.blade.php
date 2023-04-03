@extends('admin.layout.adminLayout')
@section('title','Add Business Category')
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
                        <h3 class="f_s_25 f_w_700 dark_text">Add Business Category</h3>
                        <ol class="breadcrumb page_bradcam mb-0">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                            <li class="breadcrumb-item "><a href="{{url('/business/manage')}}">Business Category</a></li>
                            <li class="breadcrumb-item active">Add Business Category</li>
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
                                                                    <div class="col-xl-6">
                                                                        <form action="{{url('/add_businesscategory')}}" method="post" id="basic-form">
                                                                            @csrf
                                                                        
                                                                            <label for="">Enter Type Text  <span> (required, at least 3 characters) </span> </label>
                                                                            <input type="text"  class="form-control" name="addbusinesscat" placeholder="Enter Type Text"  id="username" minlength="3"  required>
                                                                            <div class="col-xl-12 text-center mt-3">
                                                                                <!-- <button class="btn_1">Save</button> -->
                                                                                <input type="submit" class="btn_1" value="save">
                                                                                <div class="col-xl-12 text-center mt-3">
                                                                                    <!-- <button class="btn_1">Save</button> -->
                                                                                    <!-- <input type="submit" class="btn_1" value="back"> -->
                                                                                    <a href="{{url('/businesscategory')}}" class="btn_1" role="button">back</a>
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

<script>  
$(document).ready (function () {  
  $("#basic-form").validate ({
    ignore:[],
    rules:{
        "business_name":{
                    required: true,
                },
            },
            messages:{
                "business_name":{
                    required: "Please Enter Business name",
                },
            }
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