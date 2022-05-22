<?php include 'header.php'; ?>

<?php include 'navbar.php'; ?>


<?php include 'leftMainSidebar.php'; ?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Add Product</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">Add Product</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">



       <form class="col-sm-6 offset-md-3">
       	  <div class="form-group">
		    <label for="proName">Product Name</label>
		    <input type="text" class="form-control" id="proName" name="proName" placeholder="Enter Product Name">
		  </div>
		  <div class="form-group">
		    <label for="proDes">Product Description</label>
		    <input type="text" class="form-control" id="proDes" name="proDes" placeholder="Enter Product Description">
		  </div>	
		  <div class="form-group">
		    <label for="proType">Product Type</label>
		    <input type="text" class="form-control" id="proType" name="proType" placeholder="Enter Product Type">
		  </div>	
		  <div class="form-group">
		    <label for="proSize">Product Size</label>
		    <input type="text" class="form-control" id="proSize" name="proSize" placeholder="Enter Product Size">
		  </div>	
		  <div class="form-group">
		    <label for="proCostPrice">Product Cost Price</label>
		    <input type="text" class="form-control" id="proCostPrice" name="proCostPrice" placeholder="Enter Product Cost Price">
		  </div>	
		  <div class="form-group">
		    <label for="proSalePrice">Product Sale Price</label>
		    <input type="text" class="form-control" id="proSalePrice" name="proSalePrice" placeholder="Enter Product Sale Price">
		  </div>	
		  <div class="form-group">
		    <label for="proQuantity">Product Quantity</label>
		    <input type="text" class="form-control" id="proQuantity" name="proQuantity" placeholder="Enter Product Quantity">
		  </div>
		  <button type="submit" name="save" class="btn btn-primary">Submit</button>
		</form>



      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>




<?php include 'footer.php'; ?>