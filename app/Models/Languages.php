<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Languages extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'languages';
    protected $fillable = ['name', 'shortened', 'status'];

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

    public function getTranslations(){
        return $this->hasMany(Translations::class);
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
