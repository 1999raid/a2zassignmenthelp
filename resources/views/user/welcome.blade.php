@extends('user.layout.master')
   @section('content')
   <style>
    .counter_head_div
    {
        padding-top:500px;
    }
    .counter_div
    {
        text-align:center;
        padding:20px;
    }
    .counter_inner_div
    {
        padding-top:13%;
        background-color:#F8F8FF;
        height:200px;
    }
    .counter_content
    {
        font-size:20px;
        color:#808080;
    }
    @media only screen and (max-width: 1155px)
    {
      .counter_head_div
    {
        padding-top:600px;
    }
    }
    @media only screen and (max-width: 767px)
    {
      .counter_head_div
    {
        padding-top:150px!important;
    }
    }
   </style>
     <div class="container counter_head_div">
    <div class="col-sm-4 counter_div">
    <div class="counter_inner_div">
    <h1 style="color:#FF7F50;"><span class="counter">50,000</span><span>+</span></h1>
    <p class="counter_content">Assignments</p>
    </div>
    </div>
    <div class="col-sm-4 counter_div">
    <div class="counter_inner_div">
    <h1 style="color:#FF7F50;"><span class="counter">1124</span><span>+</span></h1>
    <p class="counter_content">PHD and Masters level experts</p>
    </div>
    </div>
    <div class="col-sm-4 counter_div">
    <div class="counter_inner_div">
    <h1 style="color:#FF7F50;"><span class="counter">129</span><span>+</span></h1>
    <p class="counter_content">Subjects</p>
    </div>
    </div>
    </div>
<div class=" container-fluid services">
<h1 style="text-align:center;color:#696969">Assignment Help Services</h1>
  <div class="col-sm-4 services_div">
  <div class="services_inner_div">
  <h4 style="color:#696969;">Online Assignment Help</h4>
  </div>
  </div>
  <div class="col-sm-4 services_div">
  <div class="services_inner_div">
  <h4 style="color:#696969;">Online Assignment Help</h4>
  </div>
  </div>
  <div class="col-sm-4 services_div">
  <div class="services_inner_div">
  <h4 style="color:#696969;">Online Assignment Help</h4>
  </div>
  </div>
</div>
<br><br>
<div class=" container-fluid key_feature">
<h1 style="text-align:center;color:#696969;">Key Features</h1>
  <div class="col-sm-4 services_div">
  <div class="services_inner_div">
  <h4 style="color:#696969;">On Time Delivery</h4>
  </div>
  </div>
  <div class="col-sm-4 services_div">
  <div class="services_inner_div">
  <h4 style="color:#696969;">24x7 Live Chat Help Support</h4>
  </div>
  </div>
  <div class="col-sm-4 services_div">
  <div class="services_inner_div">
  <h4 style="color:#696969;">4205 PHD Experts</h4>
  </div>
  </div>
  <div class="col-sm-4 services_div">
  <div class="services_inner_div">
  <h4 style="color:#696969;">Services For All Subjects</h4>
  </div>
  </div>
  <div class="col-sm-4 services_div">
  <div class="services_inner_div">
  <h4 style="color:#696969;">Best Price Guarantee</h4>
  </div>
  </div>
  <div class="col-sm-4 services_div">
  <div class="services_inner_div">
  <h4 style="color:#696969;">Plagrism Free Work</h4>
  </div>
  </div>
</div>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<script>
$(document).ready(function()
{
  $('.counter').counterUp({
    delay: 30,
    time: 3000
});
});
</script>
  @endsection
