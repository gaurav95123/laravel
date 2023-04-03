@extends('admin.layout.adminLayout')
@section('title','View BusinessRequirementManagement')
@section('content')

<div class="container-fluid p-0">
                <div class="row">
                    <div class="col-12">
                        <div class="page_title_box d-flex flex-wrap align-items-center justify-content-between">
                            <div class="page_title_left">
                                <h3 class="f_s_25 f_w_700 dark_text">View Business Requirement </h3>
                                <ol class="breadcrumb page_bradcam mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                                    <li class="breadcrumb-item "><a href="">Business Requirement Managment</a></li>
                                    <li class="breadcrumb-item active">View Business Requirement</li>
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
                                                        <img src="https://1fid.com/wp-content/uploads/2022/06/tiktok-profile-picture-2-1024x1024.jpg" alt="">
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
                                                                <div class="user-info-main mt-3">
                                                                    <ul>
                                                                        <li>
                                                                            <div class="info-title">
                                                                                <div class="info-title-sub">
                                                                                    <h6>Posted By </h6>
                                                                                </div>
                                                                                <div>
                                                                                    <p>:{{@$businesreq['user_details']['username']}}</p>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="info-title">
                                                                                <div class="info-title-sub">
                                                                                    <h6>Business Details </h6>
                                                                                </div>
                                                                                <div>
                                                                                    <p>: {{@$businesreq['user_details']['businessname']}}</p>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="info-title">
                                                                                <div class="info-title-sub">
                                                                                    <h6>Required </h6>
                                                                                </div>
                                                                                <div>
                                                                                    <p>: {{@$businesreq['Required_goods']}}</p>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="info-title">
                                                                                <div class="info-title-sub">
                                                                                    <h6>Business E-Mail </h6>
                                                                                </div>
                                                                                <div>
                                                                                    <p>: {{@$businesreq['user_details']['email']}}</p>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="info-title">
                                                                                <div class="info-title-sub">
                                                                                    <h6>Business Category </h6>
                                                                                </div>
                                                                                <div>
                                                                                    <p>:{{$businesreq['business_category']}}</p>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="info-title">
                                                                                <div class="info-title-sub">
                                                                                    <h6>Location Detailes </h6>
                                                                                </div>
                                                                                <div>
                                                                                    <p>:{{$businesreq['country']}}</p>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="info-title">
                                                                                <div class="info-title-sub">
                                                                                    <h6>Comments </h6>
                                                                                </div>
                                                                                <div>
                                                                                    <p>{{$businesreq['total_comments']}}
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="info-title">
                                                                                <div class="info-title-sub">
                                                                                    <h6>Contact Us </h6>
                                                                                </div>
                                                                                <div>
                                                                                    <p>: {{$businesreq['user_details']['phone_no']}}</p>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                     
                                                                             <div class="info-title">
                                                                                <div class="info-title-sub">
                                                                                    <h6>Assign </h6>
                                                                                </div>
                                                                              <form action="{{url('/view_assigneduser/'.base64_encode(@$businesreq['id']))}}" method="post">
                                                                                @csrf
                                                                                <div class="col-xl-12">
                                                                                    <Select class="form-control select2" name="assigned_user">
                                                                                    <option value=""> Select Users</option>
                                                                                    @foreach($user as $listt)                                                            
                                                                                        <option value="{{$listt['username']}}">{{$listt['username']}}</option>
                                                                                    @endforeach
                                                                                    </Select>
                                                                                </div>
                                                                                <input type="submit" value="Save">
                                                                              </form>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="div_content_chat mt-3 mb-4">
                                                                <div class="chat_writn mb-3">
                                                                    <h3>Chat with users</h3>
                                                                </div>
                                                                <div class="roll_inner d-flex">
                                                                    <div class="inner_wrappin">
                                                                        <div class="divnotification">
                                                                            <div class="help_buttn srch_chat_in mt-3 mb-1">
                                                                                <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                                                                                <div class="srch_control">
                                                                                    <i class="fa fa-search" aria-hidden="true"></i>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="ul_lists">
                                                                            <ul>
                                                                                <li>
                                                                                    <a class=" active_chat">
                                                                                        <div class="avtardis">
                                                                                            <div class="imgs_profile avatar-online">
                                                                                                <img src="https://production.promaticstechnologies.com/kvsAdmin/public/admin/common/img/profilebox/7.jpg ">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="contacts-content">
                                                                                            <div class="contacts-info">
                                                                                                <h6 class="chat-name text-truncate">Catherine
                                                                                                    Richardson
                                                                                                </h6>
                                                                                                <div class="chat-time text-end">
                                                                                                    <p class="mb-0">6:10</p>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="contacts-texts">
                                                                                                <p class="text-truncate">I’m sorry, I didn’t
                                                                                                    catch
                                                                                                    that.
                                                                                                    Could you
                                                                                                    please repeat?</p>
                                                                                                <div class="div_round_mg_nm">
                                                                                                    <span>6</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="">
                                                                                        <div class="avtardis">
                                                                                            <div class="imgs_profile avatar-online">
                                                                                                <img src="https://production.promaticstechnologies.com/kvsAdmin/public/admin/common/img/profilebox/7.jpg">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="contacts-content">
                                                                                            <div class="contacts-info">
                                                                                                <h6 class="chat-name text-truncate">Catherine
                                                                                                    Richardson
                                                                                                </h6>
                                                                                                <div class="chat-time">Just now</div>
                                                                                            </div>
                                                                                            <div class="contacts-texts">
                                                                                                <p class="text-truncate">I’m sorry, I didn’t
                                                                                                    catch
                                                                                                    that.
                                                                                                    Could you
                                                                                                    please repeat?</p>
                                                                                            </div>
                                                                                        </div>
                                                                                    </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="">
                                                                                        <div class="avtardis">
                                                                                            <div class="imgs_profile avatar-online">
                                                                                                <img src="https://production.promaticstechnologies.com/kvsAdmin/public/admin/common/img/profilebox/7.jpg">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="contacts-content">
                                                                                            <div class="contacts-info">
                                                                                                <h6 class="chat-name text-truncate">Catherine
                                                                                                    Richardson
                                                                                                </h6>
                                                                                                <div class="chat-time">Just now</div>
                                                                                            </div>
                                                                                            <div class="contacts-texts">
                                                                                                <p class="text-truncate">I’m sorry, I didn’t
                                                                                                    catch
                                                                                                    that.
                                                                                                    Could you
                                                                                                    please repeat?</p>
                                                                                            </div>
                                                                                        </div>
                                                                                    </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="">
                                                                                        <div class="avtardis">
                                                                                            <div class="imgs_profile avatar-online">
                                                                                                <img src="https://production.promaticstechnologies.com/kvsAdmin/public/admin/common/img/profilebox/7.jpg">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="contacts-content">
                                                                                            <div class="contacts-info">
                                                                                                <h6 class="chat-name text-truncate">Catherine
                                                                                                    Richardson
                                                                                                </h6>
                                                                                                <div class="chat-time">Just now</div>
                                                                                            </div>
                                                                                            <div class="contacts-texts">
                                                                                                <p class="text-truncate">I’m sorry, I didn’t
                                                                                                    catch that.Could you
                                                                                                    please repeat?
                                                                                                </p>
                                                                                            </div>
                                                                                        </div>
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div class="wrap_chatsecond w-100">
                                                                        <div class="divshowchat">
                                                                            <div class="divflex-chat">
                                                                                <div class="in_activs">
                                                                                    <div class="avtardis">
                                                                                        <div class="imgs_profile avatar-online">
                                                                                            <img src="https://production.promaticstechnologies.com/kvsAdmin/public/admin/common/img/profilebox/7.jpg">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="divphnnumber w-100">
                                                                                        <div class="d-flex justify-content-between">
                                                                                            <div class="contacts-content">
                                                                                                <div class="contacts-info">
                                                                                                    <h6 class="chat-name text-truncate">
                                                                                                        Catherine
                                                                                                        Richardson</h6>
                                                                                                </div>
                                                                                                <div class="contacts-texts">
                                                                                                    <p class="chat-time">Online</p>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="divborder">
                                                                                <div class="div_msg_cht">
                                                                                    <div class="div_chat_overlab innr_overLap">
                                                                                        <div class="divin_message">
                                                                                            <div class="message">
                                                                                                <div class="message-wrapper">
                                                                                                    <div class="message-content">
                                                                                                        <span>I have to give a presentation on
                                                                                                            global
                                                                                                            warming on
                                                                                                            Friday, and I am so nervous.
                                                                                                        </span>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="message-options">
                                                                                                    <div class="avatar avatar-sm">
                                                                                                        <img src="https://production.promaticstechnologies.com/kvsAdmin/public/admin/common/img/profilebox/7.jpg">
                                                                                                    </div>
                                                                                                    <span class="message-date">9:12am</span>
                                                                                                    <div class="iner_drip">
                                                                                                        <div class="dropdown">
                                                                                                            <i class="fa fa-ellipsis-h" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false"></i>
                                                                                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                                                                                <li>
                                                                                                                    <a class="dropdown-item" href="#">
                                                                                                                        <i class="fa fa-clone me-2" aria-hidden="true">
                                                                                                                        </i>Copy
                                                                                                                    </a>
                                                                                                                </li>
                                                                                                                <li><a class="dropdown-item" href="#"><i class="fa fa-reply" aria-hidden="true"></i>Reply</a>
                                                                                                                </li>
                                                                                                            </ul>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="divin_message right_si">
                                                                                            <div class="message self">
                                                                                                <div class="message-wrapper">
                                                                                                    <div class="message-content">
                                                                                                        <span>I have to give a presentation on
                                                                                                            global
                                                                                                            warming on
                                                                                                            Friday, and I am so nervous.
                                                                                                        </span>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="message-options">
                                                                                                    <div class="avatar avatar-sm">
                                                                                                        <img src="https://production.promaticstechnologies.com/kvsAdmin/public/admin/common/img/profilebox/7.jpg ">
                                                                                                    </div>
                                                                                                    <span class="message-date">9:12am</span>
                                                                                                    <div class="iner_drip">
                                                                                                        <div class="dropdown">
                                                                                                            <i class="fa fa-ellipsis-h" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false"></i>
                                                                                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                                                                                <li>
                                                                                                                    <a class="dropdown-item" href="#">
                                                                                                                        <i class="fa fa-clone me-2" aria-hidden="true">
                                                                                                                        </i>Copy
                                                                                                                    </a>
                                                                                                                </li>
                                                                                                                <li><a class="dropdown-item" href="#"><i class="fa fa-reply" aria-hidden="true"></i>Reply</a>
                                                                                                                </li>
                                                                                                            </ul>
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
                                                                    <!-- <div class="full_background_img text-center">
                                            <img src="imgs/g12.png" alt="">
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
                </div>
            </div>

    

@stop
                                                                    
@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.4/jquery.validate.min.js" integrity="sha512-FOhq9HThdn7ltbK8abmGn60A/EMtEzIzv1rvuh+DqzJtSGq8BRdEN0U+j0iKEIffiw/yEtVuladk6rsG4X6Uqg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


<script>
$(document).ready(function() {
    $('.select2').select2();
});                                            
</script>
@stop