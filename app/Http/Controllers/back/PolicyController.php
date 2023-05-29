<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Policy;
use App\Traits\LogsTrait;

class PolicyController extends Controller
{
    use LogsTrait;

    public function policy()
    {
        $get_policies_info = Policy::first();
        if (!$get_policies_info) {
            $get_policies_info = Policy::create();
        }
        return view('back.policy', compact('get_policies_info'));
    }

    public function update_our_policies_en(Request $request){
        $get_policies_info = Policy::first();

        if (!$get_policies_info->description) {
            $data = [
                'en' => $request->description_en,
                'ar' => ''
            ];

            $get_policies_info->update([
                'description' => json_encode($data),
            ]);
        } else {
            $data = json_decode($get_policies_info->description);
            $data->en =  $request->description_en;

            $get_policies_info->update([
                'description' => json_encode($data),
            ]);
        }

        $this->logs('update', 'update our policies english in policy page');
        return true;
    }

    public function update_our_policies_ar(Request $request){
        $get_policies_info = Policy::first();

        if (!$get_policies_info->description) {
            $data = [
                'en' => '',
                'ar' => $request->description_ar
            ];

            $get_policies_info->update([
                'description' => json_encode($data),
            ]);
        } else {
            $data = json_decode($get_policies_info->description);
            $data->ar =  $request->description_ar;

            $get_policies_info->update([
                'description' => json_encode($data),
            ]);
        }

        $this->logs('update', 'update our policies arabic in policy page');
        return true;
    }

    public function update_meta_title_en(Request $request){
        $get_about_us_info = Policy::first();

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
        $get_about_us_info = Policy::first();

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
        $get_about_us_info = Policy::first();

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
        $get_about_us_info = Policy::first();

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
        $get_about_us_info = Policy::first();

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
        $get_about_us_info = Policy::first();

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
