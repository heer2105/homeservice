{{-- @include('header')

<style>
    .booking{
        font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif ;

    }
</style>
<div class="booking">
    <h1>combos</h1>

</div>
<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.12.4/dist/sweetalert2.min.css" rel="stylesheet">
<br>
    <a href="{{ route('combo.create') }}" class="effect-btn btn btn-secondary mt-3 mr-3 md-btn">+ Add combo</a><br><br>
    <br>
        <table class="table  table-styled table-responsive " >

            <thead class="thead-dark">
                
                <tr>
                    <th>SR.NO</th>
                    <th>combo Code</th>
                    <th>combo Title</th>
                    <th>combo Discount</th>
                    <th>combo Image</th>
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
                                        <a class="dropdown-item bg-primary text-white" href="{{ route('combo.edit', $item->_id) }}">
                                            <i class="fa fa-edit"></i> Edit
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item bg-success text-white" href="{{ route('combo.show', $item->_id) }}">
                                            <i class="fa fa-edit"></i> Show
                                        </a>
                                    </li>
                                    <li>
                                        <form class="d-inline" onsubmit="confirmDelete(event)" action="{{ route('combo.destroy', $item->_id) }}" method="POST">
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
#comboDuration{
        color: grey;
    }
</style>

<div class="booking">
    <h1>Combos</h1>
</div>

<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.12.4/dist/sweetalert2.min.css" rel="stylesheet">
<br>
<a href="{{ route('combo.create') }}" class="effect-btn btn btn-secondary mt-3 mr-3 md-btn">+ Add Combos</a><br><br>
<br>
<table class="table table-styled table-responsive">
    <thead class="thead-dark">
        <tr>
            <th>SR.NO</th>
            <th> Title</th>
            {{-- <th> Description</th> --}}
            <th> Price</th>
            <th> Discount</th>
            <th> Duration</th>
            <th> Rating</th>
            <th>Image</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody class="table-group-divider Table-hover">
        @foreach ($data as $item)
        <tr class="table-light">
            <td scope="row">{{ $loop->index + 1 }}</td>
            <td>{{ $item->title }}</td>
            {{-- <td>{{ $item->desc }}</td> --}}
            <td>{{ $item->price }}</td>
            <td>{{ $item->discount }}</td>
            <td>{{ $item->duration }}</td>
            <td>{{ $item->rating }}</td>

            <td><img src="/img/{{ $item->pic1 }}" height="100" width="100" alt="/img/no_image.jpg"></td>
            <td>
                <div class="dropdown">
                    <button class="btn action-btn" type="button" style="font-weight: bold; font-size:20px">
                        &#x22EE;
                    </button>
                    <ul class="dropdown-menu custom-dropdown">
                        <li>
                            <a class="dropdown-item bg-primary text-white" href="{{ route('combo.edit', $item->_id) }}">
                                <i class="fa fa-edit"></i> Edit
                            </a>
                        </li>
                        <li>
                            <button class="dropdown-item bg-success text-white" onclick="showcomboDetails({{ json_encode($item) }})">
                                <i class="fa fa-eye"></i> Show
                            </button>
                        </li>
                        <li>
                            <form class="d-inline" onsubmit="confirmDelete(event)" action="{{ route('combo.destroy', $item->_id) }}" method="POST">
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

<div id="comboCard" class="service-card">
    <button onclick="closecomboCard()" class=" btn text-dark">
        <i class="fa fa-times"></i>
    </button>
    <img id="comboImage" src="" class="img-fluid rounded mb-3" alt="combo Image">
    <h2 id="comboTitle" class="text-primary font-weight-bold"></h2><br>
    {{-- <p><strong>Title:</strong> <span id="comboCode"></span></p> --}}
    <p><b>₹ <span id="comboPrice"></span></b> <i class="fas fa-grip-lines-vertical"></i> <span id="comboDuration"></span></p><br>
    <p><strong><i class="fa-solid fa-star"></i></strong> <span id="comboRating"></span></p><br>
    <p><strong>Discount:</strong> <span id="comboDiscount"></span></p><br>
    {{-- <p><strong>Duration:</strong> <span id="comboDuration"></span></p><br> --}}
    <p> <span id="comboDesc"></span></p><br>
    


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
    
    function showcomboDetails(item) {
        document.getElementById("comboTitle").innerText = item.title;
        document.getElementById("comboPrice").innerText = item.price;
        document.getElementById("comboDesc").innerText = item.desc;
        document.getElementById("comboDuration").innerText = item.duration;
        document.getElementById("comboRating").innerText = item.rating;
        document.getElementById("comboDiscount").innerText = item.discount + "%";
        document.getElementById("comboImage").src = "/img/" + item.pic1;
        document.getElementById("comboCard").classList.add("active");
    }

    function closecomboCard() {
        document.getElementById("comboCard").classList.remove("active");
    }
</script>

@include('footer')
