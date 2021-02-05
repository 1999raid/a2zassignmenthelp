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
    <title>Add Assignment</title>
</head>
<body>
    <div class="container-fluid">
    <div class="container" style="text-align:center;">
    <form mehtod="post" action="/">
     <h1>GUARANTEED HIGHER GRADE OR GET YOUR MONEY BACK!</h1>
     <p>GET HELP INSTANTLY</p>
     <div class="row">
     <div class="col-sm-6">
     <p>Enter your email id</p>
    <input type="email" class="form-control" name="email" placeholder="Email" required><br><br>
    <p>Number of pages/words you require</p>
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
    <p>Subject you are pursuing</p>
    <input type="text" class="form-control" name="subject" placeholder="Subject" required><br><br>
    <p>Choose your assignment deadline</p>
    <input type="datetime-local" class="deadline_time" id="deadline" name="deadline">
    </div>
     </div>
    </form>
    </div>
    </div>
</body>
</html>