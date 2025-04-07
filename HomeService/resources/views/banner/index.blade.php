{{-- @include('header')

<section class="section">
    <div class="row">
      <div class="col-lg-12">
        @if ($m=Session::get('success'))    
          <div class="alert alert-success mb-2" role="alert">
            {{$m}}
          </div>
        @endif
        @if ($m=Session::get('error'))    
          <div class="alert alert-danger" role="alert">
            {{$m}}
          </div>
        @endif
        <a href="{{route('banner.create')}}" class="btn btn-success mb-3">+Add Banner</a>
        <h5 class="card-title">Banners</h5><br>
            

            
            <table class="table  table-styled table-responsive">
              <thead class="thead-dark">
                <tr>
                  <th>Id</th>
                  <th>Pic</th>
                  <th>Banner Name</th>
                  <th>Status</th>
                  <th>Update</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody class="table-group-divider Table-hover">
                @foreach ($banner as $item)
                  <tr>
                    <td>{{$loop->index+1}}</td>
                    <td><img style="height: 100px; width:200px;" src="/img/{{$item->b_pic}}"></td>
                    <td>{{$item->b_name}}</td>
                    <td>
                      @if ($item->status)
                        On Air
                      @else
                        Off Air
                      @endif
                    </td>
                    <td><a href="{{route('banner.edit',$item->id)}}" class="btn btn-primary"><i class="fa fa-pen"> </i> Edit</a></td>
                    <td>
                      <form method="POST" action="{{ route('banner.destroy', $item->id) }}" class="d-inline">
                        @csrf
                        @method('delete')
                        <input name="_method" type="hidden" value="DELETE">
                        <button type="submit" id="btndel" class="btn btn-danger content-icon show_confirm mt-1 ms-2" data-toggle="tooltip" title='Delete'><i class="fa fa-trash"></i> Delete</button>
                      </form>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
            </div>
            {{$banner->links()}}
          </div>
        </div>
      </div>
</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
<script type="text/javascript">
 $(document).ready(function () {
    $('#btndel').click(function (event) {
      var form = $(this).closest("form");
      event.preventDefault();
      swal({
        title: "DELETE", // Assuming DELETE is the correct string for the title
        text: "If you delete this, it will be gone forever.",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
          form.submit();
        }
      });
    });
  });
  
</script>
@include('footer') --}}

<style>
  .booking{
      font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif ;

  }
</style>

@include('header')
<div class="booking">
  <h1>Banners</h1>

</div>
<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.12.4/dist/sweetalert2.min.css" rel="stylesheet">

    <a href="{{ route('banner.create') }}" class="effect-btn btn btn-secondary mt-3 mr-3 md-btn">+ Add Banner</a><br><br>
    

    <div class="table-responsive rounded" style="box-shadow: none !important;">
        <table class="table  table-styled table-responsive " >
            <thead class="thead-dark">
                
                <tr>
                  <th>Id</th>
                  <th>Pic</th>
                  <th>Banner Name</th>
                  <th>Status</th>
                  <th>Actions</th>
                </tr>
            </thead>
            <tbody class="table-group-divider Table-hover" >
                @foreach ($banner as $item)
                <tr class="table-light">
                    <td scope="row">{{ $loop->index + 1 }}</td>
                    <td>{{ $item->b_name }}</td>

                        <td><img src="/img/{{ $item->b_pic }}" height="100" width="150" alt="/img/no_image.jpg">
                        </td>
                        
                    <td>{{ $item->status }}</td>
                      <td>
                      <div class="dropdown ">
                            <button class="btn action-btn" type="button" style="font-weight: bold; font-size:20px">
                                &#x22EE; <!-- Three dots icon -->
                            </button>
                            <ul class="dropdown-menu custom-dropdown  ">
                                <li>
                                    <a class="dropdown-item bg-primary text-white" href="{{ route('banner.edit', $item->_id) }}">
                                        <i class="fa fa-edit"></i> Edit
                                    </a>
                                </li>
                               
                                <li>
                                    <form class="d-inline" onsubmit="confirmDelete(event)" action="{{ route('banner.destroy', $item->_id) }}" method="POST">
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
        {{$banner->links()}}
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