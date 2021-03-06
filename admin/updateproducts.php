<?php
session_start(); 
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <script src="https://cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php include("include/menu.php"); ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

<!-- Nav Item - Search Dropdown (Visible Only XS) -->
<li class="nav-item dropdown no-arrow d-sm-none">
  <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <i class="fas fa-search fa-fw"></i>
  </a>

</li>



<!-- Nav Item - User Information -->
<li class="nav-item dropdown no-arrow">
  <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <span class="mr-2 d-none d-lg-inline text-gray-600 small">G-9 Book Shop</span>
    <img class="img-profile rounded-circle" src="logo/G9 LOGO1.png">
  </a>


  <!-- Dropdown - User Information -->
  <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
      <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
      Logout
    </a>
  </div>
</li>

</ul>

</nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Update Products:</h1>

        </div>
        <!-- /.container-fluid -->
        

         <!--product update form-->
                  <div class="container">
            <section class="row">
                <article class="col-md-12">
                  <!---php code--->
                  <?php 
                   
                   $id = $_GET['id'];
                   $con=mysqli_connect("localhost","root","","kitaab");
                   $sel="SELECT * FROM addproducts WHERE id='$id'";
                   $rk=$con->query($sel);
                   while($row=$rk->fetch_assoc()){
                  ?>
      
      <form action="updatefetch.php" method="post" enctype="multipart/form-data" style="color:black;">
        <p class="pp">Title:</p>
        <p><input type="hidden" name="id" value="<?php echo $id; ?>"></p>
        <p><input type="text" name="title" value="<?php echo $row['title']; ?>"></p>
        <p class="pp">Author:</p>
        <p><input type="text" name="author" value="<?php echo $row['author']; ?>"></p>
        <p>category:
          <select name="type">
            
              <option value="fantasy">Novel</option>
              <option value="Horror">Horror</option>
              <option value="comics">Comics</option>
              <option value="entranceexamguides">Academic</option>
              <option value="kids">Computer Programming</option>
              <option value="holybooks">Islamic</option>
            
          </select>
        </p>
        <p>Description:</p>
        <textarea name="Book_Details" rows="15" cols="50" placeholder="Insert Book Details" required></textarea>
        <br>
        <div>
          <p>Upload image:</p>
          <input type="file" name="imgup">
          <p><img src="pimages/<?php echo $row['image']; ?>" style="width:200px;height:200px;"></p>
        </div>
        <br>
        <hr>
        <table>
          <tr>
          <th>
            <p>Set Price:</p>
            <p><input type="text" name="cost" value="<?php echo $row['sprice']; ?>"></p>
          </th>
          <th>
            <p style="margin-left:15px;">Deducted price:</p>
            <p style="margin-left:15px;"><input type="text" name="dcost" value="<?php echo $row['dprice']; ?>"></p>
          </th>
          </tr>
          <tr>
          <th>
            <p>Price saved:</p>
            <p><input type="text" name="pscost" value="<?php echo $row['prices']; ?>"></p>

          </th>
          </tr>
    
        </table>

        <hr>
      
        
        <input type="submit" name="init" value="Update">
      </form>
     <?php } ?>
    </article>
  </article>
</section>
           </div>


        <!--productupdate form ends-->





      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; G-9 Book Shop 2021</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">??</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="logoutfetch.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>
   <script>

</script>

</body>

</html>
