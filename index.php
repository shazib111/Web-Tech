<!DOCTYPE html>
<html lang="en-US">
<head>
	<title>G-9 Book Shop/home-page</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
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
  <nav class="navbar navbar-expand-sm bg-white navbar-blue">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="index.php">
    <img class="profile" src="images/G9 LOGO1.png" alt="logo" style="width:111px;">
  </a>
  
  <!-- Links -->
  <ul class="navbar-nav">

     <form class="form-inline" action="/action_page.php">
     <input class="form-control mr-sm-2" type="text" placeholder="Search" style="width:500px;height:42px;">
     <button class="btn btn-success" type="submit">Search</button>
  </form>
  </ul>
  <ul class="navbar-nav">
   <li class="nav-item">
      <a class="nav-link" href="user/login.php"><button type="button" class="btn btn-light bt" style="width:100px;">Login</button></a>
   </li>
   <li class="nav-item" style="margin-left:15px;font-weight: bold">
   	<a class="nav-link" href="#Contact">Contact</a>
   </li>
   <li class="nav-item icn">
      <a class="nav-link" href="missingcart.php"><i style="font-size:20px;margin-left:20px;"class="fas fa-cart-plus"></i></a>
   </li>
  </ul>
</nav>
<section class="row">
  <article class="col-md-12">

	      <nav class="navbar navbar-expand-sm bg-grey navbar-blue" >

 
  
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="#best">বেস্টসেলার বই</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#academic">একাডেমিক</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#novel">উপন্যাস</a> 
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#horror">হরর</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#comics">কমিক্স</a> 
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#islamic">ইসলামিক বই</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#cprog">কম্পিউটার প্রোগ্রামিং</a>
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
 <h1 style="color:purple;font-family:kalam;font-size:50px;margin-top:20px;text-align: center;">“Think before you speak. Read before you think.”</h1>
</article>
</section>
<!--product addition start-->
<section class="row">
  <article class="col-md-12">
  <p  id="best" style="font-size:40px; margin-left: 30px; color:#00ffff;">বেস্টসেলার বই <span>|</span>
  </p>
</article>
</section>

<section class="row">
<figure class="col-md-2 ot">
  <div class="card" style="margin-left: 30px; width:210px;" onclick="myFunction()">
   
    <a href="productview/book1.php"><img class="card-img-top" src="imagess/BS1.png" alt="Card image" style="width:100%;height:260px"></a>
    <div class="card-body">
      <h4 class="card-title">বি স্মার্ট উইথ মুহাম্মাদ (সাঃ)</h4>
      <p class="card-text">৳ 150</p>
       
      <a class="form-control" href="http://localhost/9/user/login.php" button type="button" class="btn btn-light bt" style="text-align:center;background-color:aqua">Add to cart</button></a>
      
    </div>
  </div>
</figure>
<!--second item-->
<figure class="col-md-2 ot">
  <div class="card" style="margin-left: 35px; width:210px;" >
    
    <a href="productview/horror1.php"><img class="card-img-top" src="imagess/hr1.png" alt="Card image" style="width:100%;height:260px"></a>
    <div class="card-body">
      <h4 class="card-title">মায়া ভিলা</h4>
      <p class="card-text">৳ 180</p>

      <a class="form-control" href="http://localhost/9/user/login.php" button type="button" class="btn btn-light bt" style="text-align:center;background-color:aqua">Add to cart</button></a>
       
      
      
    </div>
  </div>
</figure>

<!--third item-->
<figure class="col-md-2 ot">
  <div class="card" style="margin-left: 40px;width:210px;" >
  
    <a href="productview/cn2.php"><img class="card-img-top" src="imagess/cn2.png" alt="Card image" style="width:100%;height:260px"></a>
    <div class="card-body">
      <h4 class="card-title">বেসিক আলী </h4>
      <p class="card-text">৳ 150</p>

      <a class="form-control" href="http://localhost/9/user/login.php" button type="button" class="btn btn-light bt" style="text-align:center;background-color:aqua">Add to cart</button></a>
       
       
      
    </div>
  </div>
</figure>

<!--fourth item-->
<figure class="col-md-2 ot">
  <div class="card" style="margin-left: 45px; width:210px;">
    
    <a href="productview/novel2.php"><img class="card-img-top" src="imagess/nv2.png" alt="Card image" style="width:100%;height:260px"></a>
    <div class="card-body">
      <h4 class="card-title">আজ হিমুর বিয়ে</h4>
      <p class="card-text">৳ 213</p>

      <a class="form-control" href="http://localhost/9/user/login.php" button type="button" class="btn btn-light bt" style="text-align:center;background-color:aqua">Add to cart</button></a>
       
        
      
    </div>
  </div>
</figure>
</section>


<!--seond section items-->
<section class="row">
<article class="col-md-12">
  <p  id="academic" style="font-size:39px; margin-left: 30px; color:#00ff99;">একাডেমিক <span>|</span> 
  </p>
</article>
<section class="row">
<figure class="col-md-2 ot">
  <div class="card" style="margin-left: 42px;width:210px;">
   
    <a href="productview/Academic1.php"><img class="card-img-top" src="imagess/acb1.jpg" alt="Card image" style="width:100%;height:260px"></a>
    <div class="card-body">
      <h4 class="card-title">Fundamentals of Physics</h4>
      <p class="card-text">	৳ 250</p>

      <a class="form-control" href="http://localhost/9/user/login.php" button type="button" class="btn btn-light bt" style="text-align:center;background-color:aqua">Add to cart</button></a>
       
    
      
    </div>
  </div>
</figure>
<!--second item-->
<figure class="col-md-2 ot">
  <div class="card" style="margin-left: 45px;width:210px;">
    <form action="#" method="post" enctype="mutipart/form-data">
    <a href="productview/Academic2.php"><img class="card-img-top" src="imagess/acb2.jpg" alt="Card image" style="width:100%;height:260px"></a>
    <div class="card-body">
      <h4 class="card-title">Calculus by Anton</h4>
      <p class="card-text">	৳ 300</p>

      <a class="form-control" href="http://localhost/9/user/login.php" button type="button" class="btn btn-light bt" style="text-align:center;background-color:aqua">Add to cart</button></a>
       
      
      
    </div>
  </div>
</figure>

<!--third item-->
<figure class="col-md-2 ot">
  <div class="card" style="margin-left: 47px;width:210px;" >
    
    <a href="productview/Academic3.php"><img class="card-img-top" src="imagess/acb3.jpg" alt="Card image" style="width:100%;height:260px"></a>
    <div class="card-body">
      <h4 class="card-title">Digital Fundamentals</h4>
      <p class="card-text">৳ 220</p>

      <a class="form-control" href="http://localhost/9/user/login.php" button type="button" class="btn btn-light bt" style="text-align:center;background-color:aqua">Add to cart</button></a>
       
     
      
    </div>
  </div>
</figure>

<!--fourth item-->
<figure class="col-md-2 ot">
  <div class="card" style="margin-left: 49px;width:210px;">
   
    <a href="productview/Academic4.php"><img class="card-img-top" src="imagess/acb4.jpg" alt="Card image" style="width:100%;height:260px"></a>
    <div class="card-body">
      <h4 class="card-title">Advanced Engineering Mathematics</h4>
      <p class="card-text">৳ 220</p>

      <a class="form-control" href="http://localhost/9/user/login.php" button type="button" class="btn btn-light bt" style="text-align:center;background-color:aqua">Add to cart</button></a>
       
       
    </div>
  </div>
</figure>


</section>

<section class="row">
  <article class="col-md-12">
  <p  id="novel" style="font-size:40px; margin-left: 41px; color:#00ff;">উপন্যাস <span>|</span>
  
  </p>
</article>
</section>

<section class="row">
<figure class="col-md-2 ot">
  <div class="card" style="margin-left: 43px;width:210px;" onclick="myFunction()">
   
    <a href="productview/novel1.php"><img class="card-img-top" src="imagess/nv1.jpg" alt="Card image" style="width:100%;height:260px"></a>
    <div class="card-body">
      <h4 class="card-title">দেবদাস</h4>
      <p class="card-text">৳ 150</p>
       
      <a class="form-control" href="http://localhost/9/user/login.php" button type="button" class="btn btn-light bt" style="text-align:center;background-color:aqua">Add to cart</button></a>
      
    </div>
  </div>
</figure>
<!--second item-->
<figure class="col-md-2 ot">
  <div class="card" style="margin-left: 45px;width:210px;" >
    
    <a href="productview/novel2.php"><img class="card-img-top" src="imagess/nv2.png" alt="Card image" style="width:100%;height:260px"></a>
    <div class="card-body">
      <h4 class="card-title">আজ হিমুর বিয়ে</h4>
      <p class="card-text">৳ 213</p>

      <a class="form-control" href="http://localhost/9/user/login.php" button type="button" class="btn btn-light bt" style="text-align:center;background-color:aqua">Add to cart</button></a>
       
      
      
    </div>
  </div>
</figure>

<!--third item-->
<figure class="col-md-2 ot">
  <div class="card" style="margin-left: 47px; width:210px;" >
  
    <a href="productview/novel3.php"><img class="card-img-top" src="imagess/nv3.png" alt="Card image" style="width:100%;height:260px"></a>
    <div class="card-body">
      <h4 class="card-title">গীতাঞ্জলী</h4>
      <p class="card-text">৳ 200</p>

      <a class="form-control" href="http://localhost/9/user/login.php" button type="button" class="btn btn-light bt" style="text-align:center;background-color:aqua">Add to cart</button></a>
       
       
      
    </div>
  </div>
</figure>

<!--fourth item-->
<figure class="col-md-2 ot">
  <div class="card" style="margin-left: 49px; width:210px;">
    
    <a href="productview/novel4.php"><img class="card-img-top" src="imagess/nv4.png" alt="Card image" style="width:100%;height:260px"></a>
    <div class="card-body">
      <h4 class="card-title">লালসালু</h4>
      <p class="card-text">৳ 120</p>

      <a class="form-control" href="http://localhost/9/user/login.php" button type="button" class="btn btn-light bt" style="text-align:center;background-color:aqua">Add to cart</button></a>
       
        
      
    </div>
  </div>
</figure>
</section>


<!--seond section items-->
<section class="row">
<article class="col-md-12">
  <p  id="horror" style="font-size:40px; margin-left: 50px; color:#ff0066;"> হরর <span>|</span> 
  </p>
</article>
<section class="row">
<figure class="col-md-2 ot">
  <div class="card" style="margin-left: 55px;width:210px;">
   
    <a href="productview/horror1.php"><img class="card-img-top" src="imagess/hr1.png" alt="Card image" style="width:100%;height:260px"></a>
    <div class="card-body">
      <h4 class="card-title">মায়া ভিলা</h4>
      <p class="card-text">	৳ 180</p>

      <a class="form-control" href="http://localhost/9/user/login.php" button type="button" class="btn btn-light bt" style="text-align:center;background-color:aqua">Add to cart</button></a>
       
    </div>
  </div>
</figure>
<!--second item-->
<figure class="col-md-2 ot">
  <div class="card" style="margin-left: 55px;width:210px;">
    <form action="#" method="post" enctype="mutipart/form-data">
    <a href="productview/horror2.php"><img class="card-img-top" src="imagess/hr2.jpg" alt="Card image" style="width:100%;height:260px"></a>
    <div class="card-body">
      <h4 class="card-title">মেঘের ওপর বাড়ি</h4>
      <p class="card-text">	৳ 230</p>

      <a class="form-control" href="http://localhost/9/user/login.php" button type="button" class="btn btn-light bt" style="text-align:center;background-color:aqua">Add to cart</button></a>
       
      
      
    </div>
  </div>
</figure>

<!--third item-->
<figure class="col-md-2 ot">
  <div class="card" style="margin-left: 55px;width:210px;" >
    
    <a href="productview/horror3.php"><img class="card-img-top" src="imagess/hr3.jpg" alt="Card image" style="width:100%;height:260px"></a>
    <div class="card-body">
      <h4 class="card-title">অদ্ভুত সব গল্প</h4>
      <p class="card-text">৳ 175</p>

      <a class="form-control" href="http://localhost/9/user/login.php" button type="button" class="btn btn-light bt" style="text-align:center;background-color:aqua">Add to cart</button></a>
       
     
      
    </div>
  </div>
</figure>

<!--fourth item-->
<figure class="col-md-2 ot">
  <div class="card" style="margin-left: 55px;width:210px;">
   
    <a href="productview/horror4.php"><img class="card-img-top" src="imagess/hr4.png" alt="Card image" style="width:100%;height:260px"></a>
    <div class="card-body">
      <h4 class="card-title">দানব</h4>
      <p class="card-text">৳ 141</p>

      <a class="form-control" href="http://localhost/9/user/login.php" button type="button" class="btn btn-light bt" style="text-align:center;background-color:aqua">Add to cart</button></a>
       
       
    </div>
  </div>
</figure>


</section>

<section class="row">
  <article class="col-md-12">
  <p  id="comics" style="font-size:40px; margin-left: 60px; color:#00ffff;"> কমিক্স <span>|</span>
  </p>
</article>
</section>

<section class="row">
<figure class="col-md-2 ot">
  <div class="card" style="margin-left: 54px;width:210px;" onclick="myFunction()">
   
    <a href="productview/cn1.php"><img class="card-img-top" src="imagess/cn1.png" alt="Card image" style="width:100%;height:260px"></a>
    <div class="card-body">
      <h4 class="card-title">নীলকণ্ঠ রহস্য</h4>
      <p class="card-text">৳ 100</p>
       
      <a class="form-control" href="http://localhost/9/user/login.php" button type="button" class="btn btn-light bt" style="text-align:center;background-color:aqua">Add to cart</button></a>
      
    </div>
  </div>
</figure>
<!--second item-->
<figure class="col-md-2 ot">
  <div class="card" style="margin-left: 55px;width:210px;" >
    
    <a href="productview/cn2.php"><img class="card-img-top" src="imagess/cn2.png" alt="Card image" style="width:100%;height:260px"></a>
    <div class="card-body">
      <h4 class="card-title">বেসিক আলী</h4>
      <p class="card-text">৳ 150</p>

      <a class="form-control" href="http://localhost/9/user/login.php" button type="button" class="btn btn-light bt" style="text-align:center;background-color:aqua">Add to cart</button></a>
       
      
      
    </div>
  </div>
</figure>

<!--third item-->
<figure class="col-md-2 ot">
  <div class="card" style="margin-left: 55px;width:210px;" >
  
    <a href="productview/cn3.php"><img class="card-img-top" src="imagess/cn3.png" alt="Card image" style="width:100%;height:260px"></a>
    <div class="card-body">
      <h4 class="card-title">লংকা কান্ড</h4>
      <p class="card-text">৳ 130</p>

      <a class="form-control" href="http://localhost/9/user/login.php" button type="button" class="btn btn-light bt" style="text-align:center;background-color:aqua">Add to cart</button></a>
       
       
      
    </div>
  </div>
</figure>

<!--fourth item-->
<figure class="col-md-2 ot">
  <div class="card" style="margin-left: 55px;width:210px;">
    
    <a href="productview/cn4.php"><img class="card-img-top" src="imagess/cn4.png" alt="Card image" style="width:100%;height:260px"></a>
    <div class="card-body">
      <h4 class="card-title">দুর্জয় ভলিউম ১</h4>
      <p class="card-text">৳ 350</p>

      <a class="form-control" href="http://localhost/9/user/login.php" button type="button" class="btn btn-light bt" style="text-align:center;background-color:aqua">Add to cart</button></a>
       
        
      
    </div>
  </div>
</figure>
</section>


<!--seond section items-->
<section class="row">
<article class="col-md-12">
  <p  id="islamic" style="font-size:40px; margin-left: 60px; color:#00ff99;"> ইসলামিক বই <span>|</span> 
  </p>
</article>
<section class="row">
<figure class="col-md-2 ot">
  <div class="card" style="margin-left: 60px;width:210px;">
   
    <a href="productview/book1.php"><img class="card-img-top" src="imagess/BS1.png" alt="Card image" style="width:100%;height:260px"></a>
    <div class="card-body">
      <h4 class="card-title">বি স্মার্ট উইথ মুহাম্মাদ (সাঃ)</h4>
      <p class="card-text">	৳ 150</p>

      <a class="form-control" href="http://localhost/9/user/login.php" button type="button" class="btn btn-light bt" style="text-align:center;background-color:aqua">Add to cart</button></a>
       
    
      
    </div>
  </div>
</figure>
<!--second item-->
<figure class="col-md-2 ot">
  <div class="card" style="margin-left: 60px;width:210px;">
    <form action="#" method="post" enctype="mutipart/form-data">
    <a href="productview/Book2.php"><img class="card-img-top" src="imagess/BS2.jpg" alt="Card image" style="width:100%;height:260px"></a>
    <div class="card-body">
      <h4 class="card-title">আল কুরআন এক মহাবিস্ময়</h4>
      <p class="card-text">	৳ 350</p>

      <a class="form-control" href="http://localhost/9/user/login.php" button type="button" class="btn btn-light bt" style="text-align:center;background-color:aqua">Add to cart</button></a>
       
      
      
    </div>
  </div>
</figure>

<!--third item-->
<figure class="col-md-2 ot">
  <div class="card" style="margin-left: 59px;width:210px;" >
    
    <a href="productview/Book3.php"><img class="card-img-top" src="imagess/BS3.jpg" alt="Card image" style="width:100%;height:260px"></a>
    <div class="card-body">
      <h4 class="card-title">ম্যাসেজ</h4>
      <p class="card-text">৳ 200</p>

      <a class="form-control" href="http://localhost/9/user/login.php" button type="button" class="btn btn-light bt" style="text-align:center;background-color:aqua">Add to cart</button></a>
       
     
      
    </div>
  </div>
</figure>

<!--fourth item-->
<figure class="col-md-2 ot">
  <div class="card" style="margin-left: 59px;width:210px;">
   
    <a href="productview/Book4.php"><img class="card-img-top" src="imagess/BS4.jpg" alt="Card image" style="width:100%;height:260px"></a>
    <div class="card-body">
      <h4 class="card-title">প্রোডাক্টিভ মুসলিম</h4>
      <p class="card-text">৳ 380</p>

      <a class="form-control" href="http://localhost/9/user/login.php" button type="button" class="btn btn-light bt" style="text-align:center;background-color:aqua">Add to cart</button></a>
       
       
    </div>
  </div>
</figure>


</section>

<section class="row">
  <article class="col-md-12">
  <p  id="cprog" style="font-size:40px; margin-left: 67px; color:#00ff;"> কম্পিউটার প্রোগ্রামিং <span>|</span>
  
  </p>
</article>
</section>

<section class="row">
<figure class="col-md-2 ot">
  <div class="card" style="margin-left: 59px;width:210px;" onclick="myFunction()">
   
    <a href="productview/Prog1.php"><img class="card-img-top" src="imagess/Cp1.jpg" alt="Card image" style="width:100%;height:260px"></a>
    <div class="card-body">
      <h4 class="card-title">The Complete Reference C++</h4>
      <p class="card-text">৳ 350</p>
       
      <a class="form-control" href="http://localhost/9/user/login.php" button type="button" class="btn btn-light bt" style="text-align:center;background-color:aqua">Add to cart</button></a>
      
    </div>
  </div>
</figure>
<!--second item-->
<figure class="col-md-2 ot">
  <div class="card" style="margin-left: 59px;width:210px;" >
    
    <a href="productview/Prog2.php"><img class="card-img-top" src="imagess/Cp2.jpg" alt="Card image" style="width:100%;height:260px"></a>
    <div class="card-body">
      <h4 class="card-title">Core Java Vol-I Fundamentals</h4>
      <p class="card-text">৳ 200</p>

      <a class="form-control" href="http://localhost/9/user/login.php" button type="button" class="btn btn-light bt" style="text-align:center;background-color:aqua">Add to cart</button></a>
       
      
      
    </div>
  </div>
</figure>

<!--third item-->
<figure class="col-md-2 ot">
  <div class="card" style="margin-left: 59px;width:210px;" >
  
    <a href="productview/Prog3.php"><img class="card-img-top" src="imagess/Cp3.jpg" alt="Card image" style="width:100%;height:260px"></a>
    <div class="card-body">
      <h4 class="card-title">Microsoft Visual C# Step by Step</h4>
      <p class="card-text">৳ 270</p>

      <a class="form-control" href="http://localhost/9/user/login.php" button type="button" class="btn btn-light bt" style="text-align:center;background-color:aqua">Add to cart</button></a>
       
       
      
    </div>
  </div>
</figure>

<!--fourth item-->
<figure class="col-md-2 ot">
  <div class="card" style="margin-left: 59px;width:210px;">
    
    <a href="productview/Prog4.php"><img class="card-img-top" src="imagess/Cp4.jpg" alt="Card image" style="width:100%;height:260px"></a>
    <div class="card-body">
      <h4 class="card-title">Algorithm Design</h4>
      <p class="card-text">৳ 240</p>

      <a class="form-control" href="http://localhost/9/user/login.php" button type="button" class="btn btn-light bt" style="text-align:center;background-color:aqua">Add to cart</button></a>
       
        
      
    </div>
  </div>
</figure>
</section>

<section id="Contact" class="contact flexible-content">
<!---start of a footer-->
<!-- Footer -->
<footer class="page-footer font-small mdb-color pt-4 bg-dark navbar-dark">

  <!-- Footer Links -->
  <div class="container text-center text-md-left bg-dark navbar-dark" style="margin-left: 52px; color:white;">

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