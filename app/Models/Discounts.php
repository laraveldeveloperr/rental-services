<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Discounts extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'discounts';
    protected $fillable = [
        'brands_id',
        'models_id',
        'cars_id',
        'type',
        'discount',
        'start_date',
        'end_date',
        'status'
    ];

    /*
    |------------------------------------------------------------------------------------
    | Validations
    |------------------------------------------------------------------------------------
    */
    public static function rules($update = false, $id=null)
    {
        return [
            'brands_id' => 'required',
            'type' => 'required',
            'discount' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'status' => 'required'
        ];
    }

    /*
    |------------------------------------------------------------------------------------
    | Relations
    |------------------------------------------------------------------------------------
    */


    public function brands()
    {
        return $this->belongsTo(Brands::class);
    }

    public function models()
    {
        return $this->belongsTo(Models::class);
    }

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
