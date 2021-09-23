<!DOCTYPE html>
<html lang="en-US">
<head>
  <title>G-9 Book Shop/Order</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta name="keywords" content="Best online book store,Books at reasonable price,best books at best offer">
  <meta name="description" content="Online book store,books at affordable price">
  <!--font awesome kit code-->
  
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
  <!--external css-->
  <link rel="stylesheet" type="text/css" href="css/logiin.css">
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- footer cdns-->

 <!--table css-->

 <style>

table tr th{
    padding:10px;
    
  }

.frm{
  box-shadow: 2px 2px 4px 4px #00ffff;
  padding: 20px;
  padding-left: 200px;
  }
  </style>
</head>

<body>
 
<div class="container">
       <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="../index.php">
    <img class="profile" src="images/G9 LOGO.png" alt="logo" style="width:82px;">
  </a>
 
  
  <!-- Links -->
  <ul class="navbar-nav">

     <form class="form-inline" action="/action_page.php">
    <input class="form-control mr-sm-2" type="text" placeholder="Search" style="width:700px;height:42px;">
    <button class="btn btn-success" type="submit">Search</button>
  </form>
  </ul>
  <ul class="navbar-nav">
   
   <li class="nav-item" style="margin-left:20px;font-weight: bold">
    <a class="nav-link" href="#Contact">Contact</a>
   </li>
   <li class="nav-item icn">
      <a class="nav-link" href="../missingcart.php"><i style="font-size:25px;margin-left:30px;"class="fas fa-cart-plus"></i></a>
   </li>
   
  </ul>
</nav>

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
<section class="row">

    <article class="col-md-12">
    
  
    <!--signup form-->
     
       <!--form fields-->
       <div class="frm" id="xxx" >
         <form class="rt" action="Confirmation.php" method="post" class="po" enctype='multipart/form-data' name="form2">
  
        <h2 style="font-family: kalam;font-weight: bold; margin-top: 5px; margin-left: 20px;">Order form</h2>
        <table>
          
          <tr>
            <th> Name :<span style="color:red";>*</span><input class="form-control"  type="text" name="myname" id="myname" placeholder="Enter your name"required>
            </th>

            <th>
              Email :<span style="color:red";>*</span><input class="form-control" type="email" name="email" id="email" placeholder="Enter your Email"required>
            </th>
          </tr>

          <tr>
            <th>
            Phone no :<span style="color:red";>*</span><input class="form-control" type="tel" name="contactno" id="contactno" placeholder="enter your phone number" required>  
          </th>
           <th>
           Address:<span style="color:red";>*</span>
           <textarea name="address" id="address" class="form-control" style="width:320px; height:60px;" placeholder="enter your address" required></textarea>
          </th>
          </tr>

          <tr>
          <th>
               City :<span style="color:red";>*</span><input class="form-control"  type="text" name="cityname" id="cityname" placeholder="Enter City"required>
          </th> 
          <th>
               District :<span style="color:red";>*</span><input class="form-control"  type="text" name="disname" id="disname" placeholder="Enter District"required>
          </th>
          </tr>
          
          <tr>
          <th>
               Postal code :<span style="color:red";>*</span><input class="form-control" type="tel" name="pcode" id="pcode" placeholder="Enter postal code" required>
          </th>
          <th>
               Delivery Date : [if required] <input class="form-control" type="date" name="birthdate" id="birthdate">
          </th>
          </tr>
              
          <tr>
          <th>  Payment Method :<span style="color:red";>*</span><br>
                    <input type="radio" id="cod" name="payment" value= "Cash On Delivery">    
                    <label for="cod">Cash On Delivery</label>
                    <input type="radio" id="mb" name="payment" value= "Mobile Banking">  
                    <label for="mb">Mobile Banking</label>   
                    <input type="radio" id="bcd" name="payment" value= "Bank Card">  
                    <label for="bcd">Bank Card</label>  
          </th>
          <th>
                Card Information :<span style="color:red";>*</span><br>
                                  
               <select name="Card" id="cr" style="width:320px; height:35px;" form="cardform">
                        <option value="Card Type">Choose Card Type</option>
                        <option value="None">None [COD]</option>
                        <option value="Bkash">Bkash</option>
                        <option value="Rocket">Rocket</option>
                        <option value="Nagad">Nagad</option>
                        <option value="DBBL">DBBL Debit Card</option>
                        <option value="Brac">Brac Bank Credit Card</option>
                        <option value="Visa">VISA Card</option>
                        <option value="Mastercard">Mastercard Card</option>
                    </select><br>
          </th>
          <tr>
          <th>
                  Card number :<span style="color:red";>*</span><input  class="form-control" type="password" id="crn" name="crn"required>
          </th>
          <th>
                  Pin number :<span style="color:red";>*</span><input  class="form-control" type="password" id="pn" name="pn"required>
          </th>
        
         </tr>

          <tr>
            <th>
            <input type="submit" class="btn btn" name="Place Order" value="Place Order" style="width:385px; height:35px;background: #66ffff ;">
            </th>
            <th>
                <a class="form-control" href="http://localhost/9/user/index.php" button type="button" class="btn btn-light bt" style="text-align:center;background-color:red">Cancel</button></a>
            </th>
          </tr>
          
        </table>
       
      </form>
      </div>
  </article>
  </article>

  
</section>

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