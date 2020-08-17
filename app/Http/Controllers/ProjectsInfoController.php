<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StoreProjectData;
use App\ProjectInfo;

class ProjectsInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('projectsInfo.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('projectsInfo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreProjectInfo|Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $projectInfo = new ProjectInfo;

        $projectInfo->summary = $request->get('summary');
        $projectInfo->time = $request->get('time');
        $projectInfo->problem = $request->get('problem');
        $projectInfo->precedent = $request->get('precedent');
        $projectInfo->justification = $request->get('justification');
        $projectInfo->generalObjective = $request->get('generalObjective');
        $projectInfo->specificObjective = $request->get('specificObjective');
        $projectInfo->hopedResults = $request->get('hopedResults');
        $projectInfo->hopedEfects = $request->get('hopedEfects');

        $projectInfo->save();

        return $projectInfo->id;
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
