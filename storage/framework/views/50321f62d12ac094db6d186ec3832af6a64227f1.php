








 <?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<style>
    .booking {
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    }

    /* .service-card {
        position: fixed;
        bottom: -100%;
        left: 50%;
        transform: translateX(-50%);
        width: 90%;
        max-width: 600px;
        background: white;
        box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.2);
        border-radius: 10px;
        transition: bottom 0.5s ease-in-out;
        overflow-y: auto;
        max-height: 70vh;
        padding: 20px;
    } */


    .service-card {
    position: fixed;
    bottom: -100%;
    left: 50%;
    transform: translateX(-50%);
    width: 90%;
    max-width: 600px;
    background: white;
    box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.2);
    border-radius: 10px;
    transition: bottom 0.5s ease-in-out;
    overflow-y: auto;
    max-height: 70vh;
    padding: 20px;
    **z-index: 1050;** /* Add this line */
}

    /* .service-card.active {
        bottom: 10%;
    } */

    .service-card {
    position: fixed;
    bottom: -100%;
    left: 50%;
    transform: translateX(-50%);
    width: 90%;
    max-width: 600px;
    background: white;
    box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.2);
    border-radius: 10px;
    transition: bottom 0.5s ease-in-out;
    overflow-y: auto;
    max-height: 70vh;
    padding: 20px;
    z-index: 1050; /* Ensure card is above */
}

.service-card.active {
    bottom: 10%;
}

.pagination {
    position: relative;
    z-index: 1; /* Lower than service-card */
}

/* When card is active, send pagination further back */
.service-card.active ~ .pagination {
    z-index: -1;
}


    .close-btn {
        position: absolute;
        right: 10px;
        top: 10px;
        background: none;
        border: none;
        font-size: auto;
        z-index: 10;
        height: auto;
        width: auto;
    }

    .carousel-inner img, .carousel-inner video {
        border-radius: 10px;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
    }

    .carousel-control-prev-icon, .carousel-control-next-icon {
        filter: invert(1);
    }

    .carousel-indicators {
        position: absolute;
        bottom: 10px;
    }

    .carousel-indicators button {
        background-color: #007bff;
        border-radius: 50%;
        width: 10px;
        height: 10px;
        margin: 2px;
    }
    .show{
        border: 1px;
        border-radius: 5%;
    }
    #serviceDuration{
        color: grey;
    }
    .btn-light{
        width: 10px;
    }
    .pagination {
    z-index: 10;
    position: relative;
}

</style>

<div class="booking">
    <h1>Services</h1>
</div>

<a href="<?php echo e(route('service.create')); ?>" class="effect-btn btn btn-secondary mt-3 mr-3 md-btn">+ Add service</a>
<br><br>

<table class="table table-styled table-responsive">
    <thead class="thead-dark">
        <tr>
            <th>SR.NO</th>
            <th>Service Name</th>
            <th>Price</th>
            <th>Discount</th>
            <th>Image</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody class="table-group-divider Table-hover">
        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr class="table-light">
            <td scope="row"><?php echo e($loop->index + 1); ?></td>
            <td><?php echo e($item->sname); ?></td>
            <td><?php echo e($item->price); ?></td>
            <td><?php echo e($item->discount); ?></td>
            <td><img src="/img/<?php echo e($item->pic1); ?>" height="100" width="100"></td>
            <td>
                <div class="dropdown">
                    <button class="btn action-btn" type="button" style="font-weight: bold; font-size:20px">
                        &#x22EE;
                    </button>
                    <ul class="dropdown-menu custom-dropdown">
                        <li>
                            <a class="dropdown-item bg-primary text-white" href="<?php echo e(route('service.edit', $item->_id)); ?>">
                                <i class="fa fa-edit"></i> Edit
                            </a>
                        </li>
                        <li>
                            <button class="dropdown-item bg-success text-white" onclick="showServiceDetails(<?php echo e(json_encode($item)); ?>)">
                                <i class="fa fa-eye"></i> Show
                            </button>
                        </li>
                        <li>
                            <form class="d-inline" onsubmit="confirmDelete(event)" action="<?php echo e(route('service.destroy', $item->_id)); ?>" method="POST">
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
</table>
<?php echo e($data->links()); ?>


<div id="serviceCard" class=" service-card">
    <button onclick="closeServiceCard()" class=" btn close-btn text-white btn-dark">
        <i class="fa fa-times"></i>
    </button>
    <div id="serviceCarousel" class="carousel slide mb-3" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#serviceCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#serviceCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#serviceCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#serviceCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img id="serviceImage1" class="d-block w-100 rounded" alt="Service Image 1">
            </div>
            <div class="carousel-item">
                <img id="serviceImage2" class="d-block w-100 rounded" alt="Service Image 2">
            </div>
            <div class="carousel-item">
                <img id="serviceImage3" class="d-block w-100 rounded" alt="Service Image 3">
            </div>
            <div class="carousel-item">
                <video id="serviceVideo" class="d-block w-100 rounded" controls autoplay></video>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#serviceCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#serviceCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="container show">
        <h1 id="serviceTitle" class=" font-weight-bold"></h1><br>
        <p><strong><i class="fa-solid fa-star"></i></strong><span id="serviceRating"></span></p><br>
        <p> <b>₹<span id="servicePrice"></span></b> <i class="fas fa-grip-lines-vertical"></i> <span id="serviceDuration"></span></p><br>
        <p><strong>Discount:</strong> <span id="serviceDiscount"></span>%</p><br>
            <p><strong></strong> <span id="serviceDescription"></span></p><br>
    
    </div> 
    <div class="container">
        <h3>What is Inclued :</h3><br>
        <p><strong></strong> <span id="serviceDescription2"></span></p><br>
        
    </div>     
    
</div>

<script>
    function showServiceDetails(service) {
        document.getElementById("serviceTitle").innerText = service.sname;
        document.getElementById("serviceRating").innerText = service.rating;
        document.getElementById("serviceDuration").innerText = service.duration;

        document.getElementById("servicePrice").innerText = service.price;
        document.getElementById("serviceDiscount").innerText = service.discount;
        document.getElementById("serviceDescription").innerText = service.desc || "No description available";
        document.getElementById("serviceDescription2").innerText = service.desc2 || "No description available";

        document.getElementById("serviceImage1").src = "/img/" + service.pic1;
        document.getElementById("serviceImage2").src = "/img/" + service.pic2;
        document.getElementById("serviceImage3").src = "/img/" + service.pic3;
        document.getElementById("serviceVideo").src = "/img/" + service.video;
        // document.getElementById("serviceCard").classList.add("active");
        document.getElementById("serviceCard").classList.add("active");
    document.querySelector(".pagination").style.zIndex = "-1"; // Hide pagination
    }
</script>
<script>
    function closeServiceCard() {
        // document.getElementById("serviceCard").classList.remove("active");
        document.getElementById("serviceCard").classList.remove("active");
        document.querySelector(".pagination").style.zIndex = "1"; // Restore pagination
    }
</script>


<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH /var/www/homeservice/resources/views/service/index.blade.php ENDPATH**/ ?>