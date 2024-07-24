@extends('backend.layout.layout')
@section('backend-contains')
    
 <section>
    <div class="container p-0">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">


                    <div class="row p-5">


                        <form action="{{ route('patient.report.update') }}" method="post">
                            @csrf
                            @method('put')

                                <div class="col-lg-12 card-style settings-card-2 mb-10">
                                    <div class="row">
                                        <div class="col-lg-12 mb-4">
                                            
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="input-style-1">
                                                        <label for="patient_name">Full Name</label>
                                                        <input id="patient_name" type="text" name="patient_name"  placeholder="Patient Name">
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="input-style-1">
                                                        <label for="patient_number">Patient Phone Number</label>
                                                        <input type="number" name="patient_number" id="patient_number"  placeholder="Phone Number">
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="input-style-1">
                                                        <label for="pay_bill">Pay Bill</label>
                                                        <input id="pay_bill" type="number" name="pay_bill"  placeholder="Pay Bill Amount 500/-">
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="input-style-1">
                                                        <label for="discount">Discount</label>
                                                        <input id="discount" type="number" name="discount"  placeholder="Discount 500/-">
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="input-style-1">
                                                        <label for="doctor_name">Doctor's Name</label>
                                                        <input id="doctor_name" type="text" name="doctor_name"  placeholder="Dr. Abdur Rahman">
                                                    </div>
                                                </div>


                                                <div class="col-lg-6">
                                                    <div class="input-style-1">
                                                        <label for="doctor_qualifications">Doctor's Qualification's</label>
                                                        <input id="doctor_qualifications" type="text" name="doctor_qualifications"  placeholder="MBBS,FCPS,MD">
                                                    </div>
                                                </div>



                                            </div>



                                        </div>
                                        
                                        
                                        
                                    </div>
                                </div>

                                

                                <div class="row">
                                    @forelse ($allReport as $report)
                                    <div class="col-lg-4 mb-4">
                                        <div class="card-style settings-card-2  text-center">
                                            <label for="report_{{  $report->id }}">
                                                {{ $report->report_name }} ( <b>{{ $report->report_price }} /-</b> )
                                                <input type="checkbox" value="{{  $report->id }}" name="report[]" id="report_{{  $report->id }}">
                                                <input name="report_discount[]" type="number" placeholder="Discount (00%)" class="form-control text-center mt-3">
                                            </label>
                                        </div>
                                    </div>
                                    @empty
                                    <h4>No Report Data Found..!</h4>
                                    @endforelse
                                </div>
                                

                                <button type="submit" class="main-btn primary-btn btn-hover W-100">
                                    Submit
                                </button>
                                

                         </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
 </section>
@endsection