{{-- @include('header')

<style>
    .booking{
        font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif ;

    }
</style>
<div class="booking">
    <h1>Coupons</h1>

</div>
<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.12.4/dist/sweetalert2.min.css" rel="stylesheet">
<br>
    <a href="{{ route('coupon.create') }}" class="effect-btn btn btn-secondary mt-3 mr-3 md-btn">+ Add Coupon</a><br><br>
    <br>
        <table class="table  table-styled table-responsive " >

            <thead class="thead-dark">
                
                <tr>
                    <th>SR.NO</th>
                    <th>Coupon Code</th>
                    <th>Coupon Title</th>
                    <th>Coupon Discount</th>
                    <th>Coupon Image</th>
                    <th>Actions</th>
    
    
    
    
                </tr>
            </thead>
            <tbody class="table-group-divider Table-hover" >
                @foreach ($data as $item)
                    <tr class="table-light">
                        <td scope="row">{{ $loop->index + 1 }}</td>
                        <td>{{ $item->c_code }}</td>
                        <td>{{ $item->c_title }}</td>
                        <td>{{ $item->c_dis }}</td>
    
    
    
                            <td><img src="/img/{{ $item->cat_pic }}" height="100" width="100" alt="/img/no_image.jpg">
                            </td>
    
                       
                        
    
                        <td>
                            <div class="dropdown ">
                                <button class="btn action-btn" type="button" style="font-weight: bold; font-size:20px">
                                    &#x22EE; <!-- Three dots icon -->
                                </button>
                                <ul class="dropdown-menu custom-dropdown  ">
                                    <li>
                                        <a class="dropdown-item bg-primary text-white" href="{{ route('coupon.edit', $item->_id) }}">
                                            <i class="fa fa-edit"></i> Edit
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item bg-success text-white" href="{{ route('coupon.show', $item->_id) }}">
                                            <i class="fa fa-edit"></i> Show
                                        </a>
                                    </li>
                                    <li>
                                        <form class="d-inline" onsubmit="confirmDelete(event)" action="{{ route('coupon.destroy', $item->_id) }}" method="POST">
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
    </div>
    
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


@include('footer')


 --}}


 @include('header')

<style>
    .booking {
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    }
    
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
    }

    .service-card.active {
        bottom: 10%;
    }
    .service-card button {
    position: absolute;
    right: 10px;
    top: 10px;
    background: none;
    border: none;
    font-size: 20px;
}

</style>

<div class="booking">
    <h1>Coupons</h1>
</div>

<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.12.4/dist/sweetalert2.min.css" rel="stylesheet">

<a href="{{ route('coupon.create') }}" class="effect-btn btn btn-secondary mt-3 mr-3 md-btn">+ Add Coupon</a><br><br>

<table class="table table-styled table-responsive">
    <thead class="thead-dark">
        <tr>
            <th>SR.NO</th>
            <th>Coupon Code</th>
            <th>Coupon Title</th>
            <th>Coupon Discount</th>
            <th>Coupon Image</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody class="table-group-divider Table-hover">
        @foreach ($data as $item)
        <tr class="table-light">
            <td scope="row">{{ $loop->index + 1 }}</td>
            <td>{{ $item->c_code }}</td>
            <td>{{ $item->c_title }}</td>
            <td>{{ $item->c_dis }}</td>
            <td><img src="/img/{{ $item->cat_pic }}" height="100" width="100" alt="/img/no_image.jpg"></td>
            <td>
                <div class="dropdown">
                    <button class="btn action-btn" type="button" style="font-weight: bold; font-size:20px">
                        &#x22EE;
                    </button>
                    <ul class="dropdown-menu custom-dropdown">
                        <li>
                            <a class="dropdown-item bg-primary text-white" href="{{ route('coupon.edit', $item->_id) }}">
                                <i class="fa fa-edit"></i> Edit
                            </a>
                        </li>
                        <li>
                            <button class="dropdown-item bg-success text-white" onclick="showCouponDetails({{ json_encode($item) }})">
                                <i class="fa fa-eye"></i> Show
                            </button>
                        </li>
                        <li>
                            <form class="d-inline" onsubmit="confirmDelete(event)" action="{{ route('coupon.destroy', $item->_id) }}" method="POST">
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

<div id="couponCard" class="service-card">
    <button onclick="closeCouponCard()" class=" btn text-dark">
        <i class="fa fa-times"></i>
    </button>
    <img id="couponImage" src="" class="img-fluid rounded mb-3" alt="Coupon Image">
    <h2 id="couponTitle" class="text-primary font-weight-bold"></h2>
    <p><strong>Code:</strong> <span id="couponCode"></span></p>
    <p><strong>Title:</strong> <span id="couponTitle"></span></p>
    <p><strong>Description:</strong> <span id="couponDesc"></span></p>
    <p><strong>Max amount:</strong> <span id="couponMax"></span></p>

    <p><strong>Discount:</strong> <span id="couponDiscount">%</span></p>
</div>

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
                event.target.submit();
            }
        });
    }
    
    function showCouponDetails(item) {
        document.getElementById("couponTitle").innerText = item.c_title;
        document.getElementById("couponDesc").innerText = item.c_desc;
        document.getElementById("couponMax").innerText = item.c_maxamt;
        document.getElementById("couponCode").innerText = item.c_code;
        document.getElementById("couponDiscount").innerText = item.c_dis + "%";
        document.getElementById("couponImage").src = "/img/" + item.cat_pic;

        document.getElementById("couponCard").classList.add("active");
    }

    function closeCouponCard() {
        document.getElementById("couponCard").classList.remove("active");
    }
</script>

@include('footer')
