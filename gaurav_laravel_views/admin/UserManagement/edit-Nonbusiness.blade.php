@extends('admin.layout.adminLayout')
@section('title','UserManagement')
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
                        <h3 class="f_s_25 f_w_700 dark_text">Non-Business</h3>
                        <ol class="breadcrumb page_bradcam mb-0">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                            <li class="breadcrumb-item "><a href="{{url('/edit-Nonbusiness')}}">Non-Business</a></li>
                            <li class="breadcrumb-item active">Edit Non-Business</li>
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
                            
                            <form action = "{{url('/edit-nonbusiness/'.base64_encode($non_business['id']))}}" method="post" enctype="multipart/form-data" >
                                @csrf
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="uploadImage-main">
                                            <div class="image-container m-auto">
                                            <img src="{{asset('public/admin/common/business/'.$non_business['profile_image'])}}" alt="" id="hol">
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
                                                        <!-- <ul class="nav nav-tabs " id="myTab" role="tablist">
                                                            <div class="slider"></div>
                                                            <li class="nav-item" role="presentation">
                                                                <a class="nav-link active" id="home-tab"
                                                                    data-bs-toggle="tab" data-bs-target="#home"
                                                                    type="button" role="tab"
                                                                    aria-controls="home"
                                                                    aria-selected="true">Basic Info</a>
                                                            </li>
                                                            <li class="nav-item" role="presentation">
                                                                <a class="nav-link" id="profile-tab"
                                                                    data-bs-toggle="tab"
                                                                    data-bs-target="#profile" type="button"
                                                                    role="tab" aria-controls="profile"
                                                                    aria-selected="false">Physical
                                                                    Info</a>
                                                            </li>
                                                            <li class="nav-item" role="presentation">
                                                                <a class="nav-link" id="contact-tab"
                                                                    data-bs-toggle="tab"
                                                                    data-bs-target="#contact" type="button"
                                                                    role="tab" aria-controls="contact"
                                                                    aria-selected="false">Lifestyle</a>
                                                            </li>
                                                            <li class="nav-item" role="presentation">
                                                                <a class="nav-link" id="summary-tab"
                                                                    data-bs-toggle="tab"
                                                                    data-bs-target="#summary" type="button"
                                                                    role="tab" aria-controls="summary"
                                                                    aria-selected="false">My Self Summary</a>
                                                            </li>
                                                        </ul> -->
                                                        <div class="tab-content" id="myTabContent">
                                                            <div class="tab-pane fade show active" id="home"
                                                                role="tabpanel" aria-labelledby="home-tab">
                                                                <div class="row">
                                                                    <div class="col-xl-6">
                                                                        <div class="form-group">
                                                                            <label for="">Name</label>
                                                                            <input type="text" name="name"
                                                                                class="form-control" value="{{$non_business['name']}}"
                                                                                placeholder="Ex. Jack">
                                                                        </div>
                                                                    </div>
                            
                                                                    <div class="col-xl-6">
                                                                        <div class="form-group">
                                                                            <label for="">E-mail ID</label>
                                                                            <input type="email" name="email"
                                                                                class="form-control" value="{{$non_business['email']}}"
                                                                                placeholder="Ex. Jack@mailinator.com">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-6">
                                                                        <div class="form-group">
                                                                            <label for="">Select DOB</label>
                                                                            <input type="Date" name="dob"
                                                                                class="form-control" value="{{$non_business['dob']}}"
                                                                                placeholder="Ex. 02 Jan, 2023">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-6">
                                                                        <div class="form-group">
                                                                            <label for="">Phone Number</label>
                                                                            <input type="text" name="phone_no"
                                                                                class="form-control" value="{{$non_business['phone_no']}}"
                                                                                placeholder="Ex. 740-856-6555">
                                                                        </div>
                                                                    </div>
                                                                
                            
                                                                
                                                                    <div class="col-xl-6">
                                                                        <div class="form-group">
                                                                            <label for=""> Username
                                                                                </label>
                                                                            <input type="text" name="username"
                                                                                class="form-control" value="{{$non_business['username']}}"
                                                                                placeholder="Ex. 7485!Jack">
                                                                        </div>
                                                                    </div>
                                                                    <!-- <div class="col-xl-6">
                                                                        <div class="form-group">
                                                                            <label for=""> Create Password
                                                                                </label>
                                                                            <input type="password" name="non_busines_password"
                                                                                class="form-control" value="{{$non_business['non_busines_password']}}"
                                                                                placeholder="Ex. Create Password" autocomplete="off">
                                                                                <h6 id ="passwordcheck"></h6>
                                                                        </div>
                                                                    </div>      <div class="col-xl-6">
                                                                        <div class="form-group">
                                                                            <label for=""> Confirm Password
                                                                                </label>
                                                                            <input type="password" name="non_busines_confirmpass"
                                                                                class="form-control" value="{{$non_business['non_busines_confirmpass']}}"
                                                                                placeholder="Ex.  Confirm Password" autocomplete="off">
                                                                                <h6 id ="repeatcheck"></h6>
                                                                        </div> 
                                                                    </div>-->
                                                                    <!-- <div class="col-xl-6 user-info-main">
                                                                    <div class="form-group"><label for="">Complete Address</label>
                                                                        <textarea class="form-control" name="" id="" cols="50" rows="1" placeholder="Complete Address"></textarea>
                                                                    </div>
                                                                    </div> -->
                            
                                                                    <div class="col-xl-12 text-center mt-3">
                                                                        <!-- <button class="btn_1">Back</button> -->
                                                                        <input type="submit" name="submit" class="btn_1" value="send">
                                                                       <a href="{{url('/nonbusiness/manage')}}" class="btn_1">Back</a> 
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <!-- <div class="form-group">
                                                                            <label for="">Hair Color</label>
                                                                            <input type="text"
                                                                                class="form-control"
                                                                                placeholder="Ex. Black">
                                                                        </div>
                                                                    </div>
                                                                    <div   <div class="tab-pane fade" id="profile"
                                                                role="tabpanel" aria-labelledby="profile-tab">
                                                                <div class="row">
                                                                    <div class="col-xl-6">
                                                                        <div class="form-group">
                                                                            <label for="">Height</label>
                                                                            <input type="text"
                                                                                class="form-control"
                                                                                placeholder="Ex. 72kg">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-6">
                                                                        class="col-xl-6">
                                                                        <div class="form-group">
                                                                            <label for="">Eye Color</label>
                                                                            <input type="text"
                                                                                class="form-control"
                                                                                placeholder="Ex. Brown">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-6">
                                                                        <div class="form-group">
                                                                            <label for="">Body Type</label>
                                                                            <input type="text"
                                                                                class="form-control"
                                                                                placeholder="Ex. Tall">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-6">
                                                                        <div class="form-group">
                                                                            <label for="">Ethnicity</label>
                                                                            <input type="Date"
                                                                                class="form-control"
                                                                                placeholder="Ex. Middle Eastern">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-12 text-center mt-3">
                                                                        <button class="btn_1">Next</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane fade" id="contact"
                                                                role="tabpanel" aria-labelledby="contact-tab">
                                                                <div class="row">
                                                                    <div class="col-xl-6">
                                                                        <div class="form-group">
                                                                            <label for="">Interest</label>
                                                                            <input type="text"
                                                                                class="form-control"
                                                                                placeholder="Ex. Dogs">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-6">
                                                                        <div class="form-group">
                                                                            <label for="">Favorite
                                                                                Vocations</label>
                                                                            <input type="text"
                                                                                class="form-control"
                                                                                placeholder="Ex. Bangladesh">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-6">
                                                                        <div class="form-group">
                                                                            <label for="">Looking for</label>
                                                                            <input type="text"
                                                                                class="form-control"
                                                                                placeholder="Ex. Affair">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-6">
                                                                        <div class="form-group">
                                                                            <label for="">Smoking</label>
                                                                            <input type="text"
                                                                                class="form-control"
                                                                                placeholder="Ex. Casual Smoking">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-6">
                                                                        <div class="form-group">
                                                                            <label for="">Language</label>
                                                                            <input type="Date"
                                                                                class="form-control"
                                                                                placeholder="Ex. English">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-12 text-center mt-3">
                                                                        <button class="btn_1">Next</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane fade" id="summary"
                                                                role="tabpanel" aria-labelledby="summary-tab">
                                                                <div class="user-info-main mt-3">
                                                                    <textarea class="form-control" rows="5"
                                                                        value="Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolores, nostrum"></textarea>

                                                                </div>
                                                                <div class="text-center mt-3">
                                                                    <button class="btn_1 mt-2">Save</button>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane fade" id="photos" -->
                                                                <!-- role="tabpanel" aria-labelledby="photos-tab">
                                                                <div class="user-info-main mt-3">
                                                                    <div class="row">
                                                                        <div class="col-xl-4">
                                                                            <div class="card">
                                                                                <div
                                                                                    class="card-body upld-prfl-img">
                                                                                    <figure>
                                                                                        <img src="https://images.pexels.com/photos/1534633/pexels-photo-1534633.jpeg?cs=srgb&dl=pexels-shukhrat-umarov-1534633.jpg&fm=jpg"
                                                                                            alt="Trulli"
                                                                                            style="width:100%">
                                                                                        <figcaption
                                                                                            class="text-center">
                                                                                            <p> Upload Date</p>
                                                                                            02 jan, 2023
                                                                                        </figcaption>
                                                                                    </figure>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div> -->
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
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" crossorigin="anonymous" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/additional-methods.min.js"> </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js" integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
<script>

    $(document).ready(function() { 

// PASSWORD CHECK
  
$('#repeatcheck').hide();

$('#repeat').keyup(function(){
  repeatcheck();
});

$(document).ready(function () {
        $('#img').on('change', function () {
            $('#hol').attr('src', URL.createObjectURL(event.target.files[0]));
        });
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
</script>

@stop