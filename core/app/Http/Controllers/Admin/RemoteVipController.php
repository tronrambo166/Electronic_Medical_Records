<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\RemoteVip;
use Illuminate\Http\Request;

class RemoteVipController extends Controller
{
    public function remoteVipList()
    {
        $pageTitle = 'Request VIP Remote Monitoring';
        $vip = RemoteVip::with('user')->orderBy('id',"DESC")->paginate(20);

        $emptyMessage = 'No Data Found';
        return view('admin.remote_vip.list', compact('pageTitle', 'emptyMessage', 'vip'));
    }
    public function remoteVipDetails($id)
    {
        $pageTitle = 'Request VIP Remote Monitoring Information';
        $vip = RemoteVip::findOrFail($id);
        $emptyMessage = 'No Data Found';
        return view('admin.remote_vip.details', compact('pageTitle', 'emptyMessage', 'vip'));
    }
}
