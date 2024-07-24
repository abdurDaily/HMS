@extends('backend.layout.layout')
@section('backend-contains')
   
 <section>
    <div class="container p-0">
        <div class="card shadow-sm">
            <div class="card-header p-3 bg-primary  d-flex justify-content-between">
                <div class="row w-100 align-items-center">
                 
                    <div class="col-xl-6">
                        <h4 class="text-light">List of All Register Patient's</h4>
                    </div>
                    <div class="col-xl-6 d-flex justify-content-end">
                        <form action="{{ route('admin.patient.search') }}" method="get">
                            @csrf
                            <div class="btn-group">
                            <input type="search" name="patient_search" placeholder="Enter phone number.." class="form-control" style="border-radius: 0">
                                <button class="btn btn-light" type="submit">Search</button>
                            </div>
                        </form>
                    </div>
                </div>
                
            </div>

            <div class="card-body ">
               <div class="table-responsive">
                <table class="table table-striped table-hover ">
                    <tr>
                        <th style="border: 1px solid #ccc; text-align:center;">Sn.</th>
                        <th style="border: 1px solid #ccc; text-align:center;">Patient Name</th>
                        <th style="border: 1px solid #ccc; text-align:center;">Phone No</th>
                        <th style="border: 1px solid #ccc; text-align:center;">Age</th>
                        <th style="border: 1px solid #ccc; text-align:center;">Payment</th>
                        <th style="border: 1px solid #ccc; text-align:center;">Discount</th>
                        <th style="border: 1px solid #ccc; text-align:center;">Address</th>
                        <th style="border: 1px solid #ccc; text-align:center;">Doctor Name</th>
                        <th style="border: 1px solid #ccc; text-align:center;">Problems</th>
                        <th style="border: 1px solid #ccc; text-align:center;">Time</th>
                        <th style="border: 1px solid #ccc; text-align:center;">Status</th>
                    </tr>
                    

                    @forelse ($listAdmitPatient as $key => $data)
                    <tr>
                        <td style="border: 1px solid #ccc;" class="text-center">{{ ++$key }}</td>
                        <td style="border: 1px solid #ccc;">{{ $data->patient_name }}</td>
                        <td style="border: 1px solid #ccc; text-align:center;">{{ $data->patient_number }}</td>
                        <td style="border: 1px solid #ccc; text-align:center;">{{ $data->p_age }}</td>
                        <td style="border: 1px solid #ccc; text-align:center;">{{ $data->p_payment }}</td>
                        <td style="border: 1px solid #ccc; text-align:center;">{{ $data->p_discount }}</td>
                        <td style="border: 1px solid #ccc;">{{ $data->patient_address }}</td>
                        <td style="border: 1px solid #ccc;">{{ $data->doctors->d_name }}</td>
                        <td style="border: 1px solid #ccc;">{{ $data->patient_problems }}</td>
                        <td style="border: 1px solid #ccc;">{{ $data->created_at }}</td>
                        <td style="border: 1px solid #ccc;">
                            <div class="btn-group">
                                <a href="{{ route('admin.admit.patient.edit',$data->patient_number) }}" class="btn btn-primary ">Edit</a>
                                <a href="{{ route('admin.admit.patient.delete',$data->id) }}" class="btn btn-danger">Delete</a> 
                                <a href="{{ route('admin.patient.pdf',$data->id) }}" class="btn btn-warning">PDF</a>
                            </div>
                        </td>
                    </tr>
                    @empty
                        <tr>
                            <td colspan="11" style="text-align: center; color:red; font-weight:bold;">No data fouund!</td>
                        </tr>
                    @endforelse
                   </table>

                   {{-- {{ $listAdmitPatient->links() }} --}}

               </div>
            </div>
        </div>
    </div>
 </section>
@endsection