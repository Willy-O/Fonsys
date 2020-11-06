<?php

namespace App\Http\Controllers;

use App\ProjectData;
use Illuminate\Http\Request;
use App\Http\Requests\StoreProjectData;
use Illuminate\Support\Facades\DB;

class ProjectsDataController extends Controller
{

    protected $area = [
        'Agroalimentario', 'Farmaceutico', 'Industrial', 'Esportador', 'Economia comunal', 'Hidrocarburos', 'Petroquimico', 'Minero', 'Turismo', 'Construccion', 'Forestal', 'Industrial militar', 'Telecomunicaciones e informatica', 'Banca y finanzas', 'Industrias basicas'
    ];

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

        $area = $this->area;
        $projectData = new ProjectData;

        $beneficiaries = DB::table('beneficiaries')->pluck('cedula', 'id');
        return view('projectsData.create', compact('area', 'beneficiaries', 'projectData'));
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
        $projectData->beneficiary_id = $request->get('beneficiary_id');
        $projectData->status = 'activo';

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

        $area = $this->area;

        $projectData = ProjectData::find($id);
        $beneficiaries = DB::table('beneficiaries')->pluck('cedula', 'id');

        return view('projectsData.show', compact('projectData', 'area', 'beneficiaries'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $area = $this->area;

        $projectData = ProjectData::where('id', $id)->first();
        $beneficiaries = DB::table('beneficiaries')->pluck('cedula', 'id');

        return view('projectsData.edit', compact('projectData', 'area', 'beneficiaries'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProjectData $projectData , StoreProjectData $request)
    {
        $area = $this->area;

        $projectData->update($request->validated());
        $beneficiaries = DB::table('beneficiaries')->pluck('cedula', 'id');
        
        return view('projectsData.show', compact('projectData', 'area', 'beneficiaries'));
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
