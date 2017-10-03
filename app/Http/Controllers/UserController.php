<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Auth;
use File;
use Validator;
use Image;
class UserController extends Controller
{
    public function get_profile(){
        return view('user/profile',array('user'=>Auth::user()));
    }
    
    public function update_profile_picture(Request $request){
        if($request->hasFile('avatar')){
            $user=Auth::user();
            $avatar=$request->file('avatar'); 
            $rules = array(
            'avatar' => 'required | mimes:jpeg,jpg,png | max:1000',
        );

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return Redirect::back()
                ->withErrors($validator)
                ->withInput();
        }
            $filename=time() . '.' . $avatar->getClientOriginalExtension();
            // Delete current image before uploading new image
            if ($user->avatar !== 'default.jpg') {
                $file = public_path('uploads/avatars/' . $user->avatar);
                    if (File::exists($file)) {
                        unlink($file);
                    }
            }
            Image::make($avatar)->fit(300,300)->save( public_path('uploads/avatars/' . $filename));
            
            $user->avatar = $filename;
            $user->save();
        }
        return view('user.profile', array('user' => Auth::user()));
    }
}














