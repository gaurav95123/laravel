<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\businessType;
use App\Exports\businessenquiryExport;
use Maatwebsite\Excel\Facades\Excel;

class BusinessenquiryController extends Controller
{



    public function busines(Request $request){    

        $data = $request->all();  
        $busines = businessType::paginate(10);
        return view('admin.BusinessEnquiry.business_enquiry',compact('busines'));
    }


    public function viewbusiness(Request $request,$id){    

      $id=base64_decode($id);
      $data = $request->all();
      $busines = businessType::where('id',$id)->first(); 
  
      return view('admin.BusinessEnquiry.view-businessenquiry',compact('busines'));

}

public function deletebusiness($id){
        
    $id=base64_decode($id);
    $delete = businessType::where('id', $id)->delete();
    return redirect()->back();   



}



public function edit_business(Request $request,$id){
    $id=base64_decode($id);
    $busines =businessType::where('id',$id)->first();
    if($request->isMethod('post')){
        $data = $request->all();
            businessType::where('id',$id)->update([
                'enquiry' => $data['enquiry'],
            ]);
            return redirect('/busines');  
    };
    return view('admin.BusinessEnquiry.edit-businessenquiry',compact('busines'));
}

public function adddbusiness(Request $request){
    if($request->isMethod('post')){
        
         $data = $request->all();
       // dd($data); 
        $busines= businessType::create([ 
          'enquiry' => $data['business_name'],
          
        ]);
        return redirect('/busines');  
       // return redirect()->back();
    }
    return view('admin.BusinessEnquiry.addbusiness');
}


public function businessenquirycsv(){
    $file_name = 'businessenquiry_' . date('Y_m_d_H_i_s') . '.csv';
    // dd($file_name);
    return Excel::download(new businessenquiryExport, $file_name);
}

public function searchbusinessenquiry(Request $request){

    $search = $request->input('search');

    $busines = businessType::where('enquiry', 'LIKE', '%' . $search . '%')
    ->paginate(10);

    return view('admin.BusinessEnquiry.business_enquiry',compact('busines'));
    
}

}
