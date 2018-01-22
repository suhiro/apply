<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Applicant;
use App\Pastwork;
use App\Position;
use App\School;

class ApplicantController extends Controller
{
    

    public function index()
    {
        return view('apply.form');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function confirm(Request $data)
    {
        
        return view('apply.confirm')->withData($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $applicantData)
    {
       

        $applicant = Applicant::create([
            'cName' => $applicantData->cName,
            'firstName' => $applicantData->firstName,
            'lastName' => $applicantData->lastName,
            'gender' => $applicantData->gender,
            'chinese' => $applicantData->chinese=='on'?1:0,
            'cantonese' => $applicantData->cantonese=='on'?1:0,
            'english' => $applicantData->english=='on'?1:0,
            'french' => $applicantData->french=='on'?1:0,
            'address' => $applicantData->address,
            'city' => $applicantData->city,
            'province' => $applicantData->province,
            'postalCode' => $applicantData->postal,
            'email' => $applicantData->email,
            'phone' => $applicantData->phone,
            'dob' => $applicantData->dob,
            'status' => $applicantData->status,
            'expiry' => $applicantData->expiry,
            'hometown' => $applicantData->pob,
            'canada_entry' => $applicantData->arrival,
            'emergency_person' => $applicantData->emergency_person,
            'emergency_phone' => $applicantData->emergency_phone,
            'emergency_relation' => $applicantData->emergency_relation,
        ]);
        $school = School::create([
            'applicant_id' => $applicant->id,
            'education' => $applicantData->education,
            'enrolled' => $applicantData->enrolled=='on'?1:0,
            'major' => $applicantData->major,
            'school' => $applicantData->school,
            'interest' => $applicantData->interest
        ]);
        if(!$school){
            return 'Error on saving education';
        }
        $pastwork = Pastwork::create([
            'applicant_id' => $applicant->id,
            'company' => $applicantData->orgName,
            'phone' => $applicantData->contact,
            'position' => $applicantData->title,
            'supervisor' => $applicantData->supervisor,
            'verify' => $applicantData->verify=='on'?1:0,
            'noVerifyReason' => $applicantData->noVerifyReason,
            'address' => $applicantData->orgAddress,
            'city' => $applicantData->orgCity,
            'quitReason' => $applicantData->reason,
        ]);
        if(!$pastwork){
            return 'Error on saving work history';
        }
        return view('apply.success')->withApplicant($applicant)->withCompany('Magic Noodle Inc');
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
