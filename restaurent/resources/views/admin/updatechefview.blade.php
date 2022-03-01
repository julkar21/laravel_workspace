@include('admin.adminheader')



<div class="container-scroller">

    @include('admin.adminnavbar')

    <div style="position: relative;top:60px;right:-150px;">
        <form action="{{ url('/updatechef',$data->id) }}" method="post" enctype="multipart/form-data">

            @csrf

            <div>
                <label for="">Name</label>
                <input style="color:black" type="text" name="name" value="{{ $data->name }}">
            </div>
            <div>
                <label for="">Speciality</label>
                <input style="color:black" type="text" name="speciality" value="{{ $data->speciality }}">
            </div>
            <div>
                <label for="">Old Image</label>
                <img width="70" src="/chefimage/{{ $data->image }}" alt="">
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
