<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="container">
        <h1>Update Category</h1>
        <form action="<?php echo e(route('category.update',$category->_id)); ?>" method="POST" enctype="multipart/form-data">
           <?php echo csrf_field(); ?>
           <?php echo method_field('PUT'); ?>
            <div class="mb-3">
                <label for="" class="form-label">Category name</label>
                <input type="text" class="form-control" name="cat_name" value="<?php echo e($category->cat_name); ?>" id="" aria-describedby="helpId"
                    placeholder="" />
                
                    <span class="text-danger">
                        <?php $__errorArgs = ['cat_name'];
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
            <div class="mb-3">
                <label for="" class="form-label">Category pic</label>
                <input type="file" class="form-control" name="cat_pic" id="" aria-describedby="helpId"
                    placeholder="" />
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
            </div>
            <div class="mb-3">

                <button type="submit" class="btn btn-primary">
                    Update
                </button>

            </div>

        </form>
        <?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/homeservice/resources/views/category/edit.blade.php ENDPATH**/ ?>