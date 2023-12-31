<?php

namespace Database\Seeders;

use App\Models\Translations;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TranslationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = [
            'categories',
            'welcome',
            'brands',
            'models',
            'model',
            'ban_type',
            'fuel_type',
            'enter_fuel_type',
            'gear',
            'enter_gear',
            'transmission',
            'enter_transmission',
            'engine',
            'color',
            'car_property',
            'enter_property',
            'car_properties',
            'discounts',
            'discount',
            'cars',
            'car',
            'brons',
            'blogs',
            'services',
            'name_surname',
            'for_site',
            'shared',
            'comment',
            'comments',
            'comment_informations',
            'comments_for_site',
            'comments_for_cars',
            'faqs',
            'faq_for_site',
            'faq_for_cars',
            'partners',
            'messages',
            'get_in_touch',
            'site_configuration',
            'slide',
            'new_slide',
            'language',
            'languages',
            'user',
            'users',
            'admin',
            'admins',
            'roles',
            'general_settings',
            'main_page_view',
            'new',
            'brand_name',
            'status',
            'operations',
            'edit',
            'show',
            'delete',
            'invoice',
            'active',
            'deactive',
            'type',
            'amount/percentage',
            'start_date',
            'end_date',
            'bron_number',
            'phone',
            'price',
            'discounted_price',
            'date',
            'download',
            'print',
            'send',
            'save',
            'update',
            'seo_link',
            'icon',
            'image',
            'blogs',
            'title',
            'description',
            'content',
            'question',
            'enter_question',
            'answer',
            'inbox',
            'sent',
            'important_messages',
            'unread_messages',
            'search_email',
            'draft',
            'draft_message',
            'deleted',
            'apply_to_selected',
            'mark_as_read',
            'mark_as_unread',
            'restore',
            'destroy',
            'account',
            'logout',
            'topbar',
            'header',
            'menu',
            'search',
            'search_bar',
            'about_section',
            'banner1',
            'banner2',
            'users',
            'offers',
            'logo',
            'numbers',
            'emails',
            'social_networks',
            'address',
            'enter_address',
            'about',
            'meta_title',
            'enter_meta_title',
            'meta_keywords',
            'enter_meta_keywords',
            'meta_description',
            'repair_mode',
            'role',
            'role_permissions',
            'give_permissions',
            'short_name',
            'translations',
            'constant',
            'value',
            'visit_site',
            'need_help?',
            'search_your_best_cars_here',
            'select_brands',
            'select_models',
            'pick_up_date',
            'drop_off_date',
            'pick_up_time',
            'drop_off_time',
            'search',
            'find_car',
            'about_us',
            'latest_services',
            'all_services',
            'all_brands',
            'testimonials',
            'our_members',
            'our_blogs',
            'quick_links',
            'newsletter',
            'recent_posts',
            'home',
            'car_listing',
            'gallery',
            'contact',
            'get_in_touch',
            'your_name',
            'email_address',
            'subject',
            'to',
            'cancel',
            'save_to_draft',
            'mail_service',
            'number',
            'write_here_your_message',
            'send_message',
            'contact_information',
            'contact_us',
            'email_us',
            'call_us',
            'follow_us',
            'privacy_policy',
            'subscribe',
            'be_a_partner',
            'request_a_call',
            'enter_ban_type',
            'enter_seo_link',
            'select',
            'enter_title',
            'enter_brand_name',
            'pending',
            'accepted',
            'rejected',
            'licence_plate',
            'for_one_day',
            'day',
            'price_sum',
            'total_amount',
            'discount_percentage',
            'discount_amount',
            'tax',
            'amount_to_be_paid',
            'manufacturing_year',
            'enter_licence_plate',
            'enter_manufacturing_year',
            'daily_price',
            'enter_daily_price',
            'weekly_price',
            'enter_weekly_price',
            'monthly_price',
            'enter_monthly_price',
            'monthly_brons',
            'weekly_brons',
            'weekly_price_not_specified',
            'monthly_price_not_specified',
            'discount_not_specified',
            'enter_color',
            'all_brons',
            'last_month',
            'last_week',
            'remainder',
            'dear',
            'keep_your_password_secret_for_system_security!',
            'notifications',
            'not_applied',
            'flat',
            'enter_discount',
            'discount_informations',
            'enter_engine',
            'enter_name_surname',
            'enter_email',
            'set_password',
            'role_not_included',
            'contact_numbers',
            'enter_contact_numbers',
            'add_new_contact_number',
            'new_contact_number',
            'enter_email_address',
            'add_new_email_address',
            'enter_social_network',
            'add_new_social_network',
            'new_social_network',
            'enter_language',
            'enter_shortened',
            'enter_role',
            'apply',
            'head_office',
            'quick_links',
            'reserve_now',
            'personal_informations',
            'reserve',
            'reserve_now',
            'price_not_calculated',
            'special_request',
            'keywords',
            'call_requests',
            'answered',
            'unanswered',
            'company_name',
            'voen',
            'relevant_person',
            'experience',
            'job',
            'team',
            'experts',
            'details',
            'rent',
            'page_content',
            'home_about_section_text',
            'home_about_section_image',
            'banner1_text',
            'banner1_image',
            'banner2_image',
            'footer_text',
        ];

        $translations = [];
        foreach($array as $item)
        {
            Translations::create([
                'key'=>$item
            ]);
            $translations[$item] = ucfirst(str_replace("_"," ",$item));
        }

        $json_data = json_encode($translations);

        $newLanguageFolder = resource_path('lang');
        file_put_contents($newLanguageFolder . '/az.json', $json_data);


    }
}
