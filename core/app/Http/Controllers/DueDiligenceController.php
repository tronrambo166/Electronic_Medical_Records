<?php

namespace App\Http\Controllers;

use App\Models\AddListing;
use App\Models\Admin;
use App\Models\DeuDiligenc;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DueDiligenceController extends Controller
{
    public function __construct()
    {
        $this->activeTemplate = activeTemplate();
    }
    public function deuList(){
        $pageTitle = 'My Due Diligence';
        $user = Auth::user();
        $diligences = DeuDiligenc::with('property')->where('user_id',$user->id)->orderBy('id',"DESC")->paginate(20);
        return view($this->activeTemplate . 'user.dueDiligence.list', compact('pageTitle', 'user','diligences'));
    }
    public function deuCreate(){
        $pageTitle = 'Add New Due Diligence';
        $user = Auth::user();
        $properties = AddListing::where('user_id',$user->id)->orderBy('id','DESC')->get();
        $managers = User::where('status', 2)->get();

        return view($this->activeTemplate . 'user.dueDiligence.create', compact('pageTitle', 'user','properties', 'managers'));
    }
    public function deuStore(Request $request){
        // dd($request->all());
        $user = Auth::user();
        $request->validate([
            'project' => 'required',
            'day' => 'required',
            'week' => 'required',
            'month' => 'required',
            'verification_type' => 'required',
            'FOU' => 'required'
        ]);
        $property = AddListing::findOrFail($request->project);
        if(!$property){
            $notify[] = ['error', 'No Project Selected.'];
            return back()->withNotify($notify);
        }
        if($property->diligence_id == 1){
            $notify[] = ['warning', 'Already Made Due Diligence.'];
            return back()->withNotify($notify);
        }

        $in['user_id'] = $user->id;
        $in['property_id'] =  $property->id;
        $in['duration'] =  $request->day.' days, '.$request->week.' weeks, '.$request->month.' months,';
        $in['verification_type'] = $request->verification_type;
        $in['FOU'] = $request->FOU;

        $due = DeuDiligenc::create($in);

        $admin = Admin::first();
        //to user
        notify($admin,'DUE_DILIIGENCE',[
           'user_name'=>   $user->fullname,
           'property_name'=>  $property->title,
           'duration'=>  $in['duration'].' Days',
           'property_link'=> route('user.property.details',[ $property->id, $property->slug]),
           'verification'=>  json_encode( $in['verification_type']),
           'request_date'=>  showDateTime(  $due->created_at),
       ]);

        $notify[] = ['success',  $property->title.' Send Request To Make Due Diligence Successfully.'];
        return redirect()->route('user.diligence.list')->withNotify($notify);
    }

    public function deuDelete(Request $request){
        $data = DeuDiligenc::findOrFail($request->id);
        $property = AddListing::findOrFail($data->property_id);
        //make free
        $property->diligence_id = 0;
        $property->save();
        //delete due
        $data->delete();
        $notify[] = ['success',  $property->title.' Due Diligence Deleted Successfully.'];
        return back()->withNotify($notify);
    }


    //Distance Function
    //$this->findNearestServices($lat,$lng,100);
    public function findNearestServices($latitude, $longitude, $radius = 100)
    {
        $listings = Services::selectRaw("* ,
                         ( 3956 * acos( cos( radians(?) ) *
                           cos( radians( lat ) )
                           * cos( radians( lng ) - radians(?)
                           ) + sin( radians(?) ) *
                           sin( radians( lat ) ) )
                         ) AS distance", [$latitude, $longitude, $latitude])
            ->where('category', '=', '0')
            ->having("distance", "<", $radius)
            ->orderBy("distance",'asc')
            ->offset(0)
            ->limit(20)
            ->get();

        foreach($listings as $list){
        if(strlen($list->location) > 30)
        $list->location = substr($list->location,0,30).'...';

        $user = User::where('id', $list->shop_id)->first();
        if($user){
        $list->manager = $user->fname.' '.$user->lname;
        $list->contact = $user->email;
      }
        }

        return $listings;
    }
    //Distance Function
}
