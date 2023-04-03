@extends('admin.layout.adminLayout')
@section('title','View Business')
@section('content')

    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-12">
                <div class="page_title_box d-flex flex-wrap align-items-center justify-content-between">
                    <div class="page_title_left">
                        <h3 class="f_s_25 f_w_700 dark_text">view Business</h3>
                        <ol class="breadcrumb page_bradcam mb-0">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                            <li class="breadcrumb-item "><a href="userManagement.php">Business</a></li>
                            <li class="breadcrumb-item active">View Business</li>
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
                                        <div class="uploadImage-main">
                                            <div class="image-container m-auto">
                                                <img src="{{asset('public/admin/common/business/'.$business['profile_image'])}}"
                                                    alt="">
                                                <!-- <div class="upld-btn">
                                                    <i class="fa fa-edit"></i>
                                                    <input type="file">
                                                </div> -->
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
                                                                            <input type="text"
                                                                                class="form-control"
                                                                                placeholder="Ex. jack" value="{{$business['name']}}" readonly>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-6">
                                                                        <div class="form-group">
                                                                            <label for="">Business Owner
                                                                                Name</label>
                                                                            <input type="text"
                                                                                class="form-control"
                                                                                placeholder="Jack" value="{{$business['username']}}" readonly>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-6">
                                                                        <div class="form-group">
                                                                            <label for="">Business E-mail
                                                                                ID</label>
                                                                            <input type="text"
                                                                                class="form-control"
                                                                                placeholder="Ex. Jack@mailinator.com"
                                                                                value="{{$business['email']}}"
                                                                                readonly>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-6">
                                                                        <div class="form-group">
                                                                            <label for="">Select Your Business
                                                                                Type/Category</label>
                                                                                <input type="text"
                                                                                class="form-control"
                                                                                placeholder="Ex. 7485!jack" 
                                                                                value="{{$business['business_category']}}" readonly>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-6">
                                                                        <div class="form-group">
                                                                            <label for="">Enter Business
                                                                                Websiteline</label>
                                                                            <input type="text"
                                                                                class="form-control"
                                                                                placeholder="Ex. Jack@mailinator.com"
                                                                                value="{{$business['website']}}"
                                                                                readonly>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-6">
                                                                        <div class="form-group">
                                                                            <label for="">Business Contact Number</label>
                                                                            <input type="text"
                                                                                class="form-control"
                                                                                placeholder="Ex. 7485!jack"
                                                                                value="{{$business['phone_no']}}"
                                                                                readonly>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-6">
                                                                        <div class="form-group">
                                                                            <label for="">Alternate Business
                                                                                contact number(Optional)</label>
                                                                            <input type="text"
                                                                                class="form-control"
                                                                                placeholder="Ex. 7485!jack" 
                                                                                value="{{$business['alternatePhoneno']}}" readonly>
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
                                                                            <input type="text"
                                                                                class="form-control"
                                                                                placeholder="Ex. 7485!jack" 
                                                                                value="{{$business['Country_data']['name']}}" readonly>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-6">
                                                                        <div class="form-group">
                                                                            <label for="">State</label>
                                                                            <input type="text"
                                                                                class="form-control"
                                                                                placeholder="Ex. 7485!jack" 
                                                                                value="{{$business['State_data']['name']}}" readonly>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-6">
                                                                        <div class="form-group">
                                                                            <label for="">City</label>
                                                                            <input type="text"
                                                                                class="form-control"
                                                                                placeholder="Ex. 7485!jack" 
                                                                                value="{{$business['city_data']['name']}}" readonly>
                                                                        </div>
                                                                    </div>
                                                                
                                                                    <div class="col-xl-6">
                                                                        <div class="form-group">
                                                                            <label for="">Pin Code</label>
                                                                            <input type="text"
                                                                                class="form-control"
                                                                                placeholder="Pin Code" value="{{$business['pincode']}}" readonly>
                                                                        </div>
                                                                    </div>
                                                                    <div class="user-info-main col-xl-6">
                                                                    <div class="form-group"><label for="">Complete Address</label>
                                                                            <input type="text" class="form-control"
                                                                                name="" id="" cols="50" rows="1"
                                                                                placeholder="Complete Address" value="{{$business['complete_address']}}" readonly>
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
                            <div class="col-xl-12 text-center mt-3"> <a class="btn_1" href="{{url('/business/manage')}}" >back</a>
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