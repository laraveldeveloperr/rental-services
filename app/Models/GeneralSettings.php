<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class GeneralSettings extends Model implements TranslatableContract
{
    use HasFactory, SoftDeletes, Translatable;
    protected $fillable = [
        'logo',
        'numbers',
        'emails',
        'social_networks',
        'repair_mode'
    ];

    public $translatedAttributes = ['address', 'about_text', 'privacy_policy' ,'meta_title', 'meta_keywords', 'meta_description'];

    /*
    |------------------------------------------------------------------------------------
    | Validations
    |------------------------------------------------------------------------------------
    */

    /*
    |------------------------------------------------------------------------------------
    | Relations
    |------------------------------------------------------------------------------------
    */

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
