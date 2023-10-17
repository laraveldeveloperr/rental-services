<?php

namespace App\Http\Controllers;

use App\Models\Messages;
use Illuminate\Http\Request;
use App\Models\Brons;
use DB;
use Carbon\Carbon;
use Session;

class DashboardController extends Controller
{
    public function index()
    {
        //heftelik
        $brons_week = Brons::selectRaw('WEEK(created_at) as week, COUNT(*) as count')
            ->whereYear('created_at', date('Y'))
            ->groupBy('week')
            ->orderBy('week')
            ->get();

            $labels_week = [];
            $data_week = [];

            for ($i = 1; $i <= 52; $i++) {  // 52 hafta
                $count_week = 0;

                foreach ($brons_week as $key => $bron) {
                    if ($bron->week == $i) {
                        $count_week = $bron->count;
                        break;
                    }
                }

                array_push($labels_week, "Həftə $i");
                array_push($data_week, $count_week);
            }

            $datasets_week = [
                [
                    'label' => 'Həftəlik Bronlar',
                    'data' => $data_week
                ]
            ];

            //ayliq
            $brons_month = Brons::selectRaw('MONTH(created_at) as month, COUNT(*) as count')
            ->whereYear('created_at', date('Y'))
            ->groupBy('month')
            ->orderBy('month')
            ->get();

            $labels_month = [];
            $data_month = [];

            for ($i = 1; $i <= 12; $i++) {  // 12 ay
                $count_month = 0;

                foreach ($brons_month as $key => $bron) {
                    if ($bron->month == $i) {
                        $count_month = $bron->count;
                        break;
                    }
                }

                array_push($labels_month, "Ay $i");
                array_push($data_month, $count_month);
            }

            $datasets_month = [
                [
                    'label' => 'Aylıq Bronlar',
                    'data' => $data_month
                ]
            ];

            $bron_count = Brons::all()->count();

            $currentDate = Carbon::now();
            $last30Days = $currentDate->subDays(30);
            $bron_count_last_30_days = Brons::where('created_at', '>=', $last30Days)->count();

            $last7Days = $currentDate->subDays(7);
            $bron_count_last_7_days = Brons::where('created_at', '>=', $last7Days)->count();

            //mesajlar
            $messages = Messages::where('sent', 1)->take(5);

            return view('admin.dashboard.index', compact(
                'datasets_week', 
                'labels_week',
                'datasets_month', 
                'labels_month', 
                'bron_count', 
                'bron_count_last_30_days', 
                'bron_count_last_7_days',
                'messages'
                )
            );
    }


    public function set_locale($shortened)
    {
        $filePath = config_path('app.php');
        $newLocale = is_null($shortened) ? 'az' : $shortened; 

        $fileContent = file_get_contents($filePath);

        $fileContent = preg_replace(
            "/'locale' => '.*'/",
            "'locale' => '$newLocale'",
            $fileContent
        );
        file_put_contents($filePath, $fileContent);
        Session::put('language', $shortened);
        toast('Sistem dili müvəffəqiyyətlə dəyişdirildi.', "success");
        return back();
    }
}