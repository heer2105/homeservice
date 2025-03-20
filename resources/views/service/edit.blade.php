@include('header')
    <div class="container">
        <h1>Update service</h1>
        <form action="{{route('service.update',$service->_id)}}" method="POST" enctype="multipart/form-data">
           @csrf
           @method('PUT')
            <div class="mb-3">
                <label for="" class="form-label">service name</label>
                <input type="text" class="form-control" name="sname" value="{{$service->sname}}" id="" aria-describedby="helpId"
                    placeholder="" />
                
                    <span class="text-danger">
                        @error('sname')
                            {{$message}}
                        @enderror
                    </span>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">service pic1</label>
                <input type="file" class="form-control" name="pic1" id="" aria-describedby="helpId"
                    placeholder="" />
                    <span class="text-danger">
                        @error('pic1')
                            {{$message}}
                        @enderror
                    </span>
            </div>

            <div class="mb-3">
                <label for="" class="form-label">service pic2</label>
                <input type="file" class="form-control" name="pic2" id="" aria-describedby="helpId"
                    placeholder="" />
                    <span class="text-danger">
                        @error('pic2')
                            {{$message}}
                        @enderror
                    </span>
            </div>

            <div class="mb-3">
                <label for="" class="form-label">service pic3</label>
                <input type="file" class="form-control" name="pic3" id="" aria-describedby="helpId"
                    placeholder="" />
                    <span class="text-danger">
                        @error('pic3')
                            {{$message}}
                        @enderror
                    </span>
            </div>

            <div class="mb-3">
                <label for="Video" class="form-label">service Video</label>
                <input type="file" class="form-control" name="video" id="" aria-describedby="helpId"
                    placeholder="" />
                    <span class="text-danger">
                        @error('video')
                            {{$message}}
                        @enderror
                    </span>
            </div>

            <div class="mb-3">
                <label for="text" class="form-label"> Duration</label>
                <input type="text" class="form-control" name="duration" value="{{$service->duration}}" id="" aria-describedby="helpId"
                    placeholder="" />
                
                    <span class="text-danger">
                        @error('duration')
                            {{$message}}
                        @enderror
                    </span>
            </div>

            <div class="mb-3">
                <label for="text" class="form-label"> Rating</label>
                <input type="text" class="form-control" name="rating" value="{{$service->rating}}" id="" aria-describedby="helpId"
                    placeholder="" />
                
                    <span class="text-danger">
                        @error('rating')
                            {{$message}}
                        @enderror
                    </span>
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


            {{-- <div class="mb-3">
                <label for="" class="form-label"> Gender</label>
                @if (strcasecmp($service->gender,"male")==0)
                <input type="radio"  name="gender"  id="" aria-describedby="helpId"
                placeholder="" /> Male
                @else
                <input type="radio"  name="gender"  id="" aria-describedby="helpId"
                placeholder="" />Female
                @endif
                
                <input type="radio"  name="gender" value="{{$service->gender}}" id="" aria-describedby="helpId"
                    placeholder="" />
                
                    <span class="text-danger">
                        @error('gender')
                            {{$message}}
                        @enderror
                    </span>
            </div> --}}

            <div class="mb-3">
                <label for="" class="form-label">Description</label>
                <input type="text" class="form-control" name="desc" value="{{$service->desc}}" id="" aria-describedby="helpId"
                    placeholder="" />
                
                    <span class="text-danger">
                        @error('desc')
                            {{$message}}
                        @enderror
                    </span>
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Description2</label>
                <input type="text" class="form-control" name="desc2" value="{{$service->desc2}}" id="" aria-describedby="helpId"
                    placeholder="" />
                
                    <span class="text-danger">
                        @error('desc2')
                            {{$message}}
                        @enderror
                    </span>
            </div>

            {{-- <div class="mb-3">
                <label for="" class="form-label">Rating</label>
                <input type="text" class="form-control" name="rating" value="{{$service->rating}}" id="" aria-describedby="helpId"
                    placeholder="" />
                
                    <span class="text-danger">
                        @error('rating')
                            {{$message}}
                        @enderror
                    </span>
            </div> --}}

            <div class="mb-3">
                <label for="" class="form-label">Price</label>
                <input type="text" class="form-control" name="price" value="{{$service->price}}" id="" aria-describedby="helpId"
                    placeholder="" />
                
                    <span class="text-danger">
                        @error('price')
                            {{$message}}
                        @enderror
                    </span>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Discount</label>
                <input type="text" class="form-control" name="discount" value="{{$service->discount}}" id="" aria-describedby="helpId"
                    placeholder="" />
                
                    <span class="text-danger">
                        @error('discount')
                            {{$message}}
                        @enderror
                    </span>
            </div>
            <div class="mb-3">
                <label for="service_id" class="form-label">Choose a category:</label>
                <select name="service_id" id="service_id" class="form-select">
                    @foreach($data as $item)
                       <option value="{{$item->_id}}">{{$item->cat_name}}</option>
                    @endforeach
                </select> 
            </div>
            <div class="mb-3">

                <button type="submit" class="btn btn-primary">
                    Update
                </button>

            </div>

        </form>
        @include('footer')