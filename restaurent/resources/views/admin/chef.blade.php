@include('admin.adminheader')



<div class="container-scroller">

    @include('admin.adminnavbar')

    <div class="container-fluid page-body-wrapper">
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row ">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">


                    <form action="{{ url('/uploadchef') }}" method="post" enctype="multipart/form-data">

                        @csrf

                        <div>
                            <label for="">Name</label>
                            <input style="color:black" type="text" name="name" placeholder="Write Chef Name">
                        </div>
                        <div>
                            <label for="">Speciality</label>
                            <input style="color:black" type="text" name="speciality" placeholder="Write Chef Speciality">
                        </div>
                        <div>
                            <label for="">Chef Image</label>
                            <input  type="file" name="image">
                        </div>
                        <div>
                            <input type="submit" value="save">
                        </div>
                    </form>


                    <h4 style="margin-top: 100px" class="card-title">chef List</h4>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th> Name </th>
                            <th> Speciality </th>
                            <th> Image </th>
                            <th> Action </th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $data)
                                <tr align="center">
                                    <th>{{ $data->name }}</th>
                                    <th>{{ $data->speciality }}</th>
                                    <th><img style="width: 100px; height: 100px" src="/chefimage/{{ $data->image }}" ></th>
                                    <th><a href="{{ url('/updatechefview',$data->id) }}">Update</a></th>
                                </tr>
                            @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
</div>

@include('admin.adminfooter')
