
@include('header')

<h1>Add combo</h1>
<form class="d-flex" method="post" action="{{ route('combo.store') }}" enctype="multipart/form-data">
    @csrf
    <div class="col">
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="Enter combo title"
                required aria-describedby="helpId" />
            @error('title')  <!-- Validation error for category_name -->
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label for="desc" class="form-label"> Description</label>
            <input type="text" name="desc" id="desc" class="form-control" placeholder="Enter description"
                required aria-describedby="helpId" />
            @error('desc')  <!-- Validation error for category_name -->
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Price </label>
            <input type="text" name="price" id="price" class="form-control" placeholder="Enter combo price"
                required aria-describedby="helpId" />
            @error('price')  <!-- Validation error for category_name -->
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label for="discount" class="form-label"> Discount</label>
            <input type="text" name="discount" id="discount" class="form-control" placeholder="Enter discount"
                required aria-describedby="helpId" />
            @error('discount')  <!-- Validation error for category_name -->
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label for="rating" class="form-label"> Rating</label>
            <input type="text" name="rating" id="rating" class="form-control" placeholder="Enter rating"
                required aria-describedby="helpId" />
            @error('rating')  <!-- Validation error for category_name -->
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        {{-- <div class="mb-3">
            <label for="c_maxamt" class="form-label">combo Max Amount</label>
            <input type="text" name="c_maxamt" id="c_maxamt" class="form-control" placeholder="Enter combo max amount"
                required aria-describedby="helpId" />
            @error('c_maxamt')  <!-- Validation error for category_name -->
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div> --}}

        <div class="col-12">
            <label for="pic1" class="form-label">Combo Image</label>
            <div class="input-group has-validation">
              <input type="file" name="pic1" class="form-control" id="pic1">
              <span class="text-danger">
                @error('pic1')
                  {{$message}}
                @enderror
              </span>
              <div class="invalid-feedback">Please Select Combo Pic!</div>
            </div>
          </div>
          <div class="mb-3">
            <label for="video" class="form-label">Video</label>
            <input type="file" name="video" id="video" class="form-control" accept="image/*" required
                aria-describedby="helpId" />
            @error('video')  <!-- Validation error for cat_pic -->
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>


          <div class="mb-3">
            <label for="duration" class="form-label"> Duration</label>
            <input type="text" name="duration" id="duration" class="form-control" placeholder="Enter duration"
                required aria-describedby="helpId" />
            @error('duration')  <!-- Validation error for category_name -->
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
          {{-- <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <input type="text" name="status" id="status" class="form-control" placeholder="Enter status"
                required aria-describedby="helpId" />
            @error('status')  <!-- Validation error for category_name -->
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div> --}}
        

        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Insert</button>
            <button type="reset" class="btn btn-danger">Clear</button>
        </div>
    </div>
</form>

@include('footer')
