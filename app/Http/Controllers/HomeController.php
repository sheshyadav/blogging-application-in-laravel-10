<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\DB;
use App\Models\Analytics;
use App\Models\Category;
use App\Models\Carousel;
use App\Models\Subscriber;
use App\Models\Post;
use Exception;
use Lang;

class HomeController extends Controller
{

/*
|------------------------------------------------
|   dashbaord view function
|------------------------------------------------
*/
    public function Dashboard(){
        $latestPost = Post::select("pid")->where("status", 1)
        ->orderBy('pid','desc')->limit(5)->get();
        return view("pages.dashboard")
        ->with(compact("latestPost"));

    }

/*
|------------------------------------------------
|   category view function
|------------------------------------------------
*/
    public function Category(){
        return view("pages.category");
    }

/*
|------------------------------------------------
|   show the particular category all posts list
|------------------------------------------------
*/
    public function CategoryPosts($slug){
        if($category = Category::where(DB::raw('BINARY `slug`'), $slug)->first()){
            $posts = Post::select("pid")->where("category", $category->catid)
            ->where("status", 1)
            ->orderBy('pid','desc')->limit(10)->get();
            return view("pages.category-posts")
            ->with(compact("category","posts"));
        }else{ return back()->with("error", Lang::get("auth.failed"));}
    }

/*
|------------------------------------------------
|   Posts  view function
|------------------------------------------------
*/
    public function Posts(){
        $posts = Post::select("pid")->where("status", 1)
        ->orderBy('pid','desc')->limit(10)->get();
        return view("pages.posts")->with(compact("posts"));
    }

/*
|------------------------------------------------
|   post  view function
|------------------------------------------------
*/
    public function PostView($slug){
        try{
            if($post = Post::where(DB::raw('BINARY `slug`'), $slug)->where("status", 1)->first()){
                Analytics::updateView($post->pid);
                return view("pages.post-view")->with(compact("post"));
            }else{ return back()->with("error", Lang::get("auth.failed"));}
        }catch(QueryException $exception){
            return back()->with("error", $exception->getMessage());
        }catch(Exception $exception){
            return back()->with("error", $exception->getMessage());
        }

    }

/*
|------------------------------------------------
|   Tools  view function
|------------------------------------------------
*/
    public function Tools(){
        return view("pages.tools");
    }

/*
|------------------------------------------------
|   About Us  view function
|------------------------------------------------
*/
    public function AboutUs(){
        return view("pages.about-us");
    }

/*
|------------------------------------------------
|   Contact Us  view function
|------------------------------------------------
*/
    public function ContactUs(){
        return view("pages.contact-us");
    }


/*
|------------------------------------------------
|   Privacy Policy  view function
|------------------------------------------------
*/
    public function PrivacyPolicy(){
        return view("pages.privacy-policy");
    }

/*
|------------------------------------------------
|   Terms Condition  view function
|------------------------------------------------
*/
    public function TermsCondition(){
        return view("pages.terms-condition");
    }

/*
|------------------------------------------------
|   Desclamier  view function
|------------------------------------------------
*/
    public function Desclamier(){
        return view("pages.desclamier");
    }

/*
|------------------------------------------------
|   Advertisement  view function
|------------------------------------------------
*/
    public function Advertisement(){
        return view("pages.advertisement");
    }

/*
|------------------------------------------------
|   User website subscriber function
|------------------------------------------------
*/
    public function WebsiteSubscriber(Request $request){
        $validator = Validator::make($request->all(),[
            'subscriber_email' => 'required|email|unique:subscribers,email',
        ]);
        if($validator->fails()){
            return response()->json(["status"=>false, "data" => $validator->messages()->all()]);
        }else{
            try{
                $subscriber = new Subscriber;
                $subscriber->email = $request->subscriber_email;
                $subscriber->ip = $request->ip();
                $subscriber->country = iptocountry($request->ip());
                $subscriber->save();
                return response()->json(["status"=>true, "data" => Lang::get('auth.welcome-subscriber')]);
            }catch(QueryException $exception){
                return response()->json(["status"=>false, "data" => $exception->getMessage()]);
            }catch(Exception $exception){
                return response()->json(["status"=>false, "data" => $exception->getMessage()]);
            }
        }
    }


/*
|------------------------------------------------
|   show all posts quick links lists function
|------------------------------------------------
*/
    public function QuicklinksView(){
        $posts = Post::select("title","slug")->orderBy("pid","DESC")->get();
        return view("pages.quick-links")
        ->with(compact("posts"));
    }


/*
|------------------------------------------------
|   dynamic sitemap generate function
|------------------------------------------------
*/
    public function Sitemap(){
        $categorys = Category::select("slug","created_at")->where("status", 1)
        ->orderBy("catid","DESC")->get();
        $posts = Post::select("slug","created_at")->where("status", 1)
        ->orderBy("pid","DESC")->get();
        return response()->view("pages.sitemap", ["posts" => $posts, "categorys"=>$categorys])
        ->header("Content-Type", "text/xml");
    }


}
