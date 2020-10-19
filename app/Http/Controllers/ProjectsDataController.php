<?php

namespace App\Http\Controllers;

use App\ProjectData;
use Illuminate\Http\Request;
use App\Http\Requests\StoreProjectData;
use Illuminate\Support\Facades\DB;

class ProjectsDataController extends Controller
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
        $projectsData = ProjectData::paginate(8);
        return view('projectsData.index', compact('projectsData'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $area = [
            'Agroalimentario', 'Farmaceutico', 'Industrial', 'Esportador', 'Economia comunal', 'Hidrocarburos', 'Petroquimico', 'Minero', 'Turismo', 'Construccion', 'Forestal', 'Industrial militar', 'Telecomunicaciones e informatica', 'Banca y finanzas', 'Industrias basicas'
        ];

        $beneficiaries = DB::table('beneficiaries')->pluck('cedula', 'id');
        return view('projectsData.create', compact('area', 'beneficiaries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreProjectData|Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProjectData $request)
    {
        $validated = $request->validated();

        $projectData = new ProjectData;
        $projectData->tittle = $request->get('tittle');
        $projectData->sum = $request->get('sum');
        $projectData->objective = $request->get('objective');
        $projectData->addressLocation = $request->get('addressLocation');
        $projectData->area = $request->get('area');
        $projectData->justification = $request->get('justification');
        $projectData->countPoint = $request->get('countPoint');

        $projectData->save();

        return redirect()->route('projectsData.show',   ['projectData' =>  $projectData->id]); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $projectData = ProjectData::find($id);

        return view('projectsData.show', compact('projectData'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $projectData = ProjectData::where('id', $id)->first();
        return view('projectsData.edit', compact('projectData'));
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
