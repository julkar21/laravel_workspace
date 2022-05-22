<?php include 'header.php'; ?>

<?php include 'navbar.php'; ?>


<?php include 'leftMainSidebar.php'; ?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Add Company</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">Add Company</li>
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
		    <label for="comName">Company Name</label>
		    <input type="text" class="form-control" id="comName" name="comName" placeholder="Enter Company Name">
		  </div>	
		  <div class="form-group">
		    <label for="comAdd">Company address</label>
		    <input type="text" class="form-control" id="comAdd" name="comAdd" placeholder="Enter Comapny Address">
		  </div>
		  <div class="form-group">
		    <label for="comPhone">Company Phone</label>
		    <input type="text" class="form-control" id="comPhone" name="comPhone" placeholder="Enter Company Phone Number">
		  </div>
		  <div class="form-group">
		    <label for="comEmail">Company Email</label>
		    <input type="text" class="form-control" id="comEmail" name="comEmail" placeholder="Enter Company Email">
		  </div>
		  <div class="form-group">
		    <label for="comManagerName">Company Email</label>
		    <input type="text" class="form-control" id="comManagerName" name="comManagerName" placeholder="Enter Company Manager Name">
		  </div>
		  <button type="submit" name="save" class="btn btn-primary">Submit</button>
		</form>



      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>




<?php include 'footer.php'; ?>