<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Exception;
use Lang;

class Carousel extends Model
{
    use HasFactory;
    protected $table ="carousels";
    protected $primaryKey = "id";

       /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'description',
        'carouselurl',
        'posturl',
        'status',
    ];

/*
|--------------------------------------------------------------
|   <!--- Create new carousel --!>
|--------------------------------------------------------------
*/
    static function Creates(Request $request){
        $validate = $request->validate([
            'carousel_title' => 'required|max:200',
            'carousel_description' => 'required',
            'carousel_url' => 'required|url',
            'post_url' => 'nullable|url',
        ]);

        try{
            $newCarousel = new Carousel;
            $newCarousel->title = $request->carousel_title;
            $newCarousel->description = $request->carousel_description;
            $newCarousel->carouselurl = $request->carousel_url;
            $newCarousel->posturl = $request->post_url;
            $newCarousel->save();
            return back()->with('success', Lang::get("auth.carousel-created"));
        }catch(QueryException $exception){
            return back()->with('error', $exception->getMessage());
        }catch(Exception $exception){
            return back()->with('error', $exception->getMessage() );
        }
    }

/*
|--------------------------------------------------------------
|   <!--- Update carousel information --!>
|--------------------------------------------------------------
*/
    static function Updates(Request $request, int $id){
        $validate = $request->validate([
            'carousel_title' => 'required|max:200',
            'carousel_description' => 'required',
            'carousel_url' => 'required|url',
            'post_url' => 'nullable|url',
        ]);

        try{
            if($newCarousel = Carousel::find($id)){
            $newCarousel->title = $request->carousel_title;
            $newCarousel->description = $request->carousel_description;
            $newCarousel->carouselurl = $request->carousel_url;
            $newCarousel->posturl = $request->post_url;
            $newCarousel->save();
            return redirect('admin/carousel')
            ->with('success', Lang::get("auth.carousel-updated"));
            }else{return back()->with('success', Lang::get("auth.carousel-invalid"));}
        }catch(QueryException $exception){
            return back()->with('error', $exception->getMessage());
        }catch(Exception $exception){
            return back()->with('error', $exception->getMessage() );
        }
    }

/*
|--------------------------------------------------------------
|   <!--- Delete carousel --!>
|--------------------------------------------------------------
*/
    static function Status(Request $request){
        $validator = Validator::make($request->all(),[
            'id' => 'required|integer|exists:carousels,id'
        ]);

        if($validator->fails()){
            return response()->json(["status"=>false, "data" => $validator->messages()->all()]);
        }else{
            try{
                if($carousel = Carousel::find($request->id)){
                    $carousel->status = !$carousel->status;
                    $carousel->save();
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
|   <!--- Delete carousel --!>
|--------------------------------------------------------------
*/
    static function Deletes(Request $request){
        $validator = Validator::make($request->all(),[
            'id' => 'required|integer|exists:carousels,id'
        ]);

        if($validator->fails()){
            return response()->json(["status"=>false, "data" => $validator->messages()->all()]);
        }else{
            try{
                if($carousel = Carousel::find($request->id)){
                    $carousel->delete();
                    return response()->json(["status"=>true, "data"=>Lang::get("auth.carousel-deleted")]);
                }
            }catch(QueryException $exception){
                return response()->json(["status"=>false, "data"=>$exception->getMessage()]);
            }catch(Exception $exception){
                return response()->json(["status"=>false, "data"=>$exception->getMessage()]);
            }
        }
    }

}
