<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\reportReason;
// use App\Exports\businessenquiryExport;
// use Maatwebsite\Excel\Facades\Excel;

class ReportreasonController extends Controller
{



    public function reportreason(Request $request){    

        $data = $request->all();  
        $businessreason = reportReason::get()->toArray(); 
        return view('admin.BusinessReason.businessreason',compact('businessreason'));
    }


    public function viewreportreason(Request $request,$id){    

      $id=base64_decode($id);
      $data = $request->all();
      $businessreason = reportReason::where('id',$id)->first(); 
  
      return view('admin.BusinessReason.viewbusinessreason',compact('businessreason'));

}

public function deletereportreason ($id){
        
    $id=base64_decode($id);
    $delete = reportReason::where('id', $id)->delete();
    return redirect()->back()->with('success', 'deleted Successfully.');   



}



public function editreportreason(Request $request,$id){
    $id=base64_decode($id);
    $businessreason =reportReason::where('id',$id)->first();
    if($request->isMethod('post')){
        $data = $request->all();
        reportReason::where('id',$id)->update([
                'reason' => $data['editbusiness'],
            ]);
            return redirect('/reportreason');  
    };
    return view('admin.BusinessReason.editbusinessreason',compact('businessreason'));
}

public function addreportreason(Request $request){
    if($request->isMethod('post')){
        
         $data = $request->all();
       // dd($data); 
        $businessreason= reportReason::create([ 
          'reason' => $data['addbusinesscat'],
          
        ]);
        return redirect('/add_reportreason');  
       // return redirect()->back();
    }
    return view('admin.BusinessReason.addbusinessreason');
}


// public function businessenquirycsv(){
//     $file_name = 'businessenquiry_' . date('Y_m_d_H_i_s') . '.csv';
//     // dd($file_name);
//     return Excel::download(new businessenquiryExport, $file_name);
// }





}
