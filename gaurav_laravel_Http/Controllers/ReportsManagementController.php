<?php
namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\reportUserId;

class ReportsManagementController extends Controller
{
    public function reportmanagement(Request $request){  
        
        $data = $request->all();
        $report = reportUserId::orderBy('id','desc')->get()->toArray();   
        
        $reportid=reportUserId::paginate(3);

        return view('admin.ReportsManagement.reportmanagement',compact('report','reportid'));

    }

    public function viewreportmanagement(Request $request,$id){  
        
        $id=base64_decode($id);
        $data = $request->all();
        $report = reportUserId::where('id',$id)->first(); 
        return view('admin.ReportsManagement.view-reportmanagement',compact('report'));
    }


    public function deletereportmanagement(Request $request,$id){  
        
        $id=base64_decode($id);
        $delete = reportUserId::where('id', $id)->delete();
        return redirect()->back()->with('success', 'deleted Successfully.');   
    }



        public function addreportmanagement(Request $request){
                if($request->isMethod('post')){
                    $data = $request->all();
                    reportUserId::create([
                    'reason' => $data['reason'],
                    'AdditionalComments' => $data['comment'],
                
                ]);
                return redirect('/reportmanagement')->with('success','Added Successfully');  
            }
            return view('admin.ReportsManagement.add-reportmanagement');
        }



        public function editreportmanagement(Request $request,$id){
            $id=base64_decode($id);
            $report =reportUserId::where('id',$id)->first();
            if($request->isMethod('post')){
                $data = $request->all();
                reportUserId::where('id',$id)->update([
                    'reason' => $data['reason'],
                    'AdditionalComments' => $data['comment'],
                    ]);
                    return redirect('/reportmanagement');  
            };
            return view('admin.ReportsManagement.edit-reportmanagement',compact('report'));


        }









}
