@include('header')
    <div class="container">
        <h1>Update Combo</h1>
        <form action="{{route('combo.update',$combo->_id)}}" method="POST" enctype="multipart/form-data">
           @csrf
           @method('PUT')
            <div class="mb-3">
                <label for="" class="form-label">combo Code</label>
                <input type="text" class="form-control" name="title" value="{{$combo->title}}" id="" aria-describedby="helpId"
                    placeholder="" />
                
                    <span class="text-danger">
                        @error('title')
                            {{$message}}
                        @enderror
                    </span>
            </div>
            <div class="mb-3">
                <label for="" class="form-label"> Description</label>
                <input type="text" class="form-control" name="desc" value="{{$combo->desc}}" id="" aria-describedby="helpId"
                    placeholder="" />
                
                    <span class="text-danger">
                        @error('desc')
                            {{$message}}
                        @enderror
                    </span>
            </div>
            <div class="mb-3">
                <label for="" class="form-label"> Price</label>
                <input type="text" class="form-control" name="price" value="{{$combo->price}}" id="" aria-describedby="helpId"
                    placeholder="" />
                
                    <span class="text-danger">
                        @error('price')
                            {{$message}}
                        @enderror
                    </span>
            </div>
            <div class="mb-3">
                <label for="" class="form-label"> Discount</label>
                <input type="text" class="form-control" name="discount" value="{{$combo->discount}}" id="" aria-describedby="helpId"
                    placeholder="" />
                
                    <span class="text-danger">
                        @error('discount')
                            {{$message}}
                        @enderror
                    </span>
            </div>
            
            <div class="mb-3">
                <label for="" class="form-label"> Rating</label>
                <input type="text" class="form-control" name="rating" value="{{$combo->rating}}" id="" aria-describedby="helpId"
                    placeholder="" />
                
                    <span class="text-danger">
                        @error('rating')
                            {{$message}}
                        @enderror
                    </span>
            </div>
            

            <div class="mb-3">
                <label for="" class="form-label">Combo Image</label>
                <input type="file" class="form-control" name="pic1" id="" aria-describedby="helpId"
                    placeholder="" />
                    <span class="text-danger">
                        @error('pic1')
                            {{$message}}
                        @enderror
                    </span>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Duration </label>
                <input type="text" class="form-control" name="duration" value="{{$combo->duration}}" id="" aria-describedby="helpId"
                    placeholder="" />
                
                    <span class="text-danger">
                        @error('duration')
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