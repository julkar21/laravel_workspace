@include('admin.adminheader')



<div class="container-scroller">

    @include('admin.adminnavbar')

    <div style="position: relative;top:60px;right:-150px;">
        <form action="{{ url('/uploadfood') }}" method="post" enctype="multipart/form-data">

            @csrf

            <div>
                <label for="">Title</label>
                <input style="color:black" type="text" name="title" placeholder="Write Food Title">
            </div>
            <div>
                <label for="">Price</label>
                <input style="color:black" type="number" name="price" placeholder="Write Food Price">
            </div>
            <div>
                <label for="">Image</label>
                <input  type="file" name="image">
            </div>
            <div>
                <label for="">Description</label>
                <input style="color:black" type="text" name="description" placeholder="Write Food Description">
            </div>
            <div>
                <input type="submit" value="save">
            </div>
        </form>

        <div>
            <table>
                <tr>
                    <th style="padding:30px">Food Name</th>
                    <th style="padding:30px">Price</th>
                    <th style="padding:30px">Description</th>
                    <th style="padding:30px">Image</th>
                    <th style="padding:30px">Action</th>
                </tr>

                @foreach ($data as $data)
                    <tr align="center">
                        <th>{{ $data->title }}</th>
                        <th>{{ $data->price }}</th>
                        <th>{{ $data->description }}</th>
                        <th><img width="70" src="/foodimage/{{ $data->image }}" ></th>
                        <th><a href="{{ url('/updatemenu',$data->id) }}">Update</a></th>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>

</div>

@include('admin.adminfooter')
