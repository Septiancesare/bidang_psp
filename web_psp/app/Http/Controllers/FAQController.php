<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;

class FAQController extends Controller
{
    public function index()
    {
        $questAns = Faq::all();
        return view('faq', compact('questAns'));
    }
}
