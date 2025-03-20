@include('header')

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
                    {{-- <th>Action</th> --}}
    
    
    
                </tr>
            </thead>
            <tbody class="table-group-divider Table-hover" >
                @foreach ($data as $item)
                    <tr class="table-light">
                        <td scope="row">{{ $loop->index + 1 }}</td>
                        <td>{{ $item->pname }}</td>
                        {{-- <td>{{ $item->c_desc }}</td> --}}
                        <td>{{ $item->amount }}</td>
                        <td>{{ $item->c_discount }}</td>
                        <td>{{ $item->c_o }}</td>
                        <td>{{ $item->date }}</td>
                        <td>{{ $item->time }}</td>
                        <td>{{ $item->address }}</td>
                        <td>{{ $item->tot_amount }}</td>
                        <td>{{ $item->status }}</td>


                        {{-- <td>{{ $item->c_maxamt }}</td> --}}
    
    
    
                        {{-- @if (file_exists(public_path($item->cat_pic))) --}}
                            <td><img src="/img/{{ $item->pic1 }}" height="100" width="100" >
                            </td>
                        
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
    {{-- </div> --}}
    
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