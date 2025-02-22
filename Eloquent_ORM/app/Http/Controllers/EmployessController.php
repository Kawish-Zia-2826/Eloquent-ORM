<?php

namespace App\Http\Controllers;

use App\Models\employess;
use Illuminate\Http\Request;

class EmployessController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $emplyess = employess::simplepaginate(4);
        return view('welcome',compact('emplyess'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
             employess::create([
            'name'=>$request->name,
            'email'=>$request->email,
            "age"=>$request->age,
            "city"=>$request->city
        ]);

        return redirect()->route('employess.index')->with('success','employess added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $employess)
    {
            $data = employess::find($employess);
        return view('viw',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $emp)
    {  
         $empp = employess::find($emp);
            // return $empp;
        return view('update',compact('empp'));
     
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,string $id)
    {
        $request->validate(
                [
                    'name'=>'required',
                    'email'=>'required',
                    'age'=>'required',
                    'city'=>'required'
                ]
                );
        // employess::find($id)->update([
        employess::where('id',$id)->update([
            'name'=>$request->name,
            'email'=>$request->email,
            "age"=>$request->age,
            "city"=>$request->city
        ]);

        return redirect()->route('employess.index')->with('update success','employess update successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(employess $employess)
    {
        $user = employess::find($employess->id);
        $user->delete();
        // employess::destroy($user);
        return redirect()->route('employess.index')->with('delete success','employess delete successfully');
        // employess::destroy($user);
    }
}
