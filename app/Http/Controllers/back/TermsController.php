<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Term;
use App\Traits\LogsTrait;

class TermsController extends Controller
{
    use LogsTrait;

    public function terms()
    {
        $get_terms_info = Term::first();
        if (!$get_terms_info) {
            $get_terms_info = Term::create();
        }
        return view('back.terms', compact('get_terms_info'));
    }

    public function update_our_terms_en(Request $request){
        $get_terms_info = Term::first();

        if (!$get_terms_info->description) {
            $data = [
                'en' => $request->description_en,
                'ar' => ''
            ];

            $get_terms_info->update([
                'description' => json_encode($data),
            ]);
        } else {
            $data = json_decode($get_terms_info->description);
            $data->en =  $request->description_en;

            $get_terms_info->update([
                'description' => json_encode($data),
            ]);
        }

        $this->logs('update', 'update our terms english in Term page');
        return true;
    }

    public function update_our_terms_ar(Request $request){
        $get_terms_info = Term::first();

        if (!$get_terms_info->description) {
            $data = [
                'en' => '',
                'ar' => $request->description_ar
            ];

            $get_terms_info->update([
                'description' => json_encode($data),
            ]);
        } else {
            $data = json_decode($get_terms_info->description);
            $data->ar =  $request->description_ar;

            $get_terms_info->update([
                'description' => json_encode($data),
            ]);
        }

        $this->logs('update', 'update our terms arabic in Term page');
        return true;
    }

    public function update_meta_title_en(Request $request){
        $get_about_us_info = Term::first();

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
        $get_about_us_info = Term::first();

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
        $get_about_us_info = Term::first();

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
        $get_about_us_info = Term::first();

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
        $get_about_us_info = Term::first();

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
        $get_about_us_info = Term::first();

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
