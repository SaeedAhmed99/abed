<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;
use App\Traits\LogsTrait;

class SettingsController extends Controller
{
    use LogsTrait;

    public function settings()
    {
        $get_setting = Setting::first();
        if (!$get_setting) {
            Setting::create();
            $get_setting = Setting::first();
        }

        return view('back.settings', compact('get_setting'));
    }

    public function updateLogo(Request $request)
    {
        $request->validate([
            'logo' => 'required|max:2048|image|mimes:jpg,png,jpeg',
        ]);

        $get_setting = Setting::first();

        $path = $get_setting->logo;
        if ($request->hasFile('logo')) {
            if (file_exists(public_path() . '/' . $path ) && !empty($path)) {
                unlink(public_path() . '/' . $path);
            }

            $image_name = "image-" . time() . "." . $request->logo->getClientOriginalExtension();
            $path = $request->logo->move('uploads/logo', $image_name);
        }

        $get_setting->update([
            'logo' => $path,
        ]);

        $this->logs('update', 'update logo in settings page');
        return response()->json([
            'logo' => asset($get_setting->logo)
        ]);
    }

    public function updateNameEnglish(Request $request)
    {
        $request->validate([
            'name_en' => 'max:80',
        ]);

        $get_setting = Setting::first();

        if (!$get_setting->name) {
            $data = [
                'en' => $request->name_en,
                'ar' => ''
            ];

            $get_setting->update([
                'name' => json_encode($data),
            ]);
        } else {
            $data = json_decode($get_setting->name);
            $data->en =  $request->name_en;

            $get_setting->update([
                'name' => json_encode($data),
            ]);
        }

        $this->logs('update', 'update name english in company info page');
        return true;
    }

    public function updateNameArabic(Request $request)
    {
        $request->validate([
            'name_ar' => 'max:80',
        ]);

        $get_setting = Setting::first();

        if (!$get_setting->name) {
            $data = [
                'en' => '',
                'ar' => $request->name_ar
            ];

            $get_setting->update([
                'name' => json_encode($data),
            ]);
        } else {
            $data = json_decode($get_setting->name);
            $data->ar =  $request->name_ar;

            $get_setting->update([
                'name' => json_encode($data),
            ]);
        }

        $this->logs('update', 'update name arabic in company info page');
        return true;
    }

    public function updateMetaTitleEnglish(Request $request)
    {
        $request->validate([
            'meta_title_en' => 'max:80',
        ]);

        $get_setting = Setting::first();

        if (!$get_setting->meta_title) {
            $data = [
                'en' => $request->meta_title_en,
                'ar' => ''
            ];

            $get_setting->update([
                'meta_title' => json_encode($data),
            ]);
        } else {
            $data = json_decode($get_setting->meta_title);
            $data->en =  $request->meta_title_en;

            $get_setting->update([
                'meta_title' => json_encode($data),
            ]);
        }

        $this->logs('update', 'update Meta Title english in company info page');
        return true;
    }

    public function updateMetaTitleArabic(Request $request)
    {
        $request->validate([
            'meta_title_ar' => 'max:80',
        ]);

        $get_setting = Setting::first();

        if (!$get_setting->meta_title) {
            $data = [
                'en' => '',
                'ar' => $request->meta_title_ar
            ];

            $get_setting->update([
                'meta_title' => json_encode($data),
            ]);
        } else {
            $data = json_decode($get_setting->meta_title);
            $data->ar =  $request->meta_title_ar;

            $get_setting->update([
                'meta_title' => json_encode($data),
            ]);
        }

        $this->logs('update', 'update Meta Title Arabic in company info page');
        return true;
    }

    public function updateMetaKeywordsEnglish(Request $request)
    {
        $request->validate([
            'meta_keywords_en' => 'max:100',
        ]);

        $get_setting = Setting::first();

        if (!$get_setting->meta_keywords) {
            $data = [
                'en' => $request->meta_keywords_en,
                'ar' => ''
            ];

            $get_setting->update([
                'meta_keywords' => json_encode($data),
            ]);
        } else {
            $data = json_decode($get_setting->meta_keywords);
            $data->en =  $request->meta_keywords_en;

            $get_setting->update([
                'meta_keywords' => json_encode($data),
            ]);
        }

        $this->logs('update', 'update meta Keywords english in company info page');
        return true;
    }

    public function updateMetaKeywordsArabic(Request $request)
    {
        $request->validate([
            'meta_keywords_ar' => 'max:100',
        ]);

        $get_setting = Setting::first();

        if (!$get_setting->meta_keywords) {
            $data = [
                'en' => '',
                'ar' => $request->meta_keywords_ar
            ];

            $get_setting->update([
                'meta_keywords' => json_encode($data),
            ]);
        } else {
            $data = json_decode($get_setting->meta_keywords);
            $data->ar =  $request->meta_keywords_ar;

            $get_setting->update([
                'meta_keywords' => json_encode($data),
            ]);
        }

        $this->logs('update', 'update meta keywords arabic in company info page');
        return true;
    }

    public function updateMetaDescriptionEnglish(Request $request)
    {
        $request->validate([
            'meta_description_en' => 'max:220',
        ]);

        $get_setting = Setting::first();

        if (!$get_setting->meta_description) {
            $data = [
                'en' => $request->meta_description_en,
                'ar' => ''
            ];

            $get_setting->update([
                'meta_description' => json_encode($data),
            ]);
        } else {
            $data = json_decode($get_setting->meta_description);
            $data->en =  $request->meta_description_en;

            $get_setting->update([
                'meta_description' => json_encode($data),
            ]);
        }

        $this->logs('update', 'update meta description english in company info page');
        return true;
    }

    public function updateMetaDescriptionArabic(Request $request)
    {
        $request->validate([
            'meta_description_ar' => 'max:220',
        ]);

        $get_setting = Setting::first();

        if (!$get_setting->meta_description) {
            $data = [
                'en' => '',
                'ar' => $request->meta_description_ar
            ];

            $get_setting->update([
                'meta_description' => json_encode($data),
            ]);
        } else {
            $data = json_decode($get_setting->meta_description);
            $data->ar =  $request->meta_description_ar;

            $get_setting->update([
                'meta_description' => json_encode($data),
            ]);
        }

        $this->logs('update', 'update meta description arabic in company info page');
        return true;
    }

    public function updateFacebookLink(Request $request)
    {
        $request->validate([
            'facebook_link' => 'url',
        ]);

        $get_setting = Setting::first();

        $get_setting->update([
            'facebook_link' => $request->facebook_link,
        ]);

        $this->logs('update', 'update facebook link in company info page');
        return true;
    }

    public function updateTwitterLink(Request $request)
    {
        $request->validate([
            'twitter_link' => 'url',
        ]);

        $get_setting = Setting::first();

        $get_setting->update([
            'twitter_link' => $request->twitter_link,
        ]);

        $this->logs('update', 'update twitter link in company info page');
        return true;
    }

    public function updateLinkedinLink(Request $request)
    {
        $request->validate([
            'linkedin_link' => 'url',
        ]);

        $get_setting = Setting::first();

        $get_setting->update([
            'linkedin_link' => $request->linkedin_link,
        ]);

        $this->logs('update', 'update linkedin link in company info page');
        return true;
    }

    public function updateInstagramLink(Request $request)
    {
        $request->validate([
            'instagram_link' => 'url',
        ]);

        $get_setting = Setting::first();

        $get_setting->update([
            'instagram_link' => $request->instagram_link,
        ]);

        $this->logs('update', 'update instagram link in company info page');
        return true;
    }

    public function updateSnapchatLink(Request $request)
    {
        $request->validate([
            'snapchat_link' => 'url',
        ]);

        $get_setting = Setting::first();

        $get_setting->update([
            'snapchat_link' => $request->snapchat_link,
        ]);

        $this->logs('update', 'update snapchat link in company info page');
        return true;
    }

    public function updateTiktokLink(Request $request)
    {
        $request->validate([
            'tiktok_link' => 'url',
        ]);

        $get_setting = Setting::first();

        $get_setting->update([
            'tiktok_link' => $request->tiktok_link,
        ]);

        $this->logs('update', 'update tiktok link in company info page');
        return true;
    }

    public function updateEmail(Request $request)
    {
        $request->validate([
            'email' => 'max:50',
        ]);

        $get_setting = Setting::first();

        $get_setting->update([
            'email' => $request->email,
        ]);

        $this->logs('update', 'update email in company info page');
        return true;
    }

    public function updatePhone(Request $request)
    {

        $get_setting = Setting::first();

        $get_setting->update([
            'phone' => $request->phone,
        ]);

        $this->logs('update', 'update phone in company info page');
        return true;
    }

    public function updateFax(Request $request)
    {

        $get_setting = Setting::first();

        $get_setting->update([
            'fax' => $request->fax,
        ]);

        $this->logs('update', 'update fax in company info page');
        return true;
    }

    public function updateAddressEnglish(Request $request)
    {
        $request->validate([
            'address_en' => 'max:250',
        ]);

        $get_setting = Setting::first();

        if (!$get_setting->address) {
            $data = [
                'en' => $request->address_en,
                'ar' => ''
            ];

            $get_setting->update([
                'address' => json_encode($data),
            ]);
        } else {
            $data = json_decode($get_setting->address);
            $data->en =  $request->address_en;

            $get_setting->update([
                'address' => json_encode($data),
            ]);
        }

        $this->logs('update', 'update address english in company info page');
        return true;
    }

    public function updateAddressArabic(Request $request)
    {
        $request->validate([
            'address_ar' => 'max:250',
        ]);

        $get_setting = Setting::first();

        if (!$get_setting->address) {
            $data = [
                'en' => '',
                'ar' => $request->address_ar
            ];

            $get_setting->update([
                'address' => json_encode($data),
            ]);
        } else {
            $data = json_decode($get_setting->address);
            $data->ar =  $request->address_ar;

            $get_setting->update([
                'address' => json_encode($data),
            ]);
        }

        $this->logs('update', 'update address arabic in company info page');
        return true;
    }

    public function updateMapIframe(Request $request)
    {
        $get_setting = Setting::first();

        $get_setting->update([
            'map_iframe' => $request->map_iframe,
        ]);

        $this->logs('update', 'update map ifram in company info page');
        return true;
    }
}
