<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use Exception;
use Lang;

class UserSocial extends Model
{
    use HasFactory;
    protected $table ="user_socials";
    protected $primaryKey = "sid";

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user',
        'facebook',
        'twitter',
        'instagram',
        'linkedin',
        'pinterest',
        'whatsapp',
        'youtube',
        'telegram',
        'website',
    ];

/*
|-----------------------------------------------------------------
|   <!-- user social media data create  --!>
|-----------------------------------------------------------------
*/
    static function CreateUpdate(Request $request){
        $validate = $request->validate([
            'facebook_url' => 'nullable|url',
            'twitter_url' => 'nullable|url',
            'instagram_url' => 'nullable|url',
            'linkedin_url' => 'nullable|url',
            'pinterest_url' => 'nullable|url',
            'whatsapp_url' => 'nullable|url',
            'youtube_url' => 'nullable|url',
            'telegram_url' => 'nullable|url',
            'website_url' => 'nullable|url',
        ]);

        try{
            $active = auth()->user();
            $model = UserSocial::updateOrCreate(
                ['user' => $active->id],
                [
                    "facebook" => $request->facebook_url ?? null,
                    "twitter" => $request->twitter_url ?? null,
                    "instagram" => $request->instagram_url ?? null,
                    "linkedin" => $request->linkedin_url ?? null,
                    "pinterest" => $request->pinterest_url ?? null,
                    "whatsapp" => $request->whatsapp_url ?? null,
                    "youtube" => $request->youtube_url ?? null,
                    "telegram" => $request->telegram_url ?? null,
                    "website" => $request->website_url ?? null,
                ]
            );
            if($model->wasRecentlyCreated){
                return back()->with('success', Lang::get("auth.user-social-link-created"));
            }else{
                return back()->with('success', Lang::get("auth.user-social-link-updated"));
            }
        }catch(QueryException $exception){
            return back()->with('error', $exception->getMessage());
        }catch(Exception $exception){
            return back()->with('error', $exception->getMessage() );
        }
    }


}
