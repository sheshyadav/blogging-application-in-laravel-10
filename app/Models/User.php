<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\QueryException;
use Exception;
use Lang;
use Auth;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'profile',
        'role',
        'status',
        'about',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'role' => \App\Enum\UserRoleEnum::class
    ];

/*
|-----------------------------------------------------------------
|   <!-- get user social media liks  --!>
|-----------------------------------------------------------------
*/
    public function Social(){
        return $this->hasOne(UserSocial::class, 'user', 'id')
        ->withDefault(function () {
            return (object)array(
                'user' => null,
                'facebook' => null,
                'twitter' => null,
                'instagram' => null,
                'linkedin' => null,
                'pinterest' => null,
                'whatsapp' => null,
                'youtube' => null,
                'telegram' => null,
                'website' => null,
            );
        });
    }

/*
|-----------------------------------------------------------------
|   <!-- upload user profile image --!>
|-----------------------------------------------------------------
*/
    static function UploadProfile(Request $request){
        $validator = Validator::make($request->all(), [
            'file' => 'required|mimes:jpg,png,jpeg|max:2048',
            'id' => 'required|integer|exists:users,id'
        ]);

        if($validator->fails()){
                return response()->json(['status'=>false, 'data'=>$validator->errors()]);
        }else{
            try{
                $user  = User::find($request->id);
                $fileName = 'author_'.time().'.'.$request->file->extension();
                $path = 'assets/images/website/'.$fileName;
                Storage::disk('local')->put($path, file_get_contents($request->file('file')));
                if(Storage::disk('local')->exists('assets/images/website/'.$user->profile)){
                Storage::disk('local')->delete('assets/images/website/'.$user->profile);
                }
                $user->profile =   $fileName;
                $user->save();
                return  response()->json(['status'=>true, 'data'=>url($path)]);
            }catch(QueryException $exception){
                return  response()->json(['status'=>false, 'data'=> $exception->getMessage()]);
            }catch(Exception $exception){
                return  response()->json(['status'=>false, 'data'=> $exception->getMessage()]);
            }
        }
    }

/*
|-----------------------------------------------------------------
|   <!-- update user information --!>
|-----------------------------------------------------------------
*/
    static function Updates(Request $request){
        $validate = $request->validate([
            'name' => 'required|string',
            'about' => 'required|string',
        ]);

        try{
            $active = auth()->user();
            $user = User::find($active->id);
            $user->name = $request->name;
            $user->about = $request->about;
            $user->save();
            return back()->with('success', Lang::get("auth.user-info-updated"));
        }catch(QueryException $exception){
            return back()->with('error', $exception->getMessage());
        }catch(Exception $exception){
            return back()->with('error', $exception->getMessage() );
        }
    }

/*
|-----------------------------------------------------------------
|   <!-- update user password with new one --!>
|-----------------------------------------------------------------
*/
    static function PasswordUpdate(Request $request){
        $validate = $request->validate([
            'current_password' => 'required',
            'password'=>'required|min:6|confirmed',
        ]);
        $user = auth()->user();
        if(Auth::attempt(['email'=>$user->email, 'password'=>$request->current_password])){
            $password = Hash::make($request->password);
            $update = User::find($user->id);
            $update->password = $password;
            $update->save();
            return back()->with("success", Lang::get("auth.password-update"));
        }else{
            return back()->withInput()->withErrors(["current_password"=> Lang::get("auth.invalid-current-password")]);
        }
    }

/*
|-----------------------------------------------------------------
|   <!-- update user email id with new one --!>
|-----------------------------------------------------------------
*/
    static function EmailidUpdate(Request $request){
        $user = auth()->user();
        $validate = $request->validate([
            'current_password' => 'required',
            'current_email' => 'required|email|exists:users,email',
            'new_email' => 'required|email|unique:users,id,'.$user->id
        ]);

        if(Auth::attempt(['email'=>$request->current_email, 'password'=>$request->current_password])){
            $update = User::find($user->id);
            $update->email = $request->new_email;
            $update->save();
            return back()->with("success", Lang::get("auth.email-update"));
        }else{
            return back()->withInput()->withErrors(["current_password"=> Lang::get("auth.invalid-current-password")]);
        }
    }

}
