</div>


</div>
</div>
</div>



<!-- Preview Setting Box -->
<div class="slide-setting-box">
  
    <div class="slide-setting-holder">
        <div class="setting-box-head">
            <h4>Color Options</h4>
            <a href="javascript:void(0);" class="close-btn">Close</a>
        </div>
        <div class="sd-color-op">
            <div id="style-switcher">
                <div>
                    <ul class="colors">
                        <li>
                            <p class='colorchange' id='color'>
                            </p>
                        </li>
                        <li>
                            <p class='colorchange' id='color2'>
                            </p>
                        </li>
                        <li>
                            <p class='colorchange' id='color3'>
                            </p>
                        </li>
                        <li>
                            <p class='colorchange' id='color4'>
                            </p>
                        </li>
                        <li>
                            <p class='colorchange' id='color5'>
                            </p>
                        </li>
                        <li>
                            <p class='colorchange' id='color6'>
                            </p>
                        </li>
                        <li>
                            <p class='colorchange' id='color7'>
                            </p>
                        </li>
                        <li>
                            <p class='colorchange' id='color8'>
                            </p>
                        </li>
                        <li>
                            <p class='colorchange' id='color9'>
                            </p>
                        </li>
                        <li>
                            <p class='colorchange' id='color10'>
                            </p>
                        </li>
                        <li>
                            <p class='colorchange' id='color11'>
                            </p>
                        </li>
                        <li>
                            <p class='colorchange' id='style'>
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
</div>
<!-- Preview Setting -->



<!-- Script Start -->
<script src="<?php echo e(asset('assets')); ?>/js/jquery.min.js"></script>
<script src="<?php echo e(asset('assets')); ?>/js/popper.min.js"></script>
<script src="<?php echo e(asset('assets')); ?>/js/bootstrap.min.js"></script>
<script src="<?php echo e(asset('assets')); ?>/js/swiper.min.js"></script>
<script src="<?php echo e(asset('assets')); ?>/js/apexchart/apexcharts.min.js"></script>
<script src="<?php echo e(asset('assets')); ?>/js/apexchart/control-chart-apexcharts.js"></script>
<!-- Page Specific -->
<script src="<?php echo e(asset('assets')); ?>/js/nice-select.min.js"></script>
<!-- Custom Script -->
<script src="<?php echo e(asset('assets')); ?>/js/custom.js"></script>
<script>
    (function() {
        function c() {
            var b = a.contentDocument || a.contentWindow.document;
            if (b) {
                var d = b.createElement('script');
                d.innerHTML =
                    "window.__CF$cv$params={r:'8f9111131c13e243',t:'MTczNTM4MzgzNy4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='../../../../cdn-cgi/challenge-platform/h/b/scripts/jsd/787bc399e22f/maind41d.js';document.getElementsByTagName('head')[0].appendChild(a);";
                b.getElementsByTagName('head')[0].appendChild(d)
            }
        }
        if (document.body) {
            var a = document.createElement('iframe');
            a.height = 1;
            a.width = 1;
            a.style.position = 'absolute';
            a.style.top = 0;
            a.style.left = 0;
            a.style.border = 'none';
            a.style.visibility = 'hidden';
            document.body.appendChild(a);
            if ('loading' !== document.readyState) c();
            else if (window.addEventListener) document.addEventListener('DOMContentLoaded', c);
            else {
                var e = document.onreadystatechange || function() {};
                document.onreadystatechange = function(b) {
                    e(b);
                    'loading' !== document.readyState && (document.onreadystatechange = e, c())
                }
            }
        }
    })();
</script>

<script >
    document.querySelectorAll('.logoutButton').forEach(button => {
button.state = 'default'

// function to transition a button from one state to the next
let updateButtonState = (button, state) => {
  if (logoutButtonStates[state]) {
    button.state = state
    for (let key in logoutButtonStates[state]) {
      button.style.setProperty(key, logoutButtonStates[state][key])
    }
  }
}

// mouse hover listeners on button
button.addEventListener('mouseenter', () => {
  if (button.state === 'default') {
    updateButtonState(button, 'hover')
  }
})
button.addEventListener('mouseleave', () => {
  if (button.state === 'hover') {
    updateButtonState(button, 'default')
  }
})

// click listener on button
button.addEventListener('click', () => {
  if (button.state === 'default' || button.state === 'hover') {
    button.classList.add('clicked')
    updateButtonState(button, 'walking1')
    setTimeout(() => {
      button.classList.add('door-slammed')
      updateButtonState(button, 'walking2')
      setTimeout(() => {
        button.classList.add('falling')
        updateButtonState(button, 'falling1')
        setTimeout(() => {
          updateButtonState(button, 'falling2')
          setTimeout(() => {
            updateButtonState(button, 'falling3')
            setTimeout(() => {
              button.classList.remove('clicked')
              button.classList.remove('door-slammed')
              button.classList.remove('falling')
              updateButtonState(button, 'default')
            }, 1000)
          }, logoutButtonStates['falling2']['--walking-duration'])
        }, logoutButtonStates['falling1']['--walking-duration'])
      }, logoutButtonStates['walking2']['--figure-duration'])
    }, logoutButtonStates['walking1']['--figure-duration'])
  }
})
})

const logoutButtonStates = {
'default': {
  '--figure-duration': '100',
  '--transform-figure': 'none',
  '--walking-duration': '100',
  '--transform-arm1': 'none',
  '--transform-wrist1': 'none',
  '--transform-arm2': 'none',
  '--transform-wrist2': 'none',
  '--transform-leg1': 'none',
  '--transform-calf1': 'none',
  '--transform-leg2': 'none',
  '--transform-calf2': 'none'
},
'hover': {
  '--figure-duration': '100',
  '--transform-figure': 'translateX(1.5px)',
  '--walking-duration': '100',
  '--transform-arm1': 'rotate(-5deg)',
  '--transform-wrist1': 'rotate(-15deg)',
  '--transform-arm2': 'rotate(5deg)',
  '--transform-wrist2': 'rotate(6deg)',
  '--transform-leg1': 'rotate(-10deg)',
  '--transform-calf1': 'rotate(5deg)',
  '--transform-leg2': 'rotate(20deg)',
  '--transform-calf2': 'rotate(-20deg)'
},
'walking1': {
  '--figure-duration': '300',
  '--transform-figure': 'translateX(11px)',
  '--walking-duration': '300',
  '--transform-arm1': 'translateX(-4px) translateY(-2px) rotate(120deg)',
  '--transform-wrist1': 'rotate(-5deg)',
  '--transform-arm2': 'translateX(4px) rotate(-110deg)',
  '--transform-wrist2': 'rotate(-5deg)',
  '--transform-leg1': 'translateX(-3px) rotate(80deg)',
  '--transform-calf1': 'rotate(-30deg)',
  '--transform-leg2': 'translateX(4px) rotate(-60deg)',
  '--transform-calf2': 'rotate(20deg)'
},
'walking2': {
  '--figure-duration': '400',
  '--transform-figure': 'translateX(17px)',
  '--walking-duration': '300',
  '--transform-arm1': 'rotate(60deg)',
  '--transform-wrist1': 'rotate(-15deg)',
  '--transform-arm2': 'rotate(-45deg)',
  '--transform-wrist2': 'rotate(6deg)',
  '--transform-leg1': 'rotate(-5deg)',
  '--transform-calf1': 'rotate(10deg)',
  '--transform-leg2': 'rotate(10deg)',
  '--transform-calf2': 'rotate(-20deg)'
},
'falling1': {
  '--figure-duration': '1600',
  '--walking-duration': '400',
  '--transform-arm1': 'rotate(-60deg)',
  '--transform-wrist1': 'none',
  '--transform-arm2': 'rotate(30deg)',
  '--transform-wrist2': 'rotate(120deg)',
  '--transform-leg1': 'rotate(-30deg)',
  '--transform-calf1': 'rotate(-20deg)',
  '--transform-leg2': 'rotate(20deg)'
},
'falling2': {
  '--walking-duration': '300',
  '--transform-arm1': 'rotate(-100deg)',
  '--transform-arm2': 'rotate(-60deg)',
  '--transform-wrist2': 'rotate(60deg)',
  '--transform-leg1': 'rotate(80deg)',
  '--transform-calf1': 'rotate(20deg)',
  '--transform-leg2': 'rotate(-60deg)'
},
'falling3': {
  '--walking-duration': '500',
  '--transform-arm1': 'rotate(-30deg)',
  '--transform-wrist1': 'rotate(40deg)',
  '--transform-arm2': 'rotate(50deg)',
  '--transform-wrist2': 'none',
  '--transform-leg1': 'rotate(-30deg)',
  '--transform-leg2': 'rotate(20deg)',
  '--transform-calf2': 'none'
}
}

</script>


</body>


<!-- Mirrored from kamleshyadav.com/html/splashdash/html/main/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 28 Dec 2024 11:04:26 GMT -->

</html>
<?php /**PATH /var/www/homeservice/resources/views/footer.blade.php ENDPATH**/ ?>