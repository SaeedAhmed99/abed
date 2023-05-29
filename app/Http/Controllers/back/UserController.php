<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Traits\LogsTrait;
use App\Rules\MatchOldPassword;

class UserController extends Controller
{
    use LogsTrait;

    public function users()
    {
        $users = User::orderBy('id','DESC')->paginate(10);
        return view('back.users', compact('users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => ['required', 'string', 'max:50'],
            'last_name' => ['required', 'string', 'max:50'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $user = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'roles_name' => null
        ]);

        // $roles = $request->roles_name;
        // foreach ($roles as $value) {
        //     $user->assignRole($value);
        // }

        $this->logs('create', 'create new user (' . $request->first_name . ' ' . $request->last_name . ')');
        return true;
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('back.edituser', compact('user'));
    }

    public function update(Request $request)
    {
        $user = User::findOrFail($request->id);

        $request->validate([
            'first_name' => ['required', 'string', 'max:50'],
            'last_name' => ['required', 'string', 'max:50'],
            // 'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'email' => 'required|unique:users,email,'.$user->id,
            'phone' => ['nullable', 'string', 'max:30'],
            'address' => ['nullable', 'string', 'max:150'],
            'country' => ['nullable', 'string', 'max:50'],
            'bio' => ['nullable', 'string', 'max:500'],
        ]);

        $user->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'country' => $request->country,
            'bio' => $request->bio,
        ]);

        $this->logs('update', 'update user (' . $request->first_name . ' ' . $request->last_name . ')' . ' by user (' . auth()->user()->first_name . ' ' . auth()->user()->last_name . ')');
        return true;
    }

    public function changePassword(Request $request)
    {
        $user = User::findOrFail($request->id);

        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => 'required|min:8|max:20',
            'new_confirm_password' => 'same:new_password|min:8|max:20',
        ]);

        $user->update(['password'=> Hash::make($request->new_password)]);

        $this->logs('update', 'change password user (' . $request->first_name . ' ' . $request->last_name . ')' . ' by user (' . auth()->user()->first_name . ' ' . auth()->user()->last_name . ')');
        return true;
    }

    public function changeImage(Request $request)
    {
        $user = User::findOrFail($request->id);
        $request->validate([
            'image' => 'required|max:2048|image|mimes:jpg,png,jpeg',
        ]);

        $image_path = $user->image;
        if ($request->hasFile('image')) {
            if (file_exists(public_path() . '/' . $image_path ) && !empty($image_path)) {
                unlink(public_path() . '/' . $image_path);
            }
            $image_name = "image-" . time() . "." . $request->image->getClientOriginalExtension();
            $image_path = $request->image->move('uploads/users', $image_name);
        }

        $user->update(['image' => $image_path]);

        return ['image'=>asset($image_path)];
    }

    public function destroy(Request $request){
        $user = User::findOrFail($request->id);
        // if ($user->id == 1) {
        //     return abort(400, 'This superuser cannot be deleted');
        // } else {
        //     if (in_array('admin', $user->roles_name)) {
        //         $count_users = User::where('roles_name', 'like', "%\"admin\"%")->get()->count();

        //         if ($count_users > 1) {
        //             $this->logs('delete', 'delete user (' . $user->first_name . ')');
        //             $user->delete();
        //             return true;
        //         }else{
        //             return abort(400, 'You are the only admin');
        //         }
        //     } else {
        //         $this->logs('delete', 'delete user (' . $user->first_name . ')');
        //         $user->delete();
        //         return true;
        //     }
        // }

        if ($user->id == 1) {
            return abort(400, 'This superuser cannot be deleted');
        }
        $path = $user->image;
        if (file_exists(public_path() . '/' . $path ) && !empty($path)) {
            unlink(public_path() . '/' . $path);
        }
        $this->logs('delete', 'delete user (' . $user->first_name . ')');
        $user->delete();
        return true;
    }
}
