<?php

namespace App\Http\Controllers;

use App\Clousure;
use App\ProjectData;
use Illuminate\Http\Request;
use App\Http\Requests\StoreClousure;

class ClousuresController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clousures = Clousure::paginate(4);

        return view('clousures.index', compact('clousures'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $project_title = ProjectData::pluck('tittle', 'id');
        $clousure = new Clousure;

        return view('clousures.create', compact('clousure', 'project_title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreClousure|Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreClousure $request)
    {
        $clousure = new Clousure;
        
        $validated = $request->validated();
        
        $clousure->project_data_id = $request->get('project_title');
        $clousure->results = $request->get('results');
        $clousure->efects = $request->get('efects');

        $clousure->save();

        return redirect()->route('clousures.show', compact('clousure'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $clousure = Clousure::find($id);
        $project_title = ProjectData::find($clousure->project_data_id)->pluck('tittle', 'id');
        
        return view('clousures.show', compact('clousure', 'project_title'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $clousure = Clousure::where('id', $id)->first();
        $project_title = ProjectData::where('id', $clousure->project_data_id)->get('tittle');
        
        return view('clousures.edit', compact('clousure', 'project_title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Clousure $clousure, StoreClousure $request)
    {   
        $clousure->update($request->validated());
        $project_title = ProjectData::find(request('project_title'))->value('tittle');

        return view('clousures.show', compact('clousure', 'project_title'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
