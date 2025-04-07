@include('header')
    <div class="container">
        <h1>Update Category</h1>
        <form action="{{route('category.update',$category->_id)}}" method="POST" enctype="multipart/form-data">
           @csrf
           @method('PUT')
            <div class="mb-3">
                <label for="" class="form-label">Category name</label>
                <input type="text" class="form-control" name="cat_name" value="{{$category->cat_name}}" id="" aria-describedby="helpId"
                    placeholder="" />
                
                    <span class="text-danger">
                        @error('cat_name')
                            {{$message}}
                        @enderror
                    </span>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Category pic</label>
                <input type="file" class="form-control" name="cat_pic" id="" aria-describedby="helpId"
                    placeholder="" />
                    <span class="text-danger">
                        @error('cat_pic')
                            {{$message}}
                        @enderror
                    </span>
            </div>
            <div class="mb-3">

                <button type="submit" class="btn btn-primary">
                    Update
                </button>

            </div>

        </form>
        @include('footer')