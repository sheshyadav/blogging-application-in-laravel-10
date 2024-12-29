<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Exception;
use Lang;

class Category extends Model
{
    use HasFactory;
    protected $table ="categories";
    protected $primaryKey = "catid";

/**
    * The attributes that are mass assignable.
    *
    * @var array<int, string>
*/
    protected $fillable = [
        'name',
        'slug',
        'icon',
        'status',
    ];

/*
|--------------------------------------------------------------
|   <!--- Create new category --!>
|--------------------------------------------------------------
*/
    static function Creates(Request $request){
            $validate = $request->validate([
                'category_name' => 'required|string|max:200',
                'category_slug' => 'required|string|regex:/^[a-zA-Z0-9-]+$/u|unique:categories,slug',
                'category_icon' => 'required|mimes:jpg,png,jpeg|max:2048',
            ]);

            try{
                $fileName = $request->category_slug.'.'.$request->category_icon->extension();
                $path = 'assets/images/category/'.$fileName;
                if(Storage::disk('local')->put($path, file_get_contents($request->file('category_icon')))) {
                $newCategory = new Category;
                $newCategory->name = $request->category_name;
                $newCategory->slug = $request->category_slug;
                $newCategory->icon = $fileName;
                $newCategory->save();
                return back()->with('success', Lang::get("auth.category-created"));
                }else{ return back()->with('error', Lang::get("auth.file-upload-error"));}
            }catch(QueryException $exception){
                return back()->with('error', $exception->getMessage());
            }catch(Exception $exception){
                return back()->with('error', $exception->getMessage() );
            }
    }

/*
|--------------------------------------------------------------
|   <!--- Update esiting  category --!>
|--------------------------------------------------------------
*/
    static function Updates(Request $request, int $id){
        $validate = $request->validate([
            'category_name' => 'required|string|max:200',
            'category_slug' => 'required|string|regex:/^[a-zA-Z0-9-]+$/u|max:200|unique:categories,slug,'.$id,
            'category_icon' => 'nullable|mimes:jpg,png,jpeg|max:2048',
        ]);

        try{
            if($category = Category::find($id)){
                if($request->file('category_icon')){
                    $fileName = $request->category_slug.'.'.$request->category_icon->extension();
                    $path = 'assets/images/category/'.$fileName;
                    if(Storage::disk('local')->exists('assets/images/category/'.$category->icon)){
                    Storage::disk('local')->delete('assets/images/category/'.$category->icon);
                    }
                    Storage::disk('local')->put($path, file_get_contents($request->file('category_icon')));
                    $category->icon = $fileName;
                }
                $category->name = $request->category_name;
                $category->slug = $request->category_slug;
                $category->save();
                return redirect('admin/category')
                ->with('success', Lang::get("auth.category-updated"));
            }else{ return back()->with("error", Lang::get("auth.failed")); }
        }catch(QueryException $exception){
            return back()->with('error', $exception->getMessage());
        }catch(Exception $exception){
            return back()->with('error', $exception->getMessage() );
        }
    }

/*
|--------------------------------------------------------------
|   <!--- Category status update --!>
|--------------------------------------------------------------
*/
    static function Status(Request $request){
        $validator = Validator::make($request->all(),[
            'id' => 'required|integer|exists:categories,catid'
        ]);

        if($validator->fails()){
            return response()->json(["status"=>false, "data" => $validator->messages()->all()]);
        }else{
            try{
                if($category = Category::find($request->id)){
                    $category->status = !$category->status;
                    $category->save();
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
|   <!--- Category delete --!>
|--------------------------------------------------------------
*/
    static function Deletes(Request $request){
        $validator = Validator::make($request->all(),[
            'id' => 'required|integer|exists:categories,catid'
        ]);

        if($validator->fails()){
            return response()->json(["status"=>false, "data" => $validator->messages()->all()]);
        }else{
            try{
                if($category = Category::find($request->id)){
                    if(Storage::disk('local')->exists('assets/images/category/'.$category->icon)){
                        Storage::disk('local')->delete('assets/images/category/'.$category->icon);
                    }
                    $category->delete();
                    return response()->json(["status"=>true, "data"=>Lang::get("auth.category-deleted")]);
                }
            }catch(QueryException $exception){
                return response()->json(["status"=>false, "data"=>$exception->getMessage()]);
            }catch(Exception $exception){
                return response()->json(["status"=>false, "data"=>$exception->getMessage()]);
            }
        }
    }



/**
    * Get all of the comments for the Category
    *
    * @return \Illuminate\Database\Eloquent\Relations\HasMany
*/
    public function Posts()
    {
        return $this->hasMany(Post::class, 'category', 'catid');
    }


}
