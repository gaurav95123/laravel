<?php



namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\GroupId;
use App\Models\GroupMemberId;
use App\Models\User;
use App\Models\PostMedia;
use Illuminate\Support\Facades\Storage;

class GroupManagementController extends Controller
{
    public function groupmanagement(Request $request){  

        $data = $request->all();
        $post = GroupId::with('groupImg')->get()->toArray();  
        $user=User::where('role','user')->get()->toArray();      
        $business=User::where('role','business')->get()->toArray(); 
        $postid=GroupId::paginate(10);
        $grupimg=PostMedia::get()->toArray();
        return view('admin.GroupManagement.groupmanagemant',compact('post', 'postid','user','business','grupimg'));
    }

    public function addgroupmanagement(Request $request){  
        $user=User::where('role','user')->get()->toArray();
        $business=User::where('role','business')->get()->toArray();    
        $post = GroupId::get()->toArray();  

        if($request->isMethod('post')){
            $data = $request->all();

                if($data['business_id'] == null){
                    $group = GroupId ::create([
                    'userId'=>$data['user_id'],
                    'Description'=>$data['Description'],
                    'Group_catagory'=>$data['Group_catagory']
                    // 'profile_image'=>$pics
                   ])->id;
                }
                elseif($data['user_id'] == null){
                    $group = GroupId ::create([
                    'userId'=>$data['business_id'],
                    'Description'=>$data['Description'],
                    'Group_catagory'=>$data['Group_catagory']
                    // 'profile_image'=>$pics
                   ])->id;

                }

                $files = $data['profile_image'];
                $path = 'group';
                foreach($files as $imgfile) {
                $imageName = time().'.'.$imgfile->extension();
                $path = Storage::disk('s3')->put('group',$imgfile);
                $pics = Storage::disk('s3')->url($path);
                   PostMedia::create([
                        'group_id' => $group,
                        'media_url' => $pics,
                    ]);
                }
                    
        }

        // $rrr = GroupId::with('groupImg')->orderBy('id', 'desc')->get()->toArray();
        // dd($rrr);
        return view('admin.GroupManagement.groupmanagemant',compact('post','user','business')); 
         
    }

    public function viewgroupmanagement( Request $request,$id){ 
         
        $id=base64_decode($id);
        $data = $request->all();
        $view =GroupId::where('id',$id)->first(); 

        return view('admin.GroupManagement.viewgroupmanagemant',compact('view'));

    }

    public function deletegroupmanagement(Request $request, $id){

        $id=base64_decode($id);
        $delete = GroupId::where('id', $id)->first();
        GroupId::where('id', $id)->delete();

        return redirect()->back()->with('success', 'deleted Successfully.');    
    }

    public function searchgroupmanagement(Request $request){
        $search = $request->input('search');
            
        $post = GroupId::where('userId', 'LIKE', '%' . $search . '%')
        ->orWhere('Description', 'LIKE', '%' . $search . '%')
        // ->orWhere('Group_catagory', 'LIKE', '%' . $search . '%')
        // ->orWhere('memberId','LIKE', '%' .$search .'%')
        // ->orWhere('isDeleted', 'LIKE', '%' .$search.'%' )
        ->paginate(10);
        return view('admin.GroupManagement.groupmanagemant',compact('post'));
    
    }

    public function editgroupmanagement( Request $request,$id){

        $id=base64_decode($id); 
        $view=GroupId::where('id', $id)->first();
            if($request->isMethod('post')){
                $data=$request->all();
                if ($request->has('image')) {
                        $path = 'https://kvs-prom.s3.ap-south-1.amazonaws.com/public/img/';
                        if(Storage::disk('s3')->exists($path)) {
                            Storage::disk('s3')->delete($path);
                        }
                        $imageName = time().'.'.$data['image']->extension();
                    $path = Storage::disk('s3')->put('public/img', $data['image']);
                    $pics = Storage::disk('s3')->url($path);
                    }else{
                        $pics = GroupId::where('id',$id)->first()->value('post_image');
                    }
                    $edit = GroupId::where('id', $id)->update([
                                    'userId'            =>$data['userid'],
                                    'Description'          =>$data['description'],
                                    'Group_catagory'      =>$data['category'],
                                    'post_image'       =>$pics  
                    ]);
                    return redirect('/groupmanagemant')->with('success', 'groupmanagement updated');
            }

        return view('admin.GroupManagement.editgroupmanagemant',compact('view'));
    }

}



// public function editpost(Request $request,$id){
//     $id=base64_decode($id); 
//     if($request->isMethod('post')){
//         $data = $request->all();
//         if ($request->has('image')) {
//             $path = 'https://kvs-prom.s3.ap-south-1.amazonaws.com/public/img/';
//             if(Storage::disk('s3')->exists($path)) {
//                 Storage::disk('s3')->delete($path);
//             }
//         $imageName = time().'.'.$data['image']->extension();
//         $path = Storage::disk('s3')->put('public/img', $data['image']);
//         $pics = Storage::disk('s3')->url($path);
//         }else{
//             $pics = GroupId::where('id',$id)->first()->value('post_image');
//         }

//         $edit = GroupId::where('id', $id)->update([
//             'userId'            =>$data['userid'],
//             'Description'          =>$data['description'],
//             'Group_catagory'      =>$data['category'],
//             'post_image'       =>$pics                  
//         ]);
//         return redirect('/')->with('success', 'Post Updated Successfully.');
//     }
//     return view('admin.GroupManagement.editgroupmanagemant',compact('role','view'));
// }