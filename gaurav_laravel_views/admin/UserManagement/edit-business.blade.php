@extends('admin.layout.adminLayout')
@section('title','Edit Business')
@section('content')

    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-12">
                <div class="page_title_box d-flex flex-wrap align-items-center justify-content-between">
                    <div class="page_title_left">
                        <h3 class="f_s_25 f_w_700 dark_text">Business</h3>
                        <ol class="breadcrumb page_bradcam mb-0">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                            <li class="breadcrumb-item "><a href="userManagement.php">Business</a></li>
                            <li class="breadcrumb-item active">Edit Business</li>
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

                            <form action = "{{url('/edit/'.base64_encode($business['id']))}}" method="post" enctype="multipart/form-data">
                                @csrf

                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="uploadImage-main">
                                            <div class="image-container m-auto">
                                
                                                <img src="{{asset('public/admin/common/business/'.$business['profile_image'])}}"
                                                    alt="" name="profile_image" id="hol"  >
                                                <div class="upld-btn" >
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
                                                                            <label for="">Business Name</label>
                                                                            <input type="text" name="businessname"
                                                                                class="form-control"
                                                                                placeholder="Ex. jack"  value="{{$business['businessname']}}" >
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-6">
                                                                        <div class="form-group">
                                                                            <label for="">Business Owner
                                                                                Name</label>
                                                                            <input type="text" name="username"
                                                                                class="form-control"
                                                                                placeholder="Jack" value="{{$business['username']}}" >
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-6">
                                                                        <div class="form-group">
                                                                            <label for="">Business E-mail
                                                                                ID</label>
                                                                            <input type="text" name="email"
                                                                                class="form-control"
                                                                                placeholder="Ex. Jack@mailinator.com" value="{{$business['email']}}"
                                                                                >
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-6">
                                                                        <div class="form-group">
                                                                            <label for="">Select Your Business
                                                                                Type/Category</label>
                                                                                <input type="text" name="business_category"
                                                                                class="form-control"
                                                                                placeholder="Ex. 7485!jack" 
                                                                                value="{{$business['business_category']}}">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-6">
                                                                        <div class="form-group">
                                                                            <label for="">Enter Business
                                                                                Websiteline</label>
                                                                            <input type="text" name="website"
                                                                                class="form-control"
                                                                                placeholder="Ex. Jack@mailinator.com"
                                                                                value="{{$business['website']}}"
                                                                                >
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-6">
                                                                        <div class="form-group">
                                                                            <label for="">Enter Business
                                                                            contact</label>
                                                                            <input type="text" name="phone_no"
                                                                                class="form-control"
                                                                                placeholder="Ex. 7485"
                                                                                value="{{$business['phone_no']}}"
                                                                                >
                                                                        </div>
                                                                    </div>                                                                   
                                                                    <div class="col-xl-6">
                                                                        <div class="form-group">
                                                                            <label for="">Alternate Business
                                                                                contact number(Optional)</label>
                                                                            <input type="text" name="alternatePhoneno"
                                                                                class="form-control"
                                                                                placeholder="Ex. 7485!jack" 
                                                                                value="{{$business['alternatePhoneno']}}">
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
                                                                            <label for="">Country</label>
                                                                            
                                                                            <select class="form-control" id="country-dropdown" name="country">
                                                                                    @foreach($country as $listt)                                                                     
                                                                                        <option {{ $business['country'] ==  $listt['name'] ? 'selected' : '' }}>{{ $listt['name'] }}</option>
                                                                                    @endforeach
                                                                                </select>     
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-6">
                                                                        <div class="form-group">
                                                                            <label for="">State</label>
                                                                            <Select class="form-control" name="state" id="state-dropdown">
                                                                                <option value="{{ $business['State_data']['name']}}"> {{ $business['State_data']['name']}}</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-6">
                                                                        <div class="form-group">
                                                                            <label for="">City</label>
                                                                            <Select class="form-control" name="city" id="city-dropdown">
                                                                                <option value="{{ $business['city_data']['name']}}"> {{ $business['city_data']['name']}}</option>
                                                                            </Select>                                                                              
                                                                        </div>
                                                                    </div>
                                                                
                                                                    <div class="col-xl-6">
                                                                        <div class="form-group">
                                                                            <label for="">Pin Code</label>
                                                                            <input type="text" name="pincode"
                                                                                class="form-control"
                                                                                placeholder="Pin Code" value="{{ $business['pincode'] }}">
                                                                        </div>
                                                                    </div>
                                                                    <div class="user-info-main col-xl-6">
                                                                    <div class="form-group"><label for="">Complete Address</label>
                                                                    <input type="text" class="form-control" name="complete_address"
                                                                                name="" id="" cols="50" rows="1"
                                                                                placeholder="Complete Address" value="{{ $business['complete_address'] }}">
                                                                        </div>
                                                                    </div>
                                                    
                                                                    
                                                                    <div class="col-xl-12 text-center mt-3">
                                                                        <!-- <button class="btn_1 me-3">Save</button> -->
                                                                  
                                                                <a class="btn_1 me-3"><input type="submit" class="btn_1" value="send"></a> 
                                                            <div class="btn_1 me-3"> <a class="btn_1" href="{{url('/business/manage')}}">back</a>
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
        
//DROPDOWN

$('#country-dropdown').on('change', function () {

    var idCountry = this.value;
    // alert(idCountry);

    $("#state-dropdown").html('');

    $.ajax({

        url: "{{url('getState')}}",

        type: "POST",

        data: {

            country_id: idCountry,

            _token: '{{csrf_token()}}',

            

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
    });
</script>

 

@stop