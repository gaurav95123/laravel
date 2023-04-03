@extends('admin.layout.adminLayout')
@section('title','View Non-Business')
@section('content')

    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-12">
                <div class="page_title_box d-flex flex-wrap align-items-center justify-content-between">
                    <div class="page_title_left">
                        <h3 class="f_s_25 f_w_700 dark_text">Non-Business</h3>
                        <ol class="breadcrumb page_bradcam mb-0">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                            <li class="breadcrumb-item "><a href="Non-Business.php">Non-Business</a></li>
                            <li class="breadcrumb-item active">View Non-Business</li>
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
                                                <img src="{{asset('public/admin/common/business/'.@$non_business['profile_image'])}}"
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
                                                                            <input type="text"
                                                                                class="form-control"
                                                                                placeholder="Ex. Jack" value="{{$non_business['name']}}" readonly>
                                                                        </div>
                                                                    </div>
                            
                                                                    <div class="col-xl-6">
                                                                        <div class="form-group">
                                                                            <label for="">E-mail ID</label>
                                                                            <input type="text"
                                                                                class="form-control"
                                                                                placeholder="Ex. Jack@mailinator.com" value="{{$non_business['email']}}" readonly>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-6">
                                                                        <div class="form-group">
                                                                            <label for="">Select DOB</label>
                                                                            <input type="Date"
                                                                                class="form-control"
                                                                                placeholder="Ex. 02 Jan, 2023" value="{{$non_business['dob']}}" readonly>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-6">
                                                                        <div class="form-group">
                                                                            <label for="">Phone Number</label>
                                                                            <input type="text"
                                                                                class="form-control"
                                                                                placeholder="Ex. 740-856-6555" value="{{$non_business['phone_no']}}" readonly>
                                                                        </div>
                                                                    </div>
                                                                
                            
                                                                
                                                                    <div class="col-xl-6">
                                                                        <div class="form-group">
                                                                            <label for=""> UserName
                                                                                </label>
                                                                            <input type="text"
                                                                                class="form-control"
                                                                                placeholder="Ex. 7485!jack" value="{{$non_business['username']}}" readonly>
                                                                        </div>
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
                                                                    <!-- <div class="user-info-main col-xl-6">
                                                                    <div class="form-group"><label for="">Complete Address</label>
                                                                            <textarea class="form-control"
                                                                                name="" id="" cols="50" rows="1"
                                                                                placeholder="Complete Address" readonly></textarea>
                                                                        </div>
                                                                    </div> -->
                                                                    <div class="col-xl-12 text-center mt-3">
                                                                        <!-- <button class="btn_1 me-3">Save</button> -->
                                                                        <!-- <button class="btn_2">back</button> -->
                                                                        <a class="btn_1" href="{{url('/nonbusiness/manage')}}" >back</a>
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