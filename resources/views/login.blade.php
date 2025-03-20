


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
    <link rel="stylesheet" type="text/css" href="assets/css/fonts.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/icofont.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" id="theme-change" type="text/css" href="#">
    <!-- Favicon Link -->
    <link rel="shortcut icon" type="image/png" href="assets/images/favicon.png">
    <style>
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

    .toggle-password {
        position: absolute;
        right: 10px;
        top: 50%;
        transform: translateY(-50%);
        cursor: pointer;
        color: #999;
    }

    </style>
</head>
<body>
    <div class="splash-auth-wrapper">
        <div class="splash-auth-box">
            <div class="splash-auth-content">
                <form class="form" method="POST" action="login">
                  @csrf
                    {{-- <a href="index.html" class="splash-auth-logo">
                        <img src="assets/images/logo2.png" alt="" />
                    </a> --}}
                    <h2>Hello, Welcome to <span>EliteCleaners</span></h2>
                    <p>Fill the Details Below to Login to Your Account</p>
                    <div class="splash-auth-form">
                        <div class="splash-auth-feilds mb-30">
                            <input type="text" placeholder="Username " class="splash-input" name="username" id="username"/>
                            <div class="splash-auth-icon">
                              <svg 
                              xmlns="http://www.w3.org/2000/svg"
                              xmlns:xlink="http://www.w3.org/1999/xlink"
                              width="16px" height="16px">
                             <path fill-rule="evenodd"  fill="currentColor"
                              d="M13.696,9.759 C12.876,8.942 11.901,8.337 10.837,7.971 C11.989,7.180 12.742,5.850 12.725,4.349 C12.698,1.961 10.713,0.031 8.318,0.062 C5.946,0.093 4.026,2.026 4.026,4.398 C4.026,5.879 4.774,7.189 5.914,7.971 C4.850,8.337 3.875,8.942 3.055,9.759 C1.786,11.025 1.026,12.663 0.878,14.426 C0.849,14.768 1.117,15.063 1.462,15.063 L1.466,15.063 C1.772,15.063 2.024,14.827 2.050,14.523 C2.325,11.285 5.057,8.734 8.375,8.734 C11.694,8.734 14.425,11.285 14.701,14.523 C14.727,14.827 14.979,15.063 15.285,15.063 L15.289,15.063 C15.634,15.063 15.902,14.768 15.873,14.426 C15.725,12.663 14.965,11.025 13.696,9.759 ZM8.375,7.562 C6.625,7.562 5.201,6.143 5.201,4.398 C5.201,2.653 6.625,1.234 8.375,1.234 C10.126,1.234 11.550,2.653 11.550,4.398 C11.550,6.143 10.126,7.562 8.375,7.562 Z"/>
                             </svg>
                            </div>
                            <span class="text-danger">
                                @error('username')
                                    {{$message}}
                                @enderror
                         </span> 
                        </div>
                        
                    <div class="splash-auth-feilds">
                        <input type="password" placeholder="Password" class="splash-input" name="password" id="password"/>
                        
                        <!-- Original Password Icon -->
                        <div class="splash-auth-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 482.8 482.8" width="20px" height="20px">
                                <path d="M395.95,210.4h-7.1v-62.9c0-81.3-66.1-147.5-147.5-147.5c-81.3,0-147.5,66.1-147.5,147.5c0,7.5,6,13.5,13.5,13.5
                                s13.5-6,13.5-13.5c0-66.4,54-120.5,120.5-120.5c66.4,0,120.5,54,120.5,120.5v62.9h-275c-14.4,0-26.1,11.7-26.1,26.1v168.1
                                c0,43.1,35.1,78.2,78.2,78.2h204.9c43.1,0,78.2-35.1,78.2-78.2V236.5C422.05,222.1,410.35,210.4,395.95,210.4z M395.05,404.6
                                c0,28.2-22.9,51.2-51.2,51.2h-204.8c-28.2,0-51.2-22.9-51.2-51.2V237.4h307.2L395.05,404.6L395.05,404.6z"
                                fill="currentColor"></path>
                                <path d="M241.45,399.1c27.9,0,50.5-22.7,50.5-50.5c0-27.9-22.7-50.5-50.5-50.5c-27.9,0-50.5,22.7-50.5,50.5
                                S213.55,399.1,241.45,399.1z M241.45,325c13,0,23.5,10.6,23.5,23.5s-10.5,23.6-23.5,23.6s-23.5-10.6-23.5-23.5
                                S228.45,325,241.45,325z" fill="currentColor"></path>
                            </svg>
                        </div>
                    
                        <!-- Toggle Eye Icon -->
                        <div class="toggle-password" onclick="togglePassword()">
                            <svg id="eyeIcon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20px" height="20px">
                                <path fill="currentColor" d="M12 4.5C7.5 4.5 3.73 7.61 2 12c1.73 4.39 5.5 7.5 10 7.5s8.27-3.11 10-7.5c-1.73-4.39-5.5-7.5-10-7.5zm0 12c-2.49 0-4.5-2.01-4.5-4.5S9.51 7.5 12 7.5s4.5 2.01 4.5 4.5-2.01 4.5-4.5 4.5z"/>
                            </svg>
                        </div>
                        <span class="text-danger">
                            @error('password')
                                {{$message}}
                            @enderror
                     </span> 
                    </div>
                    <script>
                        function togglePassword() {
                            var passwordField = document.getElementById("password");
                            var eyeIcon = document.getElementById("eyeIcon");
                    
                            if (passwordField.type === "password") {
                                passwordField.type = "text";
                                eyeIcon.innerHTML = '<path fill="currentColor" d="M12 4.5C7.5 4.5 3.73 7.61 2 12c1.73 4.39 5.5 7.5 10 7.5s8.27-3.11 10-7.5c-1.73-4.39-5.5-7.5-10-7.5zm0 12c-2.49 0-4.5-2.01-4.5-4.5S9.51 7.5 12 7.5s4.5 2.01 4.5 4.5-2.01 4.5-4.5 4.5zM4.07 12C5.92 9.61 8.85 8 12 8s6.08 1.61 7.93 4c-1.85 2.39-4.78 4-7.93 4s-6.08-1.61-7.93-4zM12 10c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"/>';
                            } else {
                                passwordField.type = "password";
                                eyeIcon.innerHTML = '<path fill="currentColor" d="M12 4.5C7.5 4.5 3.73 7.61 2 12c1.73 4.39 5.5 7.5 10 7.5s8.27-3.11 10-7.5c-1.73-4.39-5.5-7.5-10-7.5zm0 12c-2.49 0-4.5-2.01-4.5-4.5S9.51 7.5 12 7.5s4.5 2.01 4.5 4.5-2.01 4.5-4.5 4.5z"/>';
                            }
                        }
                    </script>
                    <div class="splash-other-feilds">
                        <div class="splash-checkbox">
                            {{-- <label>
                            <input type="checkbox" name="remeber" class="splash-checkbox">
                            <span>Remember Me</span>
                            </label> --}}
                        </div>
                        <a class="forgot-pws-btn" href="/forgot_pass">Forgot Password?</a>
                    </div>
                    <div class="splash-auth-btn">
                        <button type="submit" class="splash-btn splash-login-member w-100">Login</button>
                    </div>
                    <button type="button" class="effect-btn btn btn-secondary mt-2 mr-2 icon-sm"><i class="fab fa-facebook-f"></i></button>
                    <button type="button" class="effect-btn btn btn-success mt-2 mr-2 icon-sm"><i class="fab fa-linkedin-in"></i></button>
                                        <button type="button" class="effect-btn btn btn-danger mt-2 mr-2 icon-sm"><i class="fab fa-instagram"></i></button>
                                        <button type="button" class="effect-btn btn btn-info mt-2 mr-2 icon-sm"><i class="fab fa-pinterest-p"></i></button>
                                        <button type="button" class="effect-btn btn btn-dark mt-2 mr-2 icon-sm"><i class="fab fa-youtube"></i></button>
                    <p class="splash-register-text">Don't have an account? <a href="/registero">Click Here</a></p>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.12.4/dist/sweetalert2.all.min.js"></script>

@if (Session::get('success'))
<script>
    Swal.fire({
    icon: "error",
    title: "{{Session::get('success')}}",
    showConfirmButton: false,
    timer: 2500
  });
  </script>
@endif
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
<script>(function(){function c(){var b=a.contentDocument||a.contentWindow.document;if(b){var d=b.createElement('script');d.innerHTML="window.__CF$cv$params={r:'8f91114d28ff70f2',t:'MTczNTM4Mzg0Ni4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='../../../../cdn-cgi/challenge-platform/h/b/scripts/jsd/787bc399e22f/maind41d.js';document.getElementsByTagName('head')[0].appendChild(a);";b.getElementsByTagName('head')[0].appendChild(d)}}if(document.body){var a=document.createElement('iframe');a.height=1;a.width=1;a.style.position='absolute';a.style.top=0;a.style.left=0;a.style.border='none';a.style.visibility='hidden';document.body.appendChild(a);if('loading'!==document.readyState)c();else if(window.addEventListener)document.addEventListener('DOMContentLoaded',c);else{var e=document.onreadystatechange||function(){};document.onreadystatechange=function(b){e(b);'loading'!==document.readyState&&(document.onreadystatechange=e,c())}}}})();</script></body>


</html>

