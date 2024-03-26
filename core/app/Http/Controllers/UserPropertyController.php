<?php

namespace App\Http\Controllers;

use App\Models\AddListing;
use App\Models\SendMessage;
use App\Rules\FileTypeValidate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class UserPropertyController extends Controller
{
    public function __construct()
    {
        $this->activeTemplate = activeTemplate();
    }
//============================Add Listing ===========================================
    public function propertyAdd(){
        $pageTitle = 'Add Project';
        $user = Auth::user();
        return view($this->activeTemplate . 'user.property.add', compact('pageTitle', 'user'));

    }
    public function propertyStore(Request $request){
        $user = Auth::user();
        // Remote Monitoring Of Ongoing Projects
        if($request->project_type == 1){
            $monitoring_sub_project_type = "required|string";
            $monitoring_duration_in_week = "required|string";
            $monitoring_hours_in_daily = "required|string";
            $project_info = [
                'project_type'     => "Remote Monitoring Of Ongoing Projects",
                'sub_project_type' => $request->monitoring_sub_project_type??"",
                'duration_in_week' => $request->monitoring_duration_in_week??"",
                'hours_in_daily' => $request->monitoring_hours_in_daily??""
            ];
        }else{
            $monitoring_sub_project_type = "";
            $monitoring_duration_in_week = "";
            $monitoring_hours_in_daily = "";
        }

        // Remote Identification/Observation Of An Item To Purchase
        if($request->project_type == 2){
            $identification_sub_project_type = "required|string";
            $identification_duration_in_week = "required|string";
            $identification_hours_in_daily = "required|string";
            $project_info = [
                'project_type'     => "Remote Identification/Observation Of An Item To Purchase",
                'sub_project_type' => $request->identification_sub_project_type??"",
                'duration_in_week' => $request->identification_duration_in_week??"",
                'hours_in_daily' => $request->identification_hours_in_daily??""
            ];
        }else{
            $identification_sub_project_type = "";
            $identification_duration_in_week = "";
            $identification_hours_in_daily = "";
        }

        // Remote Expert Advice On Item/Service To Be Purchased
        if($request->project_type == 3){
            $expert_sub_project_type = "required|string";
            $expert_duration_in_week = "required|string";
            $expert_hours_in_daily = "required|string";
            $project_info = [
                'project_type'     => "Remote Expert Advice On Item/Service To Be Purchased",
                'sub_project_type' => $request->expert_sub_project_type??"",
                'duration_in_week' => $request->expert_duration_in_week??"",
                'hours_in_daily' => $request->expert_hours_in_daily??""
            ];
        }else{
            $expert_sub_project_type = "";
            $expert_duration_in_week = "";
            $expert_hours_in_daily = "";
        }

        $request->validate([
            'title' => 'required|string',
            'project_type' => 'required|string',
            'address' => 'required|string',
            'friendly_address' => 'required|string',
            'country' => 'required|string',
            'map_id' => 'required|string',
            'longitude' => 'required|string',
            'latitude' => 'required|string',
            'details' => 'required|string',
            'video_link' => 'required|string',
            'live_link' => 'required|string',

            'monitoring_sub_project_type' => $monitoring_sub_project_type,
            'monitoring_duration_in_week' => $monitoring_duration_in_week,
            'monitoring_hours_in_daily' => $monitoring_hours_in_daily,

            'identification_sub_project_type' => $identification_sub_project_type,
            'identification_duration_in_week' => $identification_duration_in_week,
            'identification_hours_in_daily' => $identification_hours_in_daily,

            'expert_sub_project_type' => $expert_sub_project_type,
            'expert_duration_in_week' => $expert_duration_in_week,
            'expert_hours_in_daily' => $expert_hours_in_daily,

            'image' => ['required','image',new FileTypeValidate(['jpg','jpeg','png'])]
        ]);

        $in['user_id'] = $user->id;
        $in['project_type'] = $request->project_type;
        $in['title'] = $request->title;
        $in['slug'] = Str::slug($request->title);
        $in['address'] = $request->address;
        $in['friendly_address'] = $request->friendly_address;
        $in['country'] = $request->country;
        $in['map_id'] = $request->map_id;
        $in['longitude'] = $request->longitude;
        $in['latitude'] = $request->latitude;
        $in['details'] = $request->details;
        $in['project_details'] = json_encode($project_info);
        $in['video_link'] = $request->video_link;
        $in['live_link'] = $request->live_link;
        if ($request->hasFile('image')) {
            $location = imagePath()['add_listing']['path'];
            $size = imagePath()['add_listing']['size'];
            $filename = uploadImage($request->image, $location, $size);
            $in['image'] = $filename;
        }
        AddListing::create($in);
        $notify[] = ['success', 'Add Project Successfully.'];
        return back()->withNotify($notify);

    }

    public function propertyMessage(){
        $pageTitle = 'Project Messages';
        $user = Auth::user();

        $data = AddListing::where('user_id',$user->id)->get()->map(function($p){
        $messages = SendMessage::where('property_id',$p->id)->get();
        return $messages;

        });

        return view($this->activeTemplate . 'user.property.message', compact('pageTitle', 'user','data'));
    }
    public function propertyMessageDelete(Request $request){
        $user = Auth::user();
        $request->validate([
            'id' => 'required',
        ]);
        $message = SendMessage::findOrFail($request->id);
        $message->delete();
        $notify[] = ['success', 'Message Deleted Successfully.'];
        return back()->withNotify($notify);
    }
//============================Add Listing End ===========================================

//============================My Listing End ===========================================
        public function myListings(){
            $pageTitle = 'My Projects';
            $user = Auth::user();
            $properties = AddListing::where('user_id',$user->id)->orderBy('id',"DESC")->paginate(10);
            return view($this->activeTemplate . 'user.property.myList', compact('pageTitle', 'user','properties'));
        }
        public function myListingDetails($id){

            $user = Auth::user();
            $property = AddListing::findOrFail($id);
            $pageTitle = 'My Project Informations';
            return view($this->activeTemplate . 'user.property.myListDetails', compact('pageTitle', 'user','property'));
        }
        public function propertyUpdate(Request $request){
            $user = Auth::user();
             // Remote Monitoring Of Ongoing Projects
        if($request->project_type == 1){
            $monitoring_sub_project_type = "required|string";
            $monitoring_duration_in_week = "required|string";
            $monitoring_hours_in_daily = "required|string";
            $project_info = [
                'project_type'     => "Remote Monitoring Of Ongoing Projects",
                'sub_project_type' => $request->monitoring_sub_project_type??"",
                'duration_in_week' => $request->monitoring_duration_in_week??"",
                'hours_in_daily' => $request->monitoring_hours_in_daily??""
            ];
        }else{
            $monitoring_sub_project_type = "";
            $monitoring_duration_in_week = "";
            $monitoring_hours_in_daily = "";
        }

        // Remote Identification/Observation Of An Item To Purchase
        if($request->project_type == 2){
            $identification_sub_project_type = "required|string";
            $identification_duration_in_week = "required|string";
            $identification_hours_in_daily = "required|string";
            $project_info = [
                'project_type'     => "Remote Identification/Observation Of An Item To Purchase",
                'sub_project_type' => $request->identification_sub_project_type??"",
                'duration_in_week' => $request->identification_duration_in_week??"",
                'hours_in_daily' => $request->identification_hours_in_daily??""
            ];
        }else{
            $identification_sub_project_type = "";
            $identification_duration_in_week = "";
            $identification_hours_in_daily = "";
        }

        // Remote Expert Advice On Item/Service To Be Purchased
        if($request->project_type == 3){
            $expert_sub_project_type = "required|string";
            $expert_duration_in_week = "required|string";
            $expert_hours_in_daily = "required|string";
            $project_info = [
                'project_type'     => "Remote Expert Advice On Item/Service To Be Purchased",
                'sub_project_type' => $request->expert_sub_project_type??"",
                'duration_in_week' => $request->expert_duration_in_week??"",
                'hours_in_daily' => $request->expert_hours_in_daily??""
            ];
        }else{
            $expert_sub_project_type = "";
            $expert_duration_in_week = "";
            $expert_hours_in_daily = "";
        }

        $request->validate([
            'title' => 'required|string',
            'address' => 'required|string',
            'friendly_address' => 'required|string',
            'country' => 'required|string',
            'map_id' => 'required|string',
            'longitude' => 'required|string',
            'latitude' => 'required|string',
            'details' => 'required|string',
            'video_link' => 'required|string',
            'live_link' => 'required|string',

            'monitoring_sub_project_type' => $monitoring_sub_project_type,
            'monitoring_duration_in_week' => $monitoring_duration_in_week,
            'monitoring_hours_in_daily' => $monitoring_hours_in_daily,

            'identification_sub_project_type' => $identification_sub_project_type,
            'identification_duration_in_week' => $identification_duration_in_week,
            'identification_hours_in_daily' => $identification_hours_in_daily,

            'expert_sub_project_type' => $expert_sub_project_type,
            'expert_duration_in_week' => $expert_duration_in_week,
            'expert_hours_in_daily' => $expert_hours_in_daily,

            'image' => ['image',new FileTypeValidate(['jpg','jpeg','png'])]
        ]);
        $property = AddListing::findOrFail($request->id);

        $in['user_id'] = $user->id;
        $in['project_type'] = $request->project_type;
        $in['title'] = $request->title;
        $in['slug'] = Str::slug($request->title);
        $in['address'] = $request->address;
        $in['friendly_address'] = $request->friendly_address;
        $in['country'] = $request->country;
        $in['map_id'] = $request->map_id;
        $in['longitude'] = $request->longitude;
        $in['latitude'] = $request->latitude;
        $in['details'] = $request->details;
        $in['project_details'] = json_encode($project_info);
        $in['video_link'] = $request->video_link;
        $in['live_link'] = $request->live_link;
        if ($request->hasFile('image')) {
            $location = imagePath()['add_listing']['path'];
            $size = imagePath()['add_listing']['size'];
            $filename = uploadImage($request->image, $location, $size);
            $in['image'] = $filename;
        }
        $property->fill($in)->save();

        $notify[] = ['success', 'Updated Project Information Successfully.'];
        return back()->withNotify($notify);

        }
        public function propertyDelete(Request $request){
            $user = Auth::user();
            $request->validate([
                'id' => 'required',
            ]);
            $property = AddListing::findOrFail($request->id);
            $property->delete();
            $location = imagePath()['add_listing']['path'];
            $file =   $location.'/'.$property->image;
            removeFile( $file);
            $notify[] = ['success', ' Project Deleted Successfully.'];
            return back()->withNotify($notify);
        }
//============================My Listing End ===========================================
//============================ Listing Search ===========================================

     public function propertySearch(){
        $search = request()->search;
        $listings= AddListing::where('title', 'like', "%{$search}%")
           ->orwhere('address', 'like', "%{$search}%")
           ->get();
           $pageTitle = 'Project Search';
        $user = Auth::user();
        return view($this->activeTemplate . 'search', compact('pageTitle', 'user','listings'));

     }

     public function propertySearchDetails($id,$slug)
     {
         $pageTitle = "Project Information";
         $details = AddListing::where('id',$id)->firstOrFail();
         return view($this->activeTemplate . 'property-details',compact('pageTitle','details'));
     }

     public function sendMessage(Request $request){

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'mobile' => 'required',
            'message' => 'required',
        ]);
        $user = Auth::user();
        $property = AddListing::findOrFail($request->id);
        $in['name'] = $request->name;
        $in['user_id'] = $user->id;
        $in['property_id'] = $property->id;
        $in['name'] = $request->name;
        $in['email'] = $request->email;
        $in['mobile'] = $request->mobile;
        $in['message'] = $request->message;
        SendMessage::create($in);

        $notify[] = ['success', 'Send message to project owner Successfully.'];
        return back()->withNotify($notify);
    }
    //============================ Listing Search end ===========================================
}
