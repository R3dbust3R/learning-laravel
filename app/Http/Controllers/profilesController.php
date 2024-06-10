<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\profile;

class profilesController extends Controller
{
    public function index() {

        $page_title = 'Profiles';
        $profiles = profile::paginate(12);

        return view('profiles', compact('page_title', 'profiles'));

    }


}
