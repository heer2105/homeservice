
<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<h1>Add Category</h1>
<form class="d-flex" method="post" action="<?php echo e(route('category.store')); ?>" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <div class="col">
        <div class="mb-3">
            <label for="cat_name" class="form-label">Category Name</label>
            <input type="text" name="cat_name" id="cat_name" class="form-control" placeholder="Enter category name"
                required aria-describedby="helpId" />
            <?php $__errorArgs = ['cat_name'];
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
            <label for="cat_pic" class="form-label">Category Pic</label>
            <input type="file" name="cat_pic" id="cat_pic" class="form-control" accept="image/*" required
                aria-describedby="helpId" />
            <?php $__errorArgs = ['cat_pic'];
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
            <button type="submit" class="btn btn-primary">Insert</button>
            <button type="reset" class="btn btn-danger">Clear</button>
        </div>
    </div>
</form>

<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH /var/www/homeservice/resources/views/category/create.blade.php ENDPATH**/ ?>