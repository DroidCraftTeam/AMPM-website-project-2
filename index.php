<!DOCTYPE html>
<html lang="en">
<head>
<style>

.hovereffect {
  width: 100%;
  height: 100%;
  float: left;
  overflow: hidden;
  position: relative;
  text-align: center;
  cursor: default;
}

.hovereffect .overlay {
  width: 100%;
  height: 100%;
  position: absolute;
  overflow: hidden;
  top: 0;
  left: 0;
  background-color: rgba(0,0,0,0.6);
  opacity: 0;
  filter: alpha(opacity=0);
  -webkit-transform: translate(460px, -100px) rotate(180deg);
  -ms-transform: translate(460px, -100px) rotate(180deg);
  transform: translate(460px, -100px) rotate(180deg);
  -webkit-transition: all 0.2s 0.4s ease-in-out;
  transition: all 0.2s 0.4s ease-in-out;
}

.hovereffect img {
  display: block;
  position: relative;
  -webkit-transition: all 0.2s ease-in;
  transition: all 0.2s ease-in;
}

.hovereffect h2 {
  text-transform: uppercase;
  color: #fff;
  text-align: center;
  position: relative;
  font-size: 17px;
  padding: 10px;
  background: rgba(0, 0, 0, 0.6);
}

.hovereffect a.info {
  display: inline-block;
  text-decoration: none;
  padding: 7px 14px;
  text-transform: uppercase;
  color: #fff;
  border: 1px solid #fff;
  margin: 50px 0 0 0;
  background-color: transparent;
  -webkit-transform: translateY(-200px);
  -ms-transform: translateY(-200px);
  transform: translateY(-200px);
  -webkit-transition: all 0.2s ease-in-out;
  transition: all 0.2s ease-in-out;
}

.hovereffect a.info:hover {
  box-shadow: 0 0 5px #fff;
}

.hovereffect:hover .overlay {
  opacity: 1;
  filter: alpha(opacity=100);
  -webkit-transition-delay: 0s;
  transition-delay: 0s;
  -webkit-transform: translate(0px, 0px);
  -ms-transform: translate(0px, 0px);
  transform: translate(0px, 0px);
}

.hovereffect:hover h2 {
  -webkit-transform: translateY(0px);
  -ms-transform: translateY(0px);
  transform: translateY(0px);
  -webkit-transition-delay: 0.5s;
  transition-delay: 0.5s;
}

.hovereffect:hover a.info {
  -webkit-transform: translateY(0px);
  -ms-transform: translateY(0px);
  transform: translateY(0px);
  -webkit-transition-delay: 0.3s;
  transition-delay: 0.3s;
}
</style>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>AMPN Packaging Pty Ltd</title>

<!-- Bootstrap -->
<link rel="stylesheet" href="New folder/css/bootstrap.css">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<?php
include('header.html');
?>
<div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div id="carousel1" class="carousel slide">
          <ol class="carousel-indicators">
            <li data-target="#carousel1" data-slide-to="0" class="active"> </li>
            <li data-target="#carousel1" data-slide-to="1" class=""> </li>
            <li data-target="#carousel1" data-slide-to="2" class=""> </li>
          </ol>
          <div class="carousel-inner">
            <div class="item"> <img class="img-responsive" src="New folder/img/4.jpg" alt="thumb">
             
            </div>
            <div class="item active"> <img class="img-responsive" src="New folder/img/5.jpg" alt="thumb">
             
            </div>
            <div class="item"> <img class="img-responsive" src="New folder/img/6.jpg" alt="thumb">
             
            </div>
          </div>
          <a class="left carousel-control" href="#carousel1" data-slide="prev"><span class="icon-prev"></span></a> <a class="right carousel-control" href="#carousel1" data-slide="next"><span class="icon-next"></span></a></div>
      </div>
</div>
      <hr>
  </div>
<div class="container">
  <div class="row">
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
      <div class="row">
        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-2"><img class="img-circle" alt="Free Quotes" src="New folder/img/40X40.png"></div>
        <div class="col-lg-6 col-md-9 col-sm-9 col-xs-9">
          <h4>Best Quality</h4>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
      <div class="row">
        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-2"><img class="img-circle" alt="Free Quotes" src="New folder/img/40X40.png"></div>
        <div class="col-lg-6 col-md-9 col-sm-9 col-xs-9">
          <h4>Free Quotes</h4>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
      <div class="row">
        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-2"><img class="img-circle" alt="Free Quotes" src="New folder/img/40X40.png"></div>
        <div class="col-lg-6 col-md-9 col-sm-9 col-xs-9">
          <h4>Low Prices</h4>
        </div>
      </div>
    </div>
  </div>
</div>
<hr>
<h2 class="text-center">Our Vision</h2>
<hr>


<h2 class="text-center"> </h2>
<p class="text-center">The company's objective is to design,manufacture and deliver a wide range of packaging products in a manner that meets and exceeds our customer's requirements.
<p class="text-center">We will do this in such a way that will allow us to be profitable yet competitive in order to provide customers with innovative and solid packaging solutions.
</p>
<p class="text-center">We believe in listening to our employees, customers, suppliers and the market so that we are always learning and growing through new ideas, 
</p>
<p class="text-center">innovations, partnerships and acquisitions. A supplier who values your business and does not just take your orders for granted, you will find a refreshing approach at 
</p>
<p class="text-center"> AMPN Trading Pty Ltd where time honoured values and customer focused service work hand in hand with cutting edge technology.</p>
</p>


<div class="container">
  <div class="row">
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
<div class="hovereffect">   
   <img class="img-responsive" src="tape_logo.jpg" height=260 width=250/>
  <div class="overlay">
           <h2> <a href="tapes1.php">Tapes & Adhesive Products</a></h2>
              </div>
    </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
      <div class="hovereffect">  <img class="img-responsive" src="wrap_logo.png" height=260 width=250/>
     <div class="overlay">
           <h2> <a href="stretch1.php">Stretch Wrap & Associated Machinery</a></h2>
              </div></div></div>
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
      <div class="hovereffect">    <img class="img-responsive" src="minigrip.jpg" height=260 width=250/>
    <div class="overlay">
           <h2> <a href="plastic1.php">Plastic Products</a></h2>
              </div></div></div>
  </div>
<br>
 <div class="row">
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
   <div class="hovereffect">      <img class="img-responsive" src="cardboard_logo.jpg" height=260 width=250>
  <div class="overlay">
           <h2> <a href="cardboard1.php">Cardboard & Paper Products</a></h2>
              </div></div></div>
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
  <div class="hovereffect">       <img class="img-responsive" src="bubble_logo.jpg" height=260 width=250>
    <div class="overlay">
           <h2> <a href="protective1.php">Protective Packaging Products</a></h2>
              </div></div></div>
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
  <div class="hovereffect">        <img class="img-responsive" src="strap.gif" height=260 width=250>
   <div class="overlay">
           <h2> <a href="strapping1.php">Strapping & Tying Products</a></h2>
              </div></div></div>
</div>
<hr>

 </div>
</br><?php
include('footer.html');
?>
<script src="New folder/js/jquery-1.11.2.min.js"></script> 
<script src="New folder/js/bootstrap.min.js"></script>




<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/57708284d5ba37b66ff89cb3/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->






</body>
</html>