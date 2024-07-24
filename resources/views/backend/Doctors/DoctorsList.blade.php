@extends('backend.layout.layout')
@section('backend-contains')

<section id="doctors_list">
    <div class="container p-0 card-style settings-card-2 ">
            <h1 class="bg-primary p-3 text-light">List of Doctor's</h1>
            <div class="card shadow">
                <div class="card-body table-responsive">
                    <table class="table table-hover table-striped">
                        <tr>
                            <th style="border: 0.5px solid #ccc; text-align:center;">Sn.</th>
                            <th style="border: 0.5px solid #ccc; text-align:center;">Name</th>
                            <th style="border: 0.5px solid #ccc; text-align:center;">Author</th>
                            <th style="border: 0.5px solid #ccc; text-align:center;">Qualification's</th>
                            <th style="border: 0.5px solid #ccc; text-align:center;">Phone</th>
                            <th style="border: 0.5px solid #ccc; text-align:center;">T. Patients</th>
                            <th style="border: 0.5px solid #ccc; text-align:center;">Consulting Time</th>
                            <th style="border: 0.5px solid #ccc; text-align:center;">Consulting Fee</th>
                            <th style="border: 0.5px solid #ccc; text-align:center;">Status</th>
                        </tr>

                        @forelse ($allDoctorsList as $key => $doctor)
                            <tr>
                                <td style="border: 0.5px solid #ccc; text-align:center;">{{ ++$key }}</td>
                                <td style="border: 0.5px solid #ccc; text-align:center;">{{ Str::upper($doctor->d_name ) }}</td>
                                <td style="border: 0.5px solid #ccc; text-align:center;">{{ $doctor->d_author }}</td>
                                <td style="border: 0.5px solid #ccc; text-align:center;">{{ Str::upper($doctor->d_qualifications) }}</td>
                                <td style="border: 0.5px solid #ccc; text-align:center;">{{ $doctor->d_phone }}</td>
                                <td style="border: 0.5px solid #ccc; text-align:center;"> <b>{{ count($doctor->patient) }}</b> </td>
                                <td style="border: 0.5px solid #ccc; text-align:center;">{{ Str::upper($doctor->d_checkup) }}</td>
                                <td style="border: 0.5px solid #ccc; text-align:center;">{{ $doctor->d_fee }} /-</td>
                                <td style="border: 0.5px solid #ccc; text-align:center;">
                                    <div class="btn-group">
                                        <a href="{{ route('admin.doctor.edit',$doctor->d_name_slug) }}" class="btn btn-primary">Edit</a>
                                        <a href="{{ route('admin.doctor.delete',$doctor->id) }}" class="btn btn-danger">Delete</a>
                                    </div>
                                </td>
                            </tr>
                        @empty
                        <tr>
                            <td>
                                <h3>No data found...!</h3>
                            </td>
                        </tr>
                        @endforelse
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection