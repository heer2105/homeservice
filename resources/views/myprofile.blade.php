@include('header')
@php
    $user=Session::get('user');
@endphp
<div class="row">
    <div class="col xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-title-wrapper">
            <div class="page-title-box">
                <h4 class="page-title">User Profile</h4>
            </div>
            <div class="breadcrumb-list">
                <ul>
                    <li class="breadcrumb-link">
                        <a href="/"><i class="fas fa-home mr-2"></i>Dashboard</a>
                    </li>
                    <li class="breadcrumb-link active">User Profile</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xl-4">
      <div class="card"><grammarly-extension data-grammarly-shadow-root="true" style="position: absolute; top: 0px; left: 0px; pointer-events: none;" class="cGcvT"></grammarly-extension>
        <div class="card-header">
          <h4 class="card-title mb-0">My Profile</h4>
          <div class="card-options"><a class="card-options-collapse" href="javascript:;" data-bs-toggle="card-collapse" data-bs-original-title="" title=""><i class="fe fe-chevron-up"></i></a><a class="card-options-remove" href="javascript:;" data-bs-toggle="card-remove" data-bs-original-title="" title=""><i class="fe fe-x"></i></a></div>
        </div>
        <div class="card-body">
          <form>
            <div class="profile-title">
                <div class="media splash-profile2-img">                        
                    {{-- <img alt="" src="assets/images/user.jpg"> --}}
                  <div class="media-body">
                    {{-- @php
                    $user=session()->get('user')
                        
                    @endphp
                    {{-- <h5 class="mb-1">{{$user->username}}</h5> --}}
                    {{-- <h5 class="mb-1">{{ $user->username ?? 'Guest' }}</h5>  --}}
                    <div class="avatar avatar-xl">
                      @php
                      $user=session()->get('user');

                          // Default avatar
                          $avatar = 'assets/images/user.jpg'; // Default image
                  
                          // Check if the user variable exists and has a gender
                          if(isset($user) && !empty($user->gender)) {
                              if ($user->gender == 'male') {
                                  $avatar = 'assets/images/male.jpg';
                              } elseif ($user->gender == 'female') {
                                  $avatar = 'assets/images/user.jpg';
                              }
                          }
                      @endphp
                  
                      <img src="{{ asset($avatar) }} " class="user-img" onclick="window.location.href='/profile'" style="cursor: pointer;" alt="User Avatar">
                    </div>
                    {{-- <p>DESIGNER</p> --}}
                  </div>
                </div>
            </div>
            {{-- <div class="mb-3">
              <label class="form-label">Bio</label>
              <textarea class="form-control" rows="5" spellcheck="false">On the other hand, we denounce with righteous indignation</textarea>
            </div> --}}
            <div class="mb-3">
              <label class="form-label">Email-Address</label>
              <input class="form-control" placeholder="your-email@domain.com" data-bs-original-title="" title="" value="{{$user->email}}" disabled>
            </div>
            <div class="mb-3">
              <label class="form-label">Password</label>
              <input class="form-control" type="password" value="password" data-bs-original-title="" title=""  value="{{$user->password}}">
            </div>
            {{-- <div class="mb-3">
              <label class="form-label">Website</label>
              <input class="form-control" placeholder="http://Uplor .com" data-bs-original-title="" title="">
            </div> --}}
            {{-- <div class="form-footer">
              <button class="btn btn-primary squer-btn" data-bs-original-title="" title="">Save</button>
            </div> --}}
          </form>
        </div>
      </div>
    </div>
    <div class="col-xl-8">
      <form class="card" method="POST" action="/update_profile">
        @csrf
        <div class="card-header">
          <h4 class="card-title mb-0">Edit Profile</h4>
          <div class="card-options"><a class="card-options-collapse" href="javascript:;" data-bs-toggle="card-collapse" data-bs-original-title="" title=""><i class="fe fe-chevron-up"></i></a><a class="card-options-remove" href="javascript:;" data-bs-toggle="card-remove" data-bs-original-title="" title=""><i class="fe fe-x"></i></a></div>
        </div>
        <div class="card-body">
          <div class="row">
            
            <div class="col-sm-6 col-md-3">
              <div class="mb-3">
                <label class="form-label">Username</label>
                <input class="form-control" type="text" placeholder="Username" data-bs-original-title="" title="" name="username" value="{{$user->username}}">
              </div>
            </div>
            <div class="col-sm-6 col-md-4">
              <div class="mb-3">
                <label class="form-label">Email address</label>
                <input class="form-control" type="email" placeholder="Email" data-bs-original-title="" title="" name="email" value="{{$user->email}}">
              </div>
            </div>
            
            <div class="col-sm-6 col-md-4">
              <div class="mb-3">
                <label class="form-label">Password</label>
                <input class="form-control" type="password" value="password" data-bs-original-title="" title="" name="password" value="{{$user->password}}">
              </div>
            </div>
            <div class="col-sm-6 col-md-4">
              <div class="mb-3">
                <label class="form-label">Mobile No</label>
                <input class="form-control" type="text" placeholder="Mobile No" data-bs-original-title="" title="" name="mobile_no" value="{{$user->mobile_no}}">
              </div>
            </div>
            <div class="col-sm-6 col-md-4">
              <div class="mb-3">
                <label class="form-label"> Role</label>
                <input class="form-control" type="text" data-bs-original-title="" title="" value="{{$user->role}}" name="role" disabled>
              </div>
            </div>
            
          </div>
          <button class="btn btn-primary squer-btn" type="submit" data-bs-original-title="" title="">Update Profile</button>
        </div>
      </form>
    </div>
    
  </div>
@include('footer')
