<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomeSlider;
use App\Traits\LogsTrait;

class HomeSliderController extends Controller
{
    use LogsTrait;
    
    public function homeSlider()
    {
        $sliders = HomeSlider::all();
        return view('back.homeslider', compact('sliders'));
    }

    public function store(Request $request){
        $request->validate([
            'image' => 'required|max:2048|image|mimes:jpg,png,jpeg'
        ]);

        $image_name = "image-" . time() . "." . $request->image->getClientOriginalExtension();
        $path = $request->image->move('uploads/homeslider', $image_name);
        $path = 'uploads/homeslider/' . $image_name;
        $slider = HomeSlider::create([
            'image' => $path,
        ]);

        $this->logs('add', 'add new slider image to home slider page');
        return response()->json(
            [
                'id' => $slider->id,
                'image' => asset($path),
            ]
        );
    }

    public function destroy(Request $request){
        $slider = HomeSlider::findOrFail($request->id);
        $path = $slider->image;
        if (file_exists(public_path() . '/' . $path ) && !empty($path)) {
            unlink(public_path() . '/' . $path);
        }
        $slider->delete();

        $this->logs('delete', 'delete slider image from home slider page');
        return true;
    }
}
