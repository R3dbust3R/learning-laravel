<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use App\Models\profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class profileController extends Controller
{
    public function index() {
        $page_title = 'Profile page';
        return view('profile', compact('page_title'));
    }

    public function show(profile $profile) {

        $page_title = 'Show profile';

        // $profile_id = $request->id;
        // $profile = profile::findOrFail($profile);

        return view('show-profile', compact('page_title', 'profile'));
    }

    public function create() {
        $page_title = 'Create profile';
        return view('profile-create', compact('page_title'));
    }

    public function store(ProfileRequest $request) {
        
        $fname = $request->fname;
        $lname = $request->lname;
        $email = $request->email;
        $password = $request->password;
        $hashd_password = Hash::make($password);
        // $confirmed_password = $request->confirmedPassword;
        $bio = $request->bio;
        
        $extension = $request->file('image')->extension();
        $image = Str::random(32) . '.' . $extension;

        if (!$request->file('image')->storeAs('uploads', $image, 'public')) {
            $image = '';
        }

        // isertion
        profile::create([
            'fname'     => $fname,
            'lname'     => $lname,
            'email'     => $email,
            'password'  => $hashd_password,
            'bio'       => $bio,
            'image'     => $image,
        ]);

        // redirection on [true]
        return redirect()->route('profiles')->with('success', "({$email}) has been created successfuly!");

    }

    public function delete(profile $profile) {
        if ($profile->delete()) {

            return redirect(route('profiles'))->with('success', "{$profile->fname} has been deleted successfuly");

        } else {

            return redirect(route('profiles'))->with('error', 'Failed to delete user');

        }
    }

    public function show_edit(profile $profile) {
        $page_title = 'Edit profile';
        return view('edit-profile', compact('page_title', 'profile'));
    }


    public function profile_update(ProfileRequest $request, profile $profile) {

        $validated_data = $request->validated();

        // Handle password change
        if (!empty($validated_data['old_password']) && !empty($validated_data['password']) && !empty($validated_data['password_confirmation'])) {

            if (Hash::check($validated_data['old_password'], $profile->password)) {
                if ($validated_data['password'] === $validated_data['password_confirmation']) {
                    // Hash the new password
                    $validated_data['password'] = Hash::make($validated_data['password']);
                } else {
                    return redirect()->back()->with('error', "New password and confirmation do not match.");
                }
            } else {
                return redirect()->back()->with('error', "Old password is incorrect.");
            }
        } else {
            unset($validated_data['password']);
            unset($validated_data['old_password']);
            unset($validated_data['password_confirmation']);
        }

        
        // Handle profile image 
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = Str::random(32) . '.' . $image->extension();
    
            if ($image->storeAs('uploads', $imageName, 'public')) {
                $validated_data['image'] = $imageName;
            } else {
                return redirect()->back()->with('error', "Image upload failed.");
            }
        }
    
        if ($profile->fill($validated_data)->save()) {
            return redirect()->back()->with('success', "Your data has been updated successfully!");
        } else {
            return redirect()->back()->with('error', "There was an issue while updating your data, try again later!");
        }
    }
        

}
