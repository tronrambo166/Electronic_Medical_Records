<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AddListing;
use App\Models\DeuDiligenc;
use Illuminate\Http\Request;

class DueDiligenceController extends Controller
{
    public function deuList()
    {
        $pageTitle = 'All Due Diligence';
        $diligences = DeuDiligenc::with('property')->orderBy('id',"DESC")->paginate(20);
        $emptyMessage = 'No Data Found';
        return view('admin.diligence.list', compact('pageTitle', 'emptyMessage', 'diligences'));
    }
    public function deuApproved(Request $request)
    {

        $data = DeuDiligenc::findOrFail($request->id);

        $data->status = 1;
        $data->save();

        $property = AddListing::findOrFail($data->property_id);
        //make free
        $property->diligence_id = 1;
        $property->save();

        $notify[] = ['success', 'Due Diligence Approved Successfully.'];
        return back()->withNotify($notify);
    }
    public function dueRejected(Request $request)
    {

        $data = DeuDiligenc::findOrFail($request->id);

        $data->status = 2;
        $data->save();

        $notify[] = ['success', 'Due Diligence Rejected Successfully.'];
        return back()->withNotify($notify);
    }
}
