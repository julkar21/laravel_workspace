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
                <form action="{{ route('storesubcategory') }}" method="POST" enctype="multipart/form-data">
                   @csrf
                    <div class="row">                        
                        <div class="col-md-6">                            
                            <div class="form-group">
                                <label for="category">Select Category</label>
                                <select class="form-control"  name="catId" id="catId">
                                <option value="">-----Select Category-----</option>
                                    @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach                                        
                                </select>
                            </div>
                            <span class="text-danger">
                                @error('category')
                                    {{$message}}
                                @enderror
                            </span>
                            <div class="form-group">
                                <label for="subCatName">Sub category Name</label>
                                <input type="text" class="form-control" placeholder="Enter Sub category Name" name="subCatName" id="subCatName">
                            </div>
                            <span class="text-danger">
                                @error('name')
                                    {{$message}}
                                @enderror
                            </span>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea class="form-control"  name="description" id="description" cols="30" rows="10"></textarea>
                            </div>
                            <span class="text-danger">
                                @error('description')
                                    {{$message}}
                                @enderror
                            </span>   
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="image">Sub category Image</label>
                                <input type="file"  name="image" id="image" class="form-control" placeholder="Enter Sub Category Image">
                            </div>
                            <span class="text-danger">
                                @error('image')
                                    {{$message}}
                                @enderror
                            </span>
                            <div class="form-group">
                                <label for="status">Status</label>
                                <select class="form-control"  name="status" id="status">
                                    <option value="">-----Select Status-----</option>
                                    <option value="1">Active</option>
                                    <option value="2">Inavtive</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-info">Add Product</button>
                            </div>
                        </div>
                    </div>
               </form>
            </div>
        </div>
    </div>
</div>
@endsection

