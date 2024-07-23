<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employ;

class EmployController extends Controller
{

    public function Parent()
    {
        return view('admin.child');
    }
    public function CreateFood()
    {
        return view('admin.create_food');
    }
    public function index()
    {
        $registered = Employ::all();
        return view('output',compact('registered'));
    }


    public function create()
    {
        return view('create');
    }


    public function store(Request $request)
    {

        $register = new Employ;
        $register->FirstName=$request->FirstName;
        $register->LastName=$request->LastName;
        $register->Email=$request->Email;
        $register->Contact=$request->Contact;
        $register->JobTitle=$request->JobTitle;
        $register->Address=$request->Address;
        $register->save();
        return redirect()->route('output');

    }


    public function edit(string $id)
    {
        $edit = Employ::FindOrFail($id);
        return view('edit',compact('edit'));

    }


    public function update(Request $request, string $id)
    {
        $edit = Employ::FindOrFail($id);
        $edit->FirstName=$request->FirstName;
        $edit->LastName=$request->LastName;
        $edit->Email=$request->Email;
        $edit->Contact=$request->Contact;
        $edit->JobTitle=$request->JobTitle;
        $edit->Address=$request->Address;
        $edit->save();
        return redirect()->route('output');
    }


    public function destroy(string $id)
    {
        $register= Employ::find($id);
        $register->delete();
        return back();
    }
}
