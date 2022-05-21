@extends('backend.mastertemplate.template')

@section('content')
<div class="br-pagetitle">
<i class="icon ion-ios-home-outline"></i>
    <div>
    <h4>Dashboard</h4>
    <p class="mg-b-0">Do bigger things with Bracket plus, the responsive bootstrap 4 admin template.</p>
    </div>
</div>

<div class="br-pagebody">
    <div class="row row-sm">
        <div class="col-sm-12">
            <div class="card p-2 shadow-base">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#SL</th>
                            <th>Product Name</th>
                            <th>Description</th>
                            <th>Category</th>
                            <th>Size</th>
                            <th>Cost Price</th>
                            <th>Sale Price</th>
                            <th>Quantity</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>                        
                    <tbody>
                        @php $sl=1; @endphp
                        @foreach($products as $data)
                            <tr>
                                <td>{{ $sl }}</td>
                                <td>{{ $data->name }}</td>
                                <td>{{ $data->description }}</td>
                                <td>{{ $data->category }}</td>
                                <td>{{ $data->size }}</td>
                                <td>{{ $data->costPrice }}</td>
                                <td>{{ $data->salePrice }}</td>
                                <td>{{ $data->quantity }}</td>
                                <td>
                                    @if($data->status==1)
                                    <span class="badge badge-info">Active</span>
                                    @else
                                    <span class="badge badge-info">Inactive</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('edit',$data->id) }}" class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a>
                                    <button class="btn btn-sm btn-danger"><i class="fa fa-trash" data-toggle="modal" data-target="#delete{{$data->id}}"></i></button>
                                </td>
                            </tr>
                            <!-- Modal -->
                            <div class="modal fade" id="delete{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Confirmation Message</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Are you sure want to delete this product?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <a href="{{ route('delete',$data->id) }}" class="btn btn-primary">Confirm</a>
                                </div>
                                </div>
                            </div>
                            </div>
                        @endforeach
                        @php $sl++; @endphp
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

