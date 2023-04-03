<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\groupCatagoryId;
use App\Exports\businessenquiryExport;
use Maatwebsite\Excel\Facades\Excel;

class BusinesscategoryController extends Controller
{



    public function Businescat(Request $request){    

        $data = $request->all();  
        $businescategory = groupCatagoryId::paginate(10);  
        return view('admin.BusinessCategory.businesscategory',compact('businescategory'));
    }


    public function viewbusinesscategory(Request $request,$id){    

      $id=base64_decode($id);
      $data = $request->all();
      $businescategory = groupCatagoryId::where('id',$id)->first(); 
  
      return view('admin.BusinessCategory.viewbusinesscategory',compact('businescategory'));

}

public function deletebusinesscategory($id){
        
    $id=base64_decode($id);
    $delete = groupCatagoryId::where('id', $id)->delete();
    return redirect()->back()->with('success', 'deleted Successfully.');   



}



public function editbusinesscategory(Request $request,$id){
    $id=base64_decode($id);
    $businescategory =groupCatagoryId::where('id',$id)->first();
    if($request->isMethod('post')){
        $data = $request->all();
        groupCatagoryId::where('id',$id)->update([
                'groupCatagory' => $data['editbusiness'],
            ]);
            return redirect('/businesscategory');  
    };
    return view('admin.BusinessCategory.editbusinesscategory',compact('businescategory'));
}

public function addbusinesscategory(Request $request){
    if($request->isMethod('post')){
        
         $data = $request->all();
       // dd($data); 
        $businescategory= groupCatagoryId::create([ 
          'groupCatagory' => $data['addbusinesscat'],
          
        ]);
        return redirect('/add_businesscategory');  
       // return redirect()->back();
    }
    return view('admin.BusinessCategory.addbusinesscategory');
}


public function businesscategorycsv(){
    $file_name = 'businesscategory_' . date('Y_m_d_H_i_s') . '.csv';
    // dd($file_name);
    return Excel::download(new businessenquiryExport, $file_name);
}



public function searchbusinesscategory(Request $request){
     
    $search = $request->input('search');
    $businescategory = groupCatagoryId::where('groupCatagory', 'LIKE', '%' . $search . '%')   
    ->paginate(10);
    return view('admin.BusinessCategory.businesscategory',compact('businescategory'));
}
}
