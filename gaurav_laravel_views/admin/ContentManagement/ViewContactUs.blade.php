@extends('admin.layout.adminLayout')
@section('title','View Contact Us')
@section('content')

    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-12">
                <div class="page_title_box d-flex flex-wrap align-items-center justify-content-between">
                    <div class="page_title_left">
                        <h3 class="f_s_25 f_w_700 dark_text">View Contact Us</h3>
                        <ol class="breadcrumb page_bradcam mb-0">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                            <li class="breadcrumb-item"><a href="contactUs.php">Contact Us</a></li>
                            <li class="breadcrumb-item active">View Contact Us</li>
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
                                <div class="row justify-content-center">
                                    <div class="col-xl-10">
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <div class="form-group">
                                                    <label for="">Full Name</label>
                                                    <input type="text" class="form-control"
                                                        placeholder="Ex. Jodeph" readonly>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="form-group">
                                                    <label for="">Email</label>
                                                    <input type="text" class="form-control"
                                                        placeholder="Ex. joseph@mailinator.com" readonly>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="form-group">
                                                    <label for="">Phone Number</label>
                                                    <input type="text" class="form-control"
                                                        placeholder="Ex. 970-708-8078" readonly>
                                                </div>
                                            </div>
                                            <div class="col-xl-12">
                                                <div class="form-group">
                                                    <label for="">Subject</label>
                                                    <textarea class="form-control"
                                                        id="exampleFormControlTextarea1" rows="3" readonly>conic Online Luxury Home Decor Brand that creates and curates world-class premium homeconic conic Online Luxury Home Decor Brand that creates and curates world.
                                                    </textarea>
                                                </div>
                                            </div>
                                            <div class="col-xl-12">
                                                <div class="form-group">
                                                    <label for="">Message</label>
                                                    <textarea class="form-control"
                                                        id="exampleFormControlTextarea1" rows="4" readonly>conic Online Luxury Home Decor Brand that creates and curates world-class premium homeconic conic Online Luxury Home Decor Brand that creates and curates world-class premium homeconic conic Online.
                                                    </textarea>
                                                </div>
                                            </div>
                                            <div class="col-xl-12 text-center mt-3">
                                                <button class="btn_1">Save</button>
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