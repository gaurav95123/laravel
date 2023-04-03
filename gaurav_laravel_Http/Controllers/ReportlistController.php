<?php
namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use App\Models\businessRequirmentId;
use App\Models\GroupId;
use App\Exports\businessenquiryExport;
use App\Exports\BusinessExport;
// use Maatwebsite\Excel\Facades\Excel;
use Excel;
use Mail;


class ReportlistController extends Controller
{
    public function viewusers(Request $request){    

            $data = $request->all();  
            $user= User::paginate(3);  
            return view('admin.GenerateReports.listofuser',compact('user'));
    }

    public function viewposts(Request $request){    

    $data = $request->all();  
    $post= Post::paginate(3);  
    return view('admin.GenerateReports.listofposts',compact('post'));
    }

    public function viewbusinessreq(Request $request){    

        $data = $request->all();  
        $req= businessRequirmentId::paginate(3);  
        return view('admin.GenerateReports.listofbusinessreq',compact('req'));
        }

        public function viewgroups(Request $request){    

            $data = $request->all();  
            $group= GroupId::paginate(3);  
            return view('admin.GenerateReports.listofgroups',compact('group'));
           
        }


             public function searchuser(Request $request){
            $search = $request->input('search');
            $user = User::where('businessname', 'LIKE', '%' . $search . '%')
            ->orWhere('dob', 'LIKE', '%' . $search . '%')
            ->paginate(6);
            return view('admin.GenerateReports.listofuser',compact('user'));
            
        }

        public function exportCSV(){
            $file_name = 'business_' . date('Y_m_d_H_i_s') . '.csv';
            return Excel::download(new BusinessExport, $file_name);
        }
    
        public function exportExcel(){
            $file_name = 'business_' . date('Y_m_d_H_i_s') . '.xlsx';
            return Excel::download(new BusinessExport, $file_name);
        }


        public function searchbusinessreq(Request $request){
            $search = $request->input('search');
            $req = businessRequirmentId::where('business_category', 'LIKE', '%' . $search . '%')
            ->orWhere('city', 'LIKE', '%' . $search . '%')
            ->orWhere('state', 'LIKE', '%' . $search . '%')
            ->orWhere('Required_goods', 'LIKE', '%' . $search . '%')

            ->paginate(6);
            return view('admin.GenerateReports.listofbusinessreq',compact('req'));
            
        }


        public function searchpost(Request $request){
            $search = $request->input('search');
            $post = Post::where('title', 'LIKE', '%' . $search . '%')
            ->orWhere('posted_date', 'LIKE', '%' . $search . '%')
            ->paginate(6);
            return view('admin.GenerateReports.listofposts',compact('post'));
            
        }

        public function searchgroup(Request $request){
            $search = $request->input('search');
            $group = GroupId::where('Group_catagory', 'LIKE', '%' . $search . '%')
            ->orWhere('Description', 'LIKE', '%' . $search . '%')
            ->paginate(6);
            return view('admin.GenerateReports.listofgroups',compact('group'));
            
        }











}