@extends('admin.layout.adminLayout')
@section('title','UserManagement')
@section('content')

<style>
    .error{
        color:red;
        font-size:25px;
    }
</style>

    <div class="container-fluid p-0 ">
        <div class="row">
            <div class="col-12">
                <div class="page_title_box d-flex flex-wrap align-items-center justify-content-between">
                    <div class="page_title_left">
                        <h3 class="f_s_25 f_w_700 dark_text">Terms & Conditions</h3>
                        <ol class="breadcrumb page_bradcam mb-0">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                            <li class="breadcrumb-item active">Terms & Conditions</li>
                        </ol>
                    </div>
                    <!-- <div class="page_title_right">
                        <div class="page_date_button">
                            August 1, 2020 - August 31, 2020
                        </div> -->
                        <!-- <div class="dropdown common_bootstrap_button ">
                            <span class="dropdown-toggle" id="dropdownMenuButton" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                action
                            </span>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item f_s_16 f_w_600" href="index_2.html#"> Download</a>
                                <a class="dropdown-item f_s_16 f_w_600" href="index_2.html#"> Print</a>
                            </div>
                        </div> -->
                    <!-- </div> -->
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="white_card card_height_100 mb_30">
                    <div class="white_card_body">
                        <div class="QA_section">
                            <div class="d-flex justify-content-between mt-4">
                                <h4>Terms & Conditions</h4>
                                <!-- <div class="dropdown client_drop me-3">
                                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button"
                                        id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                        LoveSecret
                                    </a>

                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <li><a class="dropdown-item" href="#">Grflirt </a>
                                        </li>
                                        <li><a class="dropdown-item" href="#">Cyflirt</a>
                                        </li>
                                    </ul>
                                </div> -->
                            </div>
                        </div>
                    <form action="{{url('/termsconditions')}}" method="post" id="terms">
                    @csrf

                        <div class="editor_privacy mb-3 mt-4">
                            <textarea id="mytextarea" name="description" class="content"></textarea>
                        </div>
                        <div class="add_button mt-4 mb-3 text-center">
                             <a class="btn_1"><input type="submit" id="submit"class="btn_1" value="save"></a> 
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

@stop

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.4/jquery.validate.min.js" integrity="sha512-FOhq9HThdn7ltbK8abmGn60A/EMtEzIzv1rvuh+DqzJtSGq8BRdEN0U+j0iKEIffiw/yEtVuladk6rsG4X6Uqg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>

    $(document).ready(function() {

        $("#terms").validate({
            ignore:[],

            rules: {
                "content":{
                        required: true,
                        maxlength: 20,
                }
            },           
            messages: {
                "content": {
                        required: "Content is required",
                        maxlength: "Content cannot be more than 20 characters",
                },
            }                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    
        });
  
    });
</script>
@stop