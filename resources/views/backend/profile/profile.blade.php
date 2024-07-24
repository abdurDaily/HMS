@extends('backend.layout.layout')
@section('backend-contains')
<section class="section">
    <div class="container-fluid">
      <!-- ========== title-wrapper start ========== -->
      <div class="title-wrapper pt-30">
        <div class="row align-items-center">
          <div class="col-md-6">
            <div class="title">
              <h2>Profile Setting</h2>
            </div>
          </div>
          <!-- end col -->
          <div class="col-md-6">
            <div class="breadcrumb-wrapper">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item">
                    <a href="#0">Dashboard</a>
                  </li>
                  <li class="breadcrumb-item"><a href="#0">Pages</a></li>
                  <li class="breadcrumb-item active" aria-current="page">
                    Settings
                  </li>
                </ol>
              </nav>
            </div>
          </div>
          <!-- end col -->
        </div>
        <!-- end row -->
      </div>
      <!-- ========== title-wrapper end ========== -->

      
      <form action="{{ route('admin.profile.update', Auth::User()->id ) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
            <div class="row">
                <div class="col-lg-6">
                <div class="card-style settings-card-1 mb-30">
                    
                    <div class="profile-info">


                    <div class="input-style-1">
                        <label for="profile_img">
                            <span>Choose an Image</span> <br> <br>
                            <img class="display_img" style="width: 200px; height:200px; cursor: pointer;" src="{{ Auth::user()->image ?  Auth::user()->image : 'https://api.dicebear.com/8.x/initials/svg?seed=' . Auth::user()->name   }}" alt="profile-img" name="profile_img">
                        </label>
                        <input id="profile_img" class="d-none profile_img" name="profile_img" type="file" accept=".png,.jpg,.jpeg">
                    </div>


                    <div class="input-style-1">
                        <label>Email</label>
                        <input type="email" name="email"  placeholder="admin@example.com" value="{{ Auth::user()->email }}">
                        @error('email')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>


                    <div class="input-style-1">
                        <label>Password</label>
                        <input type="password" value="" name="old_password" placeholder="old password">
                        @error('old_password')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="input-style-1">
                        <label>Confirm Password</label>
                        <input type="password" name="new_password" value="" placeholder="new password">
                        @error('new_password')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="input-style-1">
                        <label>Designation</label>
                        <input value="{{ Auth::user()->designation }}" type="text" name="designation" value="" placeholder="Designation">
                    </div>


                    <div class="input-style-1">
                        <label>Blood Group</label>
                        <input type="text" name="blood" value="{{ Auth::user()->blood }}" placeholder="Blood Group">
                    </div>

                    </div>
                </div>
                <!-- end card -->
                </div>
                <!-- end col -->

                <div class="col-lg-6">
                <div class="card-style settings-card-2 mb-30">


                    <div class="row">
                        <div class="col-12">
                        <div class="input-style-1">
                            <label>Full Name</label>
                            <input type="text" name="name" value="{{ Auth::user()->name }}" placeholder="Full Name">
                        </div>
                        </div>

                        
                        <div class="col-12">
                        <div class="input-style-1">
                            <label>Website Link</label>
                            <input value="{{ Auth::user()->website }}" name="web" type="text" placeholder="Website">
                        </div>
                        </div>
 

                        <div class="col-12">
                        <div class="input-style-1">
                            <label>Contact Number</label>
                            <input type="number" value="{{ Auth::user()->contact_no }}" name="phone" placeholder="Contact no">
                        </div>
                        </div>
                        
                        <div class="col-12">
                        <div class="input-style-1">
                            <label>About Me</label>
                            <textarea name="about_me" placeholder="Type here" rows="6">{{ Auth::user()->about_me }}</textarea>
                        </div>
                        </div>
                        <div class="col-12">
                        <button type="submit" class="main-btn primary-btn btn-hover">
                            Update Profile
                        </button>
                        </div>
                    </div>
                
                </div>
                <!-- end card -->
                </div>
            </div>
     </form>
        <!-- end col -->
      <!-- end row -->
    </div>
    <!-- end container -->
</section>
@endsection


@push('backend_custom_js')
  <script>
      let inputImage = document.querySelector('.profile_img');
      let displayImage = document.querySelector('.display_img');

      inputImage.addEventListener('change',(e)=>{

        let url = URL.createObjectURL(e.target.files[0]);
        displayImage.src= url;
      })
  </script>
@endpush