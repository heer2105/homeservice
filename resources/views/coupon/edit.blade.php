@include('header')
    <div class="container">
        <h1>Update Coupon</h1>
        <form action="{{route('coupon.update',$coupon->_id)}}" method="POST" enctype="multipart/form-data">
           @csrf
           @method('PUT')
            <div class="mb-3">
                <label for="" class="form-label">Coupon Code</label>
                <input type="text" class="form-control" name="c_code" value="{{$coupon->c_code}}" id="" aria-describedby="helpId"
                    placeholder="" />
                
                    <span class="text-danger">
                        @error('c_code')
                            {{$message}}
                        @enderror
                    </span>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Coupon Description</label>
                <input type="text" class="form-control" name="c_desc" value="{{$coupon->c_desc}}" id="" aria-describedby="helpId"
                    placeholder="" />
                
                    <span class="text-danger">
                        @error('c_desc')
                            {{$message}}
                        @enderror
                    </span>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Coupon Title</label>
                <input type="text" class="form-control" name="c_title" value="{{$coupon->c_title}}" id="" aria-describedby="helpId"
                    placeholder="" />
                
                    <span class="text-danger">
                        @error('c_title')
                            {{$message}}
                        @enderror
                    </span>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Coupon Discount</label>
                <input type="text" class="form-control" name="c_dis" value="{{$coupon->c_dis}}" id="" aria-describedby="helpId"
                    placeholder="" />
                
                    <span class="text-danger">
                        @error('c_dis')
                            {{$message}}
                        @enderror
                    </span>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Coupon Max Amount</label>
                <input type="text" class="form-control" name="c_maxamt" value="{{$coupon->c_maxamt}}" id="" aria-describedby="helpId"
                    placeholder="" />
                
                    <span class="text-danger">
                        @error('c_maxamt')
                            {{$message}}
                        @enderror
                    </span>
            </div>
            
            <div class="mb-3">
                <label for="" class="form-label">Coupon pic</label>
                <input type="file" class="form-control" name="cat_pic" id="" aria-describedby="helpId"
                    placeholder="" />
                    <span class="text-danger">
                        @error('cat_pic')
                            {{$message}}
                        @enderror
                    </span>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Status </label>
                <input type="text" class="form-control" name="status" value="{{$coupon->status}}" id="" aria-describedby="helpId"
                    placeholder="" />
                
                    <span class="text-danger">
                        @error('status')
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