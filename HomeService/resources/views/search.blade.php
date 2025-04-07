

@include('header')
<style>
  /* .btn{
    height: 30px;
    width: 200px;
    font-size: 8px;
  }
  .card{
    height: 55vh;
  } */
  .btn {
    height: 18px;  /* Very small height */
    width: 80px;   /* Very small width */
    font-size: 8px; /* Very small font */
    padding: 1px 3px;
    text-align: center;
    line-height: 1; /* Adjust line height for compact size */
}

.card-body {
    text-align: left; /* Align content to the left */
    height: 45vh;
}
.custom-link {
    font-size: 10px;  /* Small font */
    color: #007bff;   /* Bootstrap primary blue */
    text-decoration: none; /* Remove underline */
    font-weight: bold; /* Make it slightly prominent */
    display: inline-block; /* Align properly */
}

.custom-link:hover {
    text-decoration: underline; /* Add underline on hover */
    color: #0056b3; /* Darker shade on hover */
}


</style>
{{-- <div class="container text-center my-4">
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
                            <h5 class="card-title">{{ $item->sname }}</h5><br>
                            <img src="/img/{{ $item->pic1 }}" class="card-title">
                            <h6 class="text-success">{{$item->price}} ₹/-</h6>
                            <a href="{{ url('/service/' . $item->id) }}" class="custom-link">More Details</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>

@include('footer') --}}

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
                      @if($item->image)
                          <img src="{{ asset('storage/' . $item->image) }}" class="card-img-top img-fluid" alt="Service Image">
                      @else
                          <img src="/img/{{ asset('images/default-service.jpg') }}" class="card-img-top img-fluid" alt="Default Image">
                      @endif
                      <div class="card-body">
                          <h4 class="card-title">{{ $item->sname }}</h4>
                          <h3 class="text-success">{{ $item->price }} ₹/-</h3>
                          <a href="#" class="custom-link" data-bs-toggle="modal" data-bs-target="#serviceModal{{ $item->id }}">More Details</a>
                      </div>
                  </div>
              </div>

              <!-- Bootstrap Modal for Service Details -->
              <div class="modal fade" id="serviceModal{{ $item->id }}" tabindex="-1" aria-labelledby="serviceModalLabel{{ $item->id }}" aria-hidden="true">
                  <div class="modal-dialog">
                      <div class="modal-content">
                          <div class="modal-header">
                              <h5 class="modal-title" id="serviceModalLabel{{ $item->id }}">{{ $item->sname }}</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body text-center">
                              @if($item->image)
                                  <img src="/img/{{ asset('storage/' . $item->image) }}" class="img-fluid mb-3" alt="Service Image">
                              @endif
                              <h4 class="text-success">{{ $item->price }} ₹/-</h4>
                              <p>{{ $item->description }}</p>
                          </div>
                          <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          </div>
                      </div>
                  </div>
              </div>

          @endforeach
      </div>
  @endif
</div>

@include('footer')
