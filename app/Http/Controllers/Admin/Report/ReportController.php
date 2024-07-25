<?php

namespace App\Http\Controllers\Admin\Report;

use App\Http\Controllers\Controller;
use App\Models\Admin\Report\PatientReport;
use App\Models\Admin\Report\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    //*(:: REPORT INDEX ::)
    public function reportIndex($id = null){
        $allTest = Report::latest()->get();
        $editData = Report::find($id);
        return view('backend.Medical__Reports.add',compact('allTest','editData'));
    }


    //* (::-REPORT-STORE-::)
    public function reportStore(Request $request){
      $storeTest = new Report();
      $storeTest->report_name = $request->report_name;
      $storeTest->report_price = $request->report_price;
      $storeTest->save();
      return back();
    }

    //* ((::-EDIT-REPORT-::))
    public function reportEdit($id){
      $editData = Report::find($id);
      $allTest = Report::latest()->get();
      return view('backend.Medical__Reports.add',compact('editData','allTest'));
    }

    //*[::-UPDATE-REPORT-::]
    public function reportUpdate(Request $request,$id){
        $updateTests = Report::find($id);
        $updateTests->report_name = $request->report_name;
        $updateTests->report_price = $request->report_price;
        $updateTests->save();
        return back();
    }
    
    
    //* (::-DELETE-REPORT-::) 
    public function reportDelete($id){
        Report::find($id)->delete();
        return back();
    }


    //*((::-CREATE-PATIENT-REPORT-::))
    public function reportCreate(){
        $allReport = Report::get();
        // dd($allReport);
        return view('backend.Medical__Reports.CreateReports',compact('allReport'));
    }


    //*((:: -REPORT-UPDATE- ::))
    public function patientReportUpdate(Request $request){
        // dd(($request->all()));
        $patientReports = new PatientReport();
        $patientReports->patinet_name= $request->patient_name;
        $patientReports->patinet_number= $request->patient_number;
        $patientReports->patinet_pay_bill= $request->pay_bill;
        $patientReports->patinet_discount= $request->discount;
        $patientReports->doctor_name= $request->doctor_name;
        $patientReports->doctor_qualifications= $request->doctor_qualifications;
        $patientReports->reports= json_encode($request->report);
        $patientReports->report_discount= json_encode($request->report_discount);
        $patientReports->save();

    }


    //*(::--PATIENT-REPORT-LIST-:::)
    public function patientReportList(){
        $patientReport = PatientReport::get();
        return view('backend.Medical__Reports.List_Report',compact('patientReport'));
    }


    //*(::--PATIENT-REPORT-PDF--::)
    public function patientReportPdf($id){
        $patientReport = PatientReport::find($id);
        $reports = Report::whereIn('id',json_decode($patientReport->reports))->get();
        $discount = collect(json_decode($patientReport->report_discount))->toArray();
        // $test = PatientReport::whereIn('reports',json_decode($patientReport->report_discount))->get();
        // dd($discount);
        return view('backend.Medical__Reports.Report_Pdf',compact('reports','patientReport','discount'));
    }
}
