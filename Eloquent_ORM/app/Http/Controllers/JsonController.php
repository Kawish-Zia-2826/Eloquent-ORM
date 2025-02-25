<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Json;

class JsonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $test = Json::whereJsonLength('meta_data->name',1)->get();
        return $test;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $test = new Json;
        // $test->meta_data = [
        //     "name"=>"kawish zia",
        //     "class"=>"12th",
        //     "age"=>21
        // ];
        // $test->save();

        // $josn = Json::create([
        //     'meta_data'=>[
        //     'name'=>'kawish zia',
        //     'class'=>'12th',
        //     'age'=>21
        //     ]
        // ]);

        // $json  = Json::where('id',2)->update([
        //     'meta_data->name'=>'jawad zia'
        // ]);
        // $josn  = Json::find('1');
        // $josn->meta_data['name'] = 'jhon ibrahm';
        // $josn->save();

        $josn  = Json::find('2');
        $josn->meta_data = collect($josn->meta_data)->forget('class');
        $josn->save();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
