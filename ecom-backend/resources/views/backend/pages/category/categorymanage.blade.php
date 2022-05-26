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
          <tbody class="tbody">          
          </tbody>
        </table>
        
        <!-- Start update Category Modal -->
        <div class="modal fade" id="editCategoryModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="form-group">
                    
                    <input type="hidden" class="form-control" id="categoryId">
                  </div>
                  <div class="form-group">
                    <label for="">Category Name</label>
                    <input type="text" class="form-control" id="categoryName">
                  </div>
                  <span class="text-danger errorCategoryName"></span>
                  <div class="form-group">
                    <label for="">Category Description</label>
                    <textarea class="form-control" id="categoryDescription" rows="5"></textarea>
                  </div>
                  <span class="text-danger errorCategoryDescription"></span>
                  <div class="form-group">
                    <label for="">Category Tags</label>
                    <input type="text" class="form-control" id="categoryTags">
                  </div>
                  <span class="text-danger errorCategoryTags"></span>
                  <div class="form-group">
                    <select  id="categoryStatus" class="form-control">
                      <option class="activeStatus"></option>
                      <option value="1">Active</option>
                      <option value="2">Inactive</option>
                    </select>
                  
                  </div>
                  <span class="text-danger errorCategoryTags"></span>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-success updateCategoryBtn">Update Category</button>
              </div>
            </div>
          </div>
        </div>  
        <!-- End update Category Modal -->
        <!-- Start Delete Category Modal -->
        <div class="modal fade" id="deleteCategoryModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <input type="hidden" class="form-control" id="deleteCategoryId">
                Are You Sure Want To Delete This Category?
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-danger confirmDeleteBtn">Confirm</button>
              </div>
            </div>
          </div>
        </div>  
        <!-- End Delete Category Modal -->
      </div>
    </div>
  </div>
</div>
@endsection