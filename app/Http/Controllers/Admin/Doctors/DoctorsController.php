<?php

namespace App\Http\Controllers\Admin\Doctors;

use App\Http\Controllers\Controller;
use App\Models\Admin\Doctors\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class DoctorsController extends Controller
{
    //*(::ADD DOCTORS::)
    public function addDoctor() {
        
        return view('backend.Doctors.AddDoctors');
    }


    //*(::STORE DOCTORS::)
    public function storeDoctor(Request $request){
        $doctoreStore = new Doctor();
        $doctoreStore->d_name = $request->d_name;
        $doctoreStore->d_author = Auth::user()->name;
        $doctoreStore->d_name_slug = Str::slug($request->d_name). '-' .uniqid();
        $doctoreStore->d_qualifications = $request->d_qualifications;
        $doctoreStore->d_fee = $request->d_fee;
        $doctoreStore->d_checkup = $request->d_checkup;
        $doctoreStore->d_phone = $request->d_phone;
        $doctoreStore->save();
        return redirect()->route('admin.doctor.list');
    }

    //*((::-DOCTOR'S LIST-::))
    public function doctorsList(){
        $allDoctorsList = Doctor::with('patient')->latest()->get();
        // dd($allDoctorsList);
        return view('backend.Doctors.DoctorsList', compact('allDoctorsList'));
    }


    //*(::-DOCTOR'S EDIT-::)
    public function doctorsEdit($id){
      $editDoctor = Doctor::where('d_name_slug',$id)->first();
    //   dd($editDoctor);
      return view('backend.Doctors.EditDoctor',compact('editDoctor'));
    }


    //*(::-DOCTOR UPDATE-::)
    public function doctorsUpdate(Request $request, $id){
        $updateDoctor = Doctor::find($id);
        $updateDoctor->d_name = $request->d_name;
        $updateDoctor->d_author = Auth::user()->name;
        $updateDoctor->d_qualifications = $request->d_qualifications;
        $updateDoctor->d_fee = $request->d_fee;
        $updateDoctor->d_checkup = $request->d_checkup;
        $updateDoctor->d_phone = $request->d_phone;
        $updateDoctor->save();
        return redirect()->route('admin.doctor.list');
    }


    //*(::-DELETE-DOCTOR-::)
    public function doctorsDelete($id){
        Doctor::find($id)->delete();
        return back();
    }
}
