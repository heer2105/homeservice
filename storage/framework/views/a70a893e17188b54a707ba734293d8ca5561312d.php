<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<style>
    .booking{
        font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif ;

    }
</style>
<div class="booking">
    <h1>Categories</h1>

</div>
<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.12.4/dist/sweetalert2.min.css" rel="stylesheet">
<br>
    <a href="<?php echo e(route('category.create')); ?>" class="effect-btn btn btn-secondary mt-3 mr-3 md-btn">+ Add category</a><br><br>
    <br>


    <div class="table-responsive rounded" style="box-shadow: none !important;">
        <table class="table  table-styled table-responsive " >
            <thead class="thead-dark">
                
                <tr>
                    <th>SR.NO</th>
                    <th>category Name</th>
                    <th>category Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody class="table-group-divider Table-hover" >
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr class="table-light">
                    <td scope="row"><?php echo e($loop->index + 1); ?></td>
                    <td><?php echo e($item->cat_name); ?></td>

                    
                        <td><img src="/img/<?php echo e($item->cat_pic); ?>" height="100" width="150" alt="/img/no_image.jpg">
                        </td>
                    
                    <td>
                        <div class="dropdown ">
                            <button class="btn action-btn" type="button" style="font-weight: bold; font-size:20px">
                                &#x22EE; <!-- Three dots icon -->
                            </button>
                            <ul class="dropdown-menu custom-dropdown  ">
                                <li>
                                    <a class="dropdown-item bg-primary text-white" href="<?php echo e(route('category.edit', $item->_id)); ?>">
                                        <i class="fa fa-edit"></i> Edit
                                    </a>
                                </li>
                               
                                <li>
                                    <form class="d-inline" onsubmit="confirmDelete(event)" action="<?php echo e(route('category.destroy', $item->_id)); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" class="dropdown-item bg-danger text-white">
                                            <i class="fa fa-trash"></i> Delete
                                        </button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </tbody>
            <tfoot>
    
            </tfoot>
        </table>
        <?php echo e($data->links()); ?>

    </div>
    
    
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.12.4/dist/sweetalert2.all.min.js"></script>

    <?php if(Session::get('success')): ?>
        
        <script>

        Swal.fire({
            icon: "success",
            title: "<?php echo e(Session::get('success')); ?>",
            showConfirmButton: false,
            timer: 1500
          });

        </script>   
    <?php endif; ?>
    <script>
        function confirmDelete(event) {
            event.preventDefault();
            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    event.target.submit();  // Submit the form after confirmation
                }
            });
        }
        </script>
</div>

<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/homeservice/resources/views/category/index.blade.php ENDPATH**/ ?>