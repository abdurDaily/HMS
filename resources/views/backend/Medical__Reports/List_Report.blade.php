@extends('backend.layout.layout')
@section('backend-contains')
    <section>
        <div class="container p-0">
            <div class="card-style settings-card-2 mb-10">
                <div class="header p-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4>Report's List</h4>
                   
                        <div class="btn-group">
                            <form action="" method="post">
                                @csrf
                                <div class="input-style-1 btn-group">
                                    <input id="patient_name" type="text" name="patient_name" placeholder="Patient Name">
                                    <button style="border: none; padding:0 25px; background:rgba(56, 56, 127, 0.63); color:#FFF;">Search</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 table-responsive">
                        <table class="table table-hover table-striped">
                           <tr style="text-align: center;">
                             <th style=" border:1px solid #ccc;">Sn.</th>
                             <th style=" border:1px solid #ccc;">Patient Name</th>
                             <th style=" border:1px solid #ccc;">Patient Number</th>
                             <th style=" border:1px solid #ccc;">Pay Bill</th>
                             <th style=" border:1px solid #ccc;">Discount</th>
                             <th style=" border:1px solid #ccc;">Doctor Name</th>
                             <th style=" border:1px solid #ccc;">Qualification's</th>
                             <th style=" border:1px solid #ccc;">Status</th>
                           </tr>


                           @forelse ($patientReport as $report)
                               <tr style="text-align: center;">
                                 <td style="border:1px solid #ccc;">{{ $report->id }}</td>
                                 <td style="border:1px solid #ccc;">{{ $report->patinet_name }}</td>
                                 <td style="border:1px solid #ccc;">{{ $report->patinet_number }}</td>
                                 <td style="border:1px solid #ccc;">{{ $report->patinet_pay_bill }}</td>
                                 <td style="border:1px solid #ccc;">{{ $report->patinet_discount }}</td>
                                 <td style="border:1px solid #ccc;">{{ $report->doctor_name }}</td>
                                 <td style="border:1px solid #ccc;">{{ $report->doctor_qualifications }}</td>
                                 <td style="border:1px solid #ccc;">
                                    <div class="btn-group">
                                        <a href="#" class="btn btn-primary">Edit</a>
                                        <a href="#" class="btn btn-danger">Delete</a>
                                        <a href="{{ route('patient.report.pdf',$report->id) }}" class="btn btn-warning">PDF</a>
                                    </div>
                                 </td>
                               </tr>
                           @empty
                               <tr>
                                <td><h4>No Data Found..!</h4></td>
                               </tr>
                           @endforelse
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection