<?php include 'header.php'; ?>

<?php include 'navbar.php'; ?>


<?php include 'leftMainSidebar.php'; ?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Add User</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">Add User</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
		<?php		

			if(isset($_POST['save'])){
				$name     = $_POST['name'];
				$userName = $_POST['userName'];
				$email    = $_POST['email'];
				$phone    = $_POST['phone'];
				$password = $_POST['password'];
				
			}
		?>


       <form method="POST" class="col-sm-6 offset-md-3">
       	  <div class="form-group">
		    <label for="name">Name</label>
		    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name">
		  </div>
		  <div class="form-group">
		    <label for="userName">User Name</label>
		    <input type="text" class="form-control" id="userName" name="userName" placeholder="Enter User Name">
		  </div>	
		  <div class="form-group">
		    <label for="email">Email address</label>
		    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
		  </div>
		  <div class="form-group">
		    <label for="phone">Phone</label>
		    <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter Phone Number">
		  </div>
		  <div class="form-group">
		    <label for="password">Password</label>
		    <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password">
		  </div>
		  <div class="form-group">
		    <label for="rePassword">Re-type Password</label>
		    <input type="password" class="form-control" id="rePassword" name="rePassword" placeholder="Re-type Password">
		  </div>
		  <button type="submit" name="save" class="btn btn-primary">Submit</button>
		</form>



      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>




<?php include 'footer.php'; ?>