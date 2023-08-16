<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Support;

class SupportController extends Controller
{
    public function index(Support $support)
    {
        $support = new Support();
        $supports = $support->all();
        return view('admin/supports/index',['supports' => $supports]);
    }
}
