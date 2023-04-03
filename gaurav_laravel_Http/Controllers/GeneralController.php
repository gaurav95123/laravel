<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\PostMedia;

class GeneralController extends Controller
{
   public function reportclientmanage(Request $request){   

         $data = $request->all(); 
            $post = Post::get()->toArray();
            $post_image = PostMedia::get()->toArray();
      return view('admin.GeneralManagement.feedManagement' ,compact('post','post_image'));
     }  
  
     public function viewreportclientmanage(){    
      return view('admin.GeneralManagement.viewReportUser');
     }  
  
     public function activitynotification(){    
      return view('admin.GeneralManagement.historyOfActivityNotification');
     } 
  
}
?>
