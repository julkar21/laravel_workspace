@extends('backend.mastertemplate.template')

@section('content')
<div class="br-pagetitle">
    <i class="icon ion-ios-home-outline"></i>
    <div>
        <h4>Categories</h4>
        <p class="mg-b-0">Manage your all categories</p>
    </div>
</div>

<!-- Add category -->
<div class="modal fade" id="addCategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <div class="form-group">
          <label for="">Category Name</label>
          <input type="text" class="name form-control" placeholder="Enter Category Name">
          <span class="text-danger nameError"></span>
        </div>

        
        <div class="form-group">
            <label for="">Description</label>
            <textarea class="description form-control" cols="30" rows="10"></textarea>
            <span class="text-danger descriptionError"></span>
        </div>

        <div class="form-group">
            <label for="">Tags</label>
            <input type="text" class="tag form-control" placeholder="Enter Category Tag">
            <span class="text-danger tagError"></span>
        </div> 

        <div class="form-group">
          <label for="">Status</label>
          <select class="form-control status">
            <option value="1">-----Select Status-----</option>
            <option value="1">Active</option>
            <option value="2">Inactive</option>
          </select>
        </div>

      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="addCategory btn btn-primary">Add Category</button>
      </div>
    </div>
  </div>
</div>

<div class="br-pagebody">
    <div class="row row-sm">
        <div class="col-sm-12">
            <div class="card p-2 shadow-base">
                <div class="row d-flex justify-content-between px-3">
                    <h4>All Category</h4>
                    <button data-toggle="modal" data-target="#addCategory" class="btn btn-sm btn-info"><i class="fa fa-plus"></i></button>
                </div>
                <div class="msg"></div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>#SL</th>
                            <th>Category Name</th>
                            <th>Description</th>
                            <th>Tag</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>                        
                    <tbody>
                       
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

