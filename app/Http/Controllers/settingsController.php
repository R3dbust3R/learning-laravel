<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class settingsController extends Controller
{
    public function index() {
        $page_title = 'Settings page';
        return view('settings', compact('page_title'));
    }
}
