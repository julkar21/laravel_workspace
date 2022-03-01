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
                            <th> Id </th>
                            <th> User Name </th>
                            <th> Email </th>
                            <th> Usertype </th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $data)
                            <tr>
                                <td> {{ $data->id }} </td>
                                <td> {{ $data->name }} </td>
                                <td> {{ $data->email }} </td>
                                @if($data->usertype=='0')
                                <td>User</td>
                                @else
                                <td>Admin</td>
                                @endif
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
