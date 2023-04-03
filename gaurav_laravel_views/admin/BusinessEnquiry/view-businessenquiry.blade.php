@extends('admin.layout.adminLayout')
@section('title','View BusinessEnquiry')
@section('content')

    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-12">
                <div class="page_title_box d-flex flex-wrap align-items-center justify-content-between">
                    <div class="page_title_left">
                        <h3 class="f_s_25 f_w_700 dark_text">View BusinessEnquiry</h3>
                        <ol class="breadcrumb page_bradcam mb-0">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                            <li class="breadcrumb-item "><a href="Non-Business.php"> BusinessEnquiry</a></li>
                            <li class="breadcrumb-item active">View BusinessEnquiry</li>
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
                                    
                                    
                                    <div class="col-xl-6">
                                        <div class="form-group">
                                            <label for="">Description</label>
                                            <input type="text"
                                                class="form-control"
                                                placeholder="" value="{{$busines['enquiry']}}" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 text-center mt-3">
                                    <a class="btn_1" href="{{url('/busines')}}" >back</a>
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


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"> </script>  

    

@stop
                                                                    
                                                            
                                    
        

