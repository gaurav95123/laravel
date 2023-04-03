<?php

namespace App\Http\Controllers;

 
use Illuminate\Http\Request;
use App\Models\businessRequirmentId;
use App\Models\User;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Mail;

class BusinessRequirmentManagementController extends Controller
{

    public function businessrequirement(Request $request){  
        
        $data = $request->all();
        $businesreq = businessRequirmentId::with('user_details','comments')->orderBy('id','desc')->get()->toArray();          
        $businesreqid=businessRequirmentId::paginate(10);

        return view('admin.BusinessRequirementManagement.businessrequirementmanagement',compact('businesreq','businesreqid'));
    }

    public function viewbusinessrequirement(Request $request,$id){    

      $id=base64_decode($id);
      $data = $request->all();
      $businesreq = businessRequirmentId::where('id',$id)->first(); 
      $user = User::where('role','business')->get()->toArray();
      return view('admin.BusinessRequirementManagement.view-businessrequirementmanagement',compact('businesreq','user'));  
    }

    public function assigneduser(Request $request,$id){
    
      $id=base64_decode($id);
      $businesreq = businessRequirmentId::where('id',$id)->first(); 
      $user = User::where('role','business')->get();

      if($request->isMethod('post')){
          $data = $request->all();          
          $da = User::where('username',$request->assigned_user)->first();
        businessRequirmentId::where('id', $id)->first()->update([
            'assigned_user' => $data['assigned_user'],
            
        ]);
        
            $subject="Assiged by User";
            $name=$businesreq['assigned_user'];
            $email=$da['email'];
            $messages=[
                'name'=>$name,
                'email'=>$email,     
            ];
            Mail::send('admin.email.assigneduser',$messages,function($messages) use ($email,$subject){
                $messages->to($email)->subject($subject);
            });

        return redirect()->back();
      }

      return view('admin.BusinessRequirementManagement.view-businessrequirementmanagement',compact('businesreq','user'));  
    }

    public function deletebusinessrequirement($id){
        
      $id=base64_decode($id);
      $delete = businessRequirmentId::where('id', $id)->delete();
      return redirect()->back()->with('success', 'deleted Successfully.');   

    }

//     public function editbusinessrequirement(Request $request, $id){
//         $id = base64_decode($id);
//         if($request->isMethod('post')){
//            $data = $request->all();
           
//            if($request->hasFile('BusinessRequirment_image')) {
//               $image = $request->file('BusinessRequirment_image');
//               $walkthrough_image = time().'_'.rand().'.'.$image->getClientOriginalExtension();
//               $destination_path = BusinessImagePath;
//               $image->move($destination_path,$walkthrough_image);
//               $prev_img = businessRequirmentId::where('id',$id)->value('BusinessRequirment_image');
//               if(!empty($prev_img) && file_exists(BusinessImagePath.'/'.$prev_img)) {
//               unlink(BusinessImagePath.'/'.$prev_img);
//               }
//               // dd($picture);
//           }
//           else{
//               $picture = businessRequirmentId::where('id',$id)->value('BusinessRequirment_image');
//           }
//           businessRequirmentId::where('id', $id)->first()->update([
//             'BusinessRequirment_image' => $walkthrough_image ,
//             'userId' => $data['userid'],
//             'business_category' => $data['business_category'],
//             'country' => $data['country_id'],
//             'city' => $data['city'],
//             'state'=>$data['State'],
//             'Required_goods'=>$data['Required_goods']
//           ]);
//           return redirect('/businessrequirement')->with('success', 'Updated Successfully.');
//         }
        
//         $businesreq = businessRequirmentId::where('id',$id)->first();
//         // dd($businesreq);
//         return view('admin.BusinessRequirementManagement.edit-businessrequirementmanagement', compact('businesreq'));
//      }

//         // public function addbusinessrequirement(Request $request){
//         //         if($request->isMethod('post')){
//         //             $data = $request->all();
//         //             $profile_image = $request->file('BusinessRequirment_image');
//         //             $data['BusinessRequirment_image'] = time() . '_' . rand() . '.' .$profile_image->getClientOriginalExtension();
//         //             $destination_path = BusinessImagePath;
//         //             $profile_image->move($destination_path, $data['BusinessRequirment_image']);
//         //              $businesreq=  businessRequirmentId::create([
//         //             'BusinessRequirment_image' => $data['BusinessRequirment_image'],
//         //             'userId' => $data['userid'],
//         //             'business_category' => $data['business_category'],
//         //             'country' => $data['country_id'],
//         //             'city' => $data['city'],
//         //             'state'=>$data['state'],
//         //             'Required_goods'=>$data['Required_goods']
//         //         ]);
//         //         return redirect('/businessrequirement')->with('success','Added Successfully');  
//         //        // return redirect()->back();
//         //     }
//         //     return view('admin.BusinessRequirementManagement.add-businessrequirementmanagement');
//         // }




//  public function searchbusinessrequirement(Request $request){
     
//     $search = $request->input('search');
//     $businesreq = businessRequirmentId::where('userId', 'LIKE', '%' . $search . '%') 
//     ->orWhere('business_category','LIKE', '%' . $search . '%'  )  
//     ->orWhere('country','LIKE', '%' . $search . '%'  )  
//     ->orWhere('city','LIKE', '%' . $search . '%'  ) 
//     ->orWhere('state','LIKE', '%' . $search . '%'  )
//     ->orWhere('Required_goods', 'LIKE', '%'. $search .'%')  
//     ->paginate(6);
//     return view('admin.BusinessRequirementManagement.businessrequirementmanagement',compact('businesreq'));
//  }


}
