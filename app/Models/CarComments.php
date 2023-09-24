<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CarComments extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "car_comments";
    protected $fillable = ['cars_id','who_shared','name_surname','comment','status','comment_date'];

    /*
    |------------------------------------------------------------------------------------
    | Validations
    |------------------------------------------------------------------------------------
    */
    public static function rules($update = false, $id=null)
    {
        return [
            'cars_id' => 'required',
            'who_shared' => 'required',
            'name_surname' => 'required',
            'comment' => 'required',
            'status' => 'required',
            'comment_date' => 'required'
        ];
    }

    /*
    |------------------------------------------------------------------------------------
    | Relations
    |------------------------------------------------------------------------------------
    */

    public function cars()
    {
        return $this->belongsTo(Cars::class);
    }

    /*
    |------------------------------------------------------------------------------------
    | Scopes
    |------------------------------------------------------------------------------------
    */

    /*
    |------------------------------------------------------------------------------------
    | Attributes
    |------------------------------------------------------------------------------------
    */
}
