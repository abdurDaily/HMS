@extends('backend.layout.layout')
@section('backend-contains')
<div class="card-style settings-card-2  p-lg-5">
    <div class="card-header bg-light p-4">
        <h4 class="text-dark">Admit Patient</h4>
    </div>
    <div class="card-body">
        <div class="row">

            <form action="{{ route('admin.admit.patient.store') }}" method="post" enctype="multipart/form-data">
                @csrf

                    <div class="col-12">
                        <div class="input-style-1">
                            <label>Patient Name</label>
                            <input type="text" name="p_name"  placeholder="Full Name">
                        </div>
                    </div>

                    
                    <div class="col-12">
                        <div class="input-style-1">
                            <label for="p_age">Patient Age</label>
                            <input type="number" name="p_age" id="p_age"  placeholder="Patient Age">
                        </div>
                    </div>

                    
                    <div class="col-12">
                        <div class="input-style-1">
                            <label>Phone Number</label>
                            <input  name="p_number" type="number" placeholder="01777797143">
                        </div>
                    </div>
                    

                    <div class="col-12">
                        <div class="input-style-1">
                            <label for="p_payment">Payment</label>
                            <input id="p_payment"  name="p_payment" type="number" placeholder="500 /-">
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="input-style-1">
                            <label for="p_discount">Discount</label>
                            <input id="p_discount"  name="p_discount" type="number" placeholder="100 /-">
                        </div>
                    </div>


                    <div class="col-12">
                        <div class="input-style-1">
                            <label>Address</label>
                            <input type="text" name="p_address" placeholder="Address..">
                        </div>
                    </div>


                    <div class="col-12">
                        <div class="input-style-1">
                            <label>Doctor's select</label>
                            <select name="p_doctor" id="" class="form-control py-3">
                                <option value="" selected disabled>Select a doctor</option>
                                @foreach ($doctors as $doctor)
                                  <option value="{{ $doctor->id }}">{{ $doctor->d_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    

                    <div class="col-12">
                        <div class="input-style-1">
                            <label>Problems</label>
                            <textarea name="p_problems" placeholder="problem details" rows="6"></textarea>
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