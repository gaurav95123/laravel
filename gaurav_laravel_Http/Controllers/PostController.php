<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
// use App\Models\Nonbusiness;
// use App\Models\Business;
use App\Models\Post;
use App\Models\PostMedia;
use App\Models\User;


class PostController extends Controller 
{
    public function posts(Request $request){
        $data = $request->all();
        $posts = Post::orderBy('id','desc')->with('PostsImg')->get()->toArray(); 
        $post_all=Post::paginate(10);
        return view('admin.PostManagement.postmanagement',compact('posts', 'post_all'));
    }

    public function addposts(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            if($data['business_id'] == null){
                $userId = Post::create([
                    'title'            => $data['title'],
                    'content'          => $data['content'],
                    'posted_date'      => $data['posted_date'],
                    'role'             => $data['role'],
                    'user_id'          => $data['user_id'],
                ])->id;
            }elseif($data['user_id'] == null){
                $userId = Post::create([
                    'title'            => $data['title'],
                    'content'          => $data['content'],
                    'posted_date'      => $data['posted_date'],
                    'role'             => $data['role'],
                    'user_id'          => $data['business_id'],
                ])->id;

            }
            $files = $data['images'];
            $path = 'userPosts';
            foreach($files as $imgfile) {
            $imageName = time().'.'.$imgfile->extension();
            $path = Storage::disk('s3')->put('userPosts',$imgfile);
            $pics = Storage::disk('s3')->url($path);
                PostMedia::create([
                    'post_id' => $userId,
                    'media_url' => $pics,
                    'media_type' => $data['media_type']
                ]);
            }
            return redirect('posts/manage')->with('success', 'Post Added Successfully.');
        }      
        $user=User::where('role','user')->get()->toArray();
        $business=User::where('role','business')->get()->toArray();
        return view('admin.PostManagement.add_post_management',compact('user','business'));
    }

      public function viewposts(Request $request,$id){
        $id=base64_decode($id);
        $view =Post::where('id',$id)->with('PostsImg')->first()->toArray();  
        $mediaData = PostMedia::where('post_id',$id)->get()->toArray();

        return view('admin.PostManagement.view-postmanagement',compact('view','mediaData'));
    }

    public function editpost(Request $request, $id)
    {

        $id = base64_decode($id);
        // $rrr = PostMedia::where('post_id', $id)->first()->toArray();

        if ($request->isMethod('post')) {
            $data = $request->all();

            $userId = Post::where('id', $id)->first()->toArray();
            // dd($userId);
            $files = $data['images'];
            $path = 'userPosts';
            // dd($data['media_type']);
            foreach ($files as $imgfile) {
                $imageName = time() . '.' . $imgfile->extension();
                $path = Storage::disk('s3')->put('userPosts', $imgfile);
                $pics = Storage::disk('s3')->url($path);
                PostMedia::where('post_id', $id)->first()->update([
                    'post_id' => $userId['id'],
                    'media_type' => $data['mediaImage'],
                    'media_url' => $pics,
                ]);
            }

            //     if ($request->has('images[]')) {
            //         // $path = 'https://kvs-prom.s3.ap-south-1.amazonaws.com/public/img/';

            //     // $imageName = time().'.'.$data['images']->extension();

            //     $path = Storage::disk('s3')->put('userPosts', $data['images[]']);

            //      if(Storage::disk('s3')->exists($path)) {

            //             Storage::disk('s3')->delete($path);
            //         }

            //     $pics = Storage::disk('s3')->url($path);

            //     }
            //     else{
            //         $pics = Post::where('id',$id)->first()->value('post_image');
            //     }

            //     $files = $data['images'];
            //     $path = 'userPosts';
            //     foreach($files as $imgfile) {
            //     $imageName = time().'.'.$imgfile->extension();
            //     $path = Storage::disk('s3')->put('userPosts',$imgfile);
            //     $pics = Storage::disk('s3')->url($path);
            // }
            // $edit = Post::where('id', $id)->update([
            //     'title'            =>$data['title'],
            //     'content'          =>$data['content'],
            //     'posted_date'      =>$data['posted_date'],
            //     'role'             =>$data['role'],
            //     'user_id'          =>$data['user_id'],
            //     'media_type'       =>$data['media_type'],
            //     'post_image'       =>$pics
            // ]);
            // return redirect('/posts/manage')->with('success', 'Post Updated Successfully.');
        }
        $view = Post::where('id', $id)->with('PostsImg')->first()->toArray();
        $postId = Post::where('id', $id)->first();
        $mediaData = PostMedia::where('post_id', $id)->get()->toArray();
        // dd($mediaData);
        $role = User::get()->toArray();
        return view('admin.PostManagement.edit_post_management', compact('role', 'view', 'mediaData'));
    }
 
 

        public function deletepost($id){
        $id=base64_decode($id);
        $party = Post::where('id',$id)->with('PostsImg')->first()->toArray();
        PostMedia::where('post_id',$party)->delete();
        Post::where('id',$id)->delete();
        return redirect()->back()->with('success', 'Post deleted Successfully.');   
    }
       
        public function searchposts(Request $request){
        $search = $request->input('search');
        $post_all = Post::where('title', 'LIKE', '%' . $search . '%')
        ->orWhere('content', 'LIKE', '%' . $search . '%')
        ->orWhere('posted_date', 'LIKE', '%' . $search . '%')
        ->paginate(10);
        return view('admin.PostManagement.postmanagement',compact('post_all'));
        
    }

    public function ChangeUserStatus(Request $request){
        $data = $request->all();
        // dd($data);
        Post::where('id', $data['user_id'])->update([
            'status' => $data['status']
        ]);
        return response()->json([
            'success' => true,
            'message' => 'Status Changed Successfully.'
        ]);
    }

}
    
    
 

                    





         
         

                   


        




        











    
