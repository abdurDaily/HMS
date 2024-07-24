@extends('backend.layout.layout')
@section('backend-contains')
<div class="tables-wrapper">
    <div class="row">
      <div class="col-lg-12">
        <div class="card-style mb-30">
          <h6 class="mb-10">Panding Request's</h6>
          <p class="text-sm mb-20">
            without an admin approval no one will be able to get dashboard access.
          </p>
          <div class="table-wrapper table-responsive">
            <table class="table table-striped table-hover">
              <thead class="text-center">
                <tr >
                  <th style="width: 10% ; border: 1px solid #08010135">
                    <h6>Id</h6>
                  </th>
                  <th class="lead-email" style="border: 1px solid #08010135">
                    <h6>Nane</h6>
                  </th>
                  <th class="lead-phone" style="border: 1px solid #08010135">
                    <h6>Email</h6>
                  </th>
                  <th class="lead-phone" style="border: 1px solid #08010135">
                    <h6>Send Time</h6>
                  </th>
              
                  <th class="lead-phone" style="border: 1px solid #08010135">
                    <h6>Status</h6>
                  </th>
                  
                </tr>
                <!-- end table row-->
              </thead>
              <tbody>
               
                @forelse ($allUsers as $key=>$user)
                <tr>
                
                  <td class="min-width" style="border: 1px solid #08010135">
                      <div class="lead-text" >
                        <p class="text-center">{{ $allUsers->firstItem() + $key }}</p>
                      </div>
                  </td>
                  <td class="min-width" style="border: 1px solid #08010135">
                    <p>{{ $user->name }}</p>
                  </td>
                  <td class="min-width" style="border: 1px solid #08010135">
                    <p>{{ $user->email }}</p>
                  </td>
                  <td class="min-width" style="border: 1px solid #08010135">
                    <p>{{ $user->created_at->format('d-M-Y') }}</p>
                  </td>



                  
                  <td style="border: 1px solid #08010135; ">
                    <div class="action text-center d-flex justify-content-center">
                        <a href="{{ route('admin.declined.user', $user->id) }}" style="margin-right:10px; padding:0 10px; width:40px; height:40px; border:1px solid #ccc; text-align:center; line-height:40px;">
                          <i class="lni lni-trash-can"></i>
                        </a>
                      <a style="padding:0 10px; width:40px; height:40px; border:1px solid #ccc  ; text-align:center; line-height:40px;" href="{{ route('admin.approved.user',$user->id) }}">
                         ✔
                      </a>
                    </div>
                  </td>
                </tr>
                @empty
                  <tr>
                    <td colspan="5" style="background: #ccc; text-align:center; padding:10px 0;">No Data Found!</td>
                  </tr>
                @endforelse
                <!-- end table row -->
              </tbody>
            </table>

            {{ $allUsers->links() }}
            <!-- end table -->
          </div>
        </div>
        <!-- end card -->
      </div>
      <!-- end col -->
    </div>
    <!-- end row -->

   
  </div>
@endsection