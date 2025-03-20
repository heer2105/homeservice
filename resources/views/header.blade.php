<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="zxx">
<!--<![endif]-->
<!-- Begin Head -->


<!-- Mirrored from kamleshyadav.com/html/splashdash/html/main/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 28 Dec 2024 11:03:57 GMT -->
<head>
    <title>Elite Cleaners</title>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="MobileOptimized" content="320">
    <!--Start Style -->
    
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/css/fonts.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/css/icofont.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/css/style.css">
	<link rel="stylesheet" id="theme-change" type="text/css" href="#">
    <!-- Favicon Link -->
    <link rel="shortcut icon" type="image/png" href="{{asset('assets')}}/images/favicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">


    <style>
        .sp_logo{
            justify-content: center;
            height: 120px;
            align-content: center;
            /* margin-top: 20px; */
            padding-left: 45px;
        }
        .table-p1{
            background-color: navy
        }
        

        .logoutButton {
  --figure-duration: 100ms;
  --transform-figure: none;
  --walking-duration: 100ms;
  --transform-arm1: none;
  --transform-wrist1: none;
  --transform-arm2: none;
  --transform-wrist2: none;
  --transform-leg1: none;
  --transform-calf1: none;
  --transform-leg2: none;
  --transform-calf2: none;

  background: none;
  border: 0;
  color: #f4f7ff;
  cursor: pointer;
  display: block;
  font-family: 'Quicksand', sans-serif;
  font-size: 14px;
  font-weight: 500;
  height: 40px;
  outline: none;
  padding: 0 0 0 20px;
  perspective: 100px;
  position: relative;
  text-align: left;
  width: 130px;
  -webkit-tap-highlight-color: transparent;
}

.logoutButton::before {
  background-color: #ffffff17;
  border-radius: 5px;
  content: '';
  display: block;
  height: 100%;
  left: 0;
  position: absolute;
  top: 0;
  transform: none;
  transition: transform 50ms ease;
  width: 100%;
  z-index: 2;
}

.logoutButton:hover .door {
  transform: rotateY(20deg);
}

.logoutButton:active::before {
  transform: scale(.96);
}

.logoutButton:active .door {
  transform: rotateY(28deg);
}

.logoutButton.clicked::before {
  transform: none;
}

.logoutButton.clicked .door {
  transform: rotateY(35deg);
}

.logoutButton.door-slammed .door {
  transform: none;
  transition: transform 100ms ease-in 250ms;
}

.logoutButton.falling {
  animation: shake 200ms linear;
}

.logoutButton.falling .bang {
  animation: flash 300ms linear;
}

.logoutButton.falling .figure {
  animation: spin 1000ms infinite linear;
  bottom: -1080px;
  opacity: 0;
  right: 1px;
  transition: transform calc(var(--figure-duration) * 1ms) linear,
    bottom calc(var(--figure-duration) * 1ms) cubic-bezier(0.7, 0.1, 1, 1) 100ms,
    opacity calc(var(--figure-duration) * 0.25ms) linear calc(var(--figure-duration) * 0.75ms);
  z-index: 1;
}

.logoutButton--light::before {
  background-color: #f4f7ff;
  
}

.logoutButton--light .button-text {
  color: #1f2335;

}

.logoutButton--light .door, .logoutButton--light .doorway {
  fill: #1f2335;

}

.button-text {
  color: #999a9c;
  font-weight: bold;
  position: relative;
  z-index: 10;
  margin: 2px;

}

#svg1 {
  display: block;
  position: absolute;
  
}

.figure {
  bottom: 5px;
  fill: #4371f7;
  right: 18px;
  transform: var(--transform-figure);
  transition: transform calc(var(--figure-duration) * 1ms) cubic-bezier(0.2, 0.1, 0.80, 0.9);
  width: 30px;
  z-index: 4;
  
}

.door, .doorway {
  bottom: 4px;
  fill: #f4f7ff;
  right: 12px;
  width: 32px;
}

.door {
  transform: rotateY(20deg);
  transform-origin: 100% 50%;
  transform-style: preserve-3d;
  transition: transform 200ms ease;
  z-index: 5;
}

.door path {
  fill: #4371f7;
  stroke: #4371f7;
  stroke-width: 4;
}

.doorway {
  z-index: 3;
}

.bang {
  opacity: 0;
}

.arm1, .wrist1, .arm2, .wrist2, .leg1, .calf1, .leg2, .calf2 {
  transition: transform calc(var(--walking-duration) * 1ms) ease-in-out;
}

.arm1 {
  transform: var(--transform-arm1);
  transform-origin: 52% 45%;
}

.wrist1 {
  transform: var(--transform-wrist1);
  transform-origin: 59% 55%;
}

.arm2 {
  transform: var(--transform-arm2);
  transform-origin: 47% 43%;
}

.wrist2 {
  transform: var(--transform-wrist2);
  transform-origin: 35% 47%;
}

.leg1 {
  transform: var(--transform-leg1);
  transform-origin: 47% 64.5%;
}

.calf1 {
  transform: var(--transform-calf1);
  transform-origin: 55.5% 71.5%;
}

.leg2 {
  transform: var(--transform-leg2);
  transform-origin: 43% 63%;
}

.calf2 {
  transform: var(--transform-calf2);
  transform-origin: 41.5% 73%;
}

@keyframes spin {
  from { transform: rotate(0deg) scale(0.94); }
  to { transform: rotate(359deg) scale(0.94); }
}

@keyframes shake {
  0% { transform: rotate(-1deg); }
  50% { transform: rotate(2deg); }
  100% { transform: rotate(-1deg); }
}

@keyframes flash {
  0% { opacity: 0.4; }
  100% { opacity: 0; }
}

html, body {
  height: 100%;
}



#logoutback {
  align-items: center;
  display: flex;
  height: 100%;
  justify-content: center;
  width: 50%;
}

#logoutbtn {
  margin: 10px;
}
    </style>
</head>

<body>
	<div class="loader">
	  <div class="spinner">
		<img src="{{asset('assets')}}/images/loader.gif" alt=""/>
	  </div> 
	</div>
    <!-- Main Body -->
    <div class="page-wrapper">
        <!-- Header Start -->
        <header class="header-wrapper main-header">
            <div class="header-inner-wrapper">
                <div class="header-right">
                    <div class="serch-wrapper">
                        {{-- <form method="POST" action="/search">
                          @csrf
                            <input type="search"  aria-label="Search" name="search" placeholder="Search Here...">
                            <button class="btn btn-dark my-2 my-sm-0" type="submit"><i
                              class="fa-solid fa-magnifying-glass"></i></button>
                        </form> --}}

                        <form method="POST" action="/search">
                          @csrf
                          <input type="search" name="search" placeholder="Search Here..." 
                                 value="{{ request('search') }}" aria-label="Search">
                                 <button class="btn btn-dark my-2 my-sm-0" type="submit"><i
                                  class="fa-solid fa-magnifying-glass"></i></button>
                      </form>
                      
                        <a class="search-close" href="javascript:void(0);"><span class="icofont-close-line"></span></a>
                    </div>
                    <div class="header-left">
                        <div class="header-links">
                            <a href="javascript:void(0);" class="toggle-btn">
                                <span></span>
                            </a>
                        </div>
                        <div class="header-links search-link">
                            <a class="search-toggle" href="javascript:void(0);">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve">
                                    <path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23
                                    s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92
                                    c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17
                                    s-17-7.626-17-17S14.61,6,23.984,6z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="header-controls">
                        <div class="setting-wrapper header-links">
                           
                        </div>
                        

                        

                        <div class="notification-wrapper header-links">
                            
                        </div>
                        <div class="user-info-wrapper header-links">
                          

                          <a href="javascript:void(0);" class="user-info">
                              {{-- <img src="assets/images/user.jpg" alt="" class="user-img"> --}}
                              

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
                            
                                <img src="{{ asset($avatar) }} " class="user-img" onclick="window.location.href='/myprofile'" style="cursor: pointer;" alt="User Avatar">
                                <div class="blink-animation">
                                  <span class="blink-circle"></span>
                                  <span class="main-circle"></span>
                              </div>
                            </div>
                            {{-- <div class="ms-3 name">
                                <h5 class="font-bold">{{ $user->username  }}</h5>
                                <h6 class="text-muted mb-0">{{ $user->email  }}</h6>  
                            </div> --}}
                            

                          </a>
                        </div>
                        
            <div class="background background--light" id="logoutback">
      <button class="logoutButton logoutButton--dark" id="logoutbtn">
        <svg class="doorway" viewBox="0 0 100 100" id="svg1">
          <path
            d="M93.4 86.3H58.6c-1.9 0-3.4-1.5-3.4-3.4V17.1c0-1.9 1.5-3.4 3.4-3.4h34.8c1.9 0 3.4 1.5 3.4 3.4v65.8c0 1.9-1.5 3.4-3.4 3.4z"
          />
          <path
            class="bang"
            d="M40.5 43.7L26.6 31.4l-2.5 6.7zM41.9 50.4l-19.5-4-1.4 6.3zM40 57.4l-17.7 3.9 3.9 5.7z"
          />
        </svg>
        <svg class="figure" viewBox="0 0 100 100" id="svg1">
          <circle cx="52.1" cy="32.4" r="6.4" />
          <path
            d="M50.7 62.8c-1.2 2.5-3.6 5-7.2 4-3.2-.9-4.9-3.5-4-7.8.7-3.4 3.1-13.8 4.1-15.8 1.7-3.4 1.6-4.6 7-3.7 4.3.7 4.6 2.5 4.3 5.4-.4 3.7-2.8 15.1-4.2 17.9z"
          />
          <g class="arm1">
            <path
              d="M55.5 56.5l-6-9.5c-1-1.5-.6-3.5.9-4.4 1.5-1 3.7-1.1 4.6.4l6.1 10c1 1.5.3 3.5-1.1 4.4-1.5.9-3.5.5-4.5-.9z"
            />
            <path
              class="wrist1"
              d="M69.4 59.9L58.1 58c-1.7-.3-2.9-1.9-2.6-3.7.3-1.7 1.9-2.9 3.7-2.6l11.4 1.9c1.7.3 2.9 1.9 2.6 3.7-.4 1.7-2 2.9-3.8 2.6z"
            />
          </g>
          <g class="arm2">
            <path
              d="M34.2 43.6L45 40.3c1.7-.6 3.5.3 4 2 .6 1.7-.3 4-2 4.5l-10.8 2.8c-1.7.6-3.5-.3-4-2-.6-1.6.3-3.4 2-4z"
            />
            <path
              class="wrist2"
              d="M27.1 56.2L32 45.7c.7-1.6 2.6-2.3 4.2-1.6 1.6.7 2.3 2.6 1.6 4.2L33 58.8c-.7 1.6-2.6 2.3-4.2 1.6-1.7-.7-2.4-2.6-1.7-4.2z"
            />
          </g>
          <g class="leg1">
            <path
              d="M52.1 73.2s-7-5.7-7.9-6.5c-.9-.9-1.2-3.5-.1-4.9 1.1-1.4 3.8-1.9 5.2-.9l7.9 7c1.4 1.1 1.7 3.5.7 4.9-1.1 1.4-4.4 1.5-5.8.4z"
            />
            <path
              class="calf1"
              d="M52.6 84.4l-1-12.8c-.1-1.9 1.5-3.6 3.5-3.7 2-.1 3.7 1.4 3.8 3.4l1 12.8c.1 1.9-1.5 3.6-3.5 3.7-2 0-3.7-1.5-3.8-3.4z"
            />
          </g>
          <g class="leg2">
            <path
              d="M37.8 72.7s1.3-10.2 1.6-11.4 2.4-2.8 4.1-2.6c1.7.2 3.6 2.3 3.4 4l-1.8 11.1c-.2 1.7-1.7 3.3-3.4 3.1-1.8-.2-4.1-2.4-3.9-4.2z"
            />
            <path
              class="calf2"
              d="M29.5 82.3l9.6-10.9c1.3-1.4 3.6-1.5 5.1-.1 1.5 1.4.4 4.9-.9 6.3l-8.5 9.6c-1.3 1.4-3.6 1.5-5.1.1-1.4-1.3-1.5-3.5-.2-5z"
            />
          </g>
        </svg>
        <svg class="door" viewBox="0 0 100 100" id="svg1">
          <path
            d="M93.4 86.3H58.6c-1.9 0-3.4-1.5-3.4-3.4V17.1c0-1.9 1.5-3.4 3.4-3.4h34.8c1.9 0 3.4 1.5 3.4 3.4v65.8c0 1.9-1.5 3.4-3.4 3.4z"
          />
          <circle cx="66" cy="50" r="3.7" />
        </svg>
        <a href="/logout"><span class="button-text">Logout</span></a>
      </button>
    </div>

        </header>
        <!-- Sidebar Start -->
        <aside class="sidebar-wrapper">
			<div class="logo-wrapper">
				<a href="index.html" class="admin-logo">
                    
					<img src="{{asset('assets')}}/images/Elite cleaners logo.png" alt="" class="sp_logo" ">
                    {{-- <h1>EliteCleaners</h1> --}}
					{{-- <img src="{{asset('assets')}}/images/Elite cleaners logo.png" alt="" class="sp_mini_logo"> --}}
				</a>
			</div>
            <div class="side-menu-wrap">
                <ul class="main-menu">
                    <li>
                        <a href="/" class="active">
                            <span class="icon-menu feather-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                            </span>
                            <span class="menu-text">
                                Dashboard
                            </span>
                        </a>
                        
                    </li>
                    
                    <li>
                        <a href="/service">
                            <span class="icon-menu feather-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-package"><line x1="16.5" y1="9.4" x2="7.5" y2="4.21"></line><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
                            </span>
                            <span class="menu-text">
                                Services
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="/booking">
                            <span class="icon-menu feather-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-truck"><rect x="1" y="3" width="15" height="13"></rect><polygon points="16 8 20 8 23 11 23 16 16 16 16 8"></polygon><circle cx="5.5" cy="18.5" r="2.5"></circle><circle cx="18.5" cy="18.5" r="2.5"></circle></svg>
                            </span>
                            <span class="menu-text">
                                Bookings
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="/customer">
                            <span class="icon-menu feather-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                            </span>
                            <span class="menu-text">
                                Customers
                            </span>
                        </a>
                    </li>
                    
                    
                    <li>
                        <a href="/category">
                            <span class="icon-menu feather-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid nav-icon"><rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect></svg>
                            </span>
                            <span class="menu-text">
                                Category 
                            </span>
                        </a>
                    </li>

                    <li>
                        <a href="/banner">
                           
                            <span class="icon-menu feather-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-square nav-icon">
                                    <rect x="3" y="3" width="18" height="18"></rect>
                                </svg>
                            </span>
                            
                            <span class="menu-text">
                                Banner 
                            </span>
                        </a>
                    </li>

                    
                    <li>
                        <a href="/coupon">
                            <span class="icon-menu feather-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-ticket nav-icon">
                                    <path d="M3 9V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2v4a2 2 0 0 0 0 6v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4a2 2 0 0 0 0-6z"></path>
                                    <path d="M12 5v14"></path>
                                </svg>
                            </span>
                            <span class="menu-text">
                                Coupon
                            </span>
                        </a>
                    </li>
                    
                  <li>
                    <a href="/combo">
                        <span class="icon-menu feather-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box nav-icon">
                                <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4a2 2 0 0 0 1-1.73z"></path>
                                <polyline points="3.29 7 12 12 20.71 7"></polyline>
                                <line x1="12" y1="22" x2="12" y2="12"></line>
                            </svg>
                        </span>
                        <span class="menu-text">
                            Combos
                        </span>
                    </a>
                </li>
                
                  
                    <li>
                      <a href="/myprofile">
                          <span class="icon-menu feather-icon">
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user nav-icon">
                                  <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                  <circle cx="12" cy="7" r="4"></circle>
                              </svg>
                          </span>
                          <span class="menu-text">
                               Profile
                          </span>
                      </a>
                  </li>
                  
                   
            </div>
        </aside>
        <!-- Container Start -->
        
        <div class="page-wrapper">
            <div class="main-content">

            