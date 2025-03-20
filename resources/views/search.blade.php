{{-- @include('header')

<div class="container" style="margin: auto">
    <h1>Explore here....</h1>
    <hr>
      <div class="row justify-content-center">
        @foreach ($service as $item)
        <div class="col-4">
          <div class="card"> --}}
            {{-- <img class="card-img-top" src="{{$item->pic1}}" style="height: 400px;" alt="Title" /> --}}
            {{-- <div class="card-body">
              <h4 class="card-title">{{$item->sname}}</h4>
              <h3 class="card-text">{{$item->price}}  ₹/-</h3> --}}
              {{-- <a href="/more/{{$item->_id}}" class="btn btn-info">More Details</a> --}}
            {{-- </div>
          </div>
          
        </div>
        @endforeach
        
      </div>
  </div>
  
@include('footer') --}}


@include('header')

<div class="container text-center my-4">
    <h1 class="mb-3">Explore Our Services</h1>
    <hr>

    @if($services->isEmpty())
        <h4 class="text-muted">No services found.</h4>
    @else
        <div class="row justify-content-center">
            @foreach ($services as $item)
                <div class="col-md-4 mb-4">
                    <div class="card shadow-lg p-3">
                        <div class="card-body">
                            <h4 class="card-title">{{ $item->sname }}</h4>
                            <h3 class="text-success">{{$item->price}} ₹/-</h3>
                            {{-- <a href="{{ url('/service/' . $item->id) }}" class="btn btn-info">More Details</a> --}}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>

@include('footer')
