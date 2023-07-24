<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Doctor;
use App\Models\Appointment;
/**
 * Summary of HomeController
 */
class HomeController extends Controller
{
   public function redirect(){ 
    if(Auth::id()){
        if(Auth::user()->usertype=='0'){

            $doctor = doctor::all();
            return view('user.home', compact('doctor'));
        }else{
            return view('admin.home');
        }
    }else{
        return redirect()->back();
    }
}

    /**
     * Summary of index
    //  * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        if(Auth::id()){
            return redirect('home');
        }else{
        $doctor = doctor::all();


        return view('user.home', compact('doctor'));
    }
    }
    public function appointments(Request $request){

        $data = new appointment;

        $data->name=$request->name;
        $data->email=$request->email;
        $data->date=$request->date;
        $data->phone=$request->number;
        $data->message=$request->message;
        $data->doctor=$request->doctor;
        $data->status='In progress';

        if(Auth::id()){

        $data->user_id=Auth::user()->id;

        }

        $data->save();
        
        return redirect()->back()->with('message','Submitted Successfully. Will be in touch soon.');
    }

    public function myappointment(){

        if(Auth::id()){

        $userid=Auth::user()->id;
        $appoint = appointment::where('user_id',$userid)->get();

        return view('user.my_appointment', compact('appoint'));

        }else{

            return redirect()->back();

        }
    }

    public function cancel_appoint($id){
        $data=appointment::find($id);

        $data->delete();

        return redirect()->back();
    }

}
