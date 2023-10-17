<?php

namespace App\Http\Controllers\Frontend;

use App;
use App\Http\Controllers\Controller;
use App\Models\Blogs;
use App\Models\Brands;
use App\Models\CallRequests;
use App\Models\Cars;
use App\Models\Languages;
use App\Models\Services;
use App\Models\SiteComments;
use App\Models\Slides;
use Illuminate\Http\Request;
use Session;

class HomeController extends Controller
{
    public function index()
    {
        $slides = Slides::where('status', 1)->get();
        $services = Services::where('status', 1)->get();
        $brands = Brands::where('status', 1)->get();
        $cars = Cars::where('status', 1)->get();
        $comments = SiteComments::where('status',1)->take(10);
        $blogs = Blogs::where('status',1)->get();
        return view('welcome', compact('slides', 'services', 'brands', 'cars', 'comments', 'blogs'));
    }

    public function change_lang($lang)
    {
        $filePath = config_path('translatable.php');
        $newLocale = is_null($lang) ? 'az' : $lang; 

        $fileContent = file_get_contents($filePath);

        $fileContent = preg_replace(
            "/'locale' => '.*'/",
            "'locale' => '$newLocale'",
            $fileContent
        );
        file_put_contents($filePath, $fileContent);
        Session::put('language', $lang);
        toast('Sistem dili müvəffəqiyyətlə dəyişdirildi.', "success");
        return back();
    }

    public function call_request(Request $request)
    {
        CallRequests::create([
            'name_surname' => $request->name_surname,
            'phone' => $request->phone,
            'status' => 0
        ]);
        toast('Bizə zəng et - xidmətindən istifadə etdiyiniz üçün təşəkkür edirik! Sizinlə əlaqə saxlayacağıq.', "success");
        return back()->with('swal2-select-hidden', true);
    }

}
