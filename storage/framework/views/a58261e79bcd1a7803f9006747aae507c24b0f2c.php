<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <main>
    <div class="container">

      <section class="section register min-vh-60 d-flex flex-column ">
        <div class="container">
          <div class="row">
            <div class="col-lg-8 col-md-6 d-flex flex-column  ">

              <!-- End Logo -->
              <div class="mb-1">
                
              </div>
              <div class="card mb-3 ms-5">

                <div class="card-body">

                  <div class="pt-1 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Add Banners</h5>
                  </div>

                  <form class="row g-3 needs-validation" action="<?php echo e(route('banner.store')); ?>" method="POST" enctype="multipart/form-data">
                  
                    <?php echo csrf_field(); ?>
                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Banner Title</label>
                      <div class="input-group has-validation">
                        
                        <input type="text" name="b_name" class="form-control" id="yourUsername" placeholder="Enter Service Name" required>
                        <span class="text-danger">
                          <?php $__errorArgs = ['b_name'];
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
                        <div class="invalid-feedback">Please Banner Name.</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Banner Pic</label>
                      <div class="input-group has-validation">
                        <input type="file" name="b_pic" class="form-control " id="yourPassword">
                        <span class="text-danger">
                          <?php $__errorArgs = ['b_pic'];
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
                        <div class="invalid-feedback">Please Select Banner Pic!</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <div class="form-check form-switch">
                        <input class="form-check-input" name="status"
                         type="checkbox" role="switch" checked>
                        <label class="form-check-label" for="flexSwitchCheckChecked">Active Status</label>
                      </div>
                    </div>

                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Add</button>
                    </div>
                  </form>

                </div>
              </div>
              
            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/homeservice/resources/views/banner/create.blade.php ENDPATH**/ ?>