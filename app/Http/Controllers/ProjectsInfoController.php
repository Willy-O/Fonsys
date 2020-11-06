<?php

namespace App\Http\Controllers;

use App\ProjectData;
use App\ProjectInfo;
use Illuminate\Http\Request;
use App\Http\Requests\StoreProjectInfo;

class ProjectsInfoController extends Controller
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
        $projectsInfo = ProjectInfo::paginate(4);
        return view('projectsInfo.index', compact('projectsInfo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $projectInfo = new ProjectInfo;
        $project_title = ProjectData::pluck('tittle', 'id');
        
        return view('projectsInfo.create', compact('projectInfo','project_title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreProjectInfo|Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProjectInfo $request)
    {
        $validated = $request->validated();

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
        $projectInfo->project_data_id = $request->get('project_title');

        $projectInfo->save();

        return redirect()->route('projectsInfo.show',   ['projectInfo' => $projectInfo->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $projectInfo = ProjectInfo::find($id);
        $project_title = ProjectData::find($projectInfo->project_data_id)->pluck('tittle', 'id');

        return view('projectsInfo.show', compact('projectInfo', 'project_title'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $projectInfo = ProjectInfo::where('id', $id)->first();
        $project_title = ProjectData::where('id', $projectInfo->project_data_id)->get('tittle');

        return view('projectsInfo.edit', compact('projectInfo', 'project_title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProjectInfo $projectInfo, StoreProjectInfo $request)
    {
        $projectInfo->update($request->validated());
        $project_title = ProjectData::find($projectInfo->project_data_id)->pluck('tittle', 'id');
        
        return view('projectsInfo.show', compact('projectInfo', 'project_title'));
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
