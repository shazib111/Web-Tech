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
  <link rel="stylesheet" type="text/css" href="css/missingcartt.css">
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</head>

<body>
<style>
 

  table tr{
    border:1px solid black;
  }
</style>




  <div class="container">
       <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="index.php">
    <img class="profile" src="images/G9 LOGO1.png" alt="logo" style="width:80px;">
  </a>
  
  <!-- Links -->
  <ul class="navbar-nav">

     <form class="form-inline" action="/action_page.php">
    <input class="form-control mr-sm-2" type="text" placeholder="Search" style="width:600px;height:42px;">
    <button class="btn btn-success" type="submit">Search</button>
  </form>
  </ul>
  <ul class="navbar-nav">
   <li class="nav-item" style="margin-left: 40px;">
      <a class="nav-link"><?php echo "".$_SESSION['username']; ?></a>
   </li>
   <li class="nav-item">
      <a class="nav-link" href="logoutfetch.php"><button type="button" class="btn btn-danger bt" style="width:100px;margin-left: 10px;">Logout</button></a>
   </li>
   
  </ul>
</nav>
<section class="row">
<!--start of the cart items inside the cart-->
<article class="col-md-12" style="margin-top: 30px;">
  <h3>My cart:</h3>
</article>

<article class="col-md-8" style="margin-top: 10px;">
  <form action="#" method="post" id="cart">
<!--start of the cart table-->
<table>



  
   <tr style="background-color:#66ffff;">
    
    <th style="padding-left:25px;">Items</th>
    <th style="padding-left:25px;">Item name</th>
    <th></th>
    <th>Price</th>
    <th style="padding-left:29px;">Remove</th>
  </tr>
  <?php 
                 
              $con=mysqli_connect("localhost","root","","kitaab");
              $sel="SELECT * FROM cart";
              $r=$con->query($sel);
              $total=0;
              while($row=$r->fetch_assoc()){
              $total=$total+$row['price'];
              
  ?>
  <p><input type="hidden" name="ids" value="<?php echo $row['id']?>"></p>
  <tr>
    <th style="padding-left:5px;"><img src="<?php echo $row['image']; ?>" style="width:90px;border:1px solid white;box-shadow: 1px 1px 2px 2px #ff3300;"></th>
    <th style="padding-left:18px;"><?php echo $row['title']; ?></th>

    <th></th>

    <th style="padding-left: 2px;"><?php echo $row['price']; ?></th>
    
    <th style="padding-left:20px;"><a onclick="return confirm('Are you sure?')" href="deleteitem.php?id=<?php echo $row['id']; ?>" class="btn btn-danger" style="  background: linear-gradient(to bottom, #ff0066 0%, #66ffcc 100%);color:black;border:1px solid white;">Remove</a></th>
 </tr>
<?php } ?>
</tr>
<tr>
<th></th>

<th></th>
<th>Total Amount = ??? </th>
<th><span style="color:blue;"><?php echo $total;?></span></th>
<th></th>
</tr>

</table>

 
</article>
<article class="col-md-4" style="margin-top: 100px;">

  <div style="border:2px solid black;padding:10px;display:inline-block;box-shadow: 2px 2px 4px 4px #808080;">
  <span> <strong>Subtotal: <span style="color:red;">??? <?php echo $total;?></strong></span> </span><br>
  
  <a class="form-control" href="http://localhost/9/Order.php" button type="button" class="btn btn-light bt" style="text-align:center;background-color:aqua">Proceed to buy</button></a>
 
  </div>
</form>
</article>


</section>


        <!--start of footer-->
        <footer class="page-footer font-small mdb-color pt-4 bg-dark navbar-dark" style="margin-top:30px;margin-bottom: 0;">

  <!-- Footer Links -->
  <div class="container text-center text-md-left bg-dark navbar-dark" style="color:white;">

    <!-- Footer links -->
    <div class="row text-center text-md-left mt-3 pb-3">

      <!-- Grid column -->
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
        <p class="text-center text-md-left" style="color:white;">Copyright ?? 2021 and all rights reserved by-
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
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

</footer>
    </div>

   
</body>
</html>