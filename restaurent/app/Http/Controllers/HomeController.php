<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Food;
use App\Models\Reservation;
use App\Models\Foodchef;
class HomeController extends Controller
{
    public function index(){

        $data = food::all();

        $data2= Foodchef::all();

        return view('home',compact('data','data2'));
    }

    public function redirects(){
        $usertype = Auth::user()->usertype;
        $data=food::all();
        if($usertype == '1'){
            return view('adminhome');
        }else {
            return view('home',compact('data'));
        }
    }

    public function user(){

        $data = user::all();

        return view('admin.users',compact("data"));
    }

    public function foodmenu(){
        $data = food::all();
        return view('admin.foodmenu',compact('data'));
    }

    public function upload(Request $request){

        $data = new food;
        $image = $request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('foodimage',$imagename);
        $data->image=$imagename;
        $data->title=$request->title;
        $data->price=$request->price;
        $data->description=$request->description;
        $data->save();
        return redirect()->back();
    }

    public function updatemenu($id){
        $data = food::find($id);
        return view('admin.updatemenu',compact('data'));
    }

    public function updatefood(Request $request,$id){
        $data=food::find($id);
        $image = $request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('foodimage',$imagename);
        $data->image=$imagename;
        $data->title=$request->title;
        $data->price=$request->price;
        $data->description=$request->description;
        $data->save();
        return redirect()->back();
    }

    public function reservation(Request $request){
        $data = new reservation;
        $data->name=$request->name;
        $data->email=$request->email;
        $data->phone=$request->phone;
        $data->guest=$request->guest;
        $data->date=$request->date;
        $data->time=$request->time;
        $data->message=$request->message;
        $data->save();
        return redirect()->back();
    }

    public function viewreservation(){
        $data = reservation::all();
        return view('admin.reservation',compact('data'));
    }

    public function viewchef(){
        $data = Foodchef::all();
        return view('admin.chef',compact('data'));
    }


    public function uploadchef(Request $request){

        $data = new foodchef;

        $image = $request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('chefimage',$imagename);
        $data->image=$imagename;
        $data->name=$request->name;
        $data->speciality=$request->speciality;
        $data->save();
        return redirect()->back();
    }

    public function updatechefview($id){
        $data = foodchef::find($id);
        return view('admin.updatechefview',compact('data'));
    }

    public function updatechef(Request $request,$id){
        $data=foodchef::find($id);
        $image = $request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('chefimage',$imagename);
        $data->image=$imagename;
        $data->name=$request->name;
        $data->speciality=$request->speciality;
        $data->save();
        return redirect()->back();
    }
}
