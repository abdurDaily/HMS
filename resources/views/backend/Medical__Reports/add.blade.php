@extends('backend.layout.layout')
@section('backend-contains')
    <section id="report">
        <div class="container p-0">
            
            <div class="card-style settings-card-2 mb-10 p-0">
                <div class="card-header p-4" style="background: #ccc;">
                    <h4>Medical Report</h4>
                </div>
                <div class="card-body p-5 shadow">
                    <div class="row">
                        <div class="col-lg-8 table-responsive order-sm-2 order-lg-1">
                            <table class="table table-hover table-striped">
                                <tr>
                                    <th style="text-align:center; border:0.5px solid #ccc;">Sn.</th>
                                    <th style="text-align:center; border:0.5px solid #ccc;">Report Name</th>
                                    <th style="text-align:center; border:0.5px solid #ccc;">Report Price</th>
                                    <th style="text-align:center; border:0.5px solid #ccc;">Status</th>
                                </tr>


                                @forelse ($allTest as $key=>$test)
                                    <tr>
                                        <td style="text-align:center; border:0.5px solid #ccc;">{{ ++$key }}</td>
                                        <td style="text-align:center; border:0.5px solid #ccc;">{{ Str::upper( $test->report_name) }}</td>
                                        <td style="text-align:center; border:0.5px solid #ccc;">{{ $test->report_price}} /-</td>
                                        <td style="text-align:center; border:0.5px solid #ccc;">
                                            <div class="btn-group">
                                                <a href="{{ route('medical.report.edit',$test->id) }}" class="btn btn-primary">Edit</a>
                                                <a href="{{ route('medical.report.delete', $test->id) }}" class="btn btn-danger">Delete</a>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4"><h4>No Data Found!</h4></td>
                                    </tr>
                                @endforelse

                            </table>
                        </div>

                        @if (isset($editData->id))
                        <div class="col-lg-4 order-sm-1 order-lg-2">
                            <h4 style="background: #ccc; padding:20px">Edit Test</h4>
                            <div class="card-style settings-card-2 pb-2">
                                <form action="{{ route('medical.report.update',$editData->id) }}" method="post">
                                    @csrf
                                    @method('put')

                                    <div class="input-style-1">
                                        <label for="report_name">Report Name</label>
                                        <input value="{{ $editData->report_name }}" type="text" name="report_name" class="mb-3" id="report_name" placeholder="Blood Group">

                                        
                                        <label for="report_price">Report Price</label>
                                        <input value="{{ $editData->report_price }}" type="number" name="report_price" class="mb-3" id="report_price" placeholder="500/-">

                                        <button type="submit" class="main-btn primary-btn btn-hover w-100">
                                            Update
                                        </button>

                                    </div>
                                </form>
                            </div>
                        </div>
                        @else
                            
                        

                        <div class="col-lg-4 order-sm-1 order-lg-2">
                            <h4 style="background: #ccc; padding:20px">Insert New Test</h4>
                            <div class="card-style settings-card-2 pb-2">
                                <form action="{{ route('medical.report.store') }}" method="post">
                                    @csrf

                                    <div class="input-style-1">
                                        <label for="report_name">Report Name</label>
                                        <input type="text" name="report_name" class="mb-3" id="report_name" placeholder="Blood Group">

                                        
                                        <label for="report_price">Report Price</label>
                                        <input type="number" name="report_price" class="mb-3" id="report_price" placeholder="500/-">

                                        <button type="submit" class="main-btn primary-btn btn-hover w-100">
                                            Upload
                                        </button>

                                    </div>
                                </form>
                            </div>
                        </div>

                        @endif
                        
                    </div>
                    
                </div>
            </div>
            
        </div>
    </section>
@endsection