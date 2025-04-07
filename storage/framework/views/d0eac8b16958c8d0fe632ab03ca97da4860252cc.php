
            
            
              
            


<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="container text-center my-4">
    <h1 class="mb-3">Explore Our Services</h1>
    <hr>

    <?php if($services->isEmpty()): ?>
        <h4 class="text-muted">No services found.</h4>
    <?php else: ?>
        <div class="row justify-content-center">
            <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-4 mb-4">
                    <div class="card shadow-lg p-3">
                        <div class="card-body">
                            <h4 class="card-title"><?php echo e($item->sname); ?></h4>
                            <h3 class="text-success"><?php echo e($item->price); ?> ₹/-</h3>
                            
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    <?php endif; ?>
</div>

<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH /var/www/homeservice/resources/views/search.blade.php ENDPATH**/ ?>