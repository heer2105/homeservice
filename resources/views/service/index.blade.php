{{-- @include('header')


<style>
    .booking{
        font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif ;

    }
</style>
<div class="booking">
    <h1>Services</h1>

</div>
<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.12.4/dist/sweetalert2.min.css" rel="stylesheet">
<br>
    <a href="{{ route('service.create') }}" class="effect-btn btn btn-secondary mt-3 mr-3 md-btn" >+ Add service</a><br>
    <br>
        <table class="table  table-styled table-responsive " >
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
            <tbody class="table-group-divider Table-hover" >
                @foreach ($data as $item)
                    <tr class="table-light">
                        <td scope="row">{{ $loop->index + 1 }}</td>
                        <td>{{ $item->sname }}</td>
                        <td>{{ $item->price }}</td>
                        <td>{{ $item->discount }}</td>
                        
                            <td><img src="/img/{{ $item->pic1 }}" height="100" width="100" >
                            </td>
                       
    
                        <td>
                            <div class="dropdown ">
                                <button class="btn action-btn" type="button" style="font-weight: bold; font-size:20px">
                                    &#x22EE; <!-- Three dots icon -->
                                </button>
                                <ul class="dropdown-menu custom-dropdown  ">
                                    <li>
                                        <a class="dropdown-item bg-primary text-white" href="{{ route('service.edit', $item->_id) }}">
                                            <i class="fa fa-edit"></i> Edit
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item bg-success text-white" href="{{ route('service.show', $item->_id) }}">
                                            <i class="fa fa-edit"></i> Show
                                        </a>
                                    </li>
                                    <li>
                                        <form class="d-inline" onsubmit="confirmDelete(event)" action="{{ route('service.destroy', $item->_id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="dropdown-item bg-danger text-white">
                                                <i class="fa fa-trash"></i> Delete
                                            </button>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </td>
                        
                    </tr>
                @endforeach
    
            </tbody>
            <tfoot>
    
            </tfoot>
        </table>
        {{$data->links()}}
    
    @if (Session::get('success'))
        
        <script>

        Swal.fire({
            icon: "success",
            title: "{{Session::get('success')}}",
            showConfirmButton: false,
            timer: 1500
          });

        </script>

        
    @endif
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

        


@include('footer') --}}

{{-- new code  --}}
{{-- @include('header')

<style>
    .booking {
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    }
</style>

<div class="booking">
    <h1>Services</h1>
</div>

<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.12.4/dist/sweetalert2.min.css" rel="stylesheet">
<br>
<a href="{{ route('service.create') }}" class="effect-btn btn btn-secondary mt-3 mr-3 md-btn">+ Add service</a>
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
        @foreach ($data as $item)
        <tr class="table-light">
            <td scope="row">{{ $loop->index + 1 }}</td>
            <td>{{ $item->sname }}</td>
            <td>{{ $item->price }}</td>
            <td>{{ $item->discount }}</td>
            <td><img src="/img/{{ $item->pic1 }}" height="100" width="100"></td>

            <td>
                <div class="dropdown">
                    <button class="btn action-btn" type="button" style="font-weight: bold; font-size:20px">
                        &#x22EE; <!-- Three dots icon -->
                    </button>
                    <ul class="dropdown-menu custom-dropdown">
                        <li>
                            <a class="dropdown-item bg-primary text-white" href="{{ route('service.edit', $item->_id) }}">
                                <i class="fa fa-edit"></i> Edit
                            </a>
                        </li>
                        <li>
                            <!-- Show Button - Triggers Modal -->
                            <button class="dropdown-item bg-success text-white" onclick="showServiceModal({{ json_encode($item) }})">
                                <i class="fa fa-eye"></i> Show
                            </button>
                        </li>
                        <li>
                            <form class="d-inline" onsubmit="confirmDelete(event)" action="{{ route('service.destroy', $item->_id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="dropdown-item bg-danger text-white">
                                    <i class="fa fa-trash"></i> Delete
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{$data->links()}}

<!-- Service Details Modal -->
<div class="modal fade" id="serviceModal" tabindex="-1" aria-labelledby="serviceModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
        <div class="modal-content rounded shadow-lg">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="serviceModalLabel">Service Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Bootstrap Carousel for Service Images -->
                <div id="serviceCarousel" class="carousel slide mb-4" data-bs-ride="carousel">
                    <div class="carousel-inner rounded shadow">
                        <div class="carousel-item active">
                            <img id="serviceImage1" class="d-block w-100 img-fluid rounded" alt="Service Image 1">
                        </div>
                        <div class="carousel-item">
                            <img id="serviceImage2" class="d-block w-100 img-fluid rounded" alt="Service Image 2">
                        </div>
                        <div class="carousel-item">
                            <img id="serviceImage3" class="d-block w-100 img-fluid rounded" alt="Service Image 3">
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

                <!-- Service Details -->
                <p><strong>Name:</strong> <span id="serviceName"></span></p>
                <p><strong>Price:</strong> ₹<span id="servicePrice"></span></p>
                <p><strong>Discount:</strong> <span id="serviceDiscount"></span>%</p>
                <p><strong>Description:</strong> <span id="serviceDescription"></span></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

@if (Session::get('success'))
<script>
    Swal.fire({
        icon: "success",
        title: "{{ Session::get('success') }}",
        showConfirmButton: false,
        timer: 1500
    });
</script>
@endif

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

    function showServiceModal(service) {
        document.getElementById('serviceName').innerText = service.sname;
        document.getElementById('servicePrice').innerText = service.price;
        document.getElementById('serviceDiscount').innerText = service.discount;
        document.getElementById('serviceDescription').innerText = service.desc || "No description available";

        document.getElementById('serviceImage1').src = service.pic1 ? "/img/" + service.pic1 : "https://via.placeholder.com/500";
        document.getElementById('serviceImage2').src = service.pic2 ? "/img/" + service.pic2 : "https://via.placeholder.com/500";
        document.getElementById('serviceImage3').src = service.pic3 ? "/img/" + service.pic3 : "https://via.placeholder.com/500";

        var modal = new bootstrap.Modal(document.getElementById('serviceModal'));
        modal.show();
    }
</script>

@include('footer') --}}


{{-- @include('header')

<style>
    .booking {
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    }

    .service-card {
        position: fixed;;
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
    }

    .service-card.active {
        bottom: 10%;
    }

    .close-btn {
        position: absolute;
        right: 10px;
        top: 10px;
        background: none;
        border: none;
        font-size: 20px;
    }
</style>

<div class="booking">
    <h1>Services</h1>
</div>

<a href="{{ route('service.create') }}" class="effect-btn btn btn-secondary mt-3 mr-3 md-btn">+ Add service</a>
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
        @foreach ($data as $item)
        <tr class="table-light">
            <td scope="row">{{ $loop->index + 1 }}</td>
            <td>{{ $item->sname }}</td>
            <td>{{ $item->price }}</td>
            <td>{{ $item->discount }}</td>
            <td><img src="/img/{{ $item->pic1 }}" height="100" width="100"></td>
            <td>
                <div class="dropdown">
                    <button class="btn action-btn" type="button" style="font-weight: bold; font-size:20px">
                        &#x22EE;
                    </button>
                    <ul class="dropdown-menu custom-dropdown">
                        <li>
                            <a class="dropdown-item bg-primary text-white" href="{{ route('service.edit', $item->_id) }}">
                                <i class="fa fa-edit"></i> Edit
                            </a>
                        </li>
                        <li>
                            <button class="dropdown-item bg-success text-white" onclick="showServiceDetails({{ json_encode($item) }})">
                                <i class="fa fa-eye"></i> Show
                            </button>
                        </li>
                        <li>
                            <form class="d-inline" onsubmit="confirmDelete(event)" action="{{ route('service.destroy', $item->_id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="dropdown-item bg-danger text-white">
                                    <i class="fa fa-trash"></i> Delete
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{$data->links()}}

<div id="serviceCard" class="service-card">
    <button onclick="closeServiceCard()" class="close-btn text-dark">
        <i class="fa fa-times"></i>
    </button>
    <div id="serviceCarousel" class="carousel slide mb-3" data-bs-ride="carousel">
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
    <h2 id="serviceTitle" class="text-primary font-weight-bold"></h2>
    <p><strong>Price:</strong> ₹<span id="servicePrice"></span></p>
    <p><strong>Discount:</strong> <span id="serviceDiscount"></span>%</p>
    <p><strong>Description:</strong> <span id="serviceDescription"></span></p>
</div>

<script>
    function showServiceDetails(service) {
        document.getElementById("serviceTitle").innerText = service.sname;
        document.getElementById("servicePrice").innerText = service.price;
        document.getElementById("serviceDiscount").innerText = service.discount;
        document.getElementById("serviceDescription").innerText = service.desc || "No description available";

        document.getElementById("serviceImage1").src = service.pic1 ? "/img/" + service.pic1 : "https://via.placeholder.com/500";
        document.getElementById("serviceImage2").src = service.pic2 ? "/img/" + service.pic2 : "https://via.placeholder.com/500";
        document.getElementById("serviceImage3").src = service.pic3 ? "/img/" + service.pic3 : "https://via.placeholder.com/500";

        document.getElementById("serviceCard").classList.add("active");
    }

    function closeServiceCard() {
        document.getElementById("serviceCard").classList.remove("active");
    }
</script>

@include('footer')
 --}}


 @include('header')

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

<a href="{{ route('service.create') }}" class="effect-btn btn btn-secondary mt-3 mr-3 md-btn">+ Add service</a>
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
        @foreach ($data as $item)
        <tr class="table-light">
            <td scope="row">{{ $loop->index + 1 }}</td>
            <td>{{ $item->sname }}</td>
            <td>{{ $item->price }}</td>
            <td>{{ $item->discount }}</td>
            <td><img src="/img/{{ $item->pic1 }}" height="100" width="100"></td>
            <td>
                <div class="dropdown">
                    <button class="btn action-btn" type="button" style="font-weight: bold; font-size:20px">
                        &#x22EE;
                    </button>
                    <ul class="dropdown-menu custom-dropdown">
                        <li>
                            <a class="dropdown-item bg-primary text-white" href="{{ route('service.edit', $item->_id) }}">
                                <i class="fa fa-edit"></i> Edit
                            </a>
                        </li>
                        <li>
                            <button class="dropdown-item bg-success text-white" onclick="showServiceDetails({{ json_encode($item) }})">
                                <i class="fa fa-eye"></i> Show
                            </button>
                        </li>
                        <li>
                            <form class="d-inline" onsubmit="confirmDelete(event)" action="{{ route('service.destroy', $item->_id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="dropdown-item bg-danger text-white">
                                    <i class="fa fa-trash"></i> Delete
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{$data->links()}}

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


@include('footer')
