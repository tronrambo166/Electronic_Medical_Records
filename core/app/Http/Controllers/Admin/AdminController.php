<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SendMoney;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
   public function dashboard()
   {
        $pageTitle = "Dashboard";

        return view('admin.dashboard', compact('pageTitle'));
   }
  

   public function profile()
   {

       $pageTitle = 'Admin Profile';
       $admin = Auth::guard('admin')->user();
       $countries = json_decode(file_get_contents(resource_path('views/partials/country.json')));
       return view('admin.profile', compact('countries','pageTitle', 'admin'));
   }

   public function profileUpdate(Request $request)
   {
       $admin = Auth::guard('admin')->user();
       $countryData = json_decode(file_get_contents(resource_path('views/partials/country.json')));
       $request->validate([
           'name' => 'required|max:50',
           'email' => 'required|email|max:90|unique:admins,email,' . $admin->id,
           'mobile' => 'required|unique:admins,mobile,' . $admin->id,
           'address' => 'required',
           'city' => 'required',
           'state' => 'required',
           'zip' => 'required',
           'country' => 'required',
       ]);
       $in['mobile'] = $request->mobile;
    //    $user->country_code = $countryCode;
       $in['name'] = $request->name;
       $in['email']= $request->email;
       $in['address']=$request->address;
       $in['city']=$request->city;
       $in['state']=$request->state;
       $in['zip']=$request->zip;
       $in['country']=@$request->country;


        if ($request->hasFile('image')) {
        $location = imagePath()['profile']['admin']['path'];
        $size = imagePath()['profile']['admin']['size'];
        $old = $admin->image;
        $filename = uploadImage($request->image, $location, $size, $old);
        $in['image'] = $filename;
    }

       $in['status'] = $request->status ? 1 : 0;

       $admin->fill($in)->save();

       $notify[] = ['success', 'Admin detail has been updated'];
       return redirect()->back()->withNotify($notify);
   }

   public function password()
   {
       $pageTitle = 'Password Setting';
       $admin = Auth::guard('admin')->user();
       return view('admin.password', compact('pageTitle', 'admin'));
   }

   public function passwordUpdate(Request $request)
    {
        $this->validate($request, [
            'old_password' => 'required',
            'password' => 'required|min:4|confirmed',
        ]);

        $user = Auth::guard('admin')->user();
        if (!Hash::check($request->old_password, $user->password)) {
            $notify[] = ['error', 'Current Password does not match !!'];
            return back()->withNotify($notify);
        }
        $user->password = bcrypt($request->password);
        $user->save();
        $notify[] = ['success', 'Password changed successfully.'];
        return redirect()->route('admin.password')->withNotify($notify);
    }

    public function systemInfo(){
        $laravelVersion = app()->version();
        $serverDetails = $_SERVER;
        $currentPHP = phpversion();
        $timeZone = config('app.timezone');
        $pageTitle = 'System Information';

        return view('admin.info',compact('pageTitle', 'currentPHP', 'laravelVersion', 'serverDetails','timeZone'));
    }
}
