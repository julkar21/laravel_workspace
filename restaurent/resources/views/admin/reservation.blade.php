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
                    <h4 class="card-title">Order Status</h4>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th> Name </th>
                            <th> Email </th>
                            <th> Phone </th>
                            <th> Date </th>
                            <th> Time </th>
                            <th> Message </th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $data)
                            <tr>
                                <td> {{ $data->name }} </td>
                                <td> {{ $data->email }} </td>
                                <td> {{ $data->phone }} </td>
                                <td> {{ $data->date }} </td>
                                <td> {{ $data->time }} </td>
                                <td> {{ $data->message }} </td>
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
