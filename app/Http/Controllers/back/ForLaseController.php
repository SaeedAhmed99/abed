<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ForLase;
use App\Traits\LogsTrait;

class ForLaseController extends Controller
{
    use LogsTrait;

    public function forlease()
    {
        $forleases = ForLase::get();
        return view('back.forlease', compact('forleases'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'nullable',
            'price' => 'nullable',
            'location' => 'nullable|max:250',
            'image' => 'nullable|max:2048|image|mimes:jpg,png,jpeg',
        ]);


        // $image_name = "image-" . time() . "." . $request->image->getClientOriginalExtension();
        // $image_path = $request->image->move('uploads/books/images', $image_name);

        // $file_name = "file-" . time() . "." . $request->file->getClientOriginalExtension();
        // $file_path = $request->file->move('uploads/books/files', $file_name);
        // dd($request->file('images'));

        $data = array();
        if($request->hasfile('images')) {
            foreach($request->file('images') as $image) {
                $file_exe = $image->getClientOriginalExtension();
                $new_name = uniqid() . '.' . $file_exe;
                $image->move(public_path('uploads/books/images'), $new_name);
                $data[] = $new_name;
            }
        }
        // $image_list = [];
        // foreach ($request->images as $imagefile) {
        //     $image_name = "image-" . time() . "." . $imagefile->getClientOriginalExtension();
        //     $image_path = $imagefile->move('uploads/books/images', $image_name);
        //     array_push($image_list, $image_name);
        // }
            // dd($data);
        $book = ForLase::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'location' => $request->location,
            'image' => $data,
        ]);

        return true;

        // $this->logs('create', 'create new book in books page');
        // return response()->json([
        //             'id' => $book->id,
        //             'name_en' => $request->name_en,
        //             'name_ar' => $request->name_ar,
        //             'short_description_en' => $request->short_description_en,
        //             'short_description_ar' => $request->short_description_ar,
        //             'language_en' => $request->language_en,
        //             'language_ar' => $request->language_ar,
        //             'image' => asset($image_path),
        //             'file' => asset($file_path)
        //         ]);
    }

    public function show($id)
    {
        $book = Book::findOrFail($id);
        $pdf_path = $book->file;
        if (file_exists(public_path() . '/' . $pdf_path ) && !empty($pdf_path)) {
            return response()->file($pdf_path);
        }
        return abort(404);
    }

    public function update(Request $request) {
        $request->validate([
            'id' => 'required',
            'name_en' => 'required',
            'name_ar' => 'required',
            'short_description_en' => 'required',
            'short_description_ar' => 'required',
            'language_en' => 'required|max:100',
            'language_ar' => 'required|max:100',
            'image' => 'max:2048|image|mimes:jpg,png,jpeg|nullable',
            'file' => 'mimes:pdf|nullable',
        ]);

        $book = Book::findOrFail($request->id);

        $name = [
            'en' => $request->name_en,
            'ar' => $request->name_ar
        ];

        $short_description = [
            'en' => $request->short_description_en,
            'ar' => $request->short_description_ar
        ];

        $language = [
            'en' => $request->language_en,
            'ar' => $request->language_ar
        ];

        $image_path = $book->image;
        if ($request->hasFile('image')) {
            if (file_exists(public_path() . '/' . $image_path ) && !empty($image_path)) {
                unlink(public_path() . '/' . $image_path);
            }
            $image_name = "image-" . time() . "." . $request->image->getClientOriginalExtension();
            $image_path = $request->image->move('uploads/books/images', $image_name);
        }

        $file_path = $book->file;
        if ($request->hasFile('file')) {
            if (file_exists(public_path() . '/' . $file_path ) && !empty($file_path)) {
                unlink(public_path() . '/' . $file_path);
            }
            $file_name = "file-" . time() . "." . $request->file->getClientOriginalExtension();
            $file_path = $request->file->move('uploads/books/files', $file_name);
        }

        $book->update([
            'name' => json_encode($name),
            'short_description' => json_encode($short_description),
            'lang' => json_encode($language),
            'image' => $image_path,
            'file' => $file_path,
        ]);

        $this->logs('update', 'update book in books page');
        return response()->json([
                    'id' => $request->id,
                    'name_en' => $request->name_en,
                    'name_ar' => $request->name_ar,
                    'short_description_en' => $request->short_description_en,
                    'short_description_ar' => $request->short_description_ar,
                    'language_en' => $request->language_en,
                    'language_ar' => $request->language_ar,
                    'file' => asset($file_path),
                ]);
    }


    public function destroy(Request $request) {
        $book = Book::findOrFail($request->id);
        $image = $book->image;
        $file = $book->file;

        if (file_exists(public_path() . '/' . $image ) && !empty($image)) {
            unlink(public_path() . '/' . $image);
        }

        if (file_exists(public_path() . '/' . $file ) && !empty($file)) {
            unlink(public_path() . '/' . $file);
        }
        $book->delete();
        $this->logs('delete', 'delete book from books page');
        return true;
    }

}
