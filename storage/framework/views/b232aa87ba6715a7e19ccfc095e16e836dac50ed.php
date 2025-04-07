<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<style>
    .booking{
        font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif ;

    }
</style>
<div class="booking">
    <h1>Bookings</h1>

</div>

<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.12.4/dist/sweetalert2.min.css" rel="stylesheet">
<br>
    
    <br>
        <table class="table  table-styled table-responsive " >
            <thead class="thead-dark">
                 
                <tr>
                    <th>SR.NO</th>
                    <th>Service Name</th>
                    <th>Price</th>
                    <th>Discount</th>
                    <th>Cash/Online</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Address</th>
                    <th>Total Amount</th>
                    <th>Status</th>
                    <th>Image</th>
                    
    
    
    
                </tr>
            </thead>
            <tbody class="table-group-divider Table-hover" >
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="table-light">
                        <td scope="row"><?php echo e($loop->index + 1); ?></td>
                        <td><?php echo e($item->pname); ?></td>
                        
                        <td><?php echo e($item->amount); ?></td>
                        <td><?php echo e($item->c_discount); ?></td>
                        <td><?php echo e($item->c_o); ?></td>
                        <td><?php echo e($item->date); ?></td>
                        <td><?php echo e($item->time); ?></td>
                        <td><?php echo e($item->address); ?></td>
                        <td><?php echo e($item->tot_amount); ?></td>
                        <td><?php echo e($item->status); ?></td>


                        
    
    
    
                        
                            <td><img src="/img/<?php echo e($item->pic1); ?>" height="100" width="100" >
                            </td>
                        
                        
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.12.4/dist/sweetalert2.all.min.js"></script>
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

        

<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/homeservice/resources/views/booking.blade.php ENDPATH**/ ?>