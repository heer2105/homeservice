{{-- 
@include('header')

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <!-- Bootstrap Carousel for Service Images -->
            <div id="serviceCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner rounded shadow">
                    @if($service->pic1)
                    <div class="carousel-item active">
                        <img src="/img/{{ $service->pic1 }}" class="d-block w-100 img-fluid" alt="Service Image 1">
                    </div>
                    @endif
                    @if($service->pic2)
                    <div class="carousel-item">
                        <img src="/img/{{ $service->pic2 }}" class="d-block w-100 img-fluid" alt="Service Image 2">
                    </div>
                    @endif
                    @if($service->pic3)
                    <div class="carousel-item">
                        <img src="/img/{{ $service->pic3 }}" class="d-block w-100 img-fluid" alt="Service Image 3">
                    </div>
                    @endif
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
        </div>

        <div class="col-md-6">
            <!-- Service Details -->
            <h2 class="mb-3 text-primary font-weight-bold">{{ $service->sname }}</h2>
            <p><strong>Duration:</strong> {{ $service->duration }}</p>
            <p><strong>Description:</strong> {{ $service->desc }}</p>
            <p class="text-success"><strong>Price:</strong> ₹{{ $service->price }}</p>
            <p class="text-danger"><strong>Discount:</strong> {{ $service->discount }}%</p>
            <p class="text-danger"><strong>Rating:</strong> {{ $service->rating }}</p>


            <!-- Back Button -->
            <a href="{{ route('service.index') }}" class="btn btn-secondary mt-3">Back to services</a>
        </div>
    </div>
</div>

@include('footer') --}}


@include('header')

<!-- Show Button (Trigger for Modal) -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#serviceModal">
    Show Details
</button>

<!-- Service Details Modal -->
<div class="modal fade" id="serviceModal" tabindex="-1" aria-labelledby="serviceModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
        <div class="modal-content rounded shadow-lg">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="serviceModalLabel">{{ $service->sname }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Bootstrap Carousel for Service Images -->
                <div id="serviceCarousel" class="carousel slide mb-4" data-bs-ride="carousel">
                    <div class="carousel-inner rounded shadow">
                        @if($service->pic1)
                        <div class="carousel-item active">
                            <img src="/img/{{ $service->pic1 }}" class="d-block w-100 img-fluid rounded" alt="Service Image 1">
                        </div>
                        @endif
                        @if($service->pic2)
                        <div class="carousel-item">
                            <img src="/img/{{ $service->pic2 }}" class="d-block w-100 img-fluid rounded" alt="Service Image 2">
                        </div>
                        @endif
                        @if($service->pic3)
                        <div class="carousel-item">
                            <img src="/img/{{ $service->pic3 }}" class="d-block w-100 img-fluid rounded" alt="Service Image 3">
                        </div>
                        @endif
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
                <p><strong>Duration:</strong> {{ $service->duration }}</p>
                <p><strong>Description:</strong> {{ $service->desc }}</p>
                <p class="text-success"><strong>Price:</strong> ₹{{ $service->price }}</p>
                <p class="text-danger"><strong>Discount:</strong> {{ $service->discount }}%</p>
                <p class="text-warning"><strong>Rating:</strong> {{ $service->rating }}</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

@include('footer')

