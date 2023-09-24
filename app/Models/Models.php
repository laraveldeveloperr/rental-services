<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Models extends Model implements TranslatableContract
{
    use HasFactory, SoftDeletes, Translatable;

    protected $table = "models";
    protected $fillable = [
        'brands_id',
        'status'
    ];
    public $translatedAttributes = ['name', 'slug'];

    /*
    |------------------------------------------------------------------------------------
    | Validations
    |------------------------------------------------------------------------------------
    */
    public static function rules($update = false, $id=null)
    {
        return [
            'brands_id' => 'required',
            'name' => 'required',
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

    public function cars(){
        return $this->hasMany(Cars::class);
    }

    public function discounts()
    {
        return $this->hasOne(Discounts::class);
    }

    public function brons()
    {
        return $this->hasMany(Brons::class);
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
