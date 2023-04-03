@extends('admin.layout.adminLayout')
@section('title','UserManagement')
@section('content')

    <div class="container-fluid p-0 ">

        <div class="row">
            <div class="col-12">
                <div class="page_title_box d-flex flex-wrap align-items-center justify-content-between">
                    <div class="page_title_left">
                        <h3 class="f_s_25 f_w_700 dark_text">Dashboard</h3>
                        <ol class="breadcrumb page_bradcam mb-0">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                            <li class="breadcrumb-item active">Default</li>
                        </ol>
                    </div>
                    <div class="page_title_right">
                        <!-- <div class="dropdown dhsh_drop me-3">
                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button"
                                id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                LoveSecret
                            </a>

                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <li><a class="dropdown-item" href="#">Grflirt </a></li>
                                <li><a class="dropdown-item" href="#"> Cyflirt</a></li>
                            </ul>
                        </div> -->
                        <div class="page_date_button">
                            August 1, 2020 - August 31, 2020
                        </div>
                        <div class="dropdown common_bootstrap_button ">
                            <span class="dropdown-toggle" id="dropdownMenuButton" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                action
                            </span>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item f_s_16 f_w_600" href="index_2.html#"> Download</a>
                                <a class="dropdown-item f_s_16 f_w_600" href="index_2.html#"> Print</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row ">
            <div class="col-xl-12">
                <div class="white_card card_height_100 mb_30 social_media_card">
                    <div class="media_card_body">
                        <div class="media_card_list">
                            <div class="single_media_card">
                                <span>Total Users</span>
                                <h3>{{$user}}</h3>
                            </div>
                            <div class="single_media_card">
                                <span>Business Users</span>
                                <h3>{{$business}}</h3>
                            </div>
                            <!-- <div class="single_media_card">
                                <span>Total Chefs</span>
                                <h3>35.6 K</h3>
                            </div>
                            <div class="single_media_card">
                                <span>Total Revenue</span>
                                <h3>35.6 K</h3>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 ">
                <div class="white_card mb_30 card_height_100">
                    <div class="white_card_header">
                        <div class="box_header m-0">
                            <div class="main-title">
                                <h3 class="m-0">Revenue</h3>
                            </div>
                            <div class="float-lg-right float-none common_tab_btn2 justify-content-end">
                                <ul class="nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="index_2.html#">Month</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" href="index_2.html#">Week</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="index_2.html#">Day</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="white_card_body">
                        <div id="marketchart"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="white_card card_height_100 mb_30 ">
                    <div class="white_card_header">
                        <div class="box_header m-0">
                            <div class="main-title w-100">
                                <div class="d-flex justify-content-between w-100 align-items-center">
                                    <div>
                                        <h3 class="m-0">Notes</h3>
                                        <span>Todo</span>
                                    </div>
                                    <button class="btn btn-primary">+</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="white_card_body QA_section">
                        <div class="todo_wrapper">
                            <div class="single_todo d-flex justify-content-between align-items-center">
                                <div class="lodo_left d-flex align-items-center">
                                    <div class="bar_line mr_10"></div>
                                    <div class="todo_box">
                                        <label class="form-label primary_checkbox  d-flex mr_10 ">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="todo_head">
                                        <h5 class="f_s_18 f_w_900 mb-0">Assign market analysis </h5>
                                        <p class="f_s_12 f_w_400 mb-0 text_color_8">Due 5 Days</p>
                                    </div>
                                </div>
                            </div>
                            <div class="single_todo d-flex justify-content-between align-items-center">
                                <div class="lodo_left d-flex align-items-center">
                                    <div class="bar_line red_line mr_10"></div>
                                    <div class="todo_box">
                                        <label class="form-label primary_checkbox  d-flex mr_10 ">
                                            <input type="checkbox">
                                            <span class="checkmark red_check"></span>
                                        </label>
                                    </div>
                                    <div class="todo_head">
                                        <h5 class="f_s_18 f_w_900 mb-0">Assign market analysis </h5>
                                        <p class="f_s_12 f_w_400 mb-0 text_color_8">Due 5 Days</p>
                                    </div>
                                </div>
                            </div>
                            <div class="single_todo d-flex justify-content-between align-items-center">
                                <div class="lodo_left d-flex align-items-center">
                                    <div class="bar_line red_line mr_10"></div>
                                    <div class="todo_box">
                                        <label class="form-label primary_checkbox  d-flex mr_10 ">
                                            <input type="checkbox">
                                            <span class="checkmark red_check"></span>
                                        </label>
                                    </div>
                                    <div class="todo_head">
                                        <h5 class="f_s_18 f_w_900 mb-0">Assign market analysis </h5>
                                        <p class="f_s_12 f_w_400 mb-0 text_color_8">Due 5 Days</p>
                                    </div>
                                </div>
                            </div>
                            <div class="single_todo d-flex justify-content-between align-items-center">
                                <div class="lodo_left d-flex align-items-center">
                                    <div class="bar_line mr_10"></div>
                                    <div class="todo_box">
                                        <label class="form-label primary_checkbox  d-flex mr_10 ">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="todo_head">
                                        <h5 class="f_s_18 f_w_900 mb-0">Assign market analysis </h5>
                                        <p class="f_s_12 f_w_400 mb-0 text_color_8">Due 5 Days</p>
                                    </div>
                                </div>
                            </div>
                            <div class="single_todo d-flex justify-content-between align-items-center">
                                <div class="lodo_left d-flex align-items-center">
                                    <div class="bar_line mr_10"></div>
                                    <div class="todo_box">
                                        <label class="form-label primary_checkbox  d-flex mr_10 ">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="todo_head">
                                        <h5 class="f_s_18 f_w_900 mb-0">Assign market analysis </h5>
                                        <p class="f_s_12 f_w_400 mb-0 text_color_8">Due 5 Days</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <div class="white_card card_height_100  mb_20">
                    <div class="white_card_header">
                        <div class="box_header m-0">
                            <div class="main-title">
                                <h3 class="m-0">Visitors from country</h3>
                                <span>Visitors all over the world</span>
                            </div>
                        </div>
                    </div>
                    <div class="white_card_body">
                        <div id="world-map-markers" class="dashboard_w_map pb_20"></div>
                        <div class="world_list_wraper">
                            <div class="row justify-content-center">
                                <div class="col-lg-9">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="single_progressbar">
                                                <h6 class="f_s_14 f_w_400">USA</h6>
                                                <div id="bar4" class="barfiller">
                                                    <div class="tipWrap">
                                                        <span class="tip"></span>
                                                    </div>
                                                    <span class="fill" data-percentage="81"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="single_progressbar">
                                                <h6>Australia</h6>
                                                <div id="bar5" class="barfiller">
                                                    <div class="tipWrap">
                                                        <span class="tip"></span>
                                                    </div>
                                                    <span class="fill" data-percentage="58"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="single_progressbar">
                                                <h6>Brazil</h6>
                                                <div id="bar6" class="barfiller">
                                                    <div class="tipWrap">
                                                        <span class="tip"></span>
                                                    </div>
                                                    <span class="fill" data-percentage="42"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="single_progressbar">
                                                <h6>Latvia</h6>
                                                <div id="bar7" class="barfiller">
                                                    <div class="tipWrap">
                                                        <span class="tip"></span>
                                                    </div>
                                                    <span class="fill" data-percentage="55"></span>
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
            <div class="col-xl-4">
                <div class="white_card card_height_100 mb_30">
                    <div class="white_card_header">
                        <div class="box_header m-0">
                            <div class="main-title">
                                <h3 class="m-0">Notifcation</h3>
                            </div>
                        </div>
                    </div>
                    <div class="white_card_body">
                        <div class="Activity_timeline">
                            <ul>
                                <li>
                                    <div class="activity_bell"></div>
                                    <div class="timeLine_inner d-flex align-items-center">
                                        <div class="activity_wrap">
                                            <h6>5 min ago</h6>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque
                                                scelerisque
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="activity_bell "></div>
                                    <div class="timeLine_inner d-flex align-items-center">
                                        <div class="activity_wrap">
                                            <h6>5 min ago</h6>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque
                                                scelerisque
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="activity_bell bell_lite"></div>
                                    <div class="timeLine_inner d-flex align-items-center">
                                        <div class="activity_wrap">
                                            <h6>5 min ago</h6>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque
                                                scelerisque
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="activity_bell bell_lite"></div>
                                    <div class="timeLine_inner d-flex align-items-center">
                                        <div class="activity_wrap">
                                            <h6>5 min ago</h6>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque
                                                scelerisque
                                            </p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="white_card card_height_100 mb_30">
                        <div class="white_card_body dashbd_chat">
                            <div class="div_content_chat mt-3 mb-4">
                                <div class="chat_writn mb-3">
                                    <h3>Chat with users</h3>
                                </div>
                                <div class="roll_inner d-flex">
                                    <div class="inner_wrappin">
                                        <div class="divnotification">
                                            <div class="help_buttn srch_chat_in mt-3 mb-1">
                                                <input class="form-control" type="search" placeholder="Search"
                                                    aria-label="Search">
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
                                                                <img src="../public/admin/common/img/profilebox/7.jpg">
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
                                                                <img src="../public/admin/common/img/profilebox/7.jpg">
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
                                                                <img src="../public/admin/common/img/profilebox/7.jpg">
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
                                                                <img src="../public/admin/common/img/profilebox/7.jpg">
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
                                                            <img src="../public/admin/common/img/profilebox/7.jpg">
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
                                                                        <img src="../public/admin/common/img/profilebox/7.jpg">
                                                                    </div>
                                                                    <span class="message-date">9:12am</span>
                                                                    <div class="iner_drip">
                                                                        <div class="dropdown">
                                                                            <i class="fa fa-ellipsis-h"
                                                                                id="dropdownMenuLink"
                                                                                data-bs-toggle="dropdown"
                                                                                aria-expanded="false"></i>
                                                                            <ul class="dropdown-menu"
                                                                                aria-labelledby="dropdownMenuLink">
                                                                                <li>
                                                                                    <a class="dropdown-item"
                                                                                        href="#">
                                                                                        <i class="fa fa-clone me-2"
                                                                                            aria-hidden="true">
                                                                                        </i>Copy
                                                                                    </a>
                                                                                </li>
                                                                                <li><a class="dropdown-item"
                                                                                        href="#"><i
                                                                                            class="fa fa-reply"
                                                                                            aria-hidden="true"></i>Reply</a>
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
                                                                        <img src="../public/admin/common/img/profilebox/8.jpg">
                                                                    </div>
                                                                    <span class="message-date">9:12am</span>
                                                                    <div class="iner_drip">
                                                                        <div class="dropdown">
                                                                            <i class="fa fa-ellipsis-h"
                                                                                id="dropdownMenuLink"
                                                                                data-bs-toggle="dropdown"
                                                                                aria-expanded="false"></i>
                                                                            <ul class="dropdown-menu"
                                                                                aria-labelledby="dropdownMenuLink">
                                                                                <li>
                                                                                    <a class="dropdown-item"
                                                                                        href="#">
                                                                                        <i class="fa fa-clone me-2"
                                                                                            aria-hidden="true">
                                                                                        </i>Copy
                                                                                    </a>
                                                                                </li>
                                                                                <li><a class="dropdown-item"
                                                                                        href="#"><i
                                                                                            class="fa fa-reply"
                                                                                            aria-hidden="true"></i>Reply</a>
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
                                    <img src="../public/admin/common/imgs/g12.png" alt="">
                                </div> -->
                                </div>
                            </div>
                            <div class="div_content_chat mt-2 mb-3">
                                <h3 class="mb-3">Chat with Moderators</h3>
                                <div class="roll_inner d-flex">
                                    <div class="inner_wrappin">
                                        <div class="divnotification">
                                            <!-- <div class="chat_writn">
                                            </div> -->
                                            <div class="help_buttn srch_chat_in mt-3 mb-1">
                                                <input class="form-control" type="search" placeholder="Search"
                                                    aria-label="Search">
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
                                                                <img src="../public/admin/common/img/profilebox/7.jpg">
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
                                                                <img src="../public/admin/common/img/profilebox/7.jpg">
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
                                                                <img src="../public/admin/common/img/profilebox/7.jpg">
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
                                                                <img src="../public/admin/common/img/profilebox/7.jpg">
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
                                                            <img src="../public/admin/common/img/profilebox/7.jpg">
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
                                                                        <img src="../public/admin/common/img/profilebox/7.jpg">
                                                                    </div>
                                                                    <span class="message-date">9:12am</span>
                                                                    <div class="iner_drip">
                                                                        <div class="dropdown">
                                                                            <i class="fa fa-ellipsis-h"
                                                                                id="dropdownMenuLink"
                                                                                data-bs-toggle="dropdown"
                                                                                aria-expanded="false"></i>
                                                                            <ul class="dropdown-menu"
                                                                                aria-labelledby="dropdownMenuLink">
                                                                                <li>
                                                                                    <a class="dropdown-item"
                                                                                        href="#">
                                                                                        <i class="fa fa-clone me-2"
                                                                                            aria-hidden="true">
                                                                                        </i>Copy
                                                                                    </a>
                                                                                </li>
                                                                                <li><a class="dropdown-item"
                                                                                        href="#"><i
                                                                                            class="fa fa-reply"
                                                                                            aria-hidden="true"></i>Reply</a>
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
                                                                        <img src="../public/admin/common/img/profilebox/8.jpg">
                                                                    </div>
                                                                    <span class="message-date">9:12am</span>
                                                                    <div class="iner_drip">
                                                                        <div class="dropdown">
                                                                            <i class="fa fa-ellipsis-h"
                                                                                id="dropdownMenuLink"
                                                                                data-bs-toggle="dropdown"
                                                                                aria-expanded="false"></i>
                                                                            <ul class="dropdown-menu"
                                                                                aria-labelledby="dropdownMenuLink">
                                                                                <li>
                                                                                    <a class="dropdown-item"
                                                                                        href="#">
                                                                                        <i class="fa fa-clone me-2"
                                                                                            aria-hidden="true">
                                                                                        </i>Copy
                                                                                    </a>
                                                                                </li>
                                                                                <li><a class="dropdown-item"
                                                                                        href="#"><i
                                                                                            class="fa fa-reply"
                                                                                            aria-hidden="true"></i>Reply</a>
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@stop