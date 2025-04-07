
<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<style>
<style>
    #service_id option {
        font-size: 14px; /* Adjust as needed */
    }
</style

</style>
<h1>Add Service</h1>
<form class="d-flex" method="post" action="<?php echo e(route('service.store')); ?>" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <div class="col">
        <div class="mb-3">
            <label for="sname" class="form-label">Service Name</label>
            <input type="text" name="sname" id="sname" class="form-control" placeholder="Enter service name"
                required aria-describedby="helpId" />
            <?php $__errorArgs = ['sname'];
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
            <label for="pic1" class="form-label">Service Pic1</label>
            <input type="file" name="pic1" id="pic1" class="form-control" accept="image/*" required
                aria-describedby="helpId" />
            <?php $__errorArgs = ['pic1'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>  <!-- Validation error for cat_pic -->
                <small class="text-danger"><?php echo e($message); ?></small>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="mb-3">
            <label for="pic2" class="form-label">Service Pic2</label>
            <input type="file" name="pic2" id="pic2" class="form-control" 
                aria-describedby="helpId" />
            <?php $__errorArgs = ['pic2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>  <!-- Validation error for cat_pic -->
                <small class="text-danger"><?php echo e($message); ?></small>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="mb-3">
            <label for="pic3" class="form-label">Service Pic3</label>
            <input type="file" name="pic3" id="pic3" class="form-control" 
                aria-describedby="helpId" />
            <?php $__errorArgs = ['pic3'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>  <!-- Validation error for cat_pic -->
                <small class="text-danger"><?php echo e($message); ?></small>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="mb-3">
            <label for="video" class="form-label">Video</label>
            <input type="file" name="video" id="video" class="form-control" accept="image/*" required
                aria-describedby="helpId" />
            <?php $__errorArgs = ['video'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>  <!-- Validation error for cat_pic -->
                <small class="text-danger"><?php echo e($message); ?></small>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="mb-3">
            <label for="duration" class="form-label"> Duration</label>
            <input type="text" name="duration" id="duration" class="form-control" placeholder="Enter Duration"
                required aria-describedby="helpId" />
            <?php $__errorArgs = ['duration'];
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
            <label for="desc" class="form-label"> Description</label>
            <input type="text" name="desc" id="desc" class="form-control" placeholder="Enter Description"
                required aria-describedby="helpId" />
            <?php $__errorArgs = ['desc'];
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
            <label for="desc2" class="form-label"> Description2</label>
            <input type="text" name="desc2" id="desc2" class="form-control" placeholder="Enter Second Description"
                required aria-describedby="helpId" />
            <?php $__errorArgs = ['desc2'];
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
            <label for="rating" class="form-label"> Rating</label>
            <input type="text" name="rating" id="rating" class="form-control" placeholder="Enter Rating"
                required aria-describedby="helpId" />
            <?php $__errorArgs = ['rating'];
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
            <label for="price" class="form-label"> Price</label>
            <input type="text" name="price" id="price" class="form-control" placeholder="Enter Price"
                required aria-describedby="helpId" />
            <?php $__errorArgs = ['price'];
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
            <label for="discount" class="form-label"> Discount</label>
            <input type="text" name="discount" id="discount" class="form-control" placeholder="Enter Discount"
                required aria-describedby="helpId" />
            <?php $__errorArgs = ['discount'];
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
            <label for="service_id" class="form-label">Choose a category:</label>
            <select name="service_id" id="service_id" class="form-select">
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                   <option value="<?php echo e($item->_id); ?>"><?php echo e($item->cat_name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select> 
        </div>
        <div class="col-12">
            <div class="form-check form-switch">
              <input class="form-check-input" name="popular" id="popular"
               type="checkbox" role="switch" checked>
              <label class="form-check-label" for="flexSwitchCheckChecked">Popular</label>
            </div>
          </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Insert</button>
            <button type="reset" class="btn btn-danger">Clear</button>
        </div>
    </div>
</form>

<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH /var/www/homeservice/resources/views/service/create.blade.php ENDPATH**/ ?>