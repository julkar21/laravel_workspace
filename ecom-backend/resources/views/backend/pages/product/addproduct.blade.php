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
               <form action="{{ route('store') }}" method="POST">
                   @csrf
                    <div class="row">
                        <div class="col-md-6">                            
                            <div class="form-group">
                                <label for="pname">Product Name</label>
                                <input type="text" class="form-control" placeholder="Enter Product Name" name="name" id="name">
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
                            <div class="form-group">
                                <label for="category">Category</label>
                                <select class="form-control"  name="category" id="category">
                                    <option value="">-----Select Category-----</option>
                                    <option value="Man">Man</option>
                                    <option value="Woman">Woman</option>
                                    <option value="Children">Children</option>
                                </select>
                            </div>
                            <span class="text-danger">
                                @error('category')
                                    {{$message}}
                                @enderror
                            </span>
                            <div class="form-group">
                                <label for="size">Size</label>
                                <select class="form-control"  name="size" id="size">
                                    <option value="">-----Select Size-----</option>
                                    <option value="XL">XL</option>
                                    <option value="M">M</option>
                                    <option value="SM">SM</option>
                                </select>
                            </div>
                            <span class="text-danger">
                                @error('size')
                                    {{$message}}
                                @enderror
                            </span>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="costPrice">Cost Price</label>
                                <input type="text"  name="costPrice" id="costPrice" class="form-control" placeholder="Enter Cost Price">
                            </div>
                            <span class="text-danger">
                                @error('costPrice')
                                    {{$message}}
                                @enderror
                            </span>
                            <div class="form-group">
                                <label for="salePrice">Sale Price</label>
                                <input type="text"  name="salePrice" id="salePrice" class="form-control" placeholder="Enter Sale Price">
                            </div>
                            <span class="text-danger">
                                @error('salePrice')
                                    {{$message}}
                                @enderror
                            </span>
                            <div class="form-group">
                                <label for="quantity">Quantity</label>
                                <input type="text"  name="quantity" id="quantity" class="form-control" placeholder="Enter Product Quantity">
                            </div>
                            <span class="text-danger">
                                @error('quantity')
                                    {{$message}}
                                @enderror
                            </span>
                            <div class="form-group">
                                <label for="status">Size</label>
                                <select class="form-control"  name="status" id="status">
                                    <option value="">-----Select Status-----</option>
                                    <option value="1">Active</option>
                                    <option value="2">Inavtive</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <button class="form-control btn btn-info">Add Product</button>
                            </div>
                        </div>
                    </div>
               </form>
            </div>
        </div>
    </div>
</div>
@endsection

