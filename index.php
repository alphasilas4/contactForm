<DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>contact form script</title>
<link rel="stylesheet" type="text/css" href="urstyle.css">
<!------------------------>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-grid.css">
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-grid.min.css">
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-reboot.css">
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-reboot.min.css">
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="bootstrap/css/main.css">
<!------------------------>
</head>

<body>
    
        
      <div class="container">  
          
<div class="row">
    
    <div class="col  h-5 bg-secondary">
        <marquee> <h3> Urnet Scripts</h3></marquee>
    </div>
</div>
 <div class="row">
          <div class="col-4 h-90"></div>     

    <div class="col-4 bg-dark rounded  ">
       
        <form action="mailer.php" method="post" class="form-group ">
            
        <div class="form-control">
            <input class="form-control" type="text" name="name" placeholder="Username">
        </div>

        <div class="form-control">
            <input class="form-control" type="email" name="email" placeholder="Email">
        </div>
        <div class="form-control">
            <input class="form-control" type="text" name="subject" placeholder="Email">
        </div>
        <div class="form-control">
<textarea name="message" class="form-control" placeholder="Enter your mesage" cols="30" rows="10"></textarea>        
</div>

        <div class="form-control">
            <input type="submit" class="btn btn-primary" name="send" id="">
        </div>
            
        </form>
         </div>
          <div class="col-4 h-90 "></div>     

</div>         
     
    </div> 
</body>
    </html>
