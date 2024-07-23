<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;

class FoodController extends Controller
{

    public function index()
    {
        $food=Food::all();
        return view('admin.storedfood',compact('food'));
    }


    public function create()
    {

    }


    public function Store(Request $request)
    {
        $stored = new Food;
        $stored->name = $request->name;
        $stored->price = $request->price;
        $stored->discription = $request->description;
        if($request->hasFile('image'))
        {
            $image=$request->file('image');
            $imagename=time().'.'.$image->getClientOriginalExtension();
            $image->move('foodimage',$imagename);
            $stored->pic=$imagename;
        }
        $stored->save();
    }


    public function show(string $id)
    {

    }


    public function edit(string $id)
    {
        $edit = Food::FindOrFail($id);
        return view('admin.edit',compact('edit'));
    }


    public function update(Request $request, string $id)
    {
        $edit =Food::FindOrFail($id);
        $edit->name = $request->name;
        $edit->price = $request->price;
        $edit->discription = $request->description;

        if($request->hasFile('image'))
        {
            $image=$request->file('image');
            $imagename=time().'.'.$image->getClientOriginalExtension();
            $image->move('foodimage',$imagename);
            $edit->pic=$imagename;
        }
        $edit->save();
    }


    public function destroy(string $id)
    {
        $stored = Food::find($id);
        $stored->delete();
        return back();
    }
}
