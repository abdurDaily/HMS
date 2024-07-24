@extends('backend.layout.layout')
@section('backend-contains')
<div class="card-style settings-card-2  p-lg-5">
    <div class="card-header bg-light p-4">
        <h4 class="text-dark">Add Doctor's</h4>
    </div>
    <div class="card-body">
        <div class="row">

            <form action="{{ route('admin.doctor.store') }}" method="post" enctype="multipart/form-data">
                @csrf

                    <div class="col-12">
                        <div class="input-style-1">
                            <label for="d_name">Doctor Name</label>
                            <input type="text" name="d_name" id="d_name"  placeholder="Full Name">
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="input-style-1">
                            <label for="d_qualifications">Doctor Qualification's</label>
                            <input type="text" name="d_qualifications" id="d_qualifications"  placeholder="MBBS,FCPS,MD..">
                        </div>
                    </div>


                    <div class="col-12">
                        <div class="input-style-1">
                            <label for="d_fee">Doctor Fee</label>
                            <input type="number" name="d_fee" id="d_fee"  placeholder="500 BDT">
                        </div>
                    </div>
                   
                   

                    <div class="col-12">
                        <div class="input-style-1">
                            <label for="d_checkup">Checkup Time</label>
                            <input type="text" name="d_checkup" id="d_checkup"  placeholder="Sun. Tue. Thu. (5:00 AM - 8:00 PM)">
                        </div>
                    </div>
                    

                    
                    <div class="col-12">
                        <div class="input-style-1">
                            <label for="d_phone">Doctor Phone Number</label>
                            <input type="number" name="d_phone" id="d_phone"  placeholder="+880 1647465050">
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