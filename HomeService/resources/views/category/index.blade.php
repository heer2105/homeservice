@include('header')


<style>
    .booking{
        font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif ;

    }
</style>
<div class="booking">
    <h1>Categories</h1>

</div>
<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.12.4/dist/sweetalert2.min.css" rel="stylesheet">

    <a href="{{ route('category.create') }}" class="effect-btn btn btn-secondary mt-3 mr-3 md-btn">+ Add category</a><br>
    <br>
{{-- <div class="card"> --}}

    <div class="table-responsive rounded" style="box-shadow: none !important;">
        <table class="table  table-styled table-responsive " >
            <thead class="thead-dark">
                {{-- <caption>
                    Table Name
                </caption> --}}
                <tr>
                    <th>SR.NO</th>
                    <th>category Name</th>
                    <th>category Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody class="table-group-divider Table-hover" >
                @foreach ($data as $item)
                <tr class="table-light">
                    <td scope="row">{{ $loop->index + 1 }}</td>
                    <td>{{ $item->cat_name }}</td>

                    {{-- @if (file_exists(public_path($item->cat_pic))) --}}
                        <td><img src="/img/{{ $item->cat_pic }}" height="100" width="150" alt="/img/no_image.jpg">
                        </td>
                    
                    <td>
                        <div class="dropdown ">
                            <button class="btn action-btn" type="button" style="font-weight: bold; font-size:20px">
                                &#x22EE; <!-- Three dots icon -->
                            </button>
                            <ul class="dropdown-menu custom-dropdown  ">
                                <li>
                                    <a class="dropdown-item bg-primary text-white" href="{{ route('category.edit', $item->_id) }}">
                                        <i class="fa fa-edit"></i> Edit
                                    </a>
                                </li>
                               
                                <li>
                                    <form class="d-inline" onsubmit="confirmDelete(event)" action="{{ route('category.destroy', $item->_id) }}" method="POST">
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
    
    
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.12.4/dist/sweetalert2.all.min.js"></script>

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
</div>

@include('footer')