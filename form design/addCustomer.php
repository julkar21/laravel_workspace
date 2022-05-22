<?php include 'header.php'; ?>

<?php include 'navbar.php'; ?>


<?php include 'leftMainSidebar.php'; ?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Add Customer</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">Add Customer</li>
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
		    <label for="name">Name</label>
		    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name">
		  </div>	
		  <div class="form-group">
		    <label for="email">Address</label>
		    <input type="text" class="form-control" id="email" name="email" placeholder="Enter Adress">
		  </div>
		  <div class="form-group">
		    <label for="phone">Phone</label>
		    <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter Phone Number">
		  </div>
		  <button type="submit" name="save" class="btn btn-primary">Submit</button>
		</form>



      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>




<?php include 'footer.php'; ?>