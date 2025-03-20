


<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Register</title>
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
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/icofont.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" id="theme-change" type="text/css" href="#">
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
.toggle-password {
        position: absolute;
        right: 10px;
        top: 50%;
        transform: translateY(-50%);
        cursor: pointer;
        color: #999;
    }

    /* .toggle-password1 {
        position: absolute;
        right: 10px;
        top: 50%;
        transform: translateY(-50%);
        cursor: pointer;
        color: #999;
    } */

    .eye-icon {
    cursor: pointer;
    position: absolute;
    right: 10px;
    top: 50%;
    transform: translateY(-50%);
}

.eye-icon svg {
    width: 20px;
    height: 20px;
    color: #888;
    transition: color 0.3s;
}

.eye-icon:hover svg {
    color: #333;
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
                <form method="POST" action="/register" class="form">
                  @csrf
                    {{-- <a href="index.html" class="splash-auth-logo"> --}}
                        {{-- <img src="assets/images/logo2.png" alt="" /> --}}
                    {{-- </a> --}}
                    <h2>Hello, Welcome to <span>EliteCleaners</span></h2>
                    <p>Please Enter Your Details Below to Continue</p>
                    <div class="splash-auth-form">
                        <div class="splash-auth-feilds mb-30">
                            <input type="text" placeholder="Enter Name" class="splash-input" id="username" name="username" />
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
                        <div class="splash-auth-feilds mb-30">
                          <input type="email" placeholder="Enter Email" class="splash-input" id="email" name="email" />
                          <div class="splash-auth-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 483.3 483.3"><path d="M424.3,57.75H59.1c-32.6,0-59.1,26.5-59.1,59.1v249.6c0,32.6,26.5,59.1,59.1,59.1h365.1c32.6,0,59.1-26.5,59.1-59.1    v-249.5C483.4,84.35,456.9,57.75,424.3,57.75z M456.4,366.45c0,17.7-14.4,32.1-32.1,32.1H59.1c-17.7,0-32.1-14.4-32.1-32.1v-249.5    c0-17.7,14.4-32.1,32.1-32.1h365.1c17.7,0,32.1,14.4,32.1,32.1v249.5H456.4z" data-original="#000000" class="active-path" data-old_color="#000000" fill="currentColor"></path><path d="M304.8,238.55l118.2-106c5.5-5,6-13.5,1-19.1c-5-5.5-13.5-6-19.1-1l-163,146.3l-31.8-28.4c-0.1-0.1-0.2-0.2-0.2-0.3    c-0.7-0.7-1.4-1.3-2.2-1.9L78.3,112.35c-5.6-5-14.1-4.5-19.1,1.1c-5,5.6-4.5,14.1,1.1,19.1l119.6,106.9L60.8,350.95    c-5.4,5.1-5.7,13.6-0.6,19.1c2.7,2.8,6.3,4.3,9.9,4.3c3.3,0,6.6-1.2,9.2-3.6l120.9-113.1l32.8,29.3c2.6,2.3,5.8,3.4,9,3.4    c3.2,0,6.5-1.2,9-3.5l33.7-30.2l120.2,114.2c2.6,2.5,6,3.7,9.3,3.7c3.6,0,7.1-1.4,9.8-4.2c5.1-5.4,4.9-14-0.5-19.1L304.8,238.55z" data-original="#000000" class="active-path" data-old_color="#000000" fill="currentColor"></path></svg>
                          </div>
                          <span class="text-danger">
                            @error('email')
                                {{$message}}
                            @enderror
                     </span> 
                      </div>
                      {{-- <div class="splash-auth-feilds mb-30">
                        <input type="password" placeholder="Password" class="splash-input" id="password" name="password"/>
                        <div class="splash-auth-icon">
                            <svg 
                                xmlns="http://www.w3.org/2000/svg" 
                                width="16px" height="16px" 
                                viewBox="0 0 24 24">
                                <path fill-rule="evenodd" fill="currentColor"
                                    d="M12 2C9.24 2 7 4.24 7 7V10H6C4.9 10 4 10.9 4 12V20C4 21.1 4.9 22 6 22H18C19.1 22 20 21.1 20 20V12C20 10.9 19.1 10 18 10H17V7C17 4.24 14.76 2 12 2ZM9 7C9 5.34 10.34 4 12 4C13.66 4 15 5.34 15 7V10H9V7ZM12 16C13.1 16 14 16.9 14 18C14 19.1 13.1 20 12 20C10.9 20 10 19.1 10 18C10 16.9 10.9 16 12 16Z"/>
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
                    </script> --}}
                    
                    {{-- <div class="splash-auth-feilds mb-30">
                      <input type="password" placeholder="Confirm Password" class="splash-input" id="cpassword" name="cpassword"/>
                      <div class="splash-auth-icon">
                          <svg 
                              xmlns="http://www.w3.org/2000/svg" 
                              width="16px" height="16px" 
                              viewBox="0 0 24 24">
                              <path fill-rule="evenodd" fill="currentColor"
                                  d="M12 2L4 5V11C4 16.55 7.84 21.74 12 23C16.16 21.74 20 16.55 20 11V5L12 2ZM10 17L6 13L7.41 11.59L10 14.17L16.59 7.59L18 9L10 17Z"/>
                          </svg>
                      </div>
                      
                      <span class="text-danger">
                          @error('cpassword')
                              {{$message}}
                          @enderror
                      </span> 
                  </div> --}}
                  

                  {{-- <div class="splash-auth-feilds mb-30">
                    <input type="password" placeholder="Password" class="splash-input" id="password" name="password"/>
                    <div class="splash-auth-icon">
                        <!-- Existing Lock Icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M12 2C9.24 2 7 4.24 7 7V10H6C4.9 10 4 10.9 4 12V20C4 21.1 4.9 22 6 22H18C19.1 22 20 21.1 20 20V12C20 10.9 19.1 10 18 10H17V7C17 4.24 14.76 2 12 2ZM9 7C9 5.34 10.34 4 12 4C13.66 4 15 5.34 15 7V10H9V7ZM12 16C13.1 16 14 16.9 14 18C14 19.1 13.1 20 12 20C10.9 20 10 19.1 10 18C10 16.9 10.9 16 12 16Z"/>
                        </svg>
                    </div>
                    <!-- Eye Icon for Password Visibility -->
                    <div class="eye-icon" onclick="togglePassword('password', 'eyeIcon1')">
                        <svg id="eyeIcon1" xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M12 4.5C7.5 4.5 3.73 7.61 2 12c1.73 4.39 5.5 7.5 10 7.5s8.27-3.11 10-7.5c-1.73-4.39-5.5-7.5-10-7.5zm0 12c-2.49 0-4.5-2.01-4.5-4.5S9.51 7.5 12 7.5s4.5 2.01 4.5 4.5-2.01 4.5-4.5 4.5z"/>
                        </svg>
                    </div>
                    <span class="text-danger">@error('password') {{$message}} @enderror</span>
                </div> --}}
                
                {{-- <div class="splash-auth-feilds mb-30">
                    <input type="password" placeholder="Confirm Password" class="splash-input" id="cpassword" name="cpassword"/>
                    <div class="splash-auth-icon">
                        <!-- Existing Lock Icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M12 2L4 5V11C4 16.55 7.84 21.74 12 23C16.16 21.74 20 16.55 20 11V5L12 2ZM10 17L6 13L7.41 11.59L10 14.17L16.59 7.59L18 9L10 17Z"/>
                        </svg>
                    </div>
                    <!-- Eye Icon for Confirm Password Visibility -->
                    <div class="eye-icon" onclick="togglePassword1('cpassword', 'eyeIcon2')">
                        <svg id="eyeIcon2" xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M12 4.5C7.5 4.5 3.73 7.61 2 12c1.73 4.39 5.5 7.5 10 7.5s8.27-3.11 10-7.5c-1.73-4.39-5.5-7.5-10-7.5zm0 12c-2.49 0-4.5-2.01-4.5-4.5S9.51 7.5 12 7.5s4.5 2.01 4.5 4.5-2.01 4.5-4.5 4.5z"/>
                        </svg>
                    </div>
                    <span class="text-danger">@error('cpassword') {{$message}} @enderror</span>
                </div>
                
                <script>
                function togglePassword1(inputId, eyeId) {
                    var passwordField = document.getElementById(inputId);
                    var eyeIcon = document.getElementById(eyeId);
                
                    if (passwordField.type === "password") {
                        passwordField.type = "text";
                        eyeIcon.innerHTML = '<path fill="currentColor" d="M12 4.5C7.5 4.5 3.73 7.61 2 12c1.73 4.39 5.5 7.5 10 7.5s8.27-3.11 10-7.5c-1.73-4.39-5.5-7.5-10-7.5zm0 12c-2.49 0-4.5-2.01-4.5-4.5S9.51 7.5 12 7.5s4.5 2.01 4.5 4.5-2.01 4.5-4.5 4.5zM4.07 12C5.92 9.61 8.85 8 12 8s6.08 1.61 7.93 4c-1.85 2.39-4.78 4-7.93 4s-6.08-1.61-7.93-4zM12 10c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"/>';
                    } else {
                        passwordField.type = "password";
                        eyeIcon.innerHTML = '<path fill="currentColor" d="M12 4.5C7.5 4.5 3.73 7.61 2 12c1.73 4.39 5.5 7.5 10 7.5s8.27-3.11 10-7.5c-1.73-4.39-5.5-7.5-10-7.5zm0 12c-2.49 0-4.5-2.01-4.5-4.5S9.51 7.5 12 7.5s4.5 2.01 4.5 4.5-2.01 4.5-4.5 4.5z"/>';
                    }
                }
                </script> --}}
                
                <div class="splash-auth-feilds mb-30">
                    <input type="password" placeholder="Password" class="splash-input" id="password" name="password"/>
                    <div class="splash-auth-icon">
                        <!-- Existing Lock Icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M12 2C9.24 2 7 4.24 7 7V10H6C4.9 10 4 10.9 4 12V20C4 21.1 4.9 22 6 22H18C19.1 22 20 21.1 20 20V12C20 10.9 19.1 10 18 10H17V7C17 4.24 14.76 2 12 2ZM9 7C9 5.34 10.34 4 12 4C13.66 4 15 5.34 15 7V10H9V7ZM12 16C13.1 16 14 16.9 14 18C14 19.1 13.1 20 12 20C10.9 20 10 19.1 10 18C10 16.9 10.9 16 12 16Z"/>
                        </svg>
                    </div>
                    <!-- Eye Icon for Password Visibility -->
                    <div class="eye-icon" onclick="togglePassword('password', 'eyeIcon1')">
                        <svg id="eyeIcon1" xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M12 4.5C7.5 4.5 3.73 7.61 2 12c1.73 4.39 5.5 7.5 10 7.5s8.27-3.11 10-7.5c-1.73-4.39-5.5-7.5-10-7.5zm0 12c-2.49 0-4.5-2.01-4.5-4.5S9.51 7.5 12 7.5s4.5 2.01 4.5 4.5-2.01 4.5-4.5 4.5z"/>
                        </svg>
                    </div>
                    <span class="text-danger">@error('password') {{$message}} @enderror</span>
                </div>
                
                <div class="splash-auth-feilds mb-30">
                    <input type="password" placeholder="Confirm Password" class="splash-input" id="cpassword" name="cpassword"/>
                    <div class="splash-auth-icon">
                        <!-- Existing Lock Icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M12 2L4 5V11C4 16.55 7.84 21.74 12 23C16.16 21.74 20 16.55 20 11V5L12 2ZM10 17L6 13L7.41 11.59L10 14.17L16.59 7.59L18 9L10 17Z"/>
                        </svg>
                    </div>
                    <!-- Eye Icon for Confirm Password Visibility -->
                    <div class="eye-icon" onclick="togglePassword('cpassword', 'eyeIcon2')">
                        <svg id="eyeIcon2" xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M12 4.5C7.5 4.5 3.73 7.61 2 12c1.73 4.39 5.5 7.5 10 7.5s8.27-3.11 10-7.5c-1.73-4.39-5.5-7.5-10-7.5zm0 12c-2.49 0-4.5-2.01-4.5-4.5S9.51 7.5 12 7.5s4.5 2.01 4.5 4.5-2.01 4.5-4.5 4.5z"/>
                        </svg>
                    </div>
                    <span class="text-danger">@error('cpassword') {{$message}} @enderror</span>
                </div>
                
                <script>
                function togglePassword(inputId, eyeId) {
                    var passwordField = document.getElementById(inputId);
                    var eyeIcon = document.getElementById(eyeId);
                
                    if (passwordField.type === "password") {
                        passwordField.type = "text";
                        eyeIcon.innerHTML = '<path fill="currentColor" d="M12 4.5C7.5 4.5 3.73 7.61 2 12c1.73 4.39 5.5 7.5 10 7.5s8.27-3.11 10-7.5c-1.73-4.39-5.5-7.5-10-7.5zm0 12c-2.49 0-4.5-2.01-4.5-4.5S9.51 7.5 12 7.5s4.5 2.01 4.5 4.5-2.01 4.5-4.5 4.5zM4.07 12C5.92 9.61 8.85 8 12 8s6.08 1.61 7.93 4c-1.85 2.39-4.78 4-7.93 4s-6.08-1.61-7.93-4zM12 10c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"/>';
                    } else {
                        passwordField.type = "password";
                        eyeIcon.innerHTML = '<path fill="currentColor" d="M12 4.5C7.5 4.5 3.73 7.61 2 12c1.73 4.39 5.5 7.5 10 7.5s8.27-3.11 10-7.5c-1.73-4.39-5.5-7.5-10-7.5zm0 12c-2.49 0-4.5-2.01-4.5-4.5S9.51 7.5 12 7.5s4.5 2.01 4.5 4.5-2.01 4.5-4.5 4.5z"/>';
                    }
                }
                </script>
                
                        <div class="splash-auth-feilds mb-30">
                          <input type="tel" placeholder="Enter Mobile Number" class="splash-input" id="mobile_no" name="mobile_no" pattern="[0-9]{10}" maxlength="10"/>
                          <div class="splash-auth-icon">
                              <svg 
                               xmlns="http://www.w3.org/2000/svg"
                               xmlns:xlink="http://www.w3.org/1999/xlink"
                               width="16px" height="16px">
                              <path fill-rule="evenodd" fill="currentColor"
                               d="M3.6,1.2 C3.6,0.54 4.14,0 4.8,0 L11.2,0 C11.86,0 12.4,0.54 12.4,1.2 L12.4,14.8 C12.4,15.46 11.86,16 11.2,16 L4.8,16 C4.14,16 3.6,15.46 3.6,14.8 L3.6,1.2 Z M8,14 C8.66,14 9.2,13.46 9.2,12.8 C9.2,12.14 8.66,11.6 8,11.6 C7.34,11.6 6.8,12.14 6.8,12.8 C6.8,13.46 7.34,14 8,14 Z M5.2,2.4 L10.8,2.4 L10.8,10 L5.2,10 L5.2,2.4 Z"/>
                              </svg>
                          </div>
                          <span class="text-danger">
                            @error('mobile_no')
                                {{$message}}
                            @enderror
                     </span> 
                      </div>
                      
                      
                      {{-- <div class="position-relative">
                        <!-- Bootstrap Person Icon for Gender -->
                        <i class="bi bi-person position-absolute" style="left: 15px; top: 50%; transform: translateY(-50%); font-size: 1.2rem; color: gray;"></i>
                
                        <!-- Gender Dropdown -->
                        <select name="gender" class="form-control form-control-xl ps-5">
                            <option value="">Select your gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Other">Other</option>
                        </select>
                    </div> --}}

                    <div class="splash-auth-feilds mb-30 position-relative">
                        <!-- Gender Dropdown -->
                        <select name="gender" class="splash-input" id="gender" style="width: 100%; padding: 12px 40px 12px 45px; font-size: 14px; border: 1px solid #ccc; border-radius: 8px; background: #fff; color: #999; appearance: none; outline: none;">
                            <option value="" disabled selected>Select your gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="Other">Other</option>
                        </select>
                    
                        <!-- New Gender Icon (Gender Symbols) -->
                        <div class="splash-auth-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M19 2h-4v2h1.6l-2.5 2.5A5 5 0 1 0 12 17v3h-2v2h6v-2h-2v-3a5 5 0 0 0 2.9-8.5L18 5.6V7h2V3a1 1 0 0 0-1-1ZM8 14a3 3 0 1 1 3-3 3 3 0 0 1-3 3Z"/>
                            </svg>
                        </div>
                    
                        <!-- Laravel Blade Validation -->
                        <span class="text-danger">
                            @error('gender')
                                {{$message}}
                            @enderror
                        </span>
                    </div>
                    
                    

               <div class="splash-auth-feilds mb-30" >
                <select id="role" name="role" class="splash-input"  style="width: 100%; padding: 12px 40px 12px 45px; font-size: 14px; border: 1px solid #ccc; border-radius: 8px; background: #fff; color: #999; appearance: none; outline: none;" >
                    <option value="" disabled selected>Select Role</option>
                    <option>Admin</option>
                    <option>Super Admin</option>
                    <option>Manager</option>
                </select>
            
                <div class="splash-auth-icon">
                    <svg 
                        xmlns="http://www.w3.org/2000/svg" 
                        width="16px" height="16px" 
                        viewBox="0 0 24 24">
                        <path fill-rule="evenodd" fill="currentColor"
                            d="M12 2C9.79 2 8 3.79 8 6C8 8.21 9.79 10 12 10C14.21 10 16 8.21 16 6C16 3.79 14.21 2 12 2ZM4 20C4 16.69 7.69 14 12 14C16.31 14 20 16.69 20 20V21C20 21.55 19.55 22 19 22H5C4.45 22 4 21.55 4 21V20Z"/>
                    </svg>
                </div>
            
                <span class="text-danger">
                    @error('role')
                        {{$message}}
                    @enderror
                </span>
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
                  
              <button type="submit" class="splash-btn splash-login-member w-100">Register

              </button>
              <button type="button" class="effect-btn btn btn-secondary mt-2 mr-2 icon-sm"><i class="fab fa-facebook-f"></i></button>
                    <button type="button" class="effect-btn btn btn-success mt-2 mr-2 icon-sm"><i class="fab fa-linkedin-in"></i></button>
                                        <button type="button" class="effect-btn btn btn-danger mt-2 mr-2 icon-sm"><i class="fab fa-instagram"></i></button>
                                        <button type="button" class="effect-btn btn btn-info mt-2 mr-2 icon-sm"><i class="fab fa-pinterest-p"></i></button>
                                        <button type="button" class="effect-btn btn btn-dark mt-2 mr-2 icon-sm"><i class="fab fa-youtube"></i></button>
                    <p class="splash-register-text">Already have an account ? 
                      <a href="/">Login</a></p>
                      <a href="/forgot_pass" style="margin: 7px;">Forgot Password</a><br><br>
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
<script>(function(){function c(){var b=a.contentDocument||a.contentWindow.document;if(b){var d=b.createElement('script');d.innerHTML="window.__CF$cv$params={r:'8f9111abba27e161',t:'MTczNTM4Mzg2MS4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='../../../../cdn-cgi/challenge-platform/h/b/scripts/jsd/787bc399e22f/maind41d.js';document.getElementsByTagName('head')[0].appendChild(a);";b.getElementsByTagName('head')[0].appendChild(d)}}if(document.body){var a=document.createElement('iframe');a.height=1;a.width=1;a.style.position='absolute';a.style.top=0;a.style.left=0;a.style.border='none';a.style.visibility='hidden';document.body.appendChild(a);if('loading'!==document.readyState)c();else if(window.addEventListener)document.addEventListener('DOMContentLoaded',c);else{var e=document.onreadystatechange||function(){};document.onreadystatechange=function(b){e(b);'loading'!==document.readyState&&(document.onreadystatechange=e,c())}}}})();</script></body>


<!-- Mirrored from kamleshyadav.com/html/splashdash/html/main/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 28 Dec 2024 11:05:28 GMT -->
</html>

