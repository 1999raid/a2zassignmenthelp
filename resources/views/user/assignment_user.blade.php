<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>User Assignment</title>
    <style>
    .nav
    {
        position:fixed;
        left:0%;
        right:0%;
        top:0%;
        padding-top:20px;
        background-color:#000000;
        padding-bottom:20px;
    }
    .dropdown li
    {
        float:left;
        padding-left:7%;
        list-style:none;
    }
    .dropdown li a
    {
        color:#F0F8FF;
        cursor:pointer;
        font-size:16px;
        font-weight:bold;
    }
    .sublist
    {
        display:none;
    }
    .sublist li
    {
        float:none;
        list-style:none;
    }
    .submenu:hover .sublist
    {
        display:block;
        width:200px;
        position:absolute;
        box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;
        padding-left:0%;
        padding-top:0.5%;
        padding-bottom:15px;
        background-color:#F0F8FF;
    }
    .submenu:hover .sublist li
    {
      padding-top:12px;
      cursor:pointer;
    }
    .submenu:hover .sublist li a
    {
        color:#000000;
        font-size:14px;
    }
    .feedback_button
    {
        padding:10px;
        font-size:14px;
        border-top-left-radius:5px;
        border-bottom-left-radius:5px;
        background-color:#4682B4;
        color:#fcfcfc;
        cursor:pointer;
        position:fixed;
        top:40%;
        right:0%;
    }
    </style>
</head>
<body>
<div class="container-fluid nav">
 <ul class="dropdown">
     <li><a style="text-decoration:none;">A2zassignmetHelp</a></li>
     <li class="submenu"><a style="text-decoration:none;">
     <span class="glyphicon glyphicon-file" style="color:#fcfcfc"></span>
     &nbsp;Assignments &nbsp; <span class="glyphicon glyphicon-menu-down" style="color:#fcfcfc"></span></a>
       <ul class="sublist">
            <li> <a style="text-decoration:none;">
                 Active Assignment
                 </a>
            </li>
            <li> <a style="text-decoration:none;">
                 Completed Assignment
                 </a>  
            </li>
            <li> <a style="text-decoration:none;">
                  Expired Assignment
                 </a>
            </li>
            <li> <a style="text-decoration:none;">
                 Rework Assignment
                 </a>
            </li>
       </ul>
     </li>
     <li><a style="text-decoration:none;"> <span class="glyphicon glyphicon-plus" style="color:#fcfcfc"></span> New Assignments </a></li>
     <li style="float:right;padding-right:5%;"> <a style="text-decoration:none;"><span class="glyphicon glyphicon-user" style="color:#fcfcfc;font-size:18px;"></span></a></li>
 </ul>
</div>
</body>
</html>