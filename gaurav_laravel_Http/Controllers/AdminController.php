<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Hash;
use Session;
use App\Models\Admin;
use Illuminate\Support\Facades\Mail;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;


class AdminController extends Controller 
{
    
    public function login(Request $request){
     
        if(!Auth::guard('admins')->check()) {

            if ($request->isMethod('post')) {
                $data = $request->all();
            
                if (isset($request->email) && isset($request->password)) {
                    $admin = Admin::where('email', $request->email)->first();

                    if (isset($admin) && !empty($admin)) {
                        $password = $admin->password;
                        
                        if (Hash::check($request->password, $admin->password)) {
                            
                            if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
                                return redirect('/dashboard')->with('success','Login success');
                            }
                        } 
                        else {
                            Session::flash('error', 'Wrong Password');
                            return redirect()->back();
                        }
                    } 
                    else {
                        Session::flash('error', 'Email Unregistered');
                        return redirect()->back();
                    }
                }
                 else {
                    return redirect()->back();
                }

            }

            return view('admin.login');

        } 
        else {

            return redirect('/admin/dashboard');
        }

        return view('admin.login');
    }

    public function dashboard(){
        $page = 'dashboard';
        return view('admin.dashboard',compact('page'));
    }

    public function logout(){

        Auth::guard('admins')->logout();
        Session::flash('success', 'Logout Success');
        return redirect('/login');

    }

    public function forgetpass(Request $request){

        if($request->isMethod('post')){
            $data=$request->all();
     
            $admin = Admin::where('email',$request->email)->first();
            $password = Admin::pluck('decoded_password')->first();
            $resetLink=url("/resetpass");
          
            if(!empty($data['email']))
            {
                $subject="Reset Password";
                $name=$admin['name'];
                $email=$data['email'];
                $messages=[
                    'name'=>$name,
                    'password'=>$password,
                    'resetLink'=>$resetLink,
                ];
                Mail::send('admin.email.forgotPassword',$messages,function($messages) use ($email,$subject){
                    $messages->to($email)->subject($subject);
                });

                return redirect('/forgetpass')->with('success','Reset Password link is sended to your email');
            }
        }
        return view('admin.forgot_pass');
    }

    public function resetpass(Request $request){
        if($request->isMethod('post')){
        $data = $request->all();


        $pass = Hash::make($request->password);

        $reset = Admin::query()->update([
          
            'password'=>$pass,
            'decoded_password' => $request->password,
        ]);
        return redirect('/login');
    }

        return view('admin.resetpasswrd');
    }
}
?>