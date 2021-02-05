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
    <title>Document</title>
</head>
<body>
    <div class="container" style="padding-top:20%;">
    <form method="post" action="{{ route('Services') }}">
    @csrf
    <input type="text" class="form-control" name="name"><br><br>
    <input type="text" class="form-control" name="email"><br><br>
    <input type="submit" name="submit" value="submit" class="btn btn-primary">
    </form>
    <form id="r" method="post" action="{{ route('Services') }}">
        <input type="text" class="form-control" name="name" value="service1" hidden>
    </form>
    </div>
    <script>
    $document.ready(function(){
      
      $("#r").submit();

    });
    </script>
</body>
</html>