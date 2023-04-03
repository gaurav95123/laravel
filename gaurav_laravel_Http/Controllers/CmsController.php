<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;
use App\Models\Contact;
use Mail;

class CmsController extends Controller
{    

   public function termsconditions(Request $request){   

      if($request->isMethod('post')){
         $data = $request->all();            
         Content::where('type','terms_conditions')->update([
               'description'=>$request->description,
         ]);
            return redirect()->back()->with('success', 'Updated Successfully');
      }
      return view('admin.ContentManagement.termsConditions');
      
   }   

   public function privacypolicy(Request $request){ 

      if($request->isMethod('post')){
         $data = $request->all();            
         Content::where('type','privacy_policy')->update([
               'description'=>$request->description,
         ]);    
            return redirect()->back()->with('success', 'Updated Successfully');
      }
      return view('admin.ContentManagement.privacyPolicy');

   } 

   public function contactus(Request $request){   

      $data = $request->all();  
      $page ="contactus";
      $contact = Contact::paginate(10);  
              
      return view('admin.ContentManagement.contactUs',compact('contact', 'page'));    

   } 

   public function reply(Request $request,$id){ 

      $id=base64_decode($id);
      if($request->isMethod('post')){
         $data = $request->all();                 
   
            $reply = Contact::where('id', $id)->update([
               'reply'=>$data['reply'],
            ]);  

            $all_data = Contact::where('id', $id)->get()->first();

               $fullname  = $all_data['fullname'];
               $email= $all_data['email'];
               $msg= $all_data['message'];
               $reply= $all_data['reply'];
               $subject= 'Email Verification';

               $message_data = [
                              'fullname'   => $fullname,
                              'email'      => $email,
                              'msg'        =>  $msg,
                              'reply'      => $reply
                           ];
              // dd($message_data);
               Mail::send('admin.ContentManagement.email_verification',$message_data, function($message)
                     use ($email,$subject){
                    $message->to($email)->subject($subject);
               });
      
         return redirect()->back();      
      }
      return view('admin.ContentManagement.contactUs');     

   }

   public function delete($id){

      $id=base64_decode($id);
      $user = Contact::where('id', $id)->delete();
      return redirect()->back(); 

   }

   public function viewcontactus(){    

      return view('admin.ContentManagement.ViewContactUs');

   
}
public function searchcontactus(Request $request){

   $search = $request->input('search');

   $contact= Contact::where('fullname', 'LIKE', '%' . $search . '%')
         ->orWhere('email', 'LIKE', '%' . $search . '%')
        ->orWhere('phone_no', 'LIKE', '%' . $search . '%')
        ->orWhere('subject', 'LIKE', '%' . $search . '%')
        ->orWhere('message', 'LIKE', '%' . $search . '%')
   ->paginate(10);

   return view('admin.ContentManagement.contactUs',compact('contact'));
   
} 

}
?>