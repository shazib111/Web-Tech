<?php

session_start();


?>
<!DOCTYPE html>
<html lang="en-US">
<head>
	<title>G-9 Book Shop</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0, shrink-to-fit=no">
	<meta name="keywords" content="Best online book store,Books at reasonable price,best books at best offer">
	<meta name="description" content="Online book store,books at affordable price">
	<!--font awesome kit code-->
	
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
	<!--external css-->
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</script>
  <style>

  </style>
</head>

<body>
	<div class="container">
       <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand/logo -->
 
  <a class="navbar-brand" href="index.php">
  <img class="profile" src="images/G9 LOGO.png" alt="logo" style="width:72px;">

  </a>
  </a>
  
  <!-- Links -->
  <ul class="navbar-nav">

     <form class="form-inline" action="/action_page.php">
        <div class="dropdown">
          <a href="#" data-toggle="dropdown">
    <input class="form-control mr-sm-2" type="text" placeholder="Search" style="width:500px;height:42px;">
    <div class="dropdown-menu">
       <li class="dropdown-item">
                              <li class="dropdown-item"><a href="http://localhost/9/productview/Academic1.php">Fundamentals of Physics</a></li>
                              <li class="dropdown-item"><a href="http://localhost/9/productview/Academic2.php">Calculus</a></li>
                              <li class="dropdown-item"><a href="http://localhost/9/productview/Academic3.php">Digital Fundamentals</a></li>
                              <li class="dropdown-item"><a href="http://localhost/9/productview/Academic4.php">Advanced Engineering Mathematics</a></li>
                              <li class="dropdown-item"><a href="http://localhost/9/productview/Prog1.php">The Complete Reference C++</a></li>
                              <li class="dropdown-item"><a href="http://localhost/9/productview/Prog3.php">Microsoft Visual C# Step by Step</a></li>
                             
                            </div>
                          </div>
    <button class="btn btn-success" type="submit">Search</button>

  </form>
  </ul>
  <ul class="navbar-nav">
   <li class="nav-item" style="margin-left: 20px;">
      <a class="nav-link"><?php echo "".$_SESSION['username']; ?></a>
   </li>
   <li class="nav-item" style="margin-left:10px;font-weight: bold">
   	<a class="nav-link" href="#Contact">Contact</a>
   </li>
   <li class="nav-item icn">
      <a class="nav-link" href="cart.php"><i style="font-size:25px;margin-left:20px;"class="fas fa-cart-plus"></i></a>
   </li>
   <li class="nav-item">
      <a class="nav-link" href="logoutfetch.php"><button type="button" class="btn btn-danger bt" style="width:100px;margin-left: 10px;">Logout</button></a>
   </li>
  </ul>
</nav>
<section class="row">
  <article class="col-md-12">

	      <nav class="navbar navbar-expand-sm bg-light navbar-light">

 
  
  <!-- Links -->
  <ul class="navbar-nav">
  <li class="nav-item">
      <a class="nav-link" href="http://localhost/9/index.php#best">বেস্টসেলার বই</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="http://localhost/9/index.php#academic">একাডেমিক</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="http://localhost/9/index.php#novel">উপন্যাস</a> 
    </li>
    <li class="nav-item">
      <a class="nav-link" href="http://localhost/9/index.php#horror">হরর</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="http://localhost/9/index.php#comics">কমিক্স</a> 
    </li>
    <li class="nav-item">
      <a class="nav-link" href="http://localhost/9/index.php#islamic">ইসলামিক বই</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="http://localhost/9/index.php#cprog">কম্পিউটার প্রোগ্রামিং</a>
    </li>
  </ul>
 
  
</nav>
</article>
<article class="col-md-12">
<!--carousel-->
<div id="sli" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#sli" data-slide-to="0" class="active"></li>
    <li data-target="#sli" data-slide-to="1"></li>
    <li data-target="#sli" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/bnr1.1.png" alt="blood and bones book banner" width="100%" height="500px">
    </div>
    <div class="carousel-item">
      <img src="images/bnr2.1.jpg" alt="the crimson curse book banner" width="100%" height="500px">
    </div>
    <div class="carousel-item">
      <img src="images/bnr3.1.jpg" alt="lord of shadows book banner" width="100%" height="500px">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#sli" data-slide="prev">
    </span>
  </a>
  <a class="carousel-control-next" href="#sli" data-slide="next">
   </span>
  </a>
</div>  
<!--carousel ends-->

</article>
<article class="col-md-12">
 <h1 style="color:white;font-family:kalam;font-size:50px;margin-top:20px;text-align: center;">The world belongs to those "who reads"</h1>
</article>
</section>
<!--product addition start-->
<section class="row">
  <article class="col-md-12">
  <p  id="fantasy" style="font-size:40px;color:#00ffff;"><span></span>
  </p>
</article>
</section>
<section class="row">
  <?php 
                 
              $con=mysqli_connect("localhost","root","","kitaab");
              $sel="SELECT * FROM addproducts";
              $r=$con->query($sel);
              while($row=$r->fetch_assoc()){
              
  ?>
<figure class="col-md-2" style="margin:40px;">

  <div class="card" style="width:210px;">
   <form action="addcartfetch.php" method="post" enctype="multipart/form-data">

    <p><input type="hidden" name="ids" value="<?php echo $row['id']?>"></p>

    <p><input type="hidden" value="../admin/pimages/<?php  echo $row['image'];?>" name="img" ></p>
    <a href="prdctview.php?id=<?php echo $row['id']; ?>"><img class="card-img-top"  src="../admin/pimages/<?php  echo $row['image'];?>" alt="Card image" style="width:100%;height:260px"></a>
    <div class="card-body">
      <p><input type="hidden" name="titl" value="<?php echo $row['title']?>"></p>
      <h4 class="card-title"><?php echo $row['title']; ?></h4>

      <p><input type="hidden" name="price" value="<?php echo $row['sprice']?>"></p>
      <p class="card-text">৳ <?php echo $row['sprice']; ?></p>
      <p><input type="submit" name="sb" value="Add to cart"  class="btn btn-danger" style="background: #62ffff;"><a href="#"></a></p>
       </form>
      
    </div>
  </div>
</figure>
<?php } ?>
</section>
<!--second section of adding product-->

<section id="Contact" class="contact flexible-content">
<!---start of a footer-->
<!-- Footer -->
<footer class="page-footer font-small mdb-color pt-4 bg-dark navbar-dark">

  <!-- Footer Links -->
  <div class="container text-center text-md-left bg-dark navbar-dark" style="color:white;">

    <!-- Footer links -->
    <div class="row text-center text-md-left mt-3 pb-3">

      <!-- Grid column -->
      <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">G-9 Book Shop</h6>
        <p>G-9 Book Shop is an online shop where customers may purchase a variety of books ranging from academic to fantasy. The bookstore also offers a comic book collection.</p>
      </div>
      <!-- Grid column -->

      <hr class="w-100 clearfix d-md-none">

     
      <!-- Grid column -->

      <hr class="w-100 clearfix d-md-none">

      <!-- Grid column -->
      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3" style="color:white;">
        <h6 class="text-uppercase mb-4 font-weight-bold">Useful links</h6>
        <p>
          <a href="https://www.facebook.com/G9-Online-Book-Shop-104617898600268/">Your Account</a>
        </p>
        <p>
          <a href="https://www.facebook.com/104617898600268/posts/105827401812651/">Offers</a>
        </p>
        <p>
          <a href="https://www.facebook.com/104617898600268/posts/105801815148543/">Terms and conditions</a>
        </p>
        <p>
          <a href="https://www.facebook.com/104617898600268/posts/105849351810456/">Credit</a>
        </p>
      </div>

      <!-- Grid column -->
      <hr class="w-100 clearfix d-md-none">

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3" style="color:white;">
        <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
        <p>
          <i class="fas fa-home mr-3"></i>1219-Dhaka, Bangladesh</p>
        <p>
          <i class="fas fa-envelope mr-3"></i>g9_bookshop@gmail.com</p>
        <p>
          <i class="fas fa-phone mr-3"></i> + 88 01715165818</p>
        <p>
          <i class="fas fa-phone mr-3"></i> + 88 01624718828</p>
        <p>
          <i class="fas fa-print mr-3"></i> + 88 01794295462</p>
      </div>
      <!-- Grid column -->

    </div>
    <!-- Footer links -->

    <hr>

    <!-- Grid row -->
    <div class="row d-flex align-items-center">

      <!-- Grid column -->
      <div class="col-md-7 col-lg-8">

        <!--Copyright-->
        <p class="text-center text-md-left" style="color:white;">Copyright © 2021 and all rights reserved by-
          <a href="index.php">
            <strong>G-9 Book Shop</strong>
          </a>
        </p>

      </div>
   
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-5 col-lg-4 ml-lg-0">

        <!-- Social buttons -->
        <div class="text-center text-md-right mx-auto">
          <ul class="list-unstyled list-inline">

            <li class="list-inline-item" >
              <a type="button" class="btn-floating btn-sm rgba-white-slight mx-1" href="https://www.facebook.com/G9-Online-Book-Shop-104617898600268/">
                <i class="fab fa-facebook-f" style="font-size:30px;box-shadow: 2px 2px 4px 4px #00ffff;"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a type="button" class="btn-floating btn-sm rgba-white-slight mx-1" href="https://www.twitter.com/book_g9">
                <i class="fab fa-twitter" style="font-size:30px;box-shadow: 2px 2px 4px 4px #00ffff;"></i>
              </a>
            </li>
            
            <li class="list-inline-item">
              <a type="button" class="btn-floating btn-sm rgba-white-slight mx-1" href="https://www.linkedin.com/company/g9-online-book-shop/">
                <i class="fab fa-linkedin-in" style="font-size:30px;box-shadow: 2px 2px 4px 4px #00ff99;"></i>
              </a>
            </li>
          </ul>
        </div>

      </div>
         </section>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

</footer>
<!-- Footer -->


    </div>
</body>
</html>