<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation;
use Illuminate\Contracts\Filesystem\Factory as FilesystemFactory;
use Symfony\Componenet\HttpFoundation\File\UploadFile as SymfonyUploadedFile;
use App\Models\User;
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

    public function register(){
        return view('register');
    }

    public function processForm(Request $request){
        
        $this->validate($request,[
            'email'     => 'required|email',
            'username'  => 'required|min:4', 
            'password'  => 'required|min:6',
            'photo'     =>  'required|image',
        ]);

      //  if($this->validate->fails()){
      //      return redirect()->back->withErrors($validator)->withInput();
      //  }

        $photo = $request->file('photo');
        $file_name = uniqid('photo_', true).str_shuffle('fuck').'.'.$photo->getClientOriginalExtension();

        if($photo->isValid()){
            $photo->storeAs('images',$file_name);
        }

        User::create([
            'email' => $request->input('email'),
            'name' => $request->input('username'),
            'password' => $request->input('password'),
            'photo' => $file_name,
        ]);

        session()->flash('message','Register Successfully');

        return redirect()->route('login');
    }


    public function showLoginform(){
        return view('login');
    }

    public function processLogin(Request $request){

    /*     $this->validate($request,[
            'name'  => 'required|min:4', 
            'password'  => 'required|min:6',
        ]);
    */
        $credentials = $request->except(['_token']);

        if(auth()->attempt($credentials)){
            return redirect()->route('dashboard');
        }
    }

    public function dashboard(){
        return view('dashboard');
    }
}
