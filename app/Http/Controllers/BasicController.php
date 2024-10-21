<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Students;

class BasicController extends Controller
{
    public function registre()
    {
        return view('Registration');

    }
    public function upload(Request $request)
    {
        $request->validate([
            'name'=>'required',
           ' email'=>'required|email',
           'password'
        ]);
        $data = new students;

        $data->Student_name = $request->name;
        $data->name = $request->name;
        $data->class = $request->class;
        $data->section = $request->section;
        $data->roll = $request->roll;
        // $data->gender = $request->gender;
        // $data->photo = $request->photo;
        //$data->password = $request->password;
        // $data->confirmpassword = $request->cpassword;
        $data->town = $request->town;
        //  $data->city = $request->city;
        $data->zip = $request->zip;
        // $data->phone = $request->phone;
        $data->fathername = $request->fathername;
        $data->mothername = $request->mothername;
        $data->fatherphone = $request->fatherphone;
        $data->motherphone = $request->motherphone;
        $data->photo = $request->photo;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . rand() . $file->getClientOriginalExtension();
            $path = $file->storeAS('public/channel-upload', $filename);
            $imgname = $filename;
        }
        // $data->attribute = 
        $request->input('registration');
        $data->save();

        echo "<pre>";
        print_r($request->all());
        return "<script>alert('registration swucessfull') </script> ";


    }
    public function login()
    {
        return view('welcome');

    }


}
