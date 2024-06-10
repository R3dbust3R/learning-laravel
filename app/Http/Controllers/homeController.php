<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index() {
        $page_title = 'Home page';
        $users = [
            [
                'id' => 1, 
                'name' => 'otmane', 
                'email' =>'otmane@mail.com'
            ], [
                'id' => 2, 
                'name' => 'zakaria', 
                'email' =>'zakaria@mail.com'
            ], [
                'id' => 3, 
                'name' => 'laila', 
                'email' =>'laila@mail.com'
            ]
        ];
        return view('home', compact('page_title', 'users'));
    }
}
