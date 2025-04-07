
@include('header')

<h1>Add Worker</h1>
<form class="d-flex" method="post" action="{{ route('worker.store') }}" enctype="multipart/form-data">
    @csrf
    <div class="col">
        <div class="mb-3">
            <label for="mobileno" class="form-label">Mobile Number</label>
            <input type="text" name="mobileno" id="mobileno" class="form-control" placeholder="Enter Mobile number"
                required aria-describedby="helpId" />
            @error('mobileno')  <!-- Validation error for category_name -->
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" name="username" id="username" class="form-control" placeholder="Enter Username"
                required aria-describedby="helpId" />
            @error('mobileno')  <!-- Validation error for category_name -->
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-3">
            <div class="form-check form-switch">
              <input class="form-check-input" name="status" id="status"
               type="checkbox" role="switch" checked>
              <label class="form-check-label" for="flexSwitchCheckChecked">Active Status</label>
            </div>
          </div>

       
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Insert</button>
            <button type="reset" class="btn btn-danger">Clear</button>
        </div>
    </div>
</form>

@include('footer')
