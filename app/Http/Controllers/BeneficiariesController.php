<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBeneficiary;
use App\Beneficiary;

class BeneficiariesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('beneficiaries.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('beneficiaries.create');
    }

    /**
     * Store a newly created resource in storage.
     * 
     * @param  StoreBeneficiary|Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBeneficiary $request)
    {
        $beneficiary = new Beneficiary;
        $beneficiary->name = $request->get('name');
        $beneficiary->lastName = $request->get('lastName');
        $beneficiary->gender = $request->get('gender');
        $beneficiary->dateBorn = $request->get('dateBorn');
        $beneficiary->email = $request->get('email');
        $beneficiary->homeAddress = $request->get('homeAddress');
        $beneficiary->cellPhone = $request->get('cellPhone');
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
