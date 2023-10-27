<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageDesigns extends Model
{
    use HasFactory;

    protected $fillable = [
        'topbar',
        'header',
        'menu',
        'slide',
        'search',
        'about_us_section',
        'banner1',
        'banner2',
        'blogs',
        'comments_for_site',
        'members',
        'offers',
        'services',
        'home_about_section_image',
        'banner1_image',
        'banner2_image',
    ];

    /*
    |------------------------------------------------------------------------------------
    | Validations
    |------------------------------------------------------------------------------------
    */
    public static function rules($update = false, $id=null)
    {
        return [
            'name' => 'required',
        ];
    }

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
