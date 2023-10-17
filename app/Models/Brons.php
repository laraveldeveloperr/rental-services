<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Brons extends Model
{
    use HasFactory;

    protected $table = 'brons';
    protected $fillable = [
        'bron_number',
        'brands_id',
        'models_id',
        'cars_id',
        'pick_up',
        'drop_off',
        'name',
        'surname',
        'email',
        'phone_number',
        'special_request',
        'price',
        'discount',
        'discount_type',
        'discounted_price',
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
            'bron_number' => 'required',
            'brands_id' => 'required',
            'models_id' => 'required',
            'cars_id' => 'required',
            'pick_up' => 'required',
            'drop_off' => 'required',
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
            'price' => 'required',
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
