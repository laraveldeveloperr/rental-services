<?php

namespace App\Providers;

use App\Models\Blogs;
use App\Models\GeneralSettings;
use App\Models\PageDesigns;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use App\Models\Languages;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();

        if (!defined('ADMIN')) {
            define('ADMIN', config('variables.APP_ADMIN', 'admin'));
        }
        require_once base_path('resources/macros/form.php');

        $languages = Languages::where('status', 1)->get();
        $general_settings = GeneralSettings::first();
        $page_design = PageDesigns::first();
        $blogs = Blogs::orderBy('id', 'ASC')->get();
        view()->share(['languages'=>$languages, 'general_settings'=>$general_settings, 'page_design'=>$page_design, 'blogs'=>$blogs]);
        
    }
}
