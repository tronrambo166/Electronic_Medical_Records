<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\RemoteVip;
use App\Rules\FileTypeValidate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class RemoteVipController extends Controller
{
    public function __construct()
    {
        $this->activeTemplate = activeTemplate();
    }
    public function remoteVipList(){
        $pageTitle = "Request VIP Remote Monitoring";
        $user = Auth::user();
        $remoteVip = RemoteVip::where('user_id',$user->id)->orderBy('id',"DESC")->paginate(10);
        return view($this->activeTemplate . 'user.remote_vip.list', compact('pageTitle', 'user','remoteVip'));
    }
    public function requestVip(){
        $pageTitle = "Send Request VIP Remote Monitoring";
        $user = Auth::user();
        return view($this->activeTemplate . 'user.remote_vip.request', compact('pageTitle', 'user'));
    }
    public function requestVipStore(Request $request){
        $user = Auth::user();
        $request->validate([
            'title' => 'required|string',
            'address' => 'required|string',
            'friendly_address' => 'required|string',
            'country' => 'required|string',
            'map_id' => 'required|string',
            'longitude' => 'required|string',
            'latitude' => 'required|string',
            'details' => 'required|string',
            'phone' => 'required|string',
            'email' => 'required|string',
            'image' => ['required','image',new FileTypeValidate(['jpg','jpeg','png'])]
        ]);

        $in['user_id'] = $user->id;
        $in['title'] = $request->title;
        $in['slug'] = Str::slug($request->title);
        $in['address'] = $request->address;
        $in['friendly_address'] = $request->friendly_address;
        $in['country'] = $request->country;
        $in['map_id'] = $request->map_id;
        $in['longitude'] = $request->longitude;
        $in['latitude'] = $request->latitude;
        $in['details'] = $request->details;
        $in['phone'] = $request->phone;
        $in['email'] = $request->email;
        if ($request->hasFile('image')) {
            $location = imagePath()['remote_vip']['path'];
            $size = imagePath()['remote_vip']['size'];
            $filename = uploadImage($request->image, $location, $size);
            $in['image'] = $filename;
        }
        $remoteVip = RemoteVip::create($in);
        $admin = Admin::first();
          //to admin
          notify($admin,'REMOTE_VIP',[
            'user_name'=>   $user->fullname,
            'property_name'=>  $remoteVip->title,
            'address'=>  $remoteVip->address,
            'country'=> $remoteVip->country,
            'email'=>  $remoteVip->email,
            'phone'=>   $remoteVip->phone,
            'request_date'=>  showDateTime( $remoteVip->created_at),
        ]);

        $notify[] = ['success', 'Send Request Vip Remote Monitoring Successfully.'];
        return back()->withNotify($notify);

    }
    public function requestVipDetails($id){

        $user = Auth::user();
        $vip = RemoteVip::findOrFail($id);
        $pageTitle = 'Request VIP Remote Monitoring Informations';
        return view($this->activeTemplate . 'user.remote_vip.details', compact('pageTitle', 'user','vip'));
    }

    public function requestDelete(Request $request){
        $user = Auth::user();
        $request->validate([
            'id' => 'required',
        ]);
        $vip = RemoteVip::findOrFail($request->id);
        $vip->delete();
        $location = imagePath()['remote_vip']['path'];
        $file =   $location.'/'.$vip->image;
        removeFile( $file);
        $notify[] = ['success', 'Request Deleted Successfully.'];
        return back()->withNotify($notify);
    }

}
