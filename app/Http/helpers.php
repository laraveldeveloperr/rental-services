<?php 
use App\Models\Translations;
use App\Models\Languages;
use Illuminate\Database\Eloquent\Model;


if (! function_exists('move_file')) {
    function move_file($file, $type='avatar', $withWatermark = false)
    {
        // Grab all variables
        $destinationPath = config('variables.'.$type.'.folder');
        $width           = config('variables.' . $type . '.width');
        $height          = config('variables.' . $type . '.height');
        $full_name       = Str::random(16) . '.' . $file->getClientOriginalExtension();
        
        if ($width == null && $height == null) { // Just move the file
            $file->storeAs($destinationPath, $full_name);
            return $full_name;
        }


        // Create the Image
        $image           = Image::make($file->getRealPath());

        if ($width == null || $height == null) {
            $image->resize($width, $height, function ($constraint) {
                $constraint->aspectRatio();
            });
        }else{
            $image->fit($width, $height);
        }

        if ($withWatermark) {
            $watermark = Image::make(public_path() . '/img/watermark.png')->resize($width * 0.5, null);

            $image->insert($watermark, 'center');
        }

        Storage::put($destinationPath . '/' . $full_name, (string) $image->encode());

        return $full_name;
    }
}

function get_roles()
{
    $roles = Spatie\Permission\Models\Role::pluck('name')->toArray();
    return implode("|", $roles);
}

if (!function_exists('translatedInAndActive')) {
    /**
     * Get translated records with a given language and active status.
     *
     * @param Model $model
     * @param string $lang
     * @return mixed
     */
    function translatedInAndActive(Model $model, $lang)
    {
        return $model->translatedIn($lang)->where('status', 1)->get();
    }
}

