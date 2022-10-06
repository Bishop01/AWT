<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function login(){
        return view('login');
    }

    public function loginValidate(Request $request){
        $id = $request->id;
        $password = $request->password;

        $student = Student::where('id', '=', $id)->where('password', '=', $password)->first();
        if (!$student) {
            return back()
            ->withErrors(['Incorrect Id or Password']);
        }

        return redirect('/contact');
    }

    public function register(){
        return view('registration');
    }

    public function registerValidate(Request $request)
    {
        $validated = $request->validate([
            'id' => 'required|max:255',
            'uname' => 'required|max:255',
            'password' => 'required_with:cpassword|same:cpassword|max:255',
            'cpassword' => 'required|max:255',
            'email' => 'required|max:255',
            'gender' => 'required|max:255',
            'dob' => 'required|max:255',
            'contact' => 'required'
        ]);

        $student = new Student();
        $student->id = $request->id;
        $student->uname = $request->uname;
        $student->password = $request->password;
        $student->email = $request->email;
        $student->gender = $request->gender;
        $student->dob = $request->dob;
        $student->contact = $request->contact;

        $student->save();

        return redirect('/login');
    }

    public function contact(){
        return view('contact');
    }

    public function contactValidate(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|max:255|email',
            'subject' => 'required|max:255',
            'body' => 'required|max:255',
        ]);

        return redirect('/contact');
    }
}

