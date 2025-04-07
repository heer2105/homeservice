


@include('header')
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

<style>
.icon-box {
    width: 50px;
    height: 50px;
    background: #F5F5F5; /* Light gray background */
    border: 1px solid navy;
    border-radius: 12px; /* Rounded corners */
    display: flex;
    justify-content: center;
    align-items: center;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1); /* Soft shadow */
}

.icon-box i {
    color: rgb(115, 115, 163); /* Black icon */
}

.chart-card {
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
}
.chart-holder {
    width: 100%;
    display: flex;
    justify-content: center;
    height: 250px;
}


chart: {
    type: "donut",
    width: "350px", // Set fixed width to prevent stretching
}
.service-card {
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
}
.card-img-top {
    height: 200px;
    object-fit: cover;
}


</style>

@if (session()->has('user'))
        <p style="display: inline;"><b><i><h4>Welcome, {{ session('user')->username }}!</h4></i></b></p>
    @else
        <li><a href="/login"><i class="fa-solid fa-user -mr-3"></i></a></li>
    @endif


<br>

<div class="container">
    <div class="row">
        <!-- Left Side: Revenue & Booking on Top, Customer & Category Below, Service at Bottom -->
        <div class="col-md-6">
            <div class="row">
                <!-- Revenue & Booking -->
                <div class="col-md-6">
                    <div class="card splash-info-card">
                        <div class="card-body d-flex align-items-center">
                            <div class="icon-box">
                                <a href="/booking"><i class="fas fa-dollar-sign fa-2x"></i></a>
                            </div>
                            <div class="icon-info-text ms-3">
                                <a href="/booking"><h6 class="card-title">Revenue</h6></a>
                                <h5 class="splash-card-title">{{$r }}</h5>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="card splash-info-card">
                        <div class="card-body d-flex align-items-center">
                            <div class="icon-box">
                                <a href="/booking"><i class="fas fa-calendar-check fa-2x"></i></a>
                            </div>
                            <div class="icon-info-text ms-3">
                                <a href="/booking"><h6 class="card-title">Booking</h6></a>
                                <h5 class="splash-card-title">{{$o_count }}</h5>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Customer & Category -->
                <div class="col-md-6">
                    <div class="card splash-info-card">
                        <div class="card-body d-flex align-items-center">
                            <div class="icon-box">
                                <a href="#"><i class="fas fa-users fa-2x"></i></a>
                            </div>
                            <div class="icon-info-text ms-3">
                                <a href="#"><h6 class="card-title">Customer</h6></a>
                                <h5 class="splash-card-title">{{$u_count }}</h5>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card splash-info-card">
                        <div class="card-body d-flex align-items-center">
                            <div class="icon-box">
                                <a href="/category"><i class="fas fa-th-list fa-2x"></i></a>
                            </div>
                            <div class="icon-info-text ms-3">
                                <a href="/category"><h6 class="card-title">Category</h6></a>
                                <h5 class="splash-card-title">{{$c_count }}</h5>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Service (Full 6 columns below Category) -->
                <div class="col-md-12">
                    <div class="card splash-info-card">
                        <div class="card-body d-flex align-items-center">
                            <div class="icon-box">
                                <a href="/service"><i class="fas fa-concierge-bell fa-2x"></i></a>
                            </div>
                            <div class="icon-info-text ms-3">
                                <a href="/service"><h6 class="card-title">Service</h6></a>
                                <h5 class="splash-card-title">{{$p_count }}</h5>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>
        </div>

        <!-- Right Side: Chart -->
        <div class="col-md-6">
            <div class="card chart-card">
                <div class="card-header text-center">
                    <h4>Visitors Profile</h4>
                </div>
                <div class="card-body d-flex justify-content-center">
                    <div class="chart-holder d-flex justify-content-center" style="width: 100%;">
                        <div id="visitorChart"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Remaining Cards Below -->
    <div class="row ">
        <div class="col-md-4 col-sm-4">
            <div class="card splash-info-card">
                <div class="card-body d-flex align-items-center">
                    <div class="icon-box">
                        <a href="/banner"><i class="fas fa-image fa-2x"></i></a>
                    </div>
                    <div class="icon-info-text ms-3">
                        <a href="/banner"><h6 class="card-title">Banner</h6></a>
                        <h5 class="splash-card-title">{{$b_count }}</h5>
                    </div>
                </div>
            </div>
        </div>  

        <div class="col-md-4 col-sm-4">
            <div class="card splash-info-card">
                <div class="card-body d-flex align-items-center">
                    <div class="icon-box">
                        <a href="/coupon"><i class="fas fa-tags fa-2x"></i></a>
                    </div>
                    <div class="icon-info-text ms-3">
                        <a href="/coupon"><h6 class="card-title">Coupon</h6></a>
                        <h5 class="splash-card-title">{{$cou_count }}</h5>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4 col-sm-4">
            <div class="card splash-info-card">
                <div class="card-body d-flex align-items-center">
                    <div class="icon-box">
                        <a href="/combo"><i class="fas fa-gift fa-2x"></i></a>
                    </div>
                    <div class="icon-info-text ms-3">
                        <a href="/combo"><h6 class="card-title">Combo</h6></a>
                        <h5 class="splash-card-title">{{$combo_c }}</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


{{-- @if(isset($services) && $services->count() > 0)
    <div class="container mt-4">
        <!-- First 3 Services (Static) -->
        <div class="row">
            @foreach($services->take(3) as $service)
            <div class="col-md-4">
                <div class="card service-card">
                    <img src="{{ $service->pic1 }}" class="card-img-top" alt="{{ $service->sname }}">
                    <div class="card-body text-center">
                        <h5 class="card-title">{{ $service->sname }}</h5>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Carousel for Next Services -->
        @if($services->count() > 3)
        <div id="serviceCarousel" class="carousel slide mt-4" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach($services->skip(3)->chunk(3) as $chunkIndex => $serviceChunk)
                <div class="carousel-item {{ $chunkIndex == 0 ? 'active' : '' }}">
                    <div class="row">
                        @foreach($serviceChunk as $service)
                        <div class="col-md-4">
                            <div class="card service-card">
                                <img src="{{ $service->pic1 }}" class="card-img-top" alt="{{ $service->sname }}">
                                <div class="card-body text-center">
                                    <h5 class="card-title">{{ $service->sname }}</h5>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Carousel Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#serviceCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#serviceCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
        @endif
    </div>
@else
    <p class="text-center mt-4">No services available.</p>
@endif
 --}}


 @if(isset($services) && $services->count() > 0)
    <div class="container mt-4">
        <!-- First 3 Services (Static Card Group) -->
        {{-- <div class="card-group">
            @foreach($services->take(3) as $service)
            <div class="card service-card">
                <img src="{{ $service->pic1 }}" class="card-img-top" alt="{{ $service->sname }}">
                <div class="card-body text-center">
                    <h5 class="card-title">{{ $service->sname }}</h5>
                </div>
            </div>
            @endforeach
        </div> --}}
        <h1>Our Services</h1>
        <!-- Carousel for Next Services -->
        @if($services->count() > 3)
        <div id="serviceCarousel" class="carousel slide mt-4" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach($services->skip(3)->chunk(3) as $chunkIndex => $serviceChunk)
                <div class="carousel-item {{ $chunkIndex == 0 ? 'active' : '' }}">
                    <div class="card-group">
                        @foreach($serviceChunk as $service)
                        <div class="card service-card">
                            <img src="/img/{{ $service->pic1 }}" class="card-img-top" alt="{{ $service->sname }}">
                            <div class="card-body text-center">
                                <h5 class="card-title">{{ $service->sname }}</h5>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Carousel Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#serviceCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#serviceCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
        @endif
    </div>
@else
    <p class="text-center mt-4">No services available.</p>
@endif

<script>
    document.addEventListener("DOMContentLoaded", function () {
        var options = {
            series: [55, 45], // Example percentage: 55% Male, 45% Female
            chart: {
                type: "donut",
                width: "100%", 
                height: 250,  // Set chart height to 250px
            },
            labels: ["Male", "Female"],
            colors: ["#87CEEB", "#00008B"], // Sky Blue & Dark Blue
            plotOptions: {
                pie: {
                    donut: {
                        size: "60%",
                    },
                },
            },
            dataLabels: {
                enabled: true,
            },
            legend: {
                position: "bottom",
            },
        };
    
        var chart = new ApexCharts(document.querySelector("#visitorChart"), options);
        chart.render();
    });
    </script>


@include('footer')