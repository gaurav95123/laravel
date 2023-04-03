<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=2">
    <!-- <link rel="icon" href="./imgs/head-logo.png" type="image/x-icon"> -->
    <title>KVS Admin</title>
    <?php include('include/masterCss.php') ?>
</head>

<body class="crm_body_bg">
    <section>
        <?php include('include/sidebar.php') ?>
    </section>

    <section class="main_content dashboard_part large_header_bg">
        <div class="container-fluid g-0">
            <?php include('include/header.php') ?>
        </div>
        <div class="main_content_iner ">
            <div class="container-fluid p-0">
                <div class="row">
                    <div class="col-12">
                        <div class="page_title_box d-flex flex-wrap align-items-center justify-content-between">
                            <div class="page_title_left">
                                <h3 class="f_s_25 f_w_700 dark_text">List of Reports</h3>
                                <ol class="breadcrumb page_bradcam mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                                    <li class="breadcrumb-item active">List Of Reports</li>
                                </ol>
                            </div>
                            <div class="dropdown client_drop me-3">
                                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-download me-2" aria-hidden="true"></i>
                                    Export
                                </a>

                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <li><a class="dropdown-item" href="#">Excel</a></li>
                                    <li><a class="dropdown-item" href="#">CSV</a></li>
                                    
                                </ul>
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
                                    <div class="white_box_tittle">
                                        <!-- <h4>Moderator Panel List</h4> -->
                                        <!-- <div class="white_card_body typography position-relative">
                                            <input class="digits new_pickrs" id="minMaxExample" type="text"
                                                placeholder="29 Dec 2022">
                                            <div class="srch_box position-absolute">
                                                <i class="ti-search"></i>
                                            </div>
                                        </div> -->
                                        <div class="box_right d-flex lms_block align-items-center justify-content-end">
                                            <div class="dropdown client_drop me-3">
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
                                            </div>
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
                                    <div class="QA_table mb_30 table-responsive mt-3">

                                        <table class="table yuactive">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Sr No.</th>
                                                    <th scope="col">Reported User</th>
                                                    <th scope="col">Reported by</th>
                                                    <th scope="col">Subject</th>
                                                    <th scope="col">Reason</th>
                                                    <th scope="col">Date</th>
                                                    <th scope="col">Status</th>
                                                    <!-- <th scope="col">Website Logo</th> -->
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">
                                                        1
                                                    </th>
                                                    <td>Jospeph Jones</td>
                                                    <td>Jabby Jones</td>
                                                    <td>
                                                        Subject
                                                    </td>
                                                    <td>Message</td>
                                                    <td>
                                                        02 Jan, 2023
                                                    </td>
                                                    <td>
                                                        <div class="form-check form-switch"
                                                            style="margin-bottom:0;display: flex;justify-content: center;align-items: center;">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="flexSwitchCheckDefault">
                                                        
                                                        </div>
                                                    </td>
                                                    <!-- <td>
                                                        <div class="sats_clints">
                                                            <img src="img/main-logo.png" alt="">
                                                        </div>
                                                    </td> -->
                                                    <td>
                                                       <span class="text-gray">Blocked</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">
                                                        2
                                                    </th>
                                                    <td>Jospeph Jones</td>
                                                    <td>Jabby Jones</td>
                                                    <td>
                                                        Subject
                                                    </td>
                                                    <td>Message</td>
                                                    <td>
                                                        02 Jan, 2023
                                                    </td>
                                                    <td>
                                                        <div class="form-check form-switch"
                                                            style="margin-bottom:0;display: flex;justify-content: center;align-items: center;">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="flexSwitchCheckDefault">
                                                        
                                                        </div>
                                                    </td>
                                                    <!-- <td>
                                                        <div class="sats_clints">
                                                            <img src="img/main-logo.png" alt="">
                                                        </div>
                                                    </td> -->
                                                    <td>
                                                    <span class="text-gray">Blocked</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">
                                                        3
                                                    </th>
                                                    <td>Jospeph Jones</td>
                                                    <td>Jabby Jones</td>
                                                    <td>
                                                        Subject
                                                    </td>
                                                    <td>Message</td>
                                                    <td>
                                                        02 Jan, 2023
                                                    </td>
                                                    <td>
                                                        <div class="form-check form-switch"
                                                            style="margin-bottom:0;display: flex;justify-content: center;align-items: center;">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="flexSwitchCheckDefault">
                                                        
                                                        </div>
                                                    </td>
                                                    <!-- <td>
                                                        <div class="sats_clints">
                                                            <img src="img/main-logo.png" alt="">
                                                        </div>
                                                    </td> -->
                                                    <td>
                                                    <span class="text-gray">Blocked</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">
                                                        4
                                                    </th>
                                                    <td>Jospeph Jones</td>
                                                    <td>Jabby Jones</td>
                                                    <td>
                                                        Subject
                                                    </td>
                                                    <td>Message</td>
                                                    <td>
                                                        02 Jan, 2023
                                                    </td>
                                                    <td>
                                                        <div class="form-check form-switch"
                                                            style="margin-bottom:0;display: flex;justify-content: center;align-items: center;">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="flexSwitchCheckDefault">
                                                        
                                                        </div>
                                                    </td>
                                                    <!-- <td>
                                                        <div class="sats_clints">
                                                            <img src="img/main-logo.png" alt="">
                                                        </div>
                                                    </td> -->
                                                    <td>
                                                    <span class="text-gray">...</span>
                                                    </td>
                                                </tr>
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
        </div>

        <?php include('include/footer.php') ?>
    </section>

    <section>
        <section>
        </section>
        <?php include('include/scripts.php') ?>

</body>


</html>
<!-- --------------modal-report-------------------->

<div class="modal report_modal" id="report_management" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">Report</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="">Subject</label>
                    <input type="text" class="form-control" placeholder="Subject" disabled="">
                </div>
                <div class="form-group">
                    <label for="">Message</label>
                    <textarea name="" id="" class="form-control" rows="5" disabled=""></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn_1" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>