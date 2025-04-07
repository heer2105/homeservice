
<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<h1>Add Coupon</h1>
<form class="d-flex" method="post" action="<?php echo e(route('coupon.store')); ?>" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <div class="col">
        <div class="mb-3">
            <label for="c_code" class="form-label">Coupon Code</label>
            <input type="text" name="c_code" id="c_code" class="form-control" placeholder="Enter coupon code"
                required aria-describedby="helpId" />
            <?php $__errorArgs = ['c_code'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>  <!-- Validation error for category_name -->
                <small class="text-danger"><?php echo e($message); ?></small>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="mb-3">
            <label for="c_desc" class="form-label">Coupon Description</label>
            <input type="text" name="c_desc" id="c_desc" class="form-control" placeholder="Enter coupon description"
                required aria-describedby="helpId" />
            <?php $__errorArgs = ['c_desc'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>  <!-- Validation error for category_name -->
                <small class="text-danger"><?php echo e($message); ?></small>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="mb-3">
            <label for="c_title" class="form-label">Coupon Title</label>
            <input type="text" name="c_title" id="c_title" class="form-control" placeholder="Enter coupon title"
                required aria-describedby="helpId" />
            <?php $__errorArgs = ['c_title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>  <!-- Validation error for category_name -->
                <small class="text-danger"><?php echo e($message); ?></small>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="mb-3">
            <label for="c_dis" class="form-label">Coupon Discount</label>
            <input type="text" name="c_dis" id="c_dis" class="form-control" placeholder="Enter coupon discount"
                required aria-describedby="helpId" />
            <?php $__errorArgs = ['c_dis'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>  <!-- Validation error for category_name -->
                <small class="text-danger"><?php echo e($message); ?></small>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="mb-3">
            <label for="c_maxamt" class="form-label">Coupon Max Amount</label>
            <input type="text" name="c_maxamt" id="c_maxamt" class="form-control" placeholder="Enter coupon max amount"
                required aria-describedby="helpId" />
            <?php $__errorArgs = ['c_maxamt'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>  <!-- Validation error for category_name -->
                <small class="text-danger"><?php echo e($message); ?></small>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="col-12">
            <label for="yourUsername" class="form-label">Coupon Pic</label>
            <div class="input-group has-validation">
              <input type="file" name="cat_pic" class="form-control" id="yourPassword">
              <span class="text-danger">
                <?php $__errorArgs = ['cat_pic'];
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
              <div class="invalid-feedback">Please Select Coupon Pic!</div>
            </div>
          </div>

          <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <input type="text" name="status" id="status" class="form-control" placeholder="Enter status"
                required aria-describedby="helpId" />
            <?php $__errorArgs = ['status'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>  <!-- Validation error for category_name -->
                <small class="text-danger"><?php echo e($message); ?></small>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        

        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Insert</button>
            <button type="reset" class="btn btn-danger">Clear</button>
        </div>
    </div>
</form>

<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH /var/www/homeservice/resources/views/coupon/create.blade.php ENDPATH**/ ?>