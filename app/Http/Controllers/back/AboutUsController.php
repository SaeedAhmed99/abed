<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AboutUs;
use App\Traits\LogsTrait;

class AboutUsController extends Controller
{
    use LogsTrait;

    public function aboutus()
    {
        $get_about_us_info = AboutUs::first();
        if (!$get_about_us_info) {
            $get_about_us_info = AboutUs::create();
        }
        return view('back.aboutus', compact('get_about_us_info'));
    }

    public function update_our_history_en(Request $request){
        $get_about_us_info = AboutUs::first();

        if (!$get_about_us_info->our_history) {
            $data = [
                'en' => $request->our_history_en,
                'ar' => ''
            ];

            $get_about_us_info->update([
                'our_history' => json_encode($data),
            ]);
        } else {
            $data = json_decode($get_about_us_info->our_history);
            $data->en =  $request->our_history_en;

            $get_about_us_info->update([
                'our_history' => json_encode($data),
            ]);
        }

        $this->logs('update', 'update our history english in about us page');
        return true;
    }

    public function update_our_history_ar(Request $request){
        $get_about_us_info = AboutUs::first();

        if (!$get_about_us_info->our_history) {
            $data = [
                'en' => '',
                'ar' => $request->our_history_ar
            ];

            $get_about_us_info->update([
                'our_history' => json_encode($data),
            ]);
        } else {
            $data = json_decode($get_about_us_info->our_history);
            $data->ar =  $request->our_history_ar;

            $get_about_us_info->update([
                'our_history' => json_encode($data),
            ]);
        }

        $this->logs('update', 'update our history arabic in about us page');
        return true;
    }

    public function update_our_company_en(Request $request){
        $get_about_us_info = AboutUs::first();

        if (!$get_about_us_info->our_company) {
            $data = [
                'en' => $request->our_company_en,
                'ar' => ''
            ];

            $get_about_us_info->update([
                'our_company' => json_encode($data),
            ]);
        } else {
            $data = json_decode($get_about_us_info->our_company);
            $data->en =  $request->our_company_en;

            $get_about_us_info->update([
                'our_company' => json_encode($data),
            ]);
        }

        $this->logs('update', 'update our company english in about us page');
        return true;
    }

    public function update_our_company_ar(Request $request){
        $get_about_us_info = AboutUs::first();

        if (!$get_about_us_info->our_company) {
            $data = [
                'en' => '',
                'ar' => $request->our_company_ar
            ];

            $get_about_us_info->update([
                'our_company' => json_encode($data),
            ]);
        } else {
            $data = json_decode($get_about_us_info->our_company);
            $data->ar =  $request->our_company_ar;

            $get_about_us_info->update([
                'our_company' => json_encode($data),
            ]);
        }

        $this->logs('update', 'update our company arabic in about us page');
        return true;
    }

    public function update_meta_title_en(Request $request){
        $get_about_us_info = AboutUs::first();

        if (!$get_about_us_info->meta_title) {
            $data = [
                'en' => $request->meta_title_en,
                'ar' => ''
            ];

            $get_about_us_info->update([
                'meta_title' => json_encode($data),
            ]);
        } else {
            $data = json_decode($get_about_us_info->meta_title);
            $data->en =  $request->meta_title_en;

            $get_about_us_info->update([
                'meta_title' => json_encode($data),
            ]);
        }

        $this->logs('update', 'update meta title english in about us page');
        return true;
    }

    public function update_meta_title_ar(Request $request){
        $get_about_us_info = AboutUs::first();

        if (!$get_about_us_info->meta_title) {
            $data = [
                'en' => '',
                'ar' => $request->meta_title_ar
            ];

            $get_about_us_info->update([
                'meta_title' => json_encode($data),
            ]);
        } else {
            $data = json_decode($get_about_us_info->meta_title);
            $data->ar =  $request->meta_title_ar;

            $get_about_us_info->update([
                'meta_title' => json_encode($data),
            ]);
        }

        $this->logs('update', 'update meta title arabic in about us page');
        return true;
    }

    public function update_meta_keywords_en(Request $request){
        $get_about_us_info = AboutUs::first();

        if (!$get_about_us_info->meta_keywords) {
            $data = [
                'en' => $request->meta_keywords_en,
                'ar' => ''
            ];

            $get_about_us_info->update([
                'meta_keywords' => json_encode($data),
            ]);
        } else {
            $data = json_decode($get_about_us_info->meta_keywords);
            $data->en =  $request->meta_keywords_en;

            $get_about_us_info->update([
                'meta_keywords' => json_encode($data),
            ]);
        }

        $this->logs('update', 'update meta keywords english in about us page');
        return true;
    }

    public function update_meta_keywords_ar(Request $request){
        $get_about_us_info = AboutUs::first();

        if (!$get_about_us_info->meta_keywords) {
            $data = [
                'en' => '',
                'ar' => $request->meta_keywords_ar
            ];

            $get_about_us_info->update([
                'meta_keywords' => json_encode($data),
            ]);
        } else {
            $data = json_decode($get_about_us_info->meta_keywords);
            $data->ar =  $request->meta_keywords_ar;

            $get_about_us_info->update([
                'meta_keywords' => json_encode($data),
            ]);
        }

        $this->logs('update', 'update meta keywords arabic in about us page');
        return true;
    }

    public function update_meta_description_en(Request $request){
        $get_about_us_info = AboutUs::first();

        if (!$get_about_us_info->meta_description) {
            $data = [
                'en' => $request->meta_description_en,
                'ar' => ''
            ];

            $get_about_us_info->update([
                'meta_description' => json_encode($data),
            ]);
        } else {
            $data = json_decode($get_about_us_info->meta_description);
            $data->en =  $request->meta_description_en;

            $get_about_us_info->update([
                'meta_description' => json_encode($data),
            ]);
        }

        $this->logs('update', 'update meta description english in about us page');
        return true;
    }

    public function update_meta_description_ar(Request $request){
        $get_about_us_info = AboutUs::first();

        if (!$get_about_us_info->meta_description) {
            $data = [
                'en' => '',
                'ar' => $request->meta_description_ar
            ];

            $get_about_us_info->update([
                'meta_description' => json_encode($data),
            ]);
        } else {
            $data = json_decode($get_about_us_info->meta_description);
            $data->ar =  $request->meta_description_ar;

            $get_about_us_info->update([
                'meta_description' => json_encode($data),
            ]);
        }

        $this->logs('update', 'update meta description arabic in about us page');
        return true;
    }


}
