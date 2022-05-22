<?php include 'header.php'; ?>

<?php include 'navbar.php'; ?>


<?php include 'leftMainSidebar.php'; ?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Add Branch</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">Add Branch</li>
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
		    <label for="brName">Branch Name</label>
		    <input type="text" class="form-control" id="brName" name="brName" placeholder="Enter Branch Name">
		  </div>
		  <div class="form-group">
		    <label for="brLocation">Branch Location</label>
		    <input type="text" class="form-control" id="brLocation" name="brLocation" placeholder="Enter Branch Location">
		  </div>	
		  <div class="form-group">
		    <label for="brManager">Branch Manager</label>
		    <input type="text" class="form-control" id="brManager" name="brManager" placeholder="Enter Branch Manager">
		  </div>
		  <div class="form-group">
		    <label for="phone">Branch Phone</label>
		    <input type="text" class="form-control" id="brPhone" name="brPhone" placeholder="Enter Branch Phone Number">
		  </div>
		  <div class="form-group">
		    <label for="brEmail">Branch Email</label>
		    <input type="email" class="form-control" id="brEmail" name="brEmail" placeholder="Enter Branch Email">
		  </div>
		  <button type="submit" name="save" class="btn btn-primary">Submit</button>
		</form>



      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>




<?php include 'footer.php'; ?>