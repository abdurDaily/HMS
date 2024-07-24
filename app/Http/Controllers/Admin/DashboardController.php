<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{

    // ** ADMIN DASHBOARD HOME
    public function index(){
        return view('backend.index');
    }

    // ** MY PROFILE 
    public function profile(){
        return view('backend.profile.profile');
    }

    // ** profile Update
    public function profileUpdate(Request $request, $id){

        
        if($request->hasFile('profile_img')){
            $extension = $request->profile_img->extension();
            $uniName = 'profileImg-' . uniqid() . '.' . $extension;
            $imagePath = $request->profile_img->storeAs('profileImg', $uniName, 'public');
         }

        $AuthUser =  User::findOrFail($id);
        if($request->hasFile('profile_img')){
            $AuthUser->image = env('APP_URL') . 'storage/' . $imagePath;
        }
        $AuthUser->email = $request->email;
        $AuthUser->name = $request->name;
        $AuthUser->website = $request->web;
        $AuthUser->contact_no = $request->phone;
        $AuthUser->about_me = $request->about_me;
        $AuthUser->blood = $request->blood;
        $AuthUser->designation = $request->designation;
        $AuthUser->save();

        toast('Updated!','success');

     

        if(!Hash::check($request->old_password, auth()->user()->password)){
            return back()->with("error", "Old Password Doesn't match!");
        }


        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);
        
        return back();
    }

    // ** LOGOUT 
    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }


}
