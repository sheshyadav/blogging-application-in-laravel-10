<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;

use App\Models\UserSocial;
use App\Models\Subscriber;
use App\Models\Category;
use App\Models\Carousel;
use App\Models\Post;
use App\Models\User;
use Exception;
use Lang;
use Log;

class AdminController extends Controller
{

protected $user;
/*
|------------------------------------------------
|   Grant access to logged in user
|------------------------------------------------
*/
    public function __construct(User $user){
        $this->middleware(function ($request, $next) {
            $this->user = $request->user();
            return $next($request);
        });
    }

/*
|------------------------------------------------
|   Admin dashoard view page function
|------------------------------------------------
*/
    public function AdminDashboard(){
        $category = Category::count();
        $carousel = Carousel::count();
        $posts = Post::count();
        $subscriber = Subscriber::count();
        return view("admin.pages.dashboard")
        ->with(compact("category","carousel","posts", "subscriber"));
    }

/*
|------------------------------------------------
|   Admin profile setting functions start
|------------------------------------------------
*/

    /**--- admin profile setting view page ---**/
    public function AdminProfileView(){
        if(isset($_SERVER['HTTP_REFERER'])){
        return view("admin.pages.profile");
        }else{ return abort(404); }
    }

    /**--- admin side author profile photo update section ---**/
    public function AdminProfileUpdate(Request $request){
        return User::UploadProfile($request);
    }

    /**---  admin profile information update function ---**/
    public function AdminInfoUpdate(Request $request){
        return User::Updates($request);
    }

    /**--- admin social media link update function ---**/
    public function AdminSocialLinkUpdate(Request $request){
        return UserSocial::CreateUpdate($request);
    }

    /**--- admin account password update function ---**/
    public function AdminUpdatePassword(Request $request){
        return User::PasswordUpdate($request);
    }

    /**--- admin account email id update function ---**/
    public function AdminUpdateEmail(Request $request){
        return User::EmailidUpdate($request);
    }

/*
|------------------------------------------------
|   Admin profile setting functions end
|------------------------------------------------
*/


/*
|------------------------------------------------
|   Category section functions start
|------------------------------------------------
*/
    /**---- show the category dashboard ----**/
    public function CategoryDashboard(){
        if(isset($_SERVER['HTTP_REFERER'])){
            $categorys  = Category::orderBy("catid", "DESC")->get();
            return view("admin.pages.category")
            ->with(compact("categorys"));
        }else{ return abort(404); }
    }

    /**--- Category add view function ---**/
    public function CategoryAddView(){
        if(isset($_SERVER['HTTP_REFERER'])){
            return view("admin.pages.category-add");
        }else{ return abort(404);}
    }

    /**--- category info add function ----**/
    public function CategoryAdd(Request $request){
        return Category::Creates($request);
    }

    /**--- category update view page  function ---**/
    public function CategoryUpdateView($catid){
        if(isset($_SERVER['HTTP_REFERER'])){
            if($category = Category::find($catid)){
            return view("admin.pages.category-add")
            ->with(compact("category"));
            }else{ return back()->with("error", Lang::get("auth.failed"));}
        }else{ return abort(404);}
    }

    /**--- category info update  function ---**/
    public function CategoryUpdate(Request $request, $catid){
            return Category::Updates($request, $catid);
    }

    /**--- category status manage function ---**/
    public function CategoryStatus(Request $request){
        return Category::Status($request);
    }

    /**--- category delete  function ---**/
     public function CategoryDelete(Request $request){
        return Category::Deletes($request);
    }
/*
|------------------------------------------------
|   Category section functions end
|------------------------------------------------
*/


/*
|------------------------------------------------
|   Carousel section functions start
|------------------------------------------------
*/

    /**------ carousel dashboard view page ------**/
    public function CarouselDashboard(){
        if(isset($_SERVER['HTTP_REFERER'])){
            $carousels = Carousel::orderBy("id", "DESC")->get();
            return view("admin.pages.carousel")
            ->with(compact("carousels"));
        }else{ return abort(404); }
    }

    /**------ carousel create new view -------**/
    public function CarouselAddView(){
        if(isset($_SERVER['HTTP_REFERER'])){
            return view("admin.pages.carousel-add");
        }else{ return abort(404); }
    }

    /**------ carousel create add new -------**/
    public function CarouselAdd(Request $request){
            return Carousel::Creates($request);
    }

    /**------ carousel create new view -------**/
    public function CarouselUpdateView($id){
        if(isset($_SERVER['HTTP_REFERER'])){
            if($carousel = Carousel::find($id)){
                return view("admin.pages.carousel-add")->with(compact("carousel"));
            }else{
                return back()->with('error', Lang::get("auth.carousel-invalid"));
            }
        }else{ return abort(404); }
    }

    /**------ carousel create add new -------**/
    public function CarouselUpdate(Request $request, $id){
            return Carousel::Updates($request, $id);
    }

    /**--- carousel status manage function ---**/
    public function CarouselStatus(Request $request){
        return Carousel::Status($request);
    }

    /**--- carousel delete  function ---**/
    public function CarouselDelete(Request $request){
        return Carousel::Deletes($request);
    }


/*
|------------------------------------------------
|   Carousel section functions end
|------------------------------------------------
*/


/*
|------------------------------------------------
|   Posts section functions start
|------------------------------------------------
*/
    /**--- all created posts lists show ---**/
    public function PostsView(){
        if(isset($_SERVER['HTTP_REFERER'])){
        $posts = Post::all();
        return view("admin.pages.posts")->with(compact("posts"));
        }else{ return abort(404); }
    }

    /**--- all created posts lists by category show ---**/
    public function CreatedPostLists(Request $request){
        if(isset($_SERVER['HTTP_REFERER']) && $category = Category::find(request()->catid)){
        $posts = Post::where("category", request()->catid)
        ->orderBy("pid", "DESC")->get();
        return view("admin.pages.posts")->with(compact("posts","category"));
        }else{ return abort(404); }
    }

    /**--- new post create form page view ----**/
    public function PostCreateView(){
        if(isset($_SERVER['HTTP_REFERER'])){
        $categorys  = Category::where("status", 1)->get();
        return view("admin.pages.post-create")
        ->with(compact("categorys"));
        }else{ return abort(404);}
    }

    /**--- post new slug verify ---**/
    public function PostSlugVerify(Request $request){
        if(isset($_SERVER['HTTP_REFERER'])){
            $validator = Validator::make($request->all(),[
                'slug' => 'required|unique:posts,slug'
            ]);

            if($validator->fails()){
                return response()->json(["status"=>false, "data" => $validator->errors()]);
            }else{
                return response()->json(["status"=>true, "data"=>'Slug verified']);
            }
        }else{  return response()->json(["status"=>false, "data"=>'invalid access']); }
    }

    /**--- new post create and store in database ---**/
    public function CreateNewPost(Request $request){
            return Post::Creates($request);
    }

    /**--- post info update view ----**/
    public function PostUpdateView(int $post_id){
        if(isset($_SERVER['HTTP_REFERER'])){
            if($post = Post::find($post_id)){
                $categorys  = Category::where("status", 1)->get();
                return view("admin.pages.post-create")->with(compact("post", "categorys"));
            }else{ return back()->with("error", Lang::get("auth.failed"));}
        }else{ abort(404); }
    }

    /**--- post info update function ---**/
    public function PostUpdate(Request $request, int $post_id){
            return Post::Updates($request, $post_id);
    }

    /**--- post status manage ---**/
    public function PostStatus(Request $request){
            return Post::Status($request);
    }

    /**--- post delete function ---**/
    public function PostDelete(Request $request){
            return Post::Deletes($request);
    }

    /**--- admin post view function ---**/
    public function PostView(string $slug){
        if(isset($_SERVER['HTTP_REFERER'])){
            if($post = Post::where(DB::raw('BINARY `slug`'), $slug)->first()){
                return view("admin.pages.post-view")->with(compact("post"));
            }else{ return back()->with("error", Lang::get("auth.failed"));}
        }else{ abort(404); }
    }

/*
|------------------------------------------------
|   Post section functions end
|------------------------------------------------
*/

/*
|------------------------------------------------
|   Gallery manage functions start
|------------------------------------------------
*/

    /**----- get all images lists function -----**/
    public function Gallery(){
        if(isset($_SERVER['HTTP_REFERER'])){
            $gallery = array();
            $folder = public_path('assets/images/gallery/');
            $images = glob($folder.'*.{jpg,jpeg,png,gif}', GLOB_BRACE);
            foreach ($images as $image) {
            array_push($gallery, url('assets/images/gallery/'.pathinfo($image, PATHINFO_BASENAME)));
            }
           return view("admin.pages.gallery")->with(compact("gallery"));
        }else{ abort(404); }
    }

    /**----- upload new image function -----**/
    public function GalleryImagesUpload(Request $request){
        $validator = Validator::make($request->all(), [
            'files' => 'required|array',
        ]);
        if($validator->fails()){
            return response()->json(['status'=>false, 'data'=>$validator->errors()->all()]);
        }else{
            try{
                foreach($request->file("files") as $image){
                    $destinationPath = 'assets/images/gallery/';
                    $fileName = $image->getClientOriginalName();
                    if(!Storage::disk('local')->exists($destinationPath.$fileName)){
                    $image->move($destinationPath, $fileName);
                    }else{$image->move($destinationPath, time().$fileName);}
                }
                return  response()->json(['status'=>true,'data'=> Lang::get("auth.gallery-image-upload")]);
            }catch(Exception $exception){
                return  response()->json(['status'=>false,'data'=>$exception->getMessage()]);
            }
        }
    }

    /**----- delete the gallery image -----**/
    public function GalleryImagesDelete(Request $request){
        $validator = Validator::make($request->all(), [
            'id' => 'required',
        ]);
        if($validator->fails()){
            return response()->json(['status'=>false, 'data'=>$validator->errors()]);
        }else{
            $fileName = pathinfo($request->id, PATHINFO_BASENAME);
            if(Storage::disk('local')->exists('assets/images/gallery/'.$fileName)){
            Storage::disk('local')->delete('assets/images/gallery/'.$fileName);
            }
            return response()->json(['status'=>true, 'data'=> Lang::get("auth.gallery-image-delete")]);
        }
    }

/*
|------------------------------------------------
|   Gallery manage functions end
|------------------------------------------------
*/


}
