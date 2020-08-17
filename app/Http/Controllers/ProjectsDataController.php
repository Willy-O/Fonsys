<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProjectData;
use App\StoreProjectData;

class ProjectsDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('projectsData.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('projectsData.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreProjectData|Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $projectData = new ProjectData;
        $projectData->tittle = $request->get('tittle');
        $projectData->sum = $request->get('sum');
        $projectData->objective = $request->get('objective');
        $projectData->addressLocation = $request->get('addressLocation');
        $projectData->area = $request->get('area');
        $projectData->justification = $request->get('justification');
        $projectData->countPoint = $request->get('countPoint');

        $projectData->save();

        return $projectData->id;    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
