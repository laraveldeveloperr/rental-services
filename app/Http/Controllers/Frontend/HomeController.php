<?php

namespace App\Http\Controllers\Frontend;

use App;
use App\Http\Controllers\Controller;
use App\Models\Blogs;
use App\Models\Brands;
use App\Models\CallRequests;
use App\Models\Cars;
use App\Models\Discounts;
use App\Models\Languages;
use App\Models\Partners;
use App\Models\Services;
use App\Models\SiteComments;
use App\Models\Slides;
use App\Models\Teams;
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
        $comments = SiteComments::where('status', 1)->take(10);
        $blogs = Blogs::where('status', 1)->get();
        $teams = Teams::where('status', 1)->get();
        return view('welcome', compact('slides', 'services', 'brands', 'cars', 'comments', 'blogs', 'teams'));
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
        return back();
    }

    public function call_request(Request $request)
    {
        CallRequests::create([
            'name_surname' => $request->name_surname,
            'phone' => $request->phone,
            'status' => 0
        ]);
        return back();
    }

    public function be_partner(Request $request)
    {
        Partners::create([
            'company_name' => $request->company_name,
            'address' => $request->address,
            'voen' => $request->voen,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'relevant_person' => $request->relevant_person,
            'status' => 0
        ]);
        return back();
    }

    public function calculate_price()
    {
        // Girdi kontrolleri ve tarih formatlama
        $cars_id = intval($_GET['cars_id']);
        $brands_id = intval($_GET['brands_id']);
        $models_id = intval($_GET['models_id']);
        $start_date_ = $_GET['start_date'];
        $end_date_ = $_GET['end_date'];

        $start_date = new \DateTime($this->formatToIsoDate($start_date_));
        $end_date = new \DateTime($this->formatToIsoDate($end_date_));

        $day_diff = $start_date->diff($end_date)->days;

        $day_price = floatval($_GET['day_price']);

        $total_price = $day_price * $day_diff;
        $discounted_price = $total_price;
        $html = '';

        $discounts = Discounts::where('brands_id', $brands_id)
            ->where('models_id', $models_id)
            ->where('cars_id', $cars_id)
            ->first();


        if (!is_null($discounts)) {
            $discount = $discounts->discount;
            $discount_type = $discounts->type;

            if ($discount_type == 1) {
                $discount_text = '%';
                $discounted_price = $total_price - ($total_price * $discount / 100);
            } else {
                $discount_text = 'AZN';
                $discounted_price = $total_price - $discount;
            }
        }
        else
        {
            $discount_text = 'AZN';
            $discount = 0;
        }

        $html .= '<table class="table table-bordered"> 
        <tr>
           <td class="text-dark">'. __('day_price') .'</td>
           <td class="text-dark">'. $day_price .' AZN</td>
        </tr>
        <tr>
           <td class="text-dark">'. __('day') .'</td>
           <td class="text-dark">'. $day_diff .' '. __('day') .'</td>
        </tr>
        <tr>
           <td class="text-dark">'. __('discount') .'</td>
           <td class="text-danger">-'. $discount .' '. $discount_text .' </td>
        </tr>
        <tr>
           <td class="text-dark">'. __('discounted_price') .'</td>
           <td class="text-dark">'. $discounted_price .' AZN</td>
        </tr>
     </table>';

        return $html;
    }

    function formatToIsoDate($date)
    {
        return \Carbon\Carbon::createFromFormat('d/m/Y', $date)->format('Y-m-d');
    }

}