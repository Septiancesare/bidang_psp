<?php

namespace App\Http\Controllers;

use App\Models\Information;
use App\Models\MemberData;
use Illuminate\Http\Request;

class ProfileBidangController extends Controller
{
    public function index()
    {
        $kepalaBidangStaff = MemberData::findOrFail(1);
        $profilebidang = Information::findOrFail(1);
        $visi = Information::findOrFail(2);
        $misi = Information::findOrFail(3);


        $kasi = MemberData::where('position_member', 'Kepala Seksi')->get();
        $staff = MemberData::where('position_member', 'Staff')->get();
        return view('profile-bidang', compact('staff', 'kasi', 'kepalaBidangStaff', 'profilebidang', 'visi', 'misi'));
    }
}
