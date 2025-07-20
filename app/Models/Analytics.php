<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\QueryException;
use Exception;

class Analytics extends Model
{
    use HasFactory;
    protected $table = "analytics";
    protected $primaryKey = "id";
    public $timestamps = false;
    protected $dates = ['created_at'];


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'post',
        'views',
        'shares',
        'created_at'
    ];


    /*--- This function use for update post view counts ---*/
    public static function updateView($id){
        try{
           if($analytic = Analytics::where('post', $id)
            ->whereDate('created_at', date('Y-m-d'))
            ->first()){ }else{ $analytic =  new Analytics;}
            $analytic->post = $id;
            $analytic->views = $analytic->views+1;
            $analytic->created_at = date('Y-m-d');
            $analytic->save();
            return true;
        }catch(QueryException $exception){
            throw new Exception($exception->getMessage());
        }catch(Exception $exception){
            throw new Exception($exception->getMessage());
        }
    }

    /*--- This function use for update post share counts ---*/
    public static function updateShare($id){
        try{
           if($analytic = Analytics::where('post', $id)
            ->whereDate('created_at', date('Y-m-d'))
            ->first()){ }else{ $analytic =  new Analytics;}
            $analytic->post = $id;
            $analytic->shares = $analytic->shares+1;
            $analytic->created_at = date('Y-m-d');
            $analytic->save();
            return true;
        }catch(QueryException $exception){
            throw new Exception($exception->getMessage());
        }catch(Exception $exception){
            throw new Exception($exception->getMessage());
        }
    }
}
