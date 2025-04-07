<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="container">
        <h1>Update service</h1>
        <form action="<?php echo e(route('service.update',$service->_id)); ?>" method="POST" enctype="multipart/form-data">
           <?php echo csrf_field(); ?>
           <?php echo method_field('PUT'); ?>
            <div class="mb-3">
                <label for="" class="form-label">service name</label>
                <input type="text" class="form-control" name="sname" value="<?php echo e($service->sname); ?>" id="" aria-describedby="helpId"
                    placeholder="" />
                
                    <span class="text-danger">
                        <?php $__errorArgs = ['sname'];
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
                <label for="" class="form-label">service pic1</label>
                <input type="file" class="form-control" name="pic1" id="" aria-describedby="helpId"
                    placeholder="" />
                    <span class="text-danger">
                        <?php $__errorArgs = ['pic1'];
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
                <label for="" class="form-label">service pic2</label>
                <input type="file" class="form-control" name="pic2" id="" aria-describedby="helpId"
                    placeholder="" />
                    <span class="text-danger">
                        <?php $__errorArgs = ['pic2'];
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
                <label for="" class="form-label">service pic3</label>
                <input type="file" class="form-control" name="pic3" id="" aria-describedby="helpId"
                    placeholder="" />
                    <span class="text-danger">
                        <?php $__errorArgs = ['pic3'];
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
                <label for="Video" class="form-label">service Video</label>
                <input type="file" class="form-control" name="video" id="" aria-describedby="helpId"
                    placeholder="" />
                    <span class="text-danger">
                        <?php $__errorArgs = ['video'];
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
                <label for="text" class="form-label"> Duration</label>
                <input type="text" class="form-control" name="duration" value="<?php echo e($service->duration); ?>" id="" aria-describedby="helpId"
                    placeholder="" />
                
                    <span class="text-danger">
                        <?php $__errorArgs = ['duration'];
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
                <label for="text" class="form-label"> Rating</label>
                <input type="text" class="form-control" name="rating" value="<?php echo e($service->rating); ?>" id="" aria-describedby="helpId"
                    placeholder="" />
                
                    <span class="text-danger">
                        <?php $__errorArgs = ['rating'];
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
                <label for="" class="form-label">Description</label>
                <input type="text" class="form-control" name="desc" value="<?php echo e($service->desc); ?>" id="" aria-describedby="helpId"
                    placeholder="" />
                
                    <span class="text-danger">
                        <?php $__errorArgs = ['desc'];
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
                <label for="" class="form-label">Description2</label>
                <input type="text" class="form-control" name="desc2" value="<?php echo e($service->desc2); ?>" id="" aria-describedby="helpId"
                    placeholder="" />
                
                    <span class="text-danger">
                        <?php $__errorArgs = ['desc2'];
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
                <label for="" class="form-label">Price</label>
                <input type="text" class="form-control" name="price" value="<?php echo e($service->price); ?>" id="" aria-describedby="helpId"
                    placeholder="" />
                
                    <span class="text-danger">
                        <?php $__errorArgs = ['price'];
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
                <label for="" class="form-label">Discount</label>
                <input type="text" class="form-control" name="discount" value="<?php echo e($service->discount); ?>" id="" aria-describedby="helpId"
                    placeholder="" />
                
                    <span class="text-danger">
                        <?php $__errorArgs = ['discount'];
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
                <label for="service_id" class="form-label">Choose a category:</label>
                <select name="service_id" id="service_id" class="form-select">
                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                       <option value="<?php echo e($item->_id); ?>"><?php echo e($item->cat_name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select> 
            </div>
            <div class="mb-3">

                <button type="submit" class="btn btn-primary">
                    Update
                </button>

            </div>

        </form>
        <?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/homeservice/resources/views/service/edit.blade.php ENDPATH**/ ?>