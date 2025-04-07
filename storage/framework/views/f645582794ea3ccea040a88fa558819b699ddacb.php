

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
</head>

<body>
    <div class="splash-auth-wrapper">
        <div class="splash-auth-box">
            <div class="splash-auth-content">
                <form action="/reset_password" method="POST" class="form">
                    <?php echo csrf_field(); ?>
                    
                    <h2>Hello, Welcome to <span>EliteCleaners</span></h2>
                    <p>Enter your email and we will send you a reset link</p>
                <h2 class="auth-title">Reset Password</h2>
                <input type="hidden" name="username" value="<?php echo e($username); ?>"/>

<div class="splash-auth-form">
    <div class="splash-auth-feilds mb-30">
        <input type="password" placeholder="New Password" class="splash-input" aria-label="New Password" name="password" id="password" />
        <div class="splash-auth-icon">
            <svg 
                xmlns="http://www.w3.org/2000/svg"
                width="16px" height="16px"
                viewBox="0 0 24 24">
                <path fill="currentColor"
                    d="M12 2C9.24 2 7 4.24 7 7V9C5.9 9 5 9.9 5 11V19C5 20.1 5.9 21 7 21H17C18.1 21 19 20.1 19 19V11C19 9.9 18.1 9 17 9V7C17 4.24 14.76 2 12 2zM12 4C13.66 4 15 5.34 15 7V9H9V7C9 5.34 10.34 4 12 4zM7 11H17V19H7V11ZM12 14C11.45 14 11 14.45 11 15V17C11 17.55 11.45 18 12 18C12.55 18 13 17.55 13 17V15C13 14.45 12.55 14 12 14Z"/>
            </svg>
        </div>
        <span class="text-danger">
            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <?php echo e($message); ?>

            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </span> 
    </div>
</div>
<div class="splash-auth-form">
    <div class="splash-auth-feilds mb-30">
        <input type="password" placeholder="Confirm Password" class="splash-input" aria-label="cpassword" name="cpassword" id="cpassword" />
        <div class="splash-auth-icon">
            <svg 
                xmlns="http://www.w3.org/2000/svg"
                width="16px" height="16px"
                viewBox="0 0 24 24">
                <path fill="currentColor"
                    d="M12 2C9.24 2 7 4.24 7 7V9C5.9 9 5 9.9 5 11V19C5 20.1 5.9 21 7 21H17C18.1 21 19 20.1 19 19V11C19 9.9 18.1 9 17 9V7C17 4.24 14.76 2 12 2zM12 4C13.66 4 15 5.34 15 7V9H9V7C9 5.34 10.34 4 12 4zM7 11H17V19H7V11ZM10 16L11.41 17.41L14.83 14L13.42 12.59L11.41 14.58L10 13.17L8.59 14.58L10 16Z"/>
            </svg>
        </div>
        <span class="text-danger">
            <?php $__errorArgs = ['cpassword'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <?php echo e($message); ?>

            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </span> 
    </div>
</div>
                    
                    
                    <div class="splash-auth-btn">
                        <button  class="splash-btn splash-login-member  w-100" type="submit">Confirm</button>
                    </div>
                    <p class="splash-register-text">Already have an account ? 
                        <a href="/">Login</a></p>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.12.4/dist/sweetalert2.all.min.js"></script>

<?php if(Session::get('success')): ?>
<script>
    Swal.fire({
    icon: "error",
    title: "<?php echo e(Session::get('success')); ?>",
    showConfirmButton: false,
    timer: 2500
  });
  </script>
<?php endif; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js" integrity="sha512-7eHRwcbYkK4d9g/6tD/mhkf++eoTHwpNM9woBxtPUBWm67zeAfFC+HrdoE2GanKeocly/VxeLvIqwvCdk7qScg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js" integrity="sha512-onMTRKJBKz8M1TnqqDuGBlowlH0ohFzMXYRNebz+yOcc5TQr/zAKsthzhuv0hiyUKEiQEQXEynnXCvNTOk50dg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="<?php echo e(asset('assets/js/script.js')); ?>"></script>




  </body>
<!-- Mirrored from kamleshyadav.com/html/splashdash/html/main/forgot-pws.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 28 Dec 2024 11:05:28 GMT -->
</html><?php /**PATH /var/www/homeservice/resources/views/reset_password.blade.php ENDPATH**/ ?>