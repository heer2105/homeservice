

@include('header')

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">

            @if($coupon->cat_pic)
    <div class="rounded shadow">
        <img src="/img/{{ $coupon->cat_pic }}" class="d-block w-100 img-fluid" alt="coupon Image">
    </div>
    @endif

        </div>

        <div class="col-md-6">
            <!-- coupon Details -->
            <h2 class="mb-3 text-primary font-weight-bold">{{ $coupon->c_title }}</h2>
            <p><strong>Coupon Code:</strong> {{ $coupon->c_code }}</p>
            <p><strong>Discount:</strong> {{ $coupon->c_dis }}%</p>
            <p><strong>Description:</strong> {{ $coupon->c_desc }}</p>
            <p class="text-success"><strong>Max Amount:</strong> ₹{{ $coupon->c_maxamt }}</p>
            {{-- <p class="text-danger"><strong>Discount:</strong> {{ $coupon->discount }}%</p> --}}

            <!-- Back Button -->
            <a href="{{ route('coupon.index') }}" class="btn btn-secondary mt-3">Back to coupons</a>
        </div>
    </div>
</div>

@include('footer')
