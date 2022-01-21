<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function registrationForm(){
        $data['day'] = date('d');
        $data['links'] = [
            'facebook' => 'https://facebook.com',
            'twitter' => 'https://twitter.com',
            'google' => 'https://google.com',
        ];
        return view('register', $data);
    }

    public function post(){
        return view('post');
    }
}
