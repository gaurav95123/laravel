<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\rManagement;
// use App\Exports\businessenquiryExport;
// use Maatwebsite\Excel\Facades\Excel;

class RmanagementController extends Controller
{
    public function rmanagement(Request $request){
        $data= $request->all();
        $rman= rManagement::get()->toarray();
        return view('admin.RManagement.rmanagement',compact('rman'));

    }

    public function viewrmanagement(Request $request,$id){    

        $id=base64_decode($id);
        $data = $request->all();
        $view = rManagement::where('id',$id)->first(); 
    
        return view('admin.RManagement.viewrmanagement',compact('view'));
  
  }

    public function deletermanagement($id){
            
        $id=base64_decode($id);
        $delete = rManagement::where('id', $id)->delete();
        return redirect()->back()->with('success', 'deleted Successfully.');   

    }



    public function searchrmanagement(Request $request){

        $search = $request->input('search');

        $rman= rManagement::where('userId', 'LIKE', '%' . $search . '%')
        ->orWhere('reportUserId', 'LIKE', '%' . $search . '%')
        ->orWhere('reason', 'LIKE', '%' . $search . '%')
        ->orWhere('AdditionalComments', 'LIKE', '%' . $search . '%')
        ->paginate(10);

        return view('admin.RManagement.rmanagement',compact('rman'));
    }
    










}

