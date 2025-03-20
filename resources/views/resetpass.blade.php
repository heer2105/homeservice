<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>

    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.3/font/bootstrap-icons.min.css"
        integrity="sha512-dPXYcDub/aeb08c63jRq/k6GaKccl256JQy/AnOq7CAnEZ9FzSL9wSbcZkMp4R26vBsMLFYH4kQ67/bbV8XaCQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <style>
            img{
                width: 346%;
                height: auto;
                margin: 20%;
                box-shadow: 20px 20px 40px;
            }
        
            .loginBox{    
            width: 470px; 
            height: 576px;    
            background-color: black;
            backdrop-filter: blur(20px);
            box-shadow: 20px 20px 40px;
            position: absolute;
            top: 54%;
            left: 65%;
            transform: translate(-50%,-50%);
        }
        body{
        background-image: url(yellow_bg.jpg);
        background-repeat: no-repeat;
        background-size: cover;
    }
    
    .loginBox a{
        color: white;
        text-decoration: none;
    }
    
    .loginBox a:hover{
        text-decoration: underline;
    }
    
    .icon{
        font-size: 35px;
        margin: 10px;
    }
    
    .icon i:hover{    
        cursor: pointer;
        transform: scale(1.5,1.5);
    }
    
        
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-2">
                <img src="bg_login.jpg" alt="">
            </div>
        </div>
    </div>
    <div class="loginBox">
        <div class="container text-center p-5">
            <form action="/reset_password" method="POST" id="log">
                @csrf
                <input type="hidden" name="username" value="{{username}}" id=""/>
                <h2 class="my-4 text-light">Change Password</h2>
                {{-- <div class="input-group my-4">
                    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user"></i></span>
                    <input type="text" class="form-control" name="username" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                </div> --}}

                <div class="input-group my-4">
                    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-lock"></i></span>
                    <input type="password" class="form-control" name="password" placeholder="Password" aria-label="password" aria-describedby="basic-addon1">
                </div>         
                <div class="input-group my-3">
                    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-lock"></i></span>
                    <input type="password" class="form-control" placeholder="Confirm Password" name="cpassword" aria-label="password2" aria-describedby="basic-addon1">                                        
                </div>            
                <span class="text-danger">@error('cpassword')
                    {{$message}}
                @enderror</span>    
                <div class="d-grid my-3">
                    <button type="submit" class="btn btn-outline-light">Confirm
                        </button>                
                </div>                                 
            </form>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js" integrity="sha512-7eHRwcbYkK4d9g/6tD/mhkf++eoTHwpNM9woBxtPUBWm67zeAfFC+HrdoE2GanKeocly/VxeLvIqwvCdk7qScg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js" integrity="sha512-onMTRKJBKz8M1TnqqDuGBlowlH0ohFzMXYRNebz+yOcc5TQr/zAKsthzhuv0hiyUKEiQEQXEynnXCvNTOk50dg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>

</html>