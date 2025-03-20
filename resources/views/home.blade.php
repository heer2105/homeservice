


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
}


chart: {
    type: "donut",
    width: "350px", // Set fixed width to prevent stretching
},


</style>
{{-- <h1>Welcome  {{$item->username}}</h1><br> --}}

@if (session()->has('user'))
        <p style="display: inline;"><b><h4>Welcome, {{ session('user')->username }}!</h4></b></p>
    @else
        <li><a href="/login"><i class="fa-solid fa-user -mr-3"></i></a></li>
    @endif

<br>    <div class="container">
    <div class="row ">
            <div class="col-xl-3 col-lg-4 col-md-6">
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
        
        
        <div class="col-xl-3 col-lg-4 col-md-6">
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
        
        <div class="col-xl-3 col-lg-4 col-md-6">
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
        <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="card splash-info-card">
                <div class="card-body d-flex align-items-center">
                    <div class="icon-box">
                        <a href="/category"><i class="fas fa-th-list fa-2x"></i>
                        </a>                
                        </div>
                    <div class="icon-info-text ms-3">
                        <a href="/category"><h6 class="card-title">Category</h6></a>
                        <h5 class="splash-card-title">{{$c_count }}</h5>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-xl-3 col-lg-4 col-md-6">
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
                
        <div class="col-xl-3 col-lg-4 col-md-6">
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
        
        <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="card splash-info-card">
                <div class="card-body d-flex align-items-center">
                    <div class="icon-box">
                        <a href="/coupon"><i class="fas fa-tags fa-2x"></i></a>
                    </div>
                    <div class="icon-info-text ms-3">
                        <a href="/coupon"><h6 class="card-title">Coupon</h6 ></a>
                        <h5 class="splash-card-title">{{$cou_count }}</h5>
                    </div>
                </div>
            </div>
        </div>
                
        <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="card splash-info-card">
                <div class="card-body d-flex align-items-center">
                    <div class="icon-box">
                        <a href="/combo"><i class="fas fa-gift fa-2x"></i></a> <!-- Changed icon -->
                    </div>
                    <div class="icon-info-text ms-3">
                        <a href="/combo"><h6 class="card-title">Combo</h6></a>
                        <h5 class="splash-card-title">{{$combo_c }}</h5>
                    </div>
                </div>
            </div>
        </div>
        
</div>

<div class="page-wrapper">
    <div class="main-content">
        <div class="row d-flex justify-content-center"> <!-- Center the row -->
            <div class="col-xl-8 col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="card chart-card">
                    <div class="card-header text-center">
                        <h4>Visitors Profile</h4>
                    </div>
                    <div class="card-body d-flex justify-content-center">
                        {{-- <div class="chart-holder ms-5" style="width: 350px;"> <!-- Move Right --> --}}
                            <div class="chart-holder d-flex justify-content-center" style="width: 100%;">

                            <div id="visitorChart"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", function () {
    var options = {
        series: [55, 45], // Example percentage: 55% Male, 45% Female
        chart: {
            type: "donut",
            width: "100%", 
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