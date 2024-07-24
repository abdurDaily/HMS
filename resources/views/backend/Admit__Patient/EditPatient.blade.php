@extends('backend.layout.layout')
@section('backend-contains')
<div class="card p-lg-5">
    <div class="card-header bg-light p-3">
        <h4 class="text-dark">Edit Patient Data</h4>
    </div>
    <div class="card-body">
        <div class="row">

            <form action="{{ route('admin.admit.patient.update', $editPatientData->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')

                    <div class="col-12">
                        <div class="input-style-1">
                            <label>Patient Name</label>
                            <input type="text" name="p_name" value="{{ $editPatientData->patient_name }}"  placeholder="Full Name">
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="input-style-1">
                            <label for="p_age">Patient Age</label>
                            <input value="{{ $editPatientData->p_age }}" type="number" name="p_age" id="p_age"  placeholder="Patient Age">
                        </div>
                    </div>
                    
                    <div class="col-12">
                        <div class="input-style-1">
                            <label>Phone Number</label>
                            <input value="{{ $editPatientData->patient_number }}"   name="p_number" type="number" placeholder="01777797143">
                        </div>
                    </div>

                   

                    <div class="col-12">
                        <div class="input-style-1">
                            <label for="p_payment">Payment</label>
                            <input value="{{ $editPatientData->p_payment }}"  id="p_payment"  name="p_payment" type="number" placeholder="500 /-">
                        </div>
                    </div>
                   

                    <div class="col-12">
                        <div class="input-style-1">
                            <label for="p_due_payment">Payment</label>
                            <input  id="p_due_payment"  name="p_due_payment" type="number" placeholder="500 /- (Due playment)">
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="input-style-1">
                            <label for="p_discount">Discount</label>
                            <input value="{{ $editPatientData->p_discount }}" id="p_discount"  name="p_discount" type="number" placeholder="100 /-">
                        </div>
                    </div>


                    <div class="col-12">
                        <div class="input-style-1">
                            <label>Address</label>
                            <input type="text" value="{{ $editPatientData->patient_address }}"  name="p_address" placeholder="Address..">
                        </div>
                    </div>


                    <div class="col-12">
                        <div class="input-style-1">
                            <label>Doctor's select</label>
                            <select name="p_doctor" id="" class="form-control py-3">
                                @foreach ($doctors as $doctor)
                                  <option  {{ $doctor->id === $editPatientData->doctor_id ? 'selected' : ''  }} value="{{ $doctor->id }}" class="py-3 form-control">{{ $doctor->d_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    

                    <div class="col-12">
                        <div class="input-style-1">
                            <label>Problems</label>
                            <textarea name="p_problems" placeholder="problem details" rows="6">{{ $editPatientData->patient_problems }}</textarea>
                        </div>
                    </div>


                    <div class="col-12">
                        <button type="submit" class="main-btn primary-btn btn-hover">
                            Update Profile
                        </button>
                    </div>
            </form>

        </div>
    </div>
</div>
    
@endsection