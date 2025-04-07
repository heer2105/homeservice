{{-- @include('header')

<style>
    .booking{
        font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif ;

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
                    <th>Action</th>
    
    
    
                </tr>
            </thead>
            <tbody class="table-group-divider Table-hover" >
                @foreach ($data as $item)
                    <tr class="table-light">
                        <td scope="row">{{ $loop->index + 1 }}</td>
                        <td>{{ $item->pname }}</td> --}}
                        {{-- <td>{{ $item->c_desc }}</td> --}}
                        {{-- <td>{{ $item->amount }}</td> --}}
                        {{-- <td>{{ $item->c_discount }}</td> --}}
                        {{-- <td>{{ $item->c_o }}</td> --}}
                        {{-- <td>{{ $item->date }}</td>
                        <td>{{ $item->time }}</td>
                        <td>{{ $item->address }}</td>
                        <td>{{ $item->tot_amount }}</td>
                        <td>{{ $item->status }}</td> --}}


                        {{-- <td>{{ $item->c_maxamt }}</td> --}}
    
    
    
                        {{-- @if (file_exists(public_path($item->cat_pic))) --}}
                            {{-- <td><img id="couponImage"  src="/img/{{ $item->pic1 }}" height="100" width="100" >
                            </td>
                            <td><a href="/ostatus/{{$item->_id}}" class="btn btn-outline-dark">
                                @if ($item->status==1)
                                    Order Placed
                                @elseif($item->status==2)
                                    Assigned
                                @elseif($item->status==3)
                                    Start Service --}}
                                    {{-- @elseif($item->status==4)
                                    Out for Delievry --}}
                                    {{-- @else
                                    Complete Service
                                       
                                @endif</a></td> --}}
                        {{-- <td>
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
                                    </li> --}}
                                {{-- </ul>
                            </div>
                        </td>
                        <td>
                            <div class="dropdown">
                                <button class="btn action-btn" type="button" style="font-weight: bold; font-size:20px">
                                    &#x22EE;
                                </button>
                                <ul class="dropdown-menu custom-dropdown"> --}}
                                    {{-- <li>
                                        <a class="dropdown-item bg-primary text-white" href="{{ route('coupon.edit', $item->_id) }}">
                                            <i class="fa fa-edit"></i> Edit
                                        </a>
                                    </li> --}}
                                    {{-- <li>
                                        <button class="dropdown-item bg-success text-white" onclick="showCouponDetails({{ json_encode($item) }})">
                                            <i class="fa fa-eye"></i> Show
                                        </button>
                                    </li> --}}
                                    {{-- <li>
                                        <form class="d-inline" onsubmit="confirmDelete(event)" action="{{ route('coupon.destroy', $item->_id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="dropdown-item bg-danger text-white">
                                                <i class="fa fa-trash"></i> Delete
                                            </button>
                                        </form>
                                    </li> --}}
                                {{-- </ul>
                            </div>
                        </td>
                        
                    </tr>
                @endforeach
    
            </tbody>
            <tfoot>
    
            </tfoot>
        </table>
        {{$data->links()}} --}}
    {{-- </div> --}}
    {{-- <div id="couponCard" class="service-card">
        <button onclick="closeCouponCard()" class=" btn text-dark">
            <i class="fa fa-times"></i>
        </button>
        <img id="couponImage" src="/img/{{ $item->pic1}}" class="img-fluid rounded mb-3" alt="Coupon Image">
        <h2 id="sname" class="text-primary font-weight-bold"></h2>
        <p><strong>Price:</strong> <span id="price"></span></p>
        <p><strong>Discount:</strong> <span id="discount"></span></p>
        <p><strong>Cash/Online:</strong> <span id="c_o"></span></p>
        <p><strong>Date:</strong> <span id="date"></span></p>
    
        <p><strong>Time:</strong> <span id="time"></span></p>
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

        

@include('footer') --}}


{{-- @include('header')

<style>
    .booking{
        font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif ;
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
    <h1>Bookings</h1>
</div>

<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.12.4/dist/sweetalert2.min.css" rel="stylesheet">
<br>
    
<br>
<table class="table table-styled table-responsive">
    <thead class="thead-dark">
        <tr>
            <th>SR.NO</th>
            <th>Service Name</th>
            <th>Date</th>
            <th>Time</th>
            <th>Address</th>
            <th>Total Amount</th>
            <th>Status</th>
            <th>Image</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody class="table-group-divider Table-hover">
        @foreach ($data as $item)
            <tr class="table-light">
                <td scope="row">{{ $loop->index + 1 }}</td>
                <td>{{ $item->pname }}</td>
                <td>{{ $item->date }}</td>
                <td>{{ $item->time }}</td>
                <td>{{ $item->address }}</td>
                <td>{{ $item->tot_amount }}</td>
                <td>{{ $item->status }}</td>
                <td><img src="/img/{{ $item->pic1 }}" height="100" width="100"></td>
                <td>
                    <a href="/ostatus/{{$item->_id}}" class="btn btn-outline-dark">
                        @if ($item->status==1)
                            Order Placed
                        @elseif($item->status==2)
                            Assigned
                        @elseif($item->status==3)
                            Start Service
                        @else
                            Complete Service
                        @endif
                    </a>
                    <button class="btn btn-success" onclick="showServiceDetails({{ json_encode($item) }})">
                        <i class="fa fa-eye"></i> Show
                    </button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
{{$data->links()}}

<div id="serviceCard" class="service-card">
    <button onclick="closeServiceCard()" class="btn text-dark">
        <i class="fa fa-times"></i>
    </button>
    <img id="serviceImage" class="img-fluid rounded mb-3" alt="Service Image">
    <h2 id="sname" class="text-primary font-weight-bold"></h2>
    <p><strong>Price:</strong> <span id="price"></span></p>
    <p><strong>Discount:</strong> <span id="discount"></span></p>
    <p><strong>Payment Method:</strong> <span id="c_o"></span></p>
    <p><strong>Date:</strong> <span id="date"></span></p>
    <p><strong>Time:</strong> <span id="time"></span></p>
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
                event.target.submit();
            }
        });
    }

    function showServiceDetails(item) {
        document.getElementById("sname").innerText = item.pname;
        document.getElementById("price").innerText = item.amount;
        document.getElementById("discount").innerText = item.c_discount + "%";
        document.getElementById("c_o").innerText = item.c_o;
        document.getElementById("date").innerText = item.date;
        document.getElementById("time").innerText = item.time;
        document.getElementById("serviceImage").src = "/img/" + item.pic1;
        document.getElementById("serviceCard").classList.add("active");
    }

    function closeServiceCard() {
        document.getElementById("serviceCard").classList.remove("active");
    }
</script>

@include('footer') --}}

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
        z-index: 9999; /* Ensure it appears above everything */
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
    <h1>Bookings</h1>
</div>

<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.12.4/dist/sweetalert2.min.css" rel="stylesheet">

<table class="table table-styled table-responsive">
    <thead class="thead-dark">
        <tr>
            <th>SR.NO</th>
            <th>Service Name</th>
            {{-- <th>Date</th>
            <th>Time</th> --}}
            <th>Service Image</th>
            {{-- <th>Address</th> --}}
            <th>Total Amount</th>
            <th>Worker Name</th>
            <th>Select Worker Name</th>
            <th>Order Tracking</th>
            <th>Action</th>


        </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
            <tr class="table-light">
                <td>{{ $loop->index + 1 }}</td>
                <td>{{ $item->pname }}</td>
                {{-- <td>{{ $item->date }}</td>
                <td>{{ $item->time }}</td> --}}
                <td><img src="/img/{{ $item->pic1 }}" height="100" width="200"></td>
                {{-- <td>{{ $item->address }}</td> --}}
                <td>{{ $item->tot_amount }}</td>
                <td>{{ $item->worker_name }}
                <form action="/booking_assign" method="POST">
                    @csrf
                    <td>
                    
                        <input type="hidden" value="{{$item->_id}}" name="id"/>
                        @if ($item->status == 1) 
                            <select name="worker" id="worker">
                                @foreach ($w as $i)
                                    <option value="{{ $i->_id }}">{{ $i->username }}</option>
                                @endforeach
                            </select>
                        @else
                            {{ $item->wid }}
                        @endif
                    </td>
                </td>
                    <td>
                        @if ($item->status == 1) 
                        <button type="submit" class="effect-btn btn btn-light mt-2 mr-2 sm-btn">
                           
                                Assign
                           
                        </button>
                        @elseif ($item->status == 2)
                        <input type="text" value="Worker is Assigned" disabled>
                        @endif
                        
                    </td>

                </form>
                
                
                
                <td>
                    <button class="effect-btn btn btn-info mt-2 mr-2 sm-btn" onclick="showDetails({{ json_encode($item) }})">
                        View 
                    </button>
                </td>
               
            </tr>
        @endforeach
    </tbody>
</table>
{{$data->links()}}

<!-- Service Details Card -->
<div id="serviceModal" class="service-card">
    <button onclick="closeModal()" class="effect-btn squer-btn sm-btn btn btn-warning mt-2 mr-2">
        <i class="fa fa-times"></i>
    </button>
    <img id="serviceImage" class="img-fluid rounded mb-3" alt="Service Image" style="height: 300px; width : 600px;">
    <h2 id="serviceName" class="text-primary font-weight-bold"></h2>
    <p><strong>Amount:</strong> <span id="serviceAmount"></span></p>
    <p><strong>Total Amount:</strong> <span id="totalAmount"></span></p>
    <p><strong>Discount:</strong> <span id="serviceDiscount"></span></p>
    <p><strong>Payment Mode:</strong> <span id="paymentMode"></span></p>
    <p><strong>Date:</strong> <span id="serviceDate"></span></p>
    <p><strong>Time:</strong> <span id="serviceTime"></span></p>
    <p><strong>Code:</strong> <span id="serviceCode"></span></p>
    <p><strong>Address:</strong> <span id="serviceAddress"></span></p>
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
    function showDetails(item) {
        document.getElementById("serviceName").innerText = item.pname;
        document.getElementById("serviceAmount").innerText = item.amount;
        document.getElementById("totalAmount").innerText = item.tot_amount;
        document.getElementById("serviceDiscount").innerText = item.c_discount + "%";
        document.getElementById("paymentMode").innerText = item.c_o;
        document.getElementById("serviceDate").innerText = item.date;
        document.getElementById("serviceTime").innerText = item.time;
        document.getElementById("serviceCode").innerText = item.c_code;
        document.getElementById("serviceAddress").innerText = item.address;
        document.getElementById("serviceImage").src = "/img/" + item.pic1;
        document.getElementById("serviceModal").classList.add("active");
    }

    function closeModal() {
        document.getElementById("serviceModal").classList.remove("active");
    }
</script>

@include('footer')

