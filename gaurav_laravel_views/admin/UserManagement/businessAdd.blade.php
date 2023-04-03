@extends('admin.layout.adminLayout')
@section('title',' Add Business')
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
                        <h3 class="f_s_25 f_w_700 dark_text">Business</h3>
                        <ol class="breadcrumb page_bradcam mb-0">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                            <li class="breadcrumb-item "><a href="{{url('/business/manage')}}">Business</a></li>
                            <li class="breadcrumb-item active">Add Business</li>
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
                                <form action="{{url('/addbusiness/manage')}}" method="post" id="add" enctype="multipart/form-data">
                                    @csrf
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="uploadImage-main">
                                            <div class="image-container m-auto">

                                          
                                                <img src="{{asset('admin/common/img/user_profile.png')}}" alt="" id="hol">
                                                
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

                                                                    <input type="hidden"
                                                                        value="business"
                                                                        name="type">

                                                                    <div class="col-xl-6" >
                                                                        <div class="form-group"  >
                                                                            <label for="">Business Name</label>
                                                                            <input type="text"
                                                                                class="form-control"
                                                                                name="businessname"
                                                                                placeholder="Ex. jack">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-6" >
                                                                        <div class="form-group" >
                                                                            <label for="">Business Owner
                                                                                Name</label>
                                                                            <input type="text"
                                                                                class="form-control"
                                                                                name="username"
                                                                                placeholder="Jack" id="form1">
                                                                        </div>
                                                                        
                                                                    </div>
                                                                    <div class="col-xl-6">
                                                                        <div class="form-group">
                                                                            <label for="">Business E-mail
                                                                                ID</label>
                                                                            <input type="email"
                                                                                class="form-control"
                                                                                name="email"
                                                                                placeholder="Ex. jack@mailinator.com">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-6">
                                                                        <div class="form-group">
                                                                            <label for="">Select Your Business
                                                                                Type/Category</label>
                                                                            <Select class="form-control" name="business_category">
                                                                            <option value="businesstype"> Select Your Business Type/Category</option>
                                                                                <option value="Accountent">Accountent
                                                                                </option>
                                                                                <option value="Editor">Editor</option>
                                                                            </Select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-6">
                                                                        <div class="form-group">
                                                                            <label for="">Enter Business
                                                                                Websiteline</label>
                                                                            <input type="email"
                                                                                class="form-control"
                                                                                name="website"
                                                                                placeholder="Ex. jack@mailinator.com">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-6">
                                                                        <div class="form-group">
                                                                            <label for="">Business Contact
                                                                                Number</label>
                                                                            <input type="text"
                                                                                class="form-control"
                                                                                name="phone_no"
                                                                                placeholder="Ex.123" id="number_only">
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-xl-6">
                                                                        <div class="form-group">
                                                                            <label for="">Alternate Business
                                                                                Contact Number(Optional)</label>
                                                                            <input type="text"
                                                                                class="form-control"
                                                                                name="alternatePhoneno"
                                                                                placeholder="Ex.123" id="number_onlyy">
                                                                        </div>
                                                                    </div>       
                                                                    </div>
                                                                    <div class="col-xl-12">
                                                                        <div class="form-group">
                                                                            <h4>Business
                                                                                Address</h4>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-6">
                                                                        <div class="form-group">
                                                                            <label for="">Country
                                                                                </label>
                                                                               
                                                                            <Select class="form-control" name="country" id="country-dropdown">
                                                                            <option value=""></option>
                                                                            @foreach($country as $list)
                                                                           
                                                                                <option value="{{$list['id']}}" >

                                                                                {{$list['name']}}

                                                                                </option>

                                                                                @endforeach
                                                                            </Select>
                                                                        </div>
                                                                    </div>
                                                                     <div class="col-xl-6">
                                                                        <div class="form-group">
                                                                            <label for="">State
                                                                                </label>
                                                                            <Select class="form-control" name="state" id="state-dropdown">
                                                                                
                                                                            </Select>
                                                                        </div>
                                                                    </div>                                                                   
                                                                    <div class="col-xl-6">
                                                                        <div class="form-group">
                                                                            <label for="">City
                                                                                </label>
                                                                            <Select class="form-control" name="city" id="city-dropdown">
                                                                            
                                                                            </Select>
                                                                        </div>
                                                                    </div> 
                                                                    <div class="col-xl-6">
                                                                        <div class="form-group" name="image">
                                                                            <label for="">Pin Code</label>
                                                                            <input type="text"
                                                                                class="form-control"
                                                                                placeholder="Pin Code"
                                                                                name="pincode" id="pincode">                                                                 
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-6 user-info-main">
                                                                    <div class="form-group"><label for="">Complete Address</label>
                                                                        <textarea class="form-control" name="complete_address" id="" cols="50" rows="1" placeholder="Complete Address"></textarea>
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
    $(document).ready(function (){ 
        $('#number_only').bind('keyup paste', function(){
            this.value = this.value.replace(/[^0-9]/g, '');
        });

        $('#number_onlyy').bind('keyup paste', function(){
            this.value = this.value.replace(/[^0-9]/g, '');
        });


        $('#pincode').bind('keyup paste', function(){
            this.value = this.value.replace(/[^0-9]/g, '');
        });

    });
</script>

<script>

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

        $("#add").validate({
         
            rules: {
                "profile_image":{
                    required: true,          
                },
                "businessname":{
                    required: true,
                },
                "username":{
                    required: true,
                },
                "email":{
                    required: true,
                },
                "business_category":{
                    required: true,
                },
                "website":{
                    required: true,
                },
                "phone_no":{
                    required: true,
                    maxlength: 10,
                },
                'alternatePhoneno':{
                    maxlength: 10,
                },
                "country":{
                    required: true,
                },
                "state":{
                    required: true,
                },
                "city":{
                    required: true,
                },
                "pincode":{
                    required: true,
                    maxlength: 9,
                },
                "complete_address":{
                    required: true,
                },
            },
              
            messages: {
                "image":{
                    required: "Please Add Image",          
                },
                "businessname":{
                    required: "Please Enter Business Name",
                },
                "username":{
                    required: "Please Enter Business Owner Name",
                },
                "email":{
                    required: "Please Enter Business E-mail ID",
                },
                "business_category":{
                    required: "Please Select Your Business Type/Category",
                },
                "website":{
                    required: "Please Enter Business Websiteline",
                },
                "phone_no":{
                    required: "Please Enter Business Contact Number",
                    maxlength: "Contact Number cannot be more than 10 characters",
                },
                "alternatePhoneno":{
                    maxlength: "Contact Number cannot be more than 10 characters",
                },
                "country":{
                    required: "Select Your Country",
                },
                "state":{
                    required: "Select Your State",
                },
                "city":{
                    required: "Select Your City",
                },
                "pincode":{
                    required: "Please Enter Pincode",
                    maxlength: " Pin Code must be at least 9 characters ",
                },
                "complete_address":{
                    required: "Please Enter Address",
                },
            }                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    
        });
    });
        
//DROPDOWN


$('#country-dropdown').on('change', function () {

    var idCountry = this.value; 

    $("#state-dropdown").html('');

    $.ajax({

        url: "{{url('getState')}}",

        type: "POST",

        data: {

            country_id: idCountry,

            _token: '{{csrf_token()}}'

        },

        dataType: 'json',

        success: function (result) {
           console.log('result============',result)
            $('#state-dropdown').html('<option value="">-- Select State --</option>');

            $.each(result.state, function (key, value) {

                $("#state-dropdown").append('<option value="' + value

                    .id + '">' + value.name + '</option>');

            });

            $('#city-dropdown').html('<option value="">-- Select City --</option>');

        }

    });

});

/*------------------------------------------

--------------------------------------------

State Dropdown Change Event

--------------------------------------------

--------------------------------------------*/

$('#state-dropdown').on('change', function () {

    var idState = this.value;
    $("#city-dropdown").html('');

    $.ajax({

        url: "{{url('getCity')}}",

        type: "POST",

        data: {

            state_id: idState,

            _token: '{{csrf_token()}}'

        },

        dataType: 'json',

        success: function (res) {

            $('#city-dropdown').html('<option value="">-- Select City --</option>');

            $.each(res.city, function (key, value) {

                $("#city-dropdown").append('<option value="' + value

                    .id + '">' + value.name + '</option>');

            });

        }

    });

});
//END DROPDOWN
    
</script>

@stop