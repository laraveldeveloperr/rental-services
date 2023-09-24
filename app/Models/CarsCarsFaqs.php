<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarsCarsFaqs extends Model
{
    use HasFactory;

    protected $table = 'cars_cars_faqs';
    protected $fillable = [
        'cars_id', 'cars_faqs_id'
    ];

    /*
    |------------------------------------------------------------------------------------
    | Validations
    |------------------------------------------------------------------------------------
    */
    public static function rules($update = false, $id=null)
    {
        return [
            'cars_id' => 'required',
            'cars_faqs_id' => 'required',
        ];
    }

    /*
    |------------------------------------------------------------------------------------
    | Relations
    |------------------------------------------------------------------------------------
    */

    public function getCars()
    {
        return $this->belongsToMany(Cars::class);
    }
    
    public function getFaqs()
    {
        return $this->belongsToMany(CarsFaqs::class);
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
