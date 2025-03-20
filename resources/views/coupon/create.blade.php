
@include('header')

<h1>Add Coupon</h1>
<form class="d-flex" method="post" action="{{ route('coupon.store') }}" enctype="multipart/form-data">
    @csrf
    <div class="col">
        <div class="mb-3">
            <label for="c_code" class="form-label">Coupon Code</label>
            <input type="text" name="c_code" id="c_code" class="form-control" placeholder="Enter coupon code"
                required aria-describedby="helpId" />
            @error('c_code')  <!-- Validation error for category_name -->
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label for="c_desc" class="form-label">Coupon Description</label>
            <input type="text" name="c_desc" id="c_desc" class="form-control" placeholder="Enter coupon description"
                required aria-describedby="helpId" />
            @error('c_desc')  <!-- Validation error for category_name -->
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label for="c_title" class="form-label">Coupon Title</label>
            <input type="text" name="c_title" id="c_title" class="form-control" placeholder="Enter coupon title"
                required aria-describedby="helpId" />
            @error('c_title')  <!-- Validation error for category_name -->
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label for="c_dis" class="form-label">Coupon Discount</label>
            <input type="text" name="c_dis" id="c_dis" class="form-control" placeholder="Enter coupon discount"
                required aria-describedby="helpId" />
            @error('c_dis')  <!-- Validation error for category_name -->
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label for="c_maxamt" class="form-label">Coupon Max Amount</label>
            <input type="text" name="c_maxamt" id="c_maxamt" class="form-control" placeholder="Enter coupon max amount"
                required aria-describedby="helpId" />
            @error('c_maxamt')  <!-- Validation error for category_name -->
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="col-12">
            <label for="yourUsername" class="form-label">Coupon Pic</label>
            <div class="input-group has-validation">
              <input type="file" name="cat_pic" class="form-control" id="yourPassword">
              <span class="text-danger">
                @error('cat_pic')
                  {{$message}}
                @enderror
              </span>
              <div class="invalid-feedback">Please Select Coupon Pic!</div>
            </div>
          </div>

          <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <input type="text" name="status" id="status" class="form-control" placeholder="Enter status"
                required aria-describedby="helpId" />
            @error('status')  <!-- Validation error for category_name -->
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        

        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Insert</button>
            <button type="reset" class="btn btn-danger">Clear</button>
        </div>
    </div>
</form>

@include('footer')
