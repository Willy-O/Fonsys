<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBeneficiary;
use App\Beneficiary;

class BeneficiariesController extends Controller
{

    protected $codeHomePhone = [
        248, 281, 282, 283, 292, 244, 273, 278, 284, 285, 286, 288, 289, 241, 242, 243, 245, 249, 258, 287, 212, 259, 268, 269, 279, 235, 238, 246, 247, 251, 252, 253, 271, 274, 275, 234, 239, 291, 295, 255, 256, 257, 272, 293, 294, 276, 277, 254, 261, 262, 263, 264, 265, 266, 267,
    ];

    protected $codeCellPhone = [
        414, 424, 412, 426, 416
    ];

    
    protected $education = [
        'Primaria', 'Bachiller', 'Universitaria', 'Postgrado'
    ];

    
    protected $ethnicGroup = [

    ];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $beneficiaries = Beneficiary::paginate(8);

        return view('beneficiaries.index', compact('beneficiaries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $codeHomePhone = $this->codeHomePhone;

        $codeCellPhone = $this->codeCellPhone;

        $education = $this->education;

        $ethnicGroup = $this->ethnicGroup;

        return view('beneficiaries.create', compact('codeHomePhone', 'codeCellPhone', 'education', 'ethnicGroup'));
    }

    /**
     * Store a newly created resource in storage.
     * 
     * @param  StoreBeneficiary|Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBeneficiary $request)
    {
        // dd($request);
        $beneficiary = new Beneficiary;
        $validated = $request->validated();
        // $beneficiary = $request->all();
        $beneficiary->name = $request->get('name');
        $beneficiary->lastName = $request->get('lastName');
        $beneficiary->gender = $request->get('gender');
        $beneficiary->dateBorn = $request->get('dateBorn');
        $beneficiary->email = $request->get('email');
        $beneficiary->homeAddress = $request->get('homeAddress');
        $beneficiary->codeCellPhone = $request->get('codeCellPhone');
        $beneficiary->cellPhone = $request->get('cellPhone');
        $beneficiary->codeHomePhone = $request->get('codeHomePhone');
        $beneficiary->homePhone = $request->get('homePhone');
        $beneficiary->education = $request->get('education');
        $beneficiary->ethnicGroup = $request->get('ethnicGroup');
        $beneficiary->workAddress = $request->get('workAddress');
        $beneficiary->publicWorker = $request->get('publicWorker');
        $beneficiary->workInstitute = $request->get('workInstitute');
        $beneficiary->conmunity = $request->get('conmunity');
        $beneficiary->finance = $request->get('finance');
        $beneficiary->cedula = $request->get('cedula');
        $beneficiary->financeType = $request->get('financeType');
        $beneficiary->save();

        return redirect()->route('beneficiaries.show',   ['beneficiary' => $beneficiary->id]);

        // return $beneficiary->id;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $beneficiary = Beneficiary::find($id);

        return view('beneficiaries.show', compact('beneficiary'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $codeHomePhone = $this->codeHomePhone;

        $codeCellPhone = $this->codeCellPhone;

        $education = $this->education;

        $ethnicGroup = $this->ethnicGroup;

        $beneficiary = Beneficiary::where('id', $id)->first();
        return view('beneficiaries.edit', compact('beneficiary', 'codeHomePhone', 'codeCellPhone', 'education', 'ethnicGroup'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  StoreBeneficiary|Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreBeneficiary $request, $id)
    {
        $beneficiary=request()->except('_token');
        $validated = $request->validated();
        $beneficiary = Beneficiary::where('id', $id)->first();
        // $beneficiary = $request->all();
        $beneficiary->name = $request->get('name');
        $beneficiary->lastName = $request->get('lastName');
        $beneficiary->gender = $request->get('gender');
        $beneficiary->dateBorn = $request->get('dateBorn');
        $beneficiary->email = $request->get('email');
        $beneficiary->homeAddress = $request->get('homeAddress');
        $beneficiary->codeCellPhone = $request->get('codeCellPhone');
        $beneficiary->cellPhone = $request->get('cellPhone');
        $beneficiary->codeHomePhone = $request->get('codeHomePhone');
        $beneficiary->homePhone = $request->get('homePhone');
        $beneficiary->education = $request->get('education');
        $beneficiary->ethnicGroup = $request->get('ethnicGroup');
        $beneficiary->workAddress = $request->get('workAddress');
        $beneficiary->publicWorker = $request->get('publicWorker');
        $beneficiary->workInstitute = $request->get('workInstitute');
        $beneficiary->conmunity = $request->get('conmunity');
        $beneficiary->finance = $request->get('finance');
        $beneficiary->cedula = $request->get('cedula');
        $beneficiary->financeType = $request->get('financeType');
        $beneficiary->update();

        return view('beneficiaries.show', compact('beneficiary'));
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
