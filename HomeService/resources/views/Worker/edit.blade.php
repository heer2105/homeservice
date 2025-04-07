@include('header')
    <div class="container">
        <h1>Update Worker</h1>
        <form action="{{route('worker.update',$worker->_id)}}" method="POST" enctype="multipart/form-data">
           @csrf
           @method('PUT')
            <div class="mb-3">
                <label for="" class="form-label">Mobile Number</label>
                <input type="text" class="form-control" name="mobileno" value="{{$worker->mobileno}}" id="" aria-describedby="helpId"
                    placeholder="" />
                
                    <span class="text-danger">
                        @error('mobileno')
                            {{$message}}
                        @enderror
                    </span>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Username</label>
                <input type="text" class="form-control" name="username" value="{{$worker->username}}" id="" aria-describedby="helpId"
                    placeholder="" />
                
                    <span class="text-danger">
                        @error('username')
                            {{$message}}
                        @enderror
                    </span>
            </div>
            {{-- <div class="col-12">
                <div class="form-check form-switch">
                  @if ($worker->status)
                  <input class="form-check-input" name="status"
                   type="checkbox" role="switch" checked>
                   @else
                   <input class="form-check-input" name="status"
                   type="checkbox" role="switch" 
                   >
                  @endif
                  <label class="form-check-label" for="flexSwitchCheckChecked">Active Status</label>
                </div>
              </div> --}}

              <div class="col-12">
                <div class="form-check form-switch">
                  <input class="form-check-input" name="status" id="status"
                   type="checkbox" role="switch" checked>
                  <label class="form-check-label" for="flexSwitchCheckChecked">Active Status</label>
                </div>
              </div>
            
            <div class="mb-3">

                <button type="submit" class="btn btn-primary">
                    Update
                </button>

            </div>

        </form>
        @include('footer')