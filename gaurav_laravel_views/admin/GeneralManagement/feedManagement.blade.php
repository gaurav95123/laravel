@extends('admin.layout.adminLayout')
@section('title','UserManagement')
@section('content')

<div class="container-fluid p-0 ">
                <div class="row">
                    <div class="col-12">
                        <div class="page_title_box d-flex flex-wrap align-items-center justify-content-between">
                            <div class="page_title_left">
                                <h3 class="f_s_25 f_w_700 dark_text">Feed Managment</h3>
                                <ol class="breadcrumb page_bradcam mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                                    <li class="breadcrumb-item active">Feed Managment</li>
                                </ol>
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
                                    <div class="white_box_tittle list_header">
                                        <h4>Feed Managment List</h4>
                                        <div class="box_right d-flex lms_block align-items-center">
                                            <!-- <div class="dropdown client_drop me-3">
                                                <a class="btn btn-secondary dropdown-toggle" href="#" role="button"
                                                    id="dropdownMenuLink" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <i class="fa fa-filter me-2" aria-hidden="true"></i>
                                                    filter
                                                </a>

                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                    <li><a class="dropdown-item" href="#">Grflirt </a></li>
                                                    <li><a class="dropdown-item" href="#">Cyflirt</a></li>
                                                    <li><a class="dropdown-item" href="#">LoveSecret</a></li>
                                                </ul>
                                            </div> -->
                                            <div class="serach_field_2">
                                                <div class="search_inner">
                                                    <form Active="#">
                                                        <div class="search_field">
                                                            <input type="text" placeholder="Search content here...">
                                                        </div>
                                                        <button type="submit"> <i class="ti-search"></i> </button>
                                                    </form>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="QA_table table-responsive mb_30">

                                        <table class="table yuactive">
                                            <thead>
                                                <tr>

                                                    <th scope="col">User Name</th>
                                                    <th scope="col">Posted On Date</th>
                                                    <th scope="col">Likes</th>
                                                    <th scope="col">Comments</th>
                                  
                                                    <th scope="col">Image</th>
                                                    <th scope="col">Post(Show/Hide)</th>
                                                    <!-- <th scope="col">Website Logo</th> -->
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                         
                                            <tbody>
                                               @foreach($post as $list) 
                                                <tr>
                                                    <td scope="row">
                                                        {{$list['title']}}
                                                    </td>
                                                    <td>
                                                        {{$list['posted_date']}}
                                                    </td>
                                                    <td>
                                                        {{$list['total_likes']}}
                                                    </td>
                                                    <td>
                                                        {{$list['content']}}
                                                    </td>                                      
                                                    <td>
                                              
                                                        <img src="{{$post_image['0']['media_url']}}" alt="" height="150px" width="150px">                                                   
                                                    </td>
                                                    

                                                    <!-- <td>
                                                        <div class="sats_clints">
                                                            <img src="img/main-logo.png" alt="">
                                                        </div>
                                                    </td> -->
                                                    <td>
                                                        <div class="form-check form-switch"
                                                            style="margin-bottom:0;display: flex;justify-content: center;align-items: center;">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="flexSwitchCheckDefault">
                                                        
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="action_btns d-flex justify-content-center">
                                                            <a href="/kvsAdmin/viewfeedmangemnt.php" class="action_btn mr_10"> <i
                                                                    class="far fa-eye"></i>
                                                            </a>
                                                            <a class="action_btn mr_10" data-bs-toggle="modal"
                                                                data-bs-target="#Modal_faq_Reply"><i
                                                                    class="far fa-share-square"></i>
                                                            </a>
                                                            <a class="action_btn"> <i class="fas fa-trash"></i>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                @endforeach
                                                <!-- <tr>
                                                    <td scope="row">
                                                        John
                                                    </td>
                                                    
                                                    <td>
                                                       01-12-25
                                                    </td>
                                                    <td>
                                                        10
                                                    </td>
                                                    <td>
                                                        ksjfdjk
                                                    </td>
                                                    <td>

                                                    <img src="img/client_img.png" alt="">

                                                    </td>

                                                    <td>
                                                        <div class="form-check form-switch"
                                                            style="margin-bottom:0;display: flex;justify-content: center;align-items: center;">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="flexSwitchCheckDefault">
                                                        
                                                        </div>
                                                    </td>

                                                    <!- <td>
                                                        <div class="sats_clints">
                                                            <img src="img/main-logo.png" alt="">
                                                        </div>
                                                    </td> --
                                                    <td>
                                                        <div class="action_btns d-flex justify-content-center">
                                                            <a href="/kvsAdmin/viewfeedmangemnt.php" class="action_btn mr_10"> <i
                                                                    class="far fa-eye"></i>
                                                            </a>
                                                            <a class="action_btn mr_10" data-bs-toggle="modal"
                                                                data-bs-target="#Modal_faq_Reply"><i
                                                                    class="far fa-share-square"></i>
                                                            </a>
                                                            <a class="action_btn"> <i class="fas fa-trash"></i>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td scope="row">
                                                        John
                                                    </td>

                                                    <td>
                                                       15-1-2022
                                                    </td>
                                                    <td>
                                                        50
                                                    </td>
                                                    <td>

                                                        ksjfdjk
                                                    </td>
                                                    <td>

                                                    <img src="img/client_img.png" alt="">

                                                    </td>

                                                    <td>
                                                        <div class="form-check form-switch"
                                                            style="margin-bottom:0;display: flex;justify-content: center;align-items: center;">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="flexSwitchCheckDefault">
                                                        
                                                        </div>
                                                    </td>
                                                    <!- <td>
                                                        <div class="sats_clints">
                                                            <img src="img/main-logo.png" alt="">
                                                        </div>
                                                    </td> --
                                                    <td>
                                                        <div class="action_btns d-flex justify-content-center">
                                                            <a href="/kvsAdmin/viewfeedmangemnt.php" class="action_btn mr_10"><i
                                                                    class="far fa-eye"></i>
                                                            </a>
                                                            <a class="action_btn mr_10" data-bs-toggle="modal"
                                                                data-bs-target="#Modal_faq_Reply"><i
                                                                    class="far fa-share-square"></i>
                                                            </a>
                                                            <a class="action_btn"> <i class="fas fa-trash"></i>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr> -->
                                            </tbody>
                                        </table>
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
<!-- -----------modal-faq-Edit----------------->
<div class="modal fade view_faq_Modal" id="Modal_faq_Reply" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">Reply</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="div_question">
                    <!-- <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Subject</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="2">conic Online Luxury Home Decor Brand that creates and curates world-class premium homeconic conic Online Luxury Home Decor Brand.
                        </textarea>
                    </div> -->
                    <div class="mb-3">
                        <!-- <label for="exampleFormControlTextarea1" class="form-label">Reply</label> -->
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="4">conic Online Luxury Home Decor Brand that creates and curates world-class premium homeconic conic Online Luxury Home Decor Brand that creates and curates world-class premium homeconi.
                        </textarea>
                    </div>
                </div>
            </div>
            <div class="modal-footer justify-content-center mb-3">
                <button type="button" class="btn_1 Outline_btnnn" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn_1">Save</button>
            </div>
        </div>
    </div>
</div>