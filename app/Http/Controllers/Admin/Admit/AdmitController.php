<?php

namespace App\Http\Controllers\Admin\Admit;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\Doctors\Doctor;
use App\Models\Admin\Admit\AdmitPatient;

class AdmitController extends Controller
{
    public function admitIndex(){
        $allOptionOfDoctors = AdmitPatient::get();
        $doctors = Doctor::select('id','d_name')->get();
        return view('backend.Admit__Patient.Admit',compact('doctors'));
    }

    // * ::: ADMIT PASTENT DATA ::: 
    public function storePatient(Request $request){
        $patientData = new AdmitPatient();
        $patientData->patient_name = $request->p_name;
        $patientData->patient_number = $request->p_number;
        $patientData->p_payment = $request->p_payment;
        $patientData->p_discount = $request->p_discount;
        $patientData->p_age = $request->p_age;
        $patientData->patient_address = $request->p_address;
        $patientData->doctor_id= $request->p_doctor;
        $patientData->patient_problems = $request->p_problems;
        $patientData->save();
        $test = 'patient data inserted.';
        return redirect()->route('admin.admit.patient.list')->with($_SESSION['test'] = $test);
    }


    //*(:: ADMITED PATIENT LIST::)
    public function storePatientList(){
       $listAdmitPatient = AdmitPatient::with('doctors')->
                            latest()->get();
       return view('backend.Admit__Patient.ListPatient', compact('listAdmitPatient'));
    }


    //* (:: DELETE ::)
    public function PatientDelete($id){
        AdmitPatient::find($id)->delete();
        return back();
    }


    //* (:: EDIT PATIENT ::) 
    public function PatientEdit(Request $request){
        $editPatientData = AdmitPatient::where('patient_number', $request->patient_number)->first();
        $doctors = Doctor::select('id','d_name')->get();
        // dd($doctors);
        return view('backend.Admit__Patient.EditPatient', compact('editPatientData','doctors'));
    }


    // *((:: UPDATE ::))
    public function PatientUpdate(Request $request,$id) {
        $updatePatientData = AdmitPatient::find($id);
        $updatePatientData->patient_name = $request->p_name;
        $updatePatientData->p_payment = $request->p_payment;
        $updatePatientData->p_due_payment = $request->p_due_payment;
        $updatePatientData->p_discount = $request->p_discount;
        $updatePatientData->p_age = $request->p_age;
        $updatePatientData->patient_number = $request->p_number;
        $updatePatientData->patient_address = $request->p_address;
        $updatePatientData->doctor_id= $request->p_doctor;
        $updatePatientData->patient_problems = $request->p_problems;
        $updatePatientData->save();
        return redirect()->route('admin.admit.patient.list');
    }


    //*((:: PATIENT PDF VIEW ::))
    public function patientPdf($id){
        $patientPdf = AdmitPatient::with('doctors')->find($id);
        // dd($patientPdf);     
        return view('backend.Admit__Patient.PatientPdf', compact('patientPdf'));
    }



    //*((::--PATIENT SEARCH-::))
    public function patientSearch(Request $request){
      $listAdmitPatient = AdmitPatient::orWhere('patient_number','LIKE', '%'.$request->patient_search.'%' )->get();
      return view('backend.Admit__Patient.searchResult',compact('listAdmitPatient'));
    }
}
