<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Partner;
use App\Traits\LogsTrait;

class PartnersController extends Controller
{
    use LogsTrait;

    public function partners()
    {
        $partners = Partner::all();
        return view('back.partners', compact('partners'));
    }

    public function store(Request $request) {
        $request->validate([
            'name_en' => 'required|max:50',
            'name_ar' => 'required|max:50',
            'logo' => 'required|max:2048|image|mimes:jpg,png,jpeg',
            'link' => 'required|max:250|url',
        ]);


        $logo_name = "logo-" . time() . "." . $request->logo->getClientOriginalExtension();
        $path = $request->logo->move('uploads/partners', $logo_name);

        $data = [
            'en' => $request->name_en,
            'ar' => $request->name_ar
        ];

        $partner = Partner::create([
            'name' => json_encode($data),
            'logo' => $path,
            'link' => $request->link,
        ]);

        $name = json_decode($partner->name);

        $this->logs('create', 'create new partner in partners page');
        return response()->json([
                    'id' => $partner->id,
                    'logo' => asset($partner->logo),
                    'link' => $partner->link,
                    'name_en' => $name->en,
                    'name_ar' => $name->ar,
                ]);
    }

    public function update(Request $request) {
        $request->validate([
            'name_en' => 'required|max:50',
            'name_ar' => 'required|max:50',
            'link' => 'required|max:250|url',
        ]);

        $partner = Partner::findOrFail($request->id);
        $path = $partner->logo;
        if ($request->hasFile('logo')) {
            if (file_exists(public_path() . '/' . $path ) && !empty($path)) {
                unlink(public_path() . '/' . $path);
            }

            $logo_name = "logo-" . time() . "." . $request->logo->getClientOriginalExtension();
            $path = $request->logo->move('uploads/partners', $logo_name);
        }

        $data = [
            'en' => $request->name_en,
            'ar' => $request->name_ar
        ];

        $partner->update([
            'name' => json_encode($data),
            'logo' => $path,
            'link' => $request->link,
        ]);

        $this->logs('update', 'update partner in partners page');
        return response()->json([
                    'id' => $request->id,
                    'logo' => asset($path),
                    'link' => $request->link,
                    'name_en' => $request->name_en,
                    'name_ar' => $request->name_ar,
                ]);
    }

    public function destroy(Request $request) {
        $partner = Partner::findOrFail($request->id);
        $path = $partner->logo;
        if (file_exists(public_path() . '/' . $path ) && !empty($path)) {
            unlink(public_path() . '/' . $path);
        }
        $partner->delete();
        $this->logs('delete', 'delete partner from partners page');
        return true;
    }

}
