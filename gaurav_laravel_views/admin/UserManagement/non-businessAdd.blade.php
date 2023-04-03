@extends('admin.layout.adminLayout')
@section('title','Add Non-Business')
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
                        <h3 class="f_s_25 f_w_700 dark_text">Add Non-Business</h3>
                        <ol class="breadcrumb page_bradcam mb-0">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                            <li class="breadcrumb-item "><a href="Non-Business.php">Add Non-Business</a></li>
                            <li class="breadcrumb-item active">Add Non-Business User</li>
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
                         <form action = "{{url('/addnonbusiness')}}" method="post" enctype="multipart/form-data" id="addnon">
                            @csrf
                            <div class="QA_table mb_30">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="uploadImage-main">
                                            <div class="image-container m-auto">
                                            <img src="{{asset('admin/common/img/user_profile.png')}}" alt="" id="hol">
                                                <!-- <img src="https://1fid.com/wp-content/uploads/2022/06/tiktok-profile-picture-2-1024x1024.jpg"
                                                    alt=""> -->
                                                <div class="upld-btn">
                                                    <i class="fa fa-edit"></i>
                                                    <input type="file" name="profile_image" id="img">
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
                                                                    <div class="col-xl-6">
                                                                        <div class="form-group">
                                                                            <label for="">Name</label>
                                                                            <input type="text" name="name"
                                                                                class="form-control"
                                                                                placeholder="Ex. Jack" id="form1">
                                                                        </div>
                                                                    </div>
                            
                                                                    <div class="col-xl-6">
                                                                        <div class="form-group">
                                                                            <label for="">E-mail ID</label>
                                                                            <input type="email" name="email"
                                                                                class="form-control"
                                                                                placeholder="Ex. Jack@mailinator.com">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-6">
                                                                        <div class="form-group">
                                                                            <label for="">Select DOB</label>
                                                                            <input type="Date" name="dob"
                                                                                class="form-control"
                                                                                placeholder="Ex. 02 Jan, 2023">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-6">
                                                                        <div class="form-group">
                                                                            <label for="">Phone Number</label>
                                                                            <input type="text" name="phone_no"
                                                                                class="form-control"
                                                                                placeholder="Ex. 740-856-6555" id="number_only" >
                                                                        </div>
                                                                    </div>
                                                                
                            
                                                                
                                                                    <div class="col-xl-6">
                                                                        <div class="form-group">
                                                                            <label for=""> UserName
                                                                                </label>
                                                                            <input type="text"  name="username"
                                                                                class="form-control"
                                                                                placeholder="Ex. 7485!jack">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-6">
                                                                        <div class="form-group">
                                                                            <label for=""> Create Password
                                                                                </label>
                                                                            <input type="text" name="password"
                                                                                class="form-control" id="password"
                                                                                placeholder="Ex. Create Password" autocomplete="off">
                                                                                <h6 id ="passwordcheck"></h6>
                                                                        </div>
                                                                    </div>      <div class="col-xl-6">
                                                                        <div class="form-group">
                                                                            <label for=""> Confirm Password
                                                                                </label>
                                                                            <input type="text" id="repeat" name="non_busines_confirmpass"
                                                                                class="form-control"
                                                                                placeholder="Ex.  Confirm Password" autocomplete="off">
                                                                                <h6 id ="repeatcheck"></h6>
                                                                        </div>
                                                                    </div>
                            
                                                                    <div class="col-xl-12 text-center mt-3">
                                                                        <!-- <button class="btn_1">Save</button> -->
                                                                        <input type="submit" class="btn_1" value="send"></a> 
                                                                        <a class="btn_1" href="{{url('/nonbusiness/manage')}}">back</a>


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
                         </form>
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
<script src="https://code.jquery.com/jquery-3.6.1.min.js" crossorigin="anonymous" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=">
        </script>
        <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/additional-methods.min.js"> </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js" integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA==" crossorigin="anonymous" referrerpolicy="no-referrer">
</script>


<script type="text/javascript">
    $(document).ready(function () {
        $('#img').on('change', function () {
            $('#hol').attr('src', URL.createObjectURL(event.target.files[0]));
        });
    });

    $(document).ready(function (){ 
    $('#number_only').bind('keyup paste', function(){
        this.value = this.value.replace(/[^0-9]/g, '');
  });
});

$(document).ready(function (){

    $('#form1').keypress(function (e) {
        var regex = new RegExp(/^[a-zA-Z\s]+$/);
        var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
        if (regex.test(str)) {
            return true;
        }
        else {
            e.preventDefault();
            return false;
        }
    });
});
</script>

<script>
    $(document).ready(function() {

        $("#addnon").validate({
            ignore:[],

            rules: {
                "profile_image":{
                    required: true,          
                },
                "name":{
                    required: true,
                },
                "email":{
                    required: true,
                },
                "dob":{
                    required: true,
                },
                "phone_no":{
                    required: true,
                    maxlength: 10,
                },
                "username":{
                    required: true,
                },
                 "password":{
                    required: true,
                },
                "non_busines_confirmpass":{
                    required: true,
                },
            },
              
            messages: {
                "non_busines_iprofile_imagemage":{
                    required: "Please Add Image",          
                },
                "name":{
                    required: "Please Enter Name",
                },
                "email":{
                    required: "Please Enter E-mail ID",
                },
                "dob":{
                    required: "Please Enter DOB",
                },
                "phone_no":{
                    required: "Please Select Your Contact Number",
                    maxlength: "Contact Number cannot be more than 10 characters",
                },
                "username":{
                    required: "Please Enter Username",
                },
                "password":{
                    required: "Please Enter Password",
                },
                "non_busines_confirmpass":{
                    required: "Please Enter Confirm Password",
                },
            }                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  
        });

 // PASSWORD CHECK
  
    $('#repeatcheck').hide();

  $('#repeat').keyup(function(){
    repeatcheck();
  });
  
  function repeatcheck(){
  var repeat = $('#repeat').val();
     var password = $('#password').val();
  
  if(password != repeat){
  $('#repeatcheck').show();
  $('#repeatcheck').html("password are not matching");
  $('#repeatcheck').focus();
  $('#repeatcheck').css("color","red");
                     
         data_repeatcheck  = false ;
                  return  false;
  }
          else{
  $('#repeatcheck').hide();
          }
  
  }
    
    });

    



//     $(document).ready(function() {
//     $('#number_only').on('input', function() {
//         var input = $(this).val();
//         var numericInput = input.replace(/\D/g, ''); // Replace all non-digit characters with an empty string
        
//         $(this).val(numericInput); // Set the input field's value to the numeric input
        
//         if (numericInput.length === 10) {
//             // Valid phone number
//             $(this).removeClass('is-invalid').addClass('is-valid');
//         } else {
//             // Invalid phone number
//             $(this).removeClass('is-valid').addClass('is-invalid');
//         }
//     });
// });



    $('.form_name').bind('keyup blur',function(){ 
    var node = $(this);
    node.val(node.val().replace(/[^a-z]/g,'') ); }
);








</script>

@stop