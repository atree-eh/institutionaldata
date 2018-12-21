<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ins_data;
class InstitutionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_data = Ins_data::all();
        //return $all_data;
        return view('index')->with('all_data', $all_data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Ins_data;
        $data->Name_of_Institution = $request->Name_of_Institution;
        $data->Location = $request->Location;
        $data->Legal_Status = $request->Legal_Status;
        $data->Type = $request->Type;
        $data->Key_areas_of_work = $request->Key_areas_of_work;
        $data->Key_persons_name = $request->Key_persons_name;
        $data->Contact = $request->Contact;
        $data->Region = $request->Region;
        $data->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //return data from database using id
        //$all_data = Ins_data::all();
        // SELECT * from ins_data where id = $id;
        $data = Ins_data::find($id);
        return view('viewdata')->with('data', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Ins_data::find($id);
        //return $data;
        return view('editdata')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Ins_data::find($id);
        $data->delete();
        return redirect('/');
    }
    public function update(Request $request)
    {
        $id = $request->id;
        $data = Ins_data::find($id);
        //return $request;
        $data->Name_of_Institution = $request->Name_of_Institution;
        $data->Location = $request->Location;
        $data->Legal_Status = $request->Location;
        $data->Type = $request->Type;
        $data->Key_areas_of_work = $request->Key_areas_of_work;
        $data->Key_persons_name = $request->Key_persons_name;
        $data->Contact = $request->Contact;
        $data->Region = $request->Region;
        //return $data;
        $data->save();
        return redirect('/');
        /*$all_data = Ins_data::all();
        return view('index')->with('all_data', $all_data);*/
        
        /*$name_of_ins = $request->Name_of_Institution;
        $location = $request->Location;
        $legal = $request->Legal_Status;
        $type = $request->Type;
        $key_areas = $request->Key_areas_of_work;
        $key_person = $request->Key_persons_name;
        $contact = $request->Contact;
        $region = $request->Region;*/



        //return Input::all();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

}
