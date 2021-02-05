<!D<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Assignment</title>
    <style>
    .top_nav
    {
        padding:20px;
    }
    .top_nav_left_company_name
    {
        font-size:17px;
        text-align:center;
        color:#808080;
        font-weight:700;
    }
    .logo
    {
        height:40px;
    }
    .top_nav_right_align_content
    {
        text-align:center;
    }
    .top_nav_login_button
    {
        padding:6px;
        font-size:12px;
        font-weight:700;
    }
    .top_nav_mob_no
    {
        font-size:16px;
        color:#808080;
    }
    .top_nav_getassist
    {
        padding:6px;
        font-size:12px;
        font-weight:700;
    }
    .australia_no
    {
     text-align:center;   
    }
    .nav_content
    {
       padding-bottom:20px; 
    }
    .nav_content li
    {
        padding-left:30px;
        font-size:13px;
        list-style:none;
        float:left;
        text-transform:uppercase;
    }
    .nav_content li a
    {
        color:#808080;
        letter-spacing:1px;
        font-weight:550;
    }
    .mobile_nav
    {
        display:none;
        z-index:1;
    }
    .mobile_nav_logo
    {
        height:40px;
        left:1%;
        padding-top:10px;
        z-index:1;
        position:fixed;
    }
    .mobile_nav_button
    {
        right:1%;
        z-index:1;
        font-size:25px;
        padding:10px;
        color:red;
        position:fixed;
    }
    .mobile_view_get_assignment
    {
        padding:5px;
        font-size:10px;
        right:20%;
        top:1.8%;
        color:#fcfcfc;
        position:fixed;
        background-color:#0093AF;
        border-radius:4px;
        border:2px solid #0093AF;

    }
    .themepage
    {
        background-image:url(androidback.png);
    }
    .theme_image
    {
        position:absolute;
        z-index:-1;
        width:100%;
        height:450px;
    }
    .theme_assignment_heading
    {
       text-align:center;
       color:#fcfcfc;
       font-weight:800;
    }
    .theme_assignment_para
    {
       text-align:center;
       color:#fcfcfc;
       font-weight:700;  
    }
    .mobile_themepage
    {
        display:none;
    }
    .mobile_view_form
    {
        padding-left:50px;
        padding-right:30px;
        text-align:center;
        overflow-x:hidden;
        width:100%;
    }
    .deadline_time
    {
        height:33px;
        border-radius:5px;
        width:100%;
        border:2px solid #fcfcfc;
    }
    .get_assist
    {
        font-size:16px;
        padding:10px;
        border-radius:10px;
        background-color:red;
        color:#fcfcfc;
        border:2px solid red;
        transition: 0.3s;
    }
    .get_assist:hover
    {
      background-color:#000000;
    }
    .request_call_back
    {
      border-radius:5px;
      padding:10px;
      background-color:red;
      color:#fcfcfc;
    }
    .services_div
    {
        text-align:center;
        padding:20px;
    }
/*this is sticky navbar*/
    .fixed-top
    {
        padding-right:20px;
        padding-left:20px;
        position:fixed;
        top:0%;
        left:0%;
        right:0%;
        display:block;
        background-color:#fcfcfc;
        box-shadow: 0 8px 6px -6px grey;
        z-index:1;
    }
    .sticky_navbar
    {
        display:none;
    }
    .sticky_list .sticky_list
    {
        padding:15px;
        list-style:none;
        float:left;
    }
/*  social                         */
.fa {
  padding: 12px;
  font-size: 20px;
  width: 50px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #808080;
  color: white;
}

.fa-twitter {
  background: #808080;
  color: white;
}

.fa-linkedin {
  background: #808080;
  color: white;
}

.fa-instagram {
  background: #808080;
  color: white;
}
/*  footer                    */
   .footer
   {
       padding-left:20px;
   }
   .footer_heading
   {
       color:#fcfcfc;
       font-weight:700;
       font-size:23px;
   }
   .footer a
   {
       color:#fcfcfc;
       text-decoration:none!important;
       cursor:pointer;
   }

/*    login modal                                  */

.fb {
  background-color: #3B5998;
  color: white;
  padding:5px;
  width:220px;
  border-radius:5px;
}
.google {
  background-color: #dd4b39;
  color: white;
  padding:5px;
  width:220px;
  border-radius:5px;
}
.google:hover
{
opacity:.7;
}
.fb:hover
{
opacity:.7;
}
/* Set a style for all buttons */
.cancel_btn {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 90px;
}
.submit_btn {
  background-color: red;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 110px;
}

.cancel_btn:hover {
  opacity: 0.8;
}
.submit_btn:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */

/* Center the image and position the close button */


img.avatar {
  width: 40%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width:100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 3% auto 17% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  max-width: 500px; /* Could be more or less, depending on screen size */
}
.content
{
    max-width:400px;
}
/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
}

/*    end modal                                             */

    @media only screen and (max-width: 1151px)
    {
        .theme_image
        {
        height:550px;
        }
        .counter_head_div
       {
        padding-top:600px;
       } 
    }
    @media only screen and (max-width: 867px)
    {
       .top_nav
       {
           display:none;
       }
       .nav
       {
           display:none;
       }
       .mobile_nav
       {
           position:fixed;
           display:block;
           background-color:#000000;
       }
    }
    @media only screen and (max-width: 767px)
    {
        .counter_head_div
       {
        padding-top:20%;
       }
    }
    @media only screen and (max-width: 511px)
    {
      .themepage
      {
        display:none;
      }
      .mobile_themepage
      {
        display:block;
      }
    }
    @media only screen and (max-width: 380px)
    {
      .theme_assignment_heading
      {
          font-size:25px;
      }
      .theme_image
      {
          height:600px!important;
      }
    }
    </style>
</head>
<body>
@yield('header')   
<div id="id01" class="modal">
<div class="modal-content animate">
  <form action="/action_page.php" method="post">
    <div class="imgcontainer" style="text-align:center;">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <br><br>
    </div>

    <div class="container" style="text-align:center;max-width:500px;">
        <a href="#" style="text-decoration:none;" class="fb btn">
          <i class="fa fa-facebook fa-fw" style="  background-color: #3B5998;color:white;"></i> Login with Facebook
         </a><br><br><br>
        <a href="#" style="text-decoration:none;" class="google btn">
          <i class="fa fa-google fa-fw"></i> Login with Google
        </a>
    </div>

    <div class="container" style="width:100%;">
      <button class="cancel_btn" type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
    </div>
  </form>
  </div>
</div>
    <div class="container-fluid top_nav">
    <div class="col-xl-6 col-lg-5 col-md-2 top_nav_left_company_name">
    <img src="{{ asset('images/logo.png') }}" class="logo">
    </div>
    <div class="col-xl-6 col-lg-7 col-md-10 top_nav_right_align_content">
    <ul style="width:auto;">
    <li style="list-style:none;float:left;padding-top:0px;"><span class="text-lighter hidden-sm-down px-20 top_nav_mob_no"><i class="fa fa-phone"></i>+91-9119857034</span></li>
    <li style="float:left;list-style:none;"><span class="text-lighter hidden-sm-down px-20 top_nav_mob_no"><i class="fa fa-phone"></i>+63-9119857034</span></li>
    <li style="float:left;list-style:none;padding-left:10px;"><a class="btn btn-sm btn-primary hidden-sm-down mr-4 top_nav_login_button" onclick="document.getElementById('id01').style.display='block'" style="width:auto;" href="#">Log in | Sign Up</a></li>
    <li style="float:left;list-style:none;padding-left:10px;"><a class="btn btn-sm btn-primary mr-4 top_nav_getassist" href="#" onclick="document.getElementById('id02').style.display='block'" style="width:auto;" >Order Now</a></li>
    </ul>
    </div>
    </div>
    <div class="container-fluid nav">
    <ul class="nav_content">
    <li><a href="/" style="text-decoration:none;">Home</a></li>
<li class="services_list"><a href="#" style="text-decoration:none;">Services<span class="glyphicon glyphicon-menu-down"></span></a>
    </li>
    <li><a href="#" style="text-decoration:none;">Review</a></li>
    <li><a href="#" style="text-decoration:none;">About us</a></li>
    <li><a href="#" style="text-decoration:none;">Contact us</a></li>
    <li><a href="Faq" style="text-decoration:none;">Ordering FAQ</a></li>
    <li style="float:right;"><a class="request_call_back" href="#" style="text-decoration:none;color:#fcfcfc;"><b>Request Callback</b></a></li>
    </ul>
    </div>
    <div class="container-fluid mobile_nav" style="background-color:#fcfcfc!important;z-index:1;height:50px;width:100%;top:0%;">
    <div style="background-color:red;background:transparent;z-index:1;">
    <img src="logo.png" class="mobile_nav_logo">
    <a href="#" class="mobile_view_get_assignment" style="text-decoration:none;">get assignment</a>
    <span class="glyphicon glyphicon-th-list mobile_nav_button"></span>
    </div>
    </div>
    <div class="container-fluid sticky_navbar" id="sticky_navbar">
    <ul class="sticky_list">
    <form method="post" action="/">
    <li class="sticky_list"><input type="email" class="form-control" name="email" placeholder="Email" required></li>
    <li class="sticky_list"><input type="email" class="form-control" name="subject" placeholder="Subject" required></li>
    <li class="sticky_list"><select class="form-control">
    <option>1 page/250 words</option>
    <option>2 page/500 words</option>
    <option>3 page/750 words</option>
    <option>4 page/1000 words</option>
    <option>5 page/1250 words</option>
    <option>6 page/1500 words</option>
    <option>7 page/1750 words</option>
    <option>8 page/2000 words</option>
    <option>9 page/2250 words</option>
    <option>10 page/2500 words</option>
    <option>11 page/2750 words</option>
    <option>12 page/3000 words</option>
    <option>13 page/3250 words</option>
    <option>14 page/3500 words</option>
    <option>15 page/3750 words</option>
    <option>16 page/4000 words</option>
    <select></li>
    <li class="sticky_list"><input type="datetime-local" class="deadline_time" id="deadline" name="deadline" style="border:1px solid #C0C0C0;"></li>
    <li style="float:right;list-style:none;"><button type="submit" class="btn btn-success btn-lg">Get Help</button></li>
    <input type="text" name="assignment_type" value="coming from nav" hidden>
    </form>
    </ul>
    </div>
    <div class="conatiner-fluid themepage">
    <img src="{{ asset('images/androidback.jpg') }}" class="theme_image">
    <div class="col-sm-6">
    &nbsp;
    </div>
    <div class="col-sm-6" style="padding-left:50px;padding-right:50px;text-align:center;">
    <div class="row">
    <br><br>
    <p class="theme_assignment_para">Tough deadlines, vague tasks, overlapping assignments causing a lot of stress?</p>
    <h1 class="theme_assignment_heading">Assignment Help Australia</h1>
    <p class="theme_assignment_para">Take help from best writing service in Australia !</p>
    <div class="col-xs-6">
    <input type="email" class="form-control" name="email" placeholder="Email" required><br><br>
    <p style="color:#fcfcfc;">Number of pages/words you require</p>
    <select class="form-control">
    <option>1 page/250 words</option>
    <option>2 page/500 words</option>
    <option>3 page/750 words</option>
    <option>4 page/1000 words</option>
    <option>5 page/1250 words</option>
    <option>6 page/1500 words</option>
    <option>7 page/1750 words</option>
    <option>8 page/2000 words</option>
    <option>9 page/2250 words</option>
    <option>10 page/2500 words</option>
    <option>11 page/2750 words</option>
    <option>12 page/3000 words</option>
    <option>13 page/3250 words</option>
    <option>14 page/3500 words</option>
    <option>15 page/3750 words</option>
    <option>16 page/4000 words</option>
    <select>
    <input type="hidden" name="pages" class="pages1" value="1">
    </div>
    <div class="col-xs-6">
    <input type="text" class="form-control" name="subject" placeholder="Subject" required><br><br>
    <p style="color:#fcfcfc;">Choose your assignment deadline</p>
    <input type="datetime-local" class="deadline_time" id="deadline" name="deadline">
    </div>
    </div>
    <br><br>
    <button type="submit" class="get_assist">Get Free Assistance</button>
    </div>
    </div>
    <div class="conatiner-fluid mobile_themepage">
    <img src="{{ asset('images/androidback.jpg') }}" class="theme_image">
    <div class="row mobile_view_form">
    <br><br><br>
    <p class="theme_assignment_para">Tough deadlines, vague tasks, overlapping assignments causing a lot of stress?</p>
    <h1 class="theme_assignment_heading">Assignment Help Australia</h1>
    <p class="theme_assignment_para">Take help from best writing service in Australia !</p>
    <input type="email" class="form-control" name="email" placeholder="Email" required>
    <p style="color:#fcfcfc;">Number of pages/words you require</p>
    <div class="input-group bootstrap-touchspin" style="z-index:-1;"><span class="input-group-btn"> <button class="btn blue bootstrap-touchspin-down count" onclick="return assignment_page_decrement()" type="button">-</button> </span>
    <input type="text" value="1 Page/250 Words" name="headpages" readonly="" id="id_esof_pages_qty1" class="form-control text-center" style="display:block;font-size:12px">
    <span class="input-group-addon bootstrap-touchspin-postfix" style="display:none"></span><span class="input-group-btn"> 
    <button class="btn red bootstrap-touchspin-up count" onclick="return assignment_page_increment()" type="button">+</button> </span></div>
    <input type="hidden" name="pages" class="pages1" value="1">
    <br>
    <input type="text" class="form-control" name="subject" placeholder="Subject" required>
    <p style="color:#fcfcfc;">Choose your assignment deadline</p>
    <input type="datetime-local" class="deadline_time" id="deadline" name="deadline">
    <br><br>
    <button type="submit" class="get_assist">Get Free Assistance</button>
    </div>
    </div>
    <div id="id02" class="modal">
<div class="modal-content animate">
  <form action="/action_page.php" method="post">
    <div class="imgcontainer" style="text-align:center;">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
      <br><br>
    </div>
    <div class="row" style="padding:10px;">
    <h1 style="text-align:center;font-weight:700;color:gray;">Order Now</h1>
    <div class="col-sm-6">
    <input type="email" class="form-control" name="email" placeholder="Email" required><br><br>
    <p style="color:#808080;">Number of pages/words you require</p>
    <select class="form-control">
    <option>1 page/250 words</option>
    <option>2 page/500 words</option>
    <option>3 page/750 words</option>
    <option>4 page/1000 words</option>
    <option>5 page/1250 words</option>
    <option>6 page/1500 words</option>
    <option>7 page/1750 words</option>
    <option>8 page/2000 words</option>
    <option>9 page/2250 words</option>
    <option>10 page/2500 words</option>
    <option>11 page/2750 words</option>
    <option>12 page/3000 words</option>
    <option>13 page/3250 words</option>
    <option>14 page/3500 words</option>
    <option>15 page/3750 words</option>
    <option>16 page/4000 words</option>
    <select>
    <input type="hidden" name="pages" class="pages1" value="1">
    </div>
    <div class="col-sm-6">
    <input type="text" class="form-control" name="subject" placeholder="Subject" required><br><br>
    <p style="color:#808080;">Choose your assignment deadline</p>
    <input type="datetime-local" style="border:1px solid silver;" class="deadline_time" id="deadline" name="deadline">
    </div>
    </div>
    <div class="container" style="width:100%;">
      <button class="cancel_btn" type="button" onclick="document.getElementById('id02').style.display='none'">Cancel</button>
      <button type="submit" style="float:right;" class="submit_btn">Order Now</button>
    </div>
  </form>
  </div>
</div>
@yield('content')
<div class="container-fluid" style="padding-top:30px;background-color:#808080;padding-left:0px;padding-right:0px;">
@yield('footer')
<div class="container-fluid">
  <div class="col-sm-3 footer">
  <h4 class="footer_heading">Let Us Help You</h4>
  <a href="Faq"><span class="glyphicon glyphicon-chevron-right"></span>&nbsp;Faqs</a><br>
  <a><span class="glyphicon glyphicon-chevron-right"></span>&nbsp;Resources</a><br>
  <a><span class="glyphicon glyphicon-chevron-right"></span>&nbsp;Premium</a><br>
  <a><span class="glyphicon glyphicon-chevron-right"></span>&nbsp;Term Of Use</a><br>
  <a><span class="glyphicon glyphicon-chevron-right"></span>&nbsp;Fair Use Policy</a><br>
  <a><span class="glyphicon glyphicon-chevron-right"></span>&nbsp;Privacy Policy</a><br>
  <a><span class="glyphicon glyphicon-chevron-right"></span>&nbsp;Revision & Refund Policy</a><br><br>
  </div>
  <div class="col-sm-3 footer">
  <h4 class="footer_heading">Get to Know US</h4>
  <a><span class="glyphicon glyphicon-chevron-right"></span>&nbsp;How It Works</a><br>
  <a><span class="glyphicon glyphicon-chevron-right"></span>&nbsp;Reviews</a><br>
  <a><span class="glyphicon glyphicon-chevron-right"></span>&nbsp;Experts</a><br>
  <a><span class="glyphicon glyphicon-chevron-right"></span>&nbsp;Contact Us</a><br>
  <a><span class="glyphicon glyphicon-chevron-right"></span>&nbsp;Blog</a><br>
  <a><span class="glyphicon glyphicon-chevron-right"></span>&nbsp;Resume</a><br>
  <a><span class="glyphicon glyphicon-chevron-right"></span>&nbsp;Legit Essay</a><br>
  <a><span class="glyphicon glyphicon-chevron-right"></span>&nbsp;Our Offers</a><br><br>
  </div>
  <div class="col-sm-3 footer">
  <h4 class="footer_heading">Best In Countries</h4>
  <a><span class="glyphicon glyphicon-chevron-right"></span>&nbsp;Australia</a><br>
  <a><span class="glyphicon glyphicon-chevron-right"></span>&nbsp;India</a><br>
  <a><span class="glyphicon glyphicon-chevron-right"></span>&nbsp;Canada</a><br>
  <a><span class="glyphicon glyphicon-chevron-right"></span>&nbsp;Malaysia</a><br>
  <a><span class="glyphicon glyphicon-chevron-right"></span>&nbsp;US</a><br>
  <a><span class="glyphicon glyphicon-chevron-right"></span>&nbsp;UK</a><br>
  <a><span class="glyphicon glyphicon-chevron-right"></span>&nbsp;UAE</a><br>
  <a><span class="glyphicon glyphicon-chevron-right"></span>&nbsp;Singapore</a><br>
  <a><span class="glyphicon glyphicon-chevron-right"></span>&nbsp;New Zealand</a><br>
  <a><span class="glyphicon glyphicon-chevron-right"></span>&nbsp;And more many</a><br><br>
  </div>
  <div class="col-sm-3" style="padding-top:30px;">
  <div class="container-fluid" style="text-align:center;color:#fcfcfc;width:200px;background-color:#696969;padding:10px;">
  <p>Upload your requirements and see your grades improving.300K+ Satisfied Students.Rated 4.9/5Based On Overall 14001 Reviews.</p>
  <a class="btn btn primary" style="background-color:#5F9EA0;color:#fcfcfc;width:auto;" onclick="document.getElementById('id02').style.display='block'">Order Now</a>
  </div>
  </div>
</div>
<div class="container-fluid" style="background-color:#696969;padding-left:40px;padding-right:40px;padding-top:20px;padding-bottom:30px;">
<div class="col-sm-6">
<h4 style="color:#fcfcfc;">Get in touch</h4>
<a href="#" class="fa fa-facebook"></a>
<a href="#" class="fa fa-twitter"></a>
<a href="#" class="fa fa-linkedin"></a>
<a href="#" class="fa fa-instagram"></a>
</div>
<div class="col-sm-6">
&nbsp;
</div>
</div>
</div>
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
<script>
$(document).ready(function()
{
if ($(window).width() > 992) 
{
  $(window).scroll(function()
  {  
     if ($(this).scrollTop() > 200) {
        $('#sticky_navbar').addClass("fixed-top");
        $('#sticky_navbar').removeClass("sticky_navbar");
        // add padding top to show content behind navbar
        $('body').css('padding-top', $('.top_nav').outerHeight() + 'px');
      }else{
        $('#sticky_navbar').removeClass("fixed-top");
        $('#sticky_navbar').addClass("sticky_navbar");
         // remove padding top from body
        $('body').css('padding-top', '0'); 
      }   
  });
} 
})
</script>
</body>
</html>