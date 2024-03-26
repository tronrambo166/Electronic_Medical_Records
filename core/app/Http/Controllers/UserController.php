<?php

namespace App\Http\Controllers;

use App\Models\GeneralSetting;
use App\Rules\FileTypeValidate;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\Rule;
use App\Models\KycForm;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;
use App\Lib\Kyc;
use App\Models\AddListing;
use App\Models\User;

class UserController extends Controller
{
    public function __construct()
    {
        $this->activeTemplate = activeTemplate();
    }

    public function home()
    {
        $pageTitle = 'Dashboard';
        $user = Auth::user();
        $properties = AddListing::where('user_id',$user->id)->count();
        return view($this->activeTemplate . 'user.dashboard', compact('pageTitle', 'user','properties'));
      }


    public function profile()
    {
        $pageTitle = "Profile Setting";
        $user = Auth::user();

        return view($this->activeTemplate. 'user.profile_setting', compact('pageTitle','user'));
    }

    public function submitProfile(Request $request)
    {

        $user = Auth::user();
        $request->validate([
            'firstname' => 'required|string|max:50',
            'lastname' => 'required|string|max:50',
            'mobile' => 'required|unique:admins,mobile,' . $user->id,
            'image' => ['image',new FileTypeValidate(['jpg','jpeg','png'])]
        ]);
        $in['firstname'] = $request->firstname;
        $in['lastname'] = $request->lastname;
        $in['email'] = $user->email;
        $in['mobile'] = str_replace("+",'',$request->mobile);
        $in['username'] = $user->username;
        if ($request->hasFile('image')) {
            if($user->image == "defult.png"){
                $user->image = null;
            }
            $location = imagePath()['profile']['user']['path'];
            $size = imagePath()['profile']['user']['size'];
            $filename = uploadImage($request->image, $location, $size, $user->image);
            $in['image'] = $filename;
        }
        $user->fill($in)->save();

        $notify[] = ['success', 'Profile updated successfully.'];
        return back()->withNotify($notify);
    }

    public function changePassword()
    {
        $pageTitle = 'Change password';
        return view($this->activeTemplate . 'user.password', compact('pageTitle'));
    }

    public function submitPassword(Request $request)
    {
        $password_validation = Password::min(6);
        $general = GeneralSetting::first();
        if ($general->secure_password) {
            $password_validation = $password_validation->mixedCase()->numbers()->symbols()->uncompromised();
        }

        $this->validate($request, [
            'current_password' => 'required',
            'password' => ['required','confirmed',$password_validation]
        ]);


        try {
            $user = auth()->user();
            if (Hash::check($request->current_password, $user->password)) {
                $password = Hash::make($request->password);
                $user->password = $password;
                $user->save();
                $notify[] = ['success', 'Password changes successfully.'];
                return back()->withNotify($notify);
            } else {
                $notify[] = ['error', 'The password doesn\'t match!'];
                return back()->withNotify($notify);
            }
        } catch (\PDOException $e) {
            $notify[] = ['error', $e->getMessage()];
            return back()->withNotify($notify);
        }
    }




}





