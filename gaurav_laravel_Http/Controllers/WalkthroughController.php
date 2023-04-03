<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WalkThrough;

class WalkthroughController extends Controller
{
   public function walkthrough(Request $request){    

      $data = $request->all();  
      $page ="walkthrough";
      $Walkth = WalkThrough::paginate(3);
    
      return view('admin.walkthrough.walk_through',compact('Walkth','page'));

   }

   public function walkthroughinsert(Request $request){    
  
      if($request->isMethod('post')){
         $Walk = WalkThrough::get()->toArray();  
         $data = $request->all();

        
         if ($request->hasFile('image')) {
             $image = $data['image'];
             $name = $image->getClientOriginalName();
             $destinationPath = '/var/www/html/kvs_rest_api/public/profileimage';
             $image->move($destinationPath, $name);
         }

         WalkThrough::create([
                 'image'           => @$name,
                 'text'            => $data['text'],    
         ]);
         
     };
                 
     return view('admin.walkthrough.walk_through',compact('Walk'));

   }

   public function viewwalkthrough(Request $request,$id){    

      $id=base64_decode($id);
      $data = $request->all();
      $Walk = WalkThrough::where('id',$id)->first(); 
  
      return view('admin.walkthrough.view-walkthrough',compact('Walk'));

   }

   public function editWalkthrough(Request $request,$id){

      $id=base64_decode($id);
      $wthrough =WalkThrough::where('id',$id)->first();  
    //   dd($wthrough);
      if($request->isMethod('post')){
          $data = $request->all();
       
          if ($request->has('image')) {
                  $image = $data['image'];
                  $name = $image->getClientOriginalName();
                  $destinationPath = '/var/www/html/kvs_rest_api/public/profileimage';
                  $image->move($destinationPath, $name);
          } 
          else{
              $name = $wthrough['image'];
          }   
        //   dd($data);
              $wthrough = WalkThrough::where('id',$id)->update([
                  'image'                => @$name,
                  'text'                 => $data['text']
              ]);
              return redirect('walkthrough');
      }
      return view('admin.walkthrough.edit-walkthrough',compact('wthrough'));
  }

  public function deletewalkthrough($id){
        
    $id=base64_decode($id);
    $delete = WalkThrough::where('id', $id)->delete();
    return redirect()->back();   

}
}

   ?>


