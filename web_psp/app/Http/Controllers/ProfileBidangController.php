<?php

namespace App\Http\Controllers;

use App\Models\MemberData;
use Illuminate\Http\Request;

class ProfileBidangController extends Controller
{
    public function index()
    {
        $staff = MemberData::where('position_member', 'Kepala Seksi')->get();
        return view('profile-bidang', compact('staff'));
    }
}
