@include('admin.adminheader')



<div class="container-scroller">

    @include('admin.adminnavbar')

    <div style="position: relative;top:60px;right:-150px;">
        <form action="{{ url('/updatefood',$data->id) }}" method="post" enctype="multipart/form-data">

            @csrf

            <div>
                <label for="">Title</label>
                <input style="color:black" type="text" name="title" value="{{ $data->title }}">
            </div>
            <div>
                <label for="">Price</label>
                <input style="color:black" type="number" name="price" value="{{ $data->price }}">
            </div>
            <div>
                <label for="">Description</label>
                <input style="color:black" type="text" name="description" value="{{ $data->description }}">
            </div>
            <div>
                <label for="">Old Image</label>
                <img width="70" src="/foodimage/{{ $data->image }}" alt="">
            </div>

            <div>
                <label for="">New Image</label>
                <input  type="file" name="image">
            </div>
            <div>
                <input type="submit" value="save">
            </div>
        </form>
    </div>

</div>

@include('admin.adminfooter')
