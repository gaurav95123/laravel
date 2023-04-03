<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CmsController;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\WalkthroughController;
use App\Http\Controllers\BusinessenquiryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\BusinesscategoryController;
use App\Http\Controllers\ReportreasonController;
use App\Http\Controllers\GroupManagementController;
use App\Http\Controllers\BusinessRequirmentManagementController;
use App\Http\Controllers\ReportsManagementController;
use App\Http\Controllers\ReportlistController;
use App\Http\Controllers\RmanagementController;






/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//AdminController

Route::match(['get', 'post'],'/login',[AdminController::class,'login']);
Route::match(['get', 'post'],'/forgetpass',[AdminController::class,'forgetpass']);
Route::match(['get', 'post'],'/resetpass',[AdminController::class,'resetpass']);


//HomeController
Route::match(['get', 'post'],'/dashboard',[HomeController::class,'dashboard']);
Route::match(['get','post'], '/logout',[AdminController::class, 'logout']);

//UserController

                 //business manage
Route::match(['get', 'post'],'/addbusiness/manage',[UserController::class,'addbusinessmanage']);
Route::match(['get', 'post'],'/business/manage',[UserController::class,'businessmanage']);
Route::match(['get', 'post'],'/view-business/{id}',[UserController::class,'viewbusinessmanage']);
Route::match(['get', 'post'],'/getState',[UserController::class,'getState']);
Route::match(['get', 'post'],'/getCity',[UserController::class,'getCity']);
Route::match(['get', 'post'],'/edit/{id}',[UserController::class,'edit']);
Route::match(['get', 'post'],'/deletedata/{id}',[UserController::class,'deletedata']);
Route::match(['get', 'post'],'/search-business',[UserController::class,'searchbusiness']);
Route::match(['get','post'],'/business/exportcsv',[UserController::class,'exportCSV']);
Route::match(['get','post'],'/business/exportexcel',[UserController::class,'exportExcel']);
              //non-business manage
Route::match(['get', 'post'],'/nonbusiness/manage',[UserController::class,'nonbusinessmanage']);
Route::match(['get', 'post'],'/addnonbusiness',[UserController::class,'addnon_businessmanage']);
Route::match(['get', 'post'],'/view-nonbusiness/{id}',[UserController::class,'viewnonbusinessmanage']);
Route::match(['get', 'post'],'/edit-nonbusiness/{id}',[UserController::class,'edit_nonbusiness']);
Route::match(['get', 'post'],'/delete-nonbusiness/{id}',[UserController::class,'delete_nonbusiness']); 
Route::match(['get', 'post'],'/search-nonbusiness',[UserController::class,'searchnonbusiness']);
Route::match(['get','post'],'/nonbusiness/exportcsv',[UserController::class,'exportCSV']);
Route::match(['get','post'],'/nonbusiness/exportexcel',[UserController::class,'exportExcel']);

//GeneralController
Route::match(['get', 'post'],'/reportclient/manage',[GeneralController::class,'reportclientmanage']);
Route::match(['get', 'post'],'/viewreportclient/manage',[GeneralController::class,'viewreportclientmanage']);
Route::match(['get', 'post'],'/activitynotification',[GeneralController::class,'activitynotification']);

//CmsController

Route::match(['get', 'post'],'/termsconditions',[CmsController::class,'termsconditions']);
Route::match(['get', 'post'],'/privacypolicy',[CmsController::class,'privacypolicy']);
Route::match(['get', 'post'],'/contactus',[CmsController::class,'contactus']);
Route::match(['get', 'post'],'/reply/{id}',[CmsController::class,'reply']);
Route::match(['get', 'post'],'/email_verifivation/{id}',[CmsController::class,'reply']);
Route::match(['get', 'post'],'/delete/{id}',[CmsController::class,'delete']);
Route::match(['get', 'post'],'/viewcontactus',[CmsController::class,'viewcontactus']);
Route::match(['get', 'post'],'/search-contactus',[CmsController::class,'searchcontactus']);



//Walkthrough

Route::match(['get', 'post'],'/walkthrough',[WalkthroughController::class,'walkthrough']);
Route::match(['get', 'post'],'/walkthrough/insert',[WalkthroughController::class,'walkthroughinsert']);
Route::match(['get', 'post'],'/view_walkthrough/{id}',[WalkthroughController::class,'viewwalkthrough']);
Route::match(['get', 'post'],'/edit_walkthrough/{id}',[WalkthroughController::class,'editWalkthrough']);
Route::match(['get', 'post'],'/delete_walkthrough/{id}',[WalkthroughController::class,'deletewalkthrough']); 

//Business_enquiry
Route::match(['get', 'post'],'/busines',[BusinessenquiryController::class,'busines']);
Route::match(['get', 'post'],'/view_businessenquiry/{id}',[BusinessenquiryController::class,'viewbusiness']);
Route::match(['get', 'post'],'/edit_businessenquiry/{id}',[BusinessenquiryController::class,'edit_business']);
Route::match(['get', 'post'],'/delete_businessenquiry/{id}',[BusinessenquiryController::class,'deletebusiness']);
Route::match(['get', 'post'],'/adddbusiness',[BusinessenquiryController::class,'adddbusiness']);
Route::match(['get', 'post'],'/search-businessenquiry',[BusinessenquiryController::class,'searchbusinessenquiry']);



//PostController
Route::match(['get', 'post'],'/posts/manage',[PostController::class,'posts']);
Route::match(['get', 'post'],'/addposts',[PostController::class,'addposts']);
Route::match(['get','post'],'/view_post/{id}',[PostController:: class, 'viewposts']);
Route::match(['get','post'],'/edit_post/{id}',[PostController:: class, 'editpost']);
Route::match(['get','post'],'/delete_post/{id}',[PostController:: class, 'deletepost']);
Route::match(['get','post'],'/posts/status',[PostController::class,'ChangeUserStatus']);
Route::match(['get','post'],'/search-post',[PostController::class,'searchposts']);
Route::match(['get','post'],'/file_upload',[PostController::class,'fileStore']);







//BusinesscategoryController
Route::match(['get','post'],'/businesscategory',[BusinesscategoryController:: class, 'Businescat']);
Route::match(['get','post'],'/view_businessscategory/{id}',[BusinesscategoryController:: class, 'viewbusinesscategory']);
Route::match(['get','post'],'/edit_businessscategory/{id}',[BusinesscategoryController:: class, 'editbusinesscategory']);
Route::match(['get','post'],'/delete_businesscategory/{id}',[BusinesscategoryController:: class, 'deletebusinesscategory']);
Route::match(['get','post'],'/add_businesscategory',[BusinesscategoryController:: class, 'addbusinesscategory']);
Route::match(['get','post'],'/businesscategory/exportcsv',[BusinesscategoryController::class,'businesscategorycsv']);
Route::match(['get', 'post'],'/search-businesscategory',[BusinesscategoryController::class,'searchbusinesscategory']);




// ReportreasonController
Route::match(['get','post'],'/reportreason',[ReportreasonController:: class, 'reportreason']);
Route::match(['get','post'],'/view_reportreason/{id}',[ReportreasonController:: class, 'viewreportreason']);
Route::match(['get','post'],'/edit_reportreason/{id}',[ReportreasonController:: class, 'editreportreason']);
Route::match(['get','post'],'/delete_reportreason/{id}',[ReportreasonController:: class, 'deletereportreason']);
Route::match(['get','post'],'/add_reportreason',[ReportreasonController:: class, 'addreportreason']);




//======================================== posts Managements==============================================
define('PostsMedia','public/admin/common/img/Postsimg');

// GroupManagementController
Route::match(['get','post'],'/groupmanagement',[GroupManagementController:: class, 'groupmanagement']);
Route::match(['get','post'],'/view_groupmanagement/{id}',[GroupManagementController:: class, 'viewgroupmanagement']);
Route::match(['get','post'],'/edit_groupmanagement/{id}',[GroupManagementController:: class, 'editgroupmanagement']);
Route::match(['get','post'],'/delete_groupmanagement/{id}',[GroupManagementController:: class, 'deletegroupmanagement']);
Route::match(['get','post'],'/add_groupmanagement',[GroupManagementController:: class, 'addgroupmanagement']);
Route::match(['get','post'],'/search_groupmanagement',[GroupManagementController:: class, 'searchgroupmanagement']);



// BusinessRequirmentManagementController
Route::match(['get','post'],'/businessrequirement',[BusinessRequirmentManagementController:: class, 'businessrequirement']);
Route::match(['get','post'],'/view_businessrequirement/{id}',[BusinessRequirmentManagementController:: class, 'viewbusinessrequirement']);
Route::match(['get','post'],'/edit_businessrequirement/{id}',[BusinessRequirmentManagementController:: class, 'editbusinessrequirement']);
Route::match(['get','post'],'/delete_businessrequirement/{id}',[BusinessRequirmentManagementController:: class, 'deletebusinessrequirement']);
Route::match(['get','post'],'/add_businessrequirement',[BusinessRequirmentManagementController:: class, 'addbusinessrequirement']);
// Route::match(['get','post'],'/businesscategory/exportcsv',[BusinessRequirmentManagementController::class,'businesscategorycsv']);
Route::match(['get', 'post'],'/search_businessrequirement',[BusinessRequirmentManagementController::class,'searchbusinessrequirement']);
Route::match(['get', 'post'],'/view_assigneduser/{id}',[BusinessRequirmentManagementController::class,'assigneduser']);


//======================================== Business Requirement Management ==============================================
define('BusinessImagePath','public/images/BusinessImagePath');
define('PostsImagesPath','public/images/PostsImagesPath');


// ReportsManagementController
// Route::match(['get','post'],'/reportmanagement',[ReportsManagementController:: class, 'reportmanagement']);
// Route::match(['get','post'],'/view_reportmanagement/{id}',[ReportsManagementController:: class, 'viewreportmanagement']);
// Route::match(['get','post'],'/delete_reportmanagement/{id}',[ReportsManagementController:: class, 'deletereportmanagement']);
// Route::match(['get','post'],'/add_reportmanagement',[ReportsManagementController:: class, 'addreportmanagement']);
// Route::match(['get','post'],'/edit_businessrequirement/{id}',[ReportsManagementController:: class, 'editreportmanagement']);


//ReportlistController
Route::match(['get','post'],'/user_list',[ReportlistController:: class, 'viewusers']);
Route::match(['get','post'],'/posts_list',[ReportlistController:: class, 'viewposts']);
Route::match(['get','post'],'/req_list',[ReportlistController:: class, 'viewbusinessreq']);
Route::match(['get','post'],'/list_group',[ReportlistController:: class, 'viewgroups']);
Route::match(['get', 'post'],'/search_user',[ReportlistController::class,'searchuser']);
Route::match(['get','post'],'/listofuser/exportcsv',[ReportlistController::class,'exportCSV']);
Route::match(['get','post'],'/listofuser/exportexcel',[ReportlistController::class,'exportExcel']);
Route::match(['get','post'],'/listofbusinessreq/exportcsv',[ReportlistController::class,'exportCSV']);
Route::match(['get','post'],'/listofbusinessreq/exportexcel',[ReportlistController::class,'exportExcel']);
Route::match(['get','post'],'/search_businessreq',[ReportlistController::class,'searchbusinessreq']);
Route::match(['get','post'],'/listofpost/exportcsv',[ReportlistController::class,'exportCSV']);
Route::match(['get','post'],'/listofpost/exportexcel',[ReportlistController::class,'exportExcel']);
Route::match(['get', 'post'],'/search_post',[ReportlistController::class,'searchpost']);
Route::match(['get','post'],'/listofgroup/exportexcel',[ReportlistController::class,'exportExcel']);
Route::match(['get','post'],'/listofgroup/exportcsv',[ReportlistController::class,'exportCSV']);
Route::match(['get', 'post'],'/search_group',[ReportlistController::class,'searchgroup']);


// ReportsManagementController
Route::match(['get','post'],'/rmanagement',[RmanagementController:: class, 'rmanagement']);
Route::match(['get','post'],'/view_rmanagement/{id}',[RmanagementController:: class, 'viewrmanagement']);
Route::match(['get','post'],'/delete_rmanagement/{id}',[RmanagementController:: class, 'deletebusinessrequirement']);
Route::match(['get','post'],'/search_rmanagement',[RmanagementController:: class, 'searchrmanagement']);






























