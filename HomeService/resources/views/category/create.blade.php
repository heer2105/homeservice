
@include('header')

<h1>Add Category</h1>
<form class="d-flex" method="post" action="{{ route('category.store') }}" enctype="multipart/form-data">
    @csrf
    <div class="col">
        <div class="mb-3">
            <label for="cat_name" class="form-label">Category Name</label>
            <input type="text" name="cat_name" id="cat_name" class="form-control" placeholder="Enter category name"
                required aria-describedby="helpId" />
            @error('cat_name')  <!-- Validation error for category_name -->
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label for="cat_pic" class="form-label">Category Pic</label>
            <input type="file" name="cat_pic" id="cat_pic" class="form-control" accept="image/*" required
                aria-describedby="helpId" />
            @error('cat_pic')  <!-- Validation error for cat_pic -->
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
