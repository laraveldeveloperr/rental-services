<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Cars extends Model implements TranslatableContract
{
    use HasFactory, SoftDeletes, Translatable;

    protected $table = 'cars';
    protected $fillable = [
        'brands_id',
        'models_id',
        'ban_types_id',
        'fuels_id',
        'gears_id',
        'transmissions_id',
        'engines_id',
        'colors_id',
        'licence_plate',
        'manufacturing_year',
        'color',
        'day_price',
        'week_price',
        'month_price',
        'main_image',
        'status',
    ];

    public $translatedAttributes = ['description'];


    /*
    |------------------------------------------------------------------------------------
    | Validations
    |------------------------------------------------------------------------------------
    */
    public static function rules($update = false, $id=null)
    {
        return [
            'brands_id' => 'required',
            'models_id' => 'required',
            'gears_id' => 'required',
            'fuels_id' => 'required',
            'transmissions_id' => 'required',
            'engines_id' => 'required',
            'properties_id' => 'required',
            'colors_id' => 'required',
            'ban_types_id' => 'required',
            'status' => 'required',
            'manufacturing_year' => 'required',
            'licence_plate' => 'required',
            'day_price' => 'required'
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

    public function fuels()
    {
        return $this->belongsTo(Fuels::class);
    }

    public function gears()
    {
        return $this->belongsTo(Gears::class);
    }

    public function transmissions()
    {
        return $this->belongsTo(Transmissions::class);
    }

    public function ban_types()
    {
        return $this->belongsTo(BanTypes::class);
    }

    public function engines()
    {
        return $this->belongsTo(Engines::class);
    }

    public function colors()
    {
        return $this->belongsTo(Colors::class);
    }

    public function discounts()
    {
        return $this->hasOne(Discounts::class);
    }

    public function brons()
    {
        return $this->hasMany(Brons::class);
    }

    /**
     * The roles that belong to the Cars
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function properties()
    {
        return $this->belongsToMany(Properties::class);
    }

    public function faqs()
    {
        return $this->belongsToMany(CarsFaqs::class);
    }

    public function comments()
    {
        return $this->hasMany(CarComments::class);
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
