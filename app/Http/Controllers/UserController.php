<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Record;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function logout(){
        if(Session::has('loginId')){
            session()->flush();
            return redirect('/');
        }
    }
    // Login Pages
    public function student_login(){
        return view('auth.student_login');
    }
    public function admin_login(){
        return view('auth.admin_login');
    }

    //Index pages
    public function admin_index(){
        if(Session::has('loginId')){
            return view('pages.admin');
        }else{
            return redirect('/');
        }
    }

    public function page404(){
        return redirect('/');
    }

    public function student_index(Request $request){

        $request->validate([
            'applicant_id'=> 'required',
            'password'=>'required|min:5|max:12'
        ]);
        $user = User::where('userid', '=', $request->applicant_id)->first();
        $password = User::where('password', '=', $request->password)->first();
        if($user && $password){
            $request->session()->put('loginId', $user->id);
            $record = Record::where('userid','=',Session::get('loginId'));
            if($record){
                return redirect('/')->with('msg', "You have already submitted your form.");
            }elseif(Session::has('loginId') && !$record){
                $data = User::find(Session::get('loginId'));
                return view('pages.student',compact('data'));
            }
        }else{
            return back()->with('fail', 'Wrong ID or Password!');
        };
    }

    public function submit(Request $request){
        // save user's inputs to the database
        $record = new Record();
        $record->userid = $request->userid;
        $record->lastname = $request->lastname;
        $record->firstname = $request->firstname;
        $record->middlename = $request->middlename;
        $record->suffix = $request->suffix;
        $record->birthdate = $request->birthdate;
        $record->birthplace = $request->birthplace;
        $record->gender = $request->gender;
        $record->age = $request->age;
        $record->citizenship = $request->citizenship;
        $record->unit = $request->unit;
        $record->barangay = $request->barangay;
        $record->city = $request->city;
        $record->province = $request->province;
        $record->zipcode = $request->zipcode;
        $record->email = $request->email;
        $record->cell = $request->cell;
        $record->telenum = $request->telenum;
        $record->last_attended = $request->last_attended;
        $record->school_addr = $request->school_addr;
        $record->track = $request->track;
        $record->year_grad = $request->year_grad;
        $record->campus = $request->campus;
        $record->dept = $request->dept;
        $record->choice = $request->choice;
        $res = $record->save();
        if($res){
            return "Information Submiited";
        }else{
            return "Error, something went wrong!";
        }
    }
}
