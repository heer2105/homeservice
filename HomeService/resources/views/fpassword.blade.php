  <!DOCTYPE html>

<html lang="zxx">

<head>
    <title>EliteCleaners</title>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="MobileOptimized" content="320">
    <!--Start Style -->
    <link rel="stylesheet" type="text/css" href="assets/css/fonts.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/auth.css">
    <!-- Favicon Link -->
    <link rel="shortcut icon" type="image/png" href="assets/images/favicon.png">
    <style>
        .splash-auth-feilds select {
      width: 100%;
      height: 50px;
      border: 1px solid #e4e4e4;
      color: #0a0a0a;
      border-radius: 5px;
      padding: 0 20px 0 50px;
      margin-bottom: 0;
  }
        .splash-auth-feilds option:focus {
      border-color: #8231d3;
  }
  .splash-auth-feilds select:focus~.splash-auth-icon svg path {
      fill: #8231d3;
  }
  .splash-auth-feilds select,
  .splash-auth-feilds select:focus,
  .splash-auth-feilds select:focus~.splash-auth-icon svg path,
  .splash-auth-feilds select~.splash-auth-icon svg path {
      -webkit-transition: all 0.3s;
      -moz-transition: all 0.3s;
      -ms-transition: all 0.3s;
      -o-transition: all 0.3s;
      transition: all 0.3s;
  }
  .splash-btn {
      background-color: #6a5acd; /* Default button color */
      color: #fff;
      /* padding: 12px; */
      border: none;
      border-radius: 8px;
      font-size: 16px;
      cursor: pointer;
      transition: all 0.3s ease-in-out;
  }
  
  .splash-btn:hover {
      background-color: #483d8b; /* Darker shade on hover */
      transform: scale(1.05); /* Slightly enlarges */
      box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2); /* Adds shadow */
  }
  
      </style>
</head>

<body>
    <div class="splash-auth-wrapper">
        <div class="splash-auth-box">
            <div class="splash-auth-content">
                <form action="/forgot_password" method="POST" class="form">
                    @csrf
                    
                    <h2>Hello, Welcome to <span>EliteCleaners</span></h2>
                    <p>Enter your email and we will send you a reset link</p>
                <h2 class="auth-title">Forgot Password</h2>

                    <div class="splash-auth-form">
                        <div class="splash-auth-feilds mb-30">
                            <input type="text" placeholder="Username" class="splash-input" aria-label="Username" name="username" id="username" required/>
                            <div class="splash-auth-icon">
                              <svg 
                              xmlns="http://www.w3.org/2000/svg"
                              xmlns:xlink="http://www.w3.org/1999/xlink"
                              width="16px" height="16px">
                             <path fill-rule="evenodd"  fill="currentColor"
                              d="M13.696,9.759 C12.876,8.942 11.901,8.337 10.837,7.971 C11.989,7.180 12.742,5.850 12.725,4.349 C12.698,1.961 10.713,0.031 8.318,0.062 C5.946,0.093 4.026,2.026 4.026,4.398 C4.026,5.879 4.774,7.189 5.914,7.971 C4.850,8.337 3.875,8.942 3.055,9.759 C1.786,11.025 1.026,12.663 0.878,14.426 C0.849,14.768 1.117,15.063 1.462,15.063 L1.466,15.063 C1.772,15.063 2.024,14.827 2.050,14.523 C2.325,11.285 5.057,8.734 8.375,8.734 C11.694,8.734 14.425,11.285 14.701,14.523 C14.727,14.827 14.979,15.063 15.285,15.063 L15.289,15.063 C15.634,15.063 15.902,14.768 15.873,14.426 C15.725,12.663 14.965,11.025 13.696,9.759 ZM8.375,7.562 C6.625,7.562 5.201,6.143 5.201,4.398 C5.201,2.653 6.625,1.234 8.375,1.234 C10.126,1.234 11.550,2.653 11.550,4.398 C11.550,6.143 10.126,7.562 8.375,7.562 Z"/>
                             </svg>
                        <span class="text-danger">
                              @error('username')
                                  {{$message}}
                              @enderror
                       </span> 
                            </div>
                        </div>
                       
                    </div>
                    
                    <div class="splash-auth-feilds mb-30">
                        <select id="sec_que" name="sec_que" class="splash-input" style="width: 100%; padding: 12px 40px 12px 45px; font-size: 14px; border: 1px solid #ccc; border-radius: 8px; background: #fff; color: #999; appearance: none; outline: none;">
                            <option value="" disabled selected>Select Security Question</option>
                            <option value="pet-name">What is your pet's name?</option>
                            <option value="mother-maiden">What is your mother's maiden name?</option>
                            <option value="birth-city">In which city were you born?</option>
                            <option value="first-school">What was the name of your first school?</option>
                            <option value="favorite-color">What is your favorite color?</option>
                        </select>
                    
                        <div class="splash-auth-icon">
                            <svg 
                                xmlns="http://www.w3.org/2000/svg" 
                                width="16px" height="16px" 
                                viewBox="0 0 24 24">
                                <path fill-rule="evenodd" fill="currentColor"
                                    d="M16 11C17.66 11 19 9.66 19 8C19 6.34 17.66 5 16 5C14.34 5 13 6.34 13 8C13 9.66 14.34 11 16 11ZM8 11C9.66 11 11 9.66 11 8C11 6.34 9.66 5 8 5C6.34 5 5 6.34 5 8C5 9.66 6.34 11 8 11ZM8 13C5.33 13 2 14.34 2 17V19C2 19.55 2.45 20 3 20H13C13.55 20 14 19.55 14 19V17C14 14.34 10.67 13 8 13ZM16 13C15.31 13 14.65 13.06 14.03 13.17C15.91 14.08 17 15.42 17 17V19C17 19.55 17.45 20 18 20H21C21.55 20 22 19.55 22 19V17C22 14.34 18.67 13 16 13Z"/>
                            </svg>
                        </div>
                    
                        <span class="text-danger">
                            @error('sec_que')
                                {{$message}}
                            @enderror
                        </span>
                    </div>
                    
                           
          
                           <div class="splash-auth-feilds mb-30">
                            <!-- Security Answer Input -->
                            <input type="text" id="sec_ans" name="sec_ans"  class="splash-input"  placeholder="Enter Your Answer" >
                            
                            <!-- Security Icon -->
                            <div  class="splash-auth-icon">
                                {{-- &#128274; <!-- Unicode for a lock/security icon --> --}}
                                <div class="splash-auth-icon">
                                  <svg 
                                      xmlns="http://www.w3.org/2000/svg" 
                                      width="16px" height="16px" 
                                      viewBox="0 0 24 24">
                                      <path fill-rule="evenodd" fill="currentColor"
                                          d="M12 2C9.24 2 7 4.24 7 7V10H6C4.9 10 4 10.9 4 12V20C4 21.1 4.9 22 6 22H18C19.1 22 20 21.1 20 20V12C20 10.9 19.1 10 18 10H17V7C17 4.24 14.76 2 12 2ZM9 7C9 5.34 10.34 4 12 4C13.66 4 15 5.34 15 7V10H9V7ZM6 12H18V20H6V12ZM12 14C11.45 14 11 14.45 11 15V17C11 17.55 11.45 18 12 18C12.55 18 13 17.55 13 17V15C13 14.45 12.55 14 12 14Z"/>
                                  </svg>
                              </div>
                              
                            </div>
                        
                            <!-- Error Message -->
                            <span class="text-danger">
                                @error('sec_ans')
                                    {{$message}}
                                @enderror
                            </span> 
                        </div>
                      
                    <div class="splash-auth-btn">
                        <button  class="splash-btn splash-login-member  w-100" type="submit">Send Password</button>
                    </div>
                    <p class="splash-register-text">Already have an account ? 
                        <a href="/">Login</a></p>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.12.4/dist/sweetalert2.all.min.js"></script>

@if (Session::get('success'))
<script>
    Swal.fire({
    icon: "info",
    title: "{{Session::get('success')}}",
    showConfirmButton: false,
    timer: 2500
  });
  </script>
@endif
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js" integrity="sha512-7eHRwcbYkK4d9g/6tD/mhkf++eoTHwpNM9woBxtPUBWm67zeAfFC+HrdoE2GanKeocly/VxeLvIqwvCdk7qScg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js" integrity="sha512-onMTRKJBKz8M1TnqqDuGBlowlH0ohFzMXYRNebz+yOcc5TQr/zAKsthzhuv0hiyUKEiQEQXEynnXCvNTOk50dg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>



  </body>
<!-- Mirrored from kamleshyadav.com/html/splashdash/html/main/forgot-pws.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 28 Dec 2024 11:05:28 GMT -->
</html>