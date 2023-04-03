<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\Business;
use App\Models\City;
use App\Models\Country;
use App\Models\State;
use App\Models\User;
// use App\Models\Nonbusiness;
use App\Exports\BusinessExport;
use App\Exports\nonBusinessExport;
use Mail;
use Excel;

class UserController extends Controller
{

    public function addbusinessmanage(Request $request){

        $country =Country::get()->toArray();         

        if($request->isMethod('post')){
            $data = $request->all();
            $type = $request['type'];

            if ($request->has('profile_image')) {
                $image = $data['profile_image'];
                $name = $image->getClientOriginalName();
                $destinationPath = 'public/admin/common/business/';
                $image->move($destinationPath, $name);
            }

            User::where('role',$type)->create([
                    'role'                          => @$type,
                    'profile_image'                 => @$name,
                    'businessname'                  => $data['businessname'],
                    'username'                      => $data['username'],
                    'email'                         => $data['email'],
                    'business_category'             => $data['business_category'],
                    'website'                       => $data['website'],
                    'phone_no'                      => $data['phone_no'],
                    'alternatePhoneno'              => $data['alternatePhoneno'],
                    'country'                       => $data['country'],
                    'state'                         => $data['state'],
                    'city'                          => $data['city'],
                    'pincode'                       => $data['pincode'],
                    'complete_address'              => $data['complete_address']
                ]);
                return redirect()->back();
            
        };
               
        return view('admin.UserManagement.businessAdd',compact('country'));
          
    }

    public function getState(Request $request){

        $state=State::where('country_id',$request->country_id)->get()->toArray();
        return response()->json([
            'success'=>true,
              'state'=>$state,
        ]);

    }
   
    public function getCity(Request $request){

        $city=City::where('state_id',$request->state_id)->get()->toArray();
        return response()->json([
            'success'=>true,
              'city'=>$city,

        ]);
    }

    public function businessmanage(Request $request){    

        $data = $request->all();
        $page ="businessmanage";
        $business =User::where('role','business')->paginate(10);     

        return view('admin.UserManagement.userManagement',compact('business','page'));   

    }

    public function viewbusinessmanage(Request $request,$id){
        
        $id=base64_decode($id);
        $data = $request->all();
        $business =User::where('id',$id)->with('Country_data','State_data','city_data')->first(); 

        return view('admin.UserManagement.view-business',compact('business'));

    }

    public function edit(Request $request,$id){                                             

        $id=base64_decode($id);
        $business =User::where('id',$id)->first();  
        $country =Country::get()->toArray();  

        if($request->isMethod('post')){
            $data = $request->all();
       // dd($data);
            if ($request->has('profile_image')) {
                    $image = $data['profile_image'];
                    $name =$image->getClientOriginalName();
                    $destinationPath = 'public/admin/common/business/';
                    $image->move($destinationPath,$name);
            } 
            else{
                $name =$business['profile_image'];
            }   
                $edit = User::where('id',$id)->with('Country_data','State_data','city_data')->update([
            
                    'profile_image'                 =>@$name,
                    'businessname'                  => $data['businessname'],
                    'username'                      => $data['username'],
                    'email'                         => $data['email'],
                    'business_category'             => $data['business_category'],
                    'website'                       => $data['website'],
                    'phone_no'                      => $data['phone_no'],
                    'alternatePhoneno'              => $data['alternatePhoneno'],
                    'country'                       => $data['country'],
                    'state'                         => $data['state'],
                    'city'                          => $data['city'],
                    'pincode'                       => $data['pincode'],
                    'complete_address'              => $data['complete_address']

                ]);
            
        };
        return view('admin.UserManagement.edit-business',compact('business','country'));
    }

    public function deletedata($id){
        
        $id=base64_decode($id);
        $delete = User::where('id', $id)->delete();
        return redirect()->back();   

    }

    public function searchbusiness(Request $request){
     
        $search = $request->input('search');
        $business = User::where('businessname', 'LIKE', '%' . $search . '%')   
        ->orWhere('username', 'LIKE', '%' . $search . '%')
        ->orWhere('email', 'LIKE', '%' . $search . '%')
        ->orWhere('business_category', 'LIKE', '%' . $search . '%')
        ->orWhere('phone_no', 'LIKE', '%' . $search . '%')
        ->orWhere('complete_address', 'LIKE', '%' . $search . '%')
        ->paginate(10);
        
        return view('admin.UserManagement.userManagement',compact('business'));   
    }

    public function exportCSV(){
        $file_name = 'business_' . date('Y_m_d_H_i_s') . '.csv';
        return Excel::download(new BusinessExport, $file_name);
    }

    public function exportExcel(){
        $file_name = 'business_' . date('Y_m_d_H_i_s') . '.xlsx';
        return Excel::download(new BusinessExport, $file_name);
    }

    public function nonbusinessmanage(Request $request){    

        $data = $request->all();
        $non_business = User::where('role','user')->paginate(10);   
        return view('admin.UserManagement.Non-Business',compact('non_business'));

    }

    public function addnon_businessmanage(Request $request){    

        if($request->isMethod('post')){
            $data = $request->all();
       
            if ($request->has('profile_image')) {
                $image = $data['profile_image'];
                $name = $image->getClientOriginalName();
                $destinationPath = 'public/admin/common/business/';
                $image->move($destinationPath, $name);
            }

            User::create([
                    'profile_image'               => @$name,
                    'name'                        => $data['name'],
                    'email'                       => $data['email'],
                    'dob'                         => $data['dob'],
                    'phone_no'                    => $data['phone_no'],
                    'username'                    => $data['username'],
                    'password'                    => $data['password'],
                         
                ]);
                
                $non_busines_name  = $data['name'];         
                $email             = $data['email'];
                $password          = $data['password'];
                $subject           = 'Email Verification';
 
                $message_data = [
                               'non_busines_name'   => $non_busines_name,
                               'email'              => $email,
                               'password'           =>  $password,                              
                            ];
               // dd($message_data);
                Mail::send('admin.email.nonbusiness',$message_data, function($message)
                      use ($email,$subject){
                     $message->to($email)->subject($subject);
                });
                return redirect()->back();  
        };
                    
        return view('admin.UserManagement.non-businessAdd');

    }

    public function viewnonbusinessmanage(Request $request,$id){
        
        $id=base64_decode($id);
        $data = $request->all();
        $non_business =User::where('id',$id)->first();   
       

        return view('admin.UserManagement.view-non-business',compact('non_business'));

    }

    public function edit_nonbusiness(Request $request,$id){
        
        $id=base64_decode($id);
        $non_business =User::where('id',$id)->first();

        if($request->isMethod('post')){
            $data = $request->all();
                  
            if ($request->has('profile_image')) {
                    $image = $data['profile_image'];
                    $name = $image->getClientOriginalName();
                    $destinationPath = 'public/admin/common/business/';
                    $image->move($destinationPath, $name);
            }  
            else{
                $name = $non_business['non_busines_image'];
            }   
                $edit_nonbusiness = User::where('id',$id)->update([

                    'profile_image'               => @$name,
                    'name'                        => $data['name'],
                    'email'                       => $data['email'],
                    'dob'                         => $data['dob'],
                    'phone_no'                    => $data['phone_no'],
                    'username'                    => $data['username'],
           

                ]);

                return redirect('nonbusiness/manage');              
        };
       
        return view('admin.UserManagement.edit-Nonbusiness',compact('non_business'));

    }

    public function delete_nonbusiness($id){
        
        $id=base64_decode($id);
        $delete = User::where('id', $id)->delete();
        return redirect()->back();   

    }

    public function searchnonbusiness(Request $request){

        $search = $request->input('search');

        $non_business = User::where('name', 'LIKE', '%' . $search . '%')
        ->orWhere('email', 'LIKE', '%' . $search . '%')
        ->orWhere('dob', 'LIKE', '%' . $search . '%')
        ->orWhere('phone_no', 'LIKE', '%' . $search . '%')
        ->orWhere('username', 'LIKE', '%' . $search . '%')
        ->paginate(10);

        return view('admin.UserManagement.Non-Business',compact('non_business'));
    }

    public function nonbusinessexportCSV(){
        $file_name = 'nonbusiness_' . date('Y_m_d_H_i_s') . '.csv';
        return Excel::download(new nonBusinessExport, $file_name);
    }

    public function nonbusinessexportExcel(){
        $file_name = 'nonbusiness_' . date('Y_m_d_H_i_s') . '.xlsx';
        return Excel::download(new nonBusinessExport, $file_name);
    }
}
?>