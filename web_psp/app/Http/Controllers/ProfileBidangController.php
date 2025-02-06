<?php

namespace App\Http\Controllers;

use App\Models\Information;
use App\Models\MemberData;
use Illuminate\Http\Request;

class ProfileBidangController extends Controller
{
    public function index()
    {

        $profilebidang = Information::where('name', 'Profile')->first() ?? null;
        $visi = Information::where('name', 'Visi')->first() ?? null;
        $misi = Information::where('name', 'Misi')->first() ?? null;


        $staff = MemberData::where('position_member', 'Staff')->get() ?? collect([]);
        $kasi = MemberData::where('position_member', 'Kepala Seksi')->get() ?? collect([]);
        $kepalaBidangStaff = MemberData::where('position_member', 'Kepala Bidang')->first() ?? null;
        return view('profile-bidang', compact('staff', 'kasi', 'kepalaBidangStaff', 'profilebidang', 'visi', 'misi'));
    }
}
