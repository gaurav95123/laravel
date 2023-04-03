<?php

namespace App\Http\Controllers;
// use App\Models\Nonbusiness;
// use App\Models\Business;
use App\Models\User;


use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function dashboard(){    

      $currentpage="dashboard";
      $user =User::count();      
      $business = User::where('role','business')->count(); 

      return view('admin.dashboard',compact('currentpage','user','business'));
   }

}
?>