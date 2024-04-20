<?php

namespace App\Http\Controllers;

use App\Models\AddListing;
use App\Models\Admin;
use App\Models\DeuDiligenc;
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
        return view($this->activeTemplate . 'user.dueDiligence.create', compact('pageTitle', 'user','properties'));
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
        $in['duration'] =  $request->day.' days, '.$request->week.' weeks, '.$request->month.' months,'.;
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
}
