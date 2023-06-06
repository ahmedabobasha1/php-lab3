<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>
<body>
<section class="container w-50 mt-5 vh-90">

<form action="loginController.php" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1"><b>Email address</b></label>
    <input type="email" 
    class="form-control mt-2" 
    id="exampleInputEmail1" 
    aria-describedby="emailHelp"
     placeholder="Enter email"
     name="email"
     required
     >
 
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1 " class="mt-3"><b>Password</b></label>
    <input type="password" class="form-control mt-2" id="exampleInputPassword1" placeholder="Password"
    name="password" 
    required

    >
 

    
  </div>
  <button type="login" name="login" class="btn btn-primary mt-3" >login</button>
</form>

</section>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>
</html>