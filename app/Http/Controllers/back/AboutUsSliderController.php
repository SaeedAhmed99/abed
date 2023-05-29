<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AboutUsSlider;
use App\Traits\LogsTrait;

class AboutUsSliderController extends Controller
{
    use LogsTrait;

    public function aboutUsSlider()
    {
        $sliders = AboutUsSlider::all();
        return view('back.aboutusslider', compact('sliders'));
    }

    public function store(Request $request){
        $request->validate([
            'image' => 'required|max:2048|image|mimes:jpg,png,jpeg'
        ]);

        $image_name = "image-" . time() . "." . $request->image->getClientOriginalExtension();
        $path = $request->image->move('uploads/aboutusslider', $image_name);
        $path = 'uploads/aboutusslider/' . $image_name;
        $slider = AboutUsSlider::create([
            'image' => $path,
        ]);

        $this->logs('add', 'add new slider image to about us slider page');
        return response()->json(
            [
                'id' => $slider->id,
                'image' => asset($path),
            ]
        );
    }

    public function destroy(Request $request){
        $slider = AboutUsSlider::findOrFail($request->id);
        $path = $slider->logo;
        if (file_exists(public_path() . '/' . $path ) && !empty($path)) {
            unlink(public_path() . '/' . $path);
        }
        $slider->delete();

        $this->logs('delete', 'delete slider image from about us slider page');
        return true;
    }

}
