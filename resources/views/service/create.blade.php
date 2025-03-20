
@include('header')
<style>
<style>
    #service_id option {
        font-size: 14px; /* Adjust as needed */
    }
</style

</style>
<h1>Add Service</h1>
<form class="d-flex" method="post" action="{{ route('service.store') }}" enctype="multipart/form-data">
    @csrf
    <div class="col">
        <div class="mb-3">
            <label for="sname" class="form-label">Service Name</label>
            <input type="text" name="sname" id="sname" class="form-control" placeholder="Enter service name"
                required aria-describedby="helpId" />
            @error('sname')  <!-- Validation error for category_name -->
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label for="pic1" class="form-label">Service Pic1</label>
            <input type="file" name="pic1" id="pic1" class="form-control" accept="image/*" required
                aria-describedby="helpId" />
            @error('pic1')  <!-- Validation error for cat_pic -->
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label for="pic2" class="form-label">Service Pic2</label>
            <input type="file" name="pic2" id="pic2" class="form-control" 
                aria-describedby="helpId" />
            @error('pic2')  <!-- Validation error for cat_pic -->
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label for="pic3" class="form-label">Service Pic3</label>
            <input type="file" name="pic3" id="pic3" class="form-control" 
                aria-describedby="helpId" />
            @error('pic3')  <!-- Validation error for cat_pic -->
                <small class="text-danger">{{ $message }}</small>
            @enderror
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
            <input type="text" name="duration" id="duration" class="form-control" placeholder="Enter Duration"
                required aria-describedby="helpId" />
            @error('duration')  <!-- Validation error for category_name -->
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        {{-- <div class="mb-3">
            <label for="gender" class="form-label"> Gender</label><br>
            <input type="radio" name="gender" id="gender" value="male"
                required aria-describedby="helpId" />Male
            <input type="radio" name="gender" id="gender" value="female"
                required aria-describedby="helpId" />Female
            @error('gender')  <!-- Validation error for category_name -->
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div> --}}

        <div class="mb-3">
            <label for="desc" class="form-label"> Description</label>
            <input type="text" name="desc" id="desc" class="form-control" placeholder="Enter Description"
                required aria-describedby="helpId" />
            @error('desc')  <!-- Validation error for category_name -->
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label for="desc2" class="form-label"> Description2</label>
            <input type="text" name="desc2" id="desc2" class="form-control" placeholder="Enter Second Description"
                required aria-describedby="helpId" />
            @error('desc2')  <!-- Validation error for category_name -->
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label for="rating" class="form-label"> Rating</label>
            <input type="text" name="rating" id="rating" class="form-control" placeholder="Enter Rating"
                required aria-describedby="helpId" />
            @error('rating')  <!-- Validation error for category_name -->
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-3">
            <label for="price" class="form-label"> Price</label>
            <input type="text" name="price" id="price" class="form-control" placeholder="Enter Price"
                required aria-describedby="helpId" />
            @error('price')  <!-- Validation error for category_name -->
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label for="discount" class="form-label"> Discount</label>
            <input type="text" name="discount" id="discount" class="form-control" placeholder="Enter Discount"
                required aria-describedby="helpId" />
            @error('discount')  <!-- Validation error for category_name -->
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        {{-- <div class=" mb-3">
            <label for="service_id" class="">Choose a category:</label>

            <select name="service_id" id="service_id">
                @foreach($data as $item)
                    <option value="{{$item->_id}}">{{$item->cat_name}}</option>
                @endforeach
            </select> 
        </div> --}}

        <div class="mb-3">
            <label for="service_id" class="form-label">Choose a category:</label>
            <select name="service_id" id="service_id" class="form-select">
                @foreach($data as $item)
                   <option value="{{$item->_id}}">{{$item->cat_name}}</option>
                @endforeach
            </select> 
        </div>
        <div class="col-12">
            <div class="form-check form-switch">
              <input class="form-check-input" name="popular" id="popular"
               type="checkbox" role="switch" checked>
              <label class="form-check-label" for="flexSwitchCheckChecked">Popular</label>
            </div>
          </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Insert</button>
            <button type="reset" class="btn btn-danger">Clear</button>
        </div>
    </div>
</form>

@include('footer')
