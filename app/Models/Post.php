<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\QueryException;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use Exception;
use Lang;

class Post extends Model
{
    use HasFactory;
    protected $table ="posts";
    protected $primaryKey = "pid";
    protected $dates = ['schedule'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user',
        'category',
        'title',
        'slug',
        'thumbnail',
        'videourl',
        'description',
        'matakeyword',
        'matadescription',
        'status',
        'schedule',
    ];

    /**
     * Interact with the post title.
     */
    protected function title(): Attribute
    {
        return Attribute::make(
            //get: fn (string $value) => ucfirst($value),
            set: fn (string $value) => ucwords($value),
        );
    }


    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'status' => \App\Enum\PostStatus::class
    ];


/*
|--------------------------------------------------------------
|   <!---get post author name and email  --!>
|--------------------------------------------------------------
*/
    public function Author(){
        return $this->hasOne(User::class, 'id', 'user')
        ->select('id', 'name','email');
    }


/*
|--------------------------------------------------------------
|   <!--- get post category name  --!>
|--------------------------------------------------------------
*/
    public function Category(){
        return $this->hasOne(Category::class, 'catid','category')
        ->select('catid', 'name','slug');
    }


/*
|--------------------------------------------------------------
|   <!--- Create new post --!>
|--------------------------------------------------------------
*/
    static function Creates(Request $request){
        $validate = $request->validate([
            'post_title' => 'required',
            'post_slug' => 'required|unique:posts,slug',
            'post_category' => 'required|exists:categories,catid',
            'post_meta_keyword' => 'required',
            'post_meta_keyword' => 'required',
            'post_meta_description' => 'required',
            'post_thumbnail' => 'nullable|mimes:jpg,png,jpeg',
            'post_description' => 'required',
            'video_url' => 'nullable|url',
            'post_schedule_date' => 'nullable',
        ]);

        try{
            $newPost = new Post;
            $newPost->user = auth()->user()->id;
            $newPost->category = $request->post_category;
            $newPost->title =   $request->post_title;
            $newPost->slug =    $request->post_slug;
            if(isset($request->post_thumbnail) && !empty($request->post_thumbnail)){
            $fileName = $request->post_slug.'.'.$request->post_thumbnail->extension();
            $path = 'assets/images/blog/'.$fileName;
            Storage::disk('local')->put($path, file_get_contents($request->file('post_thumbnail')));
            $newPost->thumbnail =   $fileName;
            }
            $newPost->videourl =    $request->video_url;
            $newPost->description = $request->post_description;
            $newPost->metakeyword = $request->post_meta_keyword;
            $newPost->metadescription = $request->post_meta_description;
            if(!empty($request->post_schedule_date)){
            $makeDate = date('Y-m-d H:i:s', strtotime($request->post_schedule_date));
            $newPost->schedule = utc_time($makeDate)->format('Y-m-d H:i:s');
            $newPost->status = 2;
            }

            $newPost->save();
            return redirect("/admin/category/$request->post_category/post")
            ->with('success', Lang::get("auth.blog-created"));
        }catch(QueryException $exception){
            return back()->with('error', $exception->getMessage());
        }catch(Exception $exception){
            return back()->with('error', $exception->getMessage() );
        }
    }

/*
|--------------------------------------------------------------
|   <!--- Create new post --!>
|--------------------------------------------------------------
*/
    static function Updates(Request $request, $id){
        $validate = $request->validate([
            'post_title' => 'required',
            'post_slug' => 'required|unique:posts,slug,'.$id.',pid',
            'post_category' => 'required|exists:categories,catid',
            'post_meta_keyword' => 'required',
            'post_meta_keyword' => 'required',
            'post_meta_description' => 'required',
            'post_thumbnail' => 'nullable|mimes:jpg,png,jpeg',
            'post_description' => 'required',
            'video_url' => 'nullable|url',
            'post_schedule_date' => 'nullable',
            'post_thumbnail_status' => ['required', 'integer', Rule::in([0, 1])]
        ]);


        try{
            $newPost = Post::find($id);
            $newPost->category = $request->post_category;
            $newPost->title =   $request->post_title;
            $newPost->slug =    $request->post_slug;
            if(isset($request->post_thumbnail) && !empty($request->post_thumbnail)){
            $fileName = $request->post_slug.'.'.$request->post_thumbnail->extension();
            $path = 'assets/images/blog/'.$fileName;
            Storage::disk('local')->put($path, file_get_contents($request->file('post_thumbnail')));
            $newPost->thumbnail =   $fileName;
            }

            $newPost->videourl =    $request->video_url;
            $newPost->description = $request->post_description;
            $newPost->metakeyword = $request->post_meta_keyword;
            $newPost->metadescription = $request->post_meta_description;
            if(!empty($request->post_schedule_date)){
            $makeDate = date('Y-m-d H:i:s', strtotime($request->post_schedule_date));
            $newPost->schedule = utc_time($makeDate)->format('Y-m-d H:i:s');
            $newPost->status = 2;
            }else{
            $newPost->schedule = null;
            $newPost->status = 0;
            }

            if($request->post_thumbnail_status == 0){
            if(Storage::disk('local')->exists('assets/images/blog/'.$newPost->thumbnail)){
            Storage::disk('local')->delete('assets/images/blog/'.$newPost->thumbnail);
            }
            $newPost->thumbnail = null;
            }

            $newPost->save();
            return back()->with('success', Lang::get("auth.blog-updated"));
        }catch(QueryException $exception){
            return back()->with('error', $exception->getMessage());
        }catch(Exception $exception){
            return back()->with('error', $exception->getMessage() );
        }
    }

/*
|--------------------------------------------------------------
|   <!--- Create new post --!>
|--------------------------------------------------------------
*/
    static function Status(Request $request){
        $validator = Validator::make($request->all(),[
            'id' => 'required|integer|exists:posts,pid'
        ]);

        if($validator->fails()){
            return response()->json(["status"=>false, "data" => $validator->messages()->all()]);
        }else{
            try{
                if($post = Post::find($request->id)){
                    $post->status = !$post->status->value;
                    $post->schedule = null;
                    $post->save();
                    return response()->json(["status"=>true, "data"=>'']);
                }
            }catch(QueryException $exception){
                return response()->json(["status"=>false, "data"=>$exception->getMessage()]);
            }catch(Exception $exception){
                return response()->json(["status"=>false, "data"=>$exception->getMessage()]);
            }
        }
    }


/*
|--------------------------------------------------------------
|   <!--- Create new post --!>
|--------------------------------------------------------------
*/
    static function Deletes(Request $request){
        $validator = Validator::make($request->all(),[
            'id' => 'required|integer|exists:posts,pid'
        ]);

        if($validator->fails()){
            return response()->json(["status"=>false, "data" => $validator->messages()->all()]);
        }else{
            try{
                if($post = Post::find($request->id)){
                    if(Storage::disk('local')->exists('assets/images/blog/'.$post->thumbnail)){
                        Storage::disk('local')->delete('assets/images/blog/'.$post->thumbnail);
                    }
                    $post->delete();
                    return response()->json(["status"=>true, "data"=>Lang::get("auth.blog-deleted")]);
                }
            }catch(QueryException $exception){
                return response()->json(["status"=>false, "data"=>$exception->getMessage()]);
            }catch(Exception $exception){
                return response()->json(["status"=>false, "data"=>$exception->getMessage()]);
            }
        }
    }


}
