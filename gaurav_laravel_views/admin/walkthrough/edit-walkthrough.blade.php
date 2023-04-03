@extends('admin.layout.adminLayout')
@section('title','Edit WalkThrough')
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
                        <h3 class="f_s_25 f_w_700 dark_text"> Edit WalkThrough</h3>
                        <ol class="breadcrumb page_bradcam mb-0">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Edit walkthrough</a></li>
                            <li class="breadcrumb-item"><a href="">Edit walkthrough</a></li>
                            <li class="breadcrumb-item active">Edit WalkThrough</li>
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
                            
                            <form action = "{{url('/edit_walkthrough/'.base64_encode($wthrough['id']))}}" method="post" enctype="multipart/form-data"   id ="form">
                                @csrf
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="uploadImage-main">
                                            <div class="image-container m-auto">
                                                <img src="{{asset('https://production.promaticstechnologies.com/kvs_rest_apis/public/walkthrough/'.$wthrough['image'])}}" alt="">
                                                <div class="upld-btn">
                                                    <i class="fa fa-edit"></i>
                                                    <input type="file" name="image"  required>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="form-group">
                                                <label for="">Description <span>(required, at least 3 characters)</span></label>
                                                <input type="text" 
                                                    class="form-control" value="{{$wthrough['text']}}" name="text"
                                                    placeholder="Ex. Jack"   minlength="3"   id="user"   required>
                                            </div>
                                    </div>
                                    <div class="col-xl-12 text-center mt-3">
                                    <!-- <button class="btn_1">Back</button> -->
                                    <input type="submit" name="submit" class="btn_1" value="send">

                                    <a href="{{url('/walkthrough')}}" class="btn_1">Back</a> 
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
 

<script>  
$(document).ready (function () {  
  $("#form").validate ({
    ignore:[],
    rules:{
        "text":{
                    required: true,
                },
            },
            messages:{
                "text":{
                    required: "Please Edit Walkthorugh",
                },
            }
});  
});  
</script>  

<script>
$('#user').keypress(function( e ) {
       if(e.which === 32) 
         return false;
    });
</script>
@stop
