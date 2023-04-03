<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\reportReason;
// use App\Exports\businessenquiryExport;
// use Maatwebsite\Excel\Facades\Excel;

class ReportreasonController extends Controller
{



    public function businessreason(Request $request){    

        $data = $request->all();  
        $businessreason = reportReason::get()->toArray(); 
        return view('admin.BusinessReason.businessreason',compact('businessreason'));
    }


    public function viewbusinessreason(Request $request,$id){    

      $id=base64_decode($id);
      $data = $request->all();
      $businessreason = reportReason::where('id',$id)->first(); 
  
      return view('admin.BusinessReason.viewbusinessreason',compact('businessreason'));

}

public function deletebusinessreason ($id){
        
    $id=base64_decode($id);
    $delete = reportReason::where('id', $id)->delete();
    return redirect()->back()->with('success', 'deleted Successfully.');   



}



public function editbusinessreason(Request $request,$id){
    $id=base64_decode($id);
    $businessreason =reportReason::where('id',$id)->first();
    if($request->isMethod('post')){
        $data = $request->all();
        reportReason::where('id',$id)->update([
                'reportreason' => $data['editbusiness'],
            ]);
            return redirect('/businessreason');  
    };
    return view('admin.BusinessReason.editbusinessreason',compact('businessreason'));
}

public function addbusinessreason(Request $request){
    if($request->isMethod('post')){
        
         $data = $request->all();
       // dd($data); 
        $businessreason= reportReason::create([ 
          'reportreason' => $data['addbusinesscat'],
          
        ]);
        return redirect('/add_businessreason');  
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
