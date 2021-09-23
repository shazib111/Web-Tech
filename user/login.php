<!DOCTYPE html>
<html lang="en-US">
<head>
  <title>G-9 Book Shop/Login</title>
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

.frmmm{
  box-shadow: 2px 2px 4px 4px #00ffff;
}

  </style>

  <!--javascript validation of form signup-->
<script language="javascript">
  function check(){
    //for the name input validation
    if(document.form2.myname.value==""){
      alert("please eneter your name");
      document.form2.myname.focus();
      return false;
    }
    //for password validation
    if(document.form2.pwd.value==""){
      alert("please set a password");
      document.form2.pwd.focus();
      return false;
    }
    //for confirm password validation
    if(document.form2.cpwd.value==""){
      alert("please confirm your password");
      document.form2.cpwd.focus();
      return false;
    }
    //for if password and confirm password do not match
    if(document.form2.pwd.value!=document.form2.cpwd.value){
      alert("confirm password does not match");
      document.form2.cpwd.focus();
      return false;
    }
    //for phone no input validation
    if(document.form2.contactno.value==""){
      alert("please enter your phone no");
      document.form2.contactno.focus();
      return false;
    }
    //for DOB input validation
    if(document.form2.birthdate.value==""){
      alert("please select your birthdate");
      document.form2.birthdate.focus();
      return false;
    }
    //for address input validation
    if(document.form2.address.value==""){
      alert("please enter your address");
      document.form2.address.focus();
      return false;
    }
    //for pincode input validation
    if(document.form2.pincode.value==""){
      alert("please enter your area pincode");
      document.form2.pincode.focus();
      return false;
    }

    //for profile picture input validation
    if(document.form2.picture.value==""){
      alert("please upload your profile picture");
      document.form2.picture.focus();
      return false;
    }
    //for the email input validation
    if(document.form2.email.value==""){
      alert("please enter your email address");
      return false;
    }
    em=document.form2.email.value;
           f1=em.indexOf('@');
           f2=em.indexOf('@',f1+1);
           e1=em.indexOf('_');
           e2=em.indexOf('_',e1+1);
           n=em.length;
           if(!(f1>0 && f2==-1 && e1>0 &&e2==-1 && f1!=e1+1 && e1!=f1+1 && e1!=f1+1 && f1!=n-1 && e1!=n-1)){
            alert("please enter a valid email");
            document.form2.email.focus();
            return false;
           }
           return true;
  }
</script>
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
      <p style="margin-left:470px">

     <input type="button" class="btn" id="sh" value="login" style=" background: linear-gradient(to bottom left, #00ffff 3%, #00ffff  100%);">

     <input type="button" class="btn" id="th" value="signup" style=" background: linear-gradient(to bottom right, #66ff66 3%, #66ff66 100%);">
     </p>
    </article>
    <article class="col-md-12">
    
   <form class="dx" id="xx" name="form2" action="loginfetch.php" method="post">
      <p class="ux xc"> G-9 Book Shop</p>
      <p class="ui xc">Login</p>

      <p class="xc">Enter user name:</p>
      <p class="xc"><input type="text" name="uid" autocomplete="off" autofocus="on" placeholder="Enter user Id" required></p>
      <p class="xc">Enter Password:</p>
      <p class="xc"><input type="password" name="pwd" autocomplete="off" placeholder="Enter your password" required></p>
      <p class="xc"><input type="submit" name="login" value="Login" class="btn btn-success"></p>

      <p class="xc">New here? Click "signup" above<br> to create a new account</p>
   </form>
    
      



    <!--signup form-->
     
       <!--form fields-->
       <div class="frmmm" id="xxx" >
         <form class="rt" action="signupfetch.php" method="post" class="po" enctype='multipart/form-data' name="form2">
         
        <p style="float:left;"><img class="fl" src="images/G9 LOGO1.1.png" width=360px; height="577px"></p>
        <h2 style="font-family: kalam;font-weight: bold;">Sign up here!</h2>
        <table>
          
          <tr>
            <th> Name:<span style="color:red";>*</span><input class="form-control"  type="text" name="myname" id="myname" placeholder="enter your full name">
            </th>

            <th>
              Email:<span style="color:red";>*</span><input class="form-control" type="email" name="email" id="email" placeholder="enter your gmail">
            </th>
          </tr>

          <tr>
            <th>
              Set a Password:<span style="color:red";>*</span><input  class="form-control" type="password" id="pwd" name="pwd" placeholder="set your password">
          </th>
           <th>
              Confirm your password:<span style="color:red";>*</span><input  class="form-control" type="password" id="cpwd"  name="cpwd" placeholder="confirm your password">
          </th>
          
          
          </tr>

          <tr>
            <th>
            Phn no:<span style="color:red";>*</span><input class="form-control" type="tel" name="contactno" id="contactno" placeholder="enter your phone number" required="">
          </th>
            <th>
              DOB:<span style="color:red";>*</span><input class="form-control" type="date" name="birthdate" id="birthdate"  required="">
          </th>
         
          </tr>

           <tr>

             <th>
            Gender:<input type="radio" name="gender" value="Male">Male<input type="radio" name="gender" value="Female">Female</p><input type="radio" name="gender" value="Others">Others
          </th>
          
          
           <th>
             Address:<span style="color:red";>*</span>
    <textarea name="address" id="address" class="form-control" style="width:200px; height:60px;" placeholder="enter your address" required></textarea>
          </th>
          <tr>
            <th>
            Post code:<span style="color:red";>*</span><input class="form-control" type="tel" name="pincode" id="pincode" placeholder="enter your area post code" required>
          </th>
            <th>Upload profile picture:<input class="form-control"  type="file" name="picture" id="picture"></th>
          </tr>

          <tr>
            <th>
              <input type="submit" class="btn btn" name="signup" value="signup" style="background: linear-gradient(to bottom, #ff3399 0%, #66ffff 100%);">
           
              <input type="reset" class="btn btn" value="clear" style="background: linear-gradient(to bottom, #ffff66 0%, #ff0066 100%);"></th>
          </tr>
          
        </table>
          
            <p style="text-align:center;">Already a member?<br>click on the "login" button above to login into your account</p>
       
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

    <script src="js/loginsignup.js"></script>
    <script>
      function check(){
        alert("your account has been successfully created");
      }
    </script>
</body>
</html>