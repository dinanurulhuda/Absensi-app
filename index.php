<!DOCTYPE html>
<html lang="en">
<head>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>

    body{
      background-image: url(images/log.jpg);
      background-repeat: no-repeat;
      background-size: 1400px;
      background-position: center;
    }
  </style>
</head>
<body>
    <form action="login_action.php" method="post">
        <div class="container">
            <div class="row">
                <div class="col"> 
                </div>
                <div class="col-md-5">
                <p>
                </p> 
                    <div class="card">
                        <div class="card-header text-center">
                            <strong>
                                <h1>Login Page</h1>
                            </strong>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="mb-6">
                                    <input type="text" class="form-control" name="username" placeholder="Enter Username">
                                </div>
                                <br>
                                <div class="mb-6">
                                    <input type="password" class="form-control" name="password" placeholder="Enter Password">
                                </div>
                                <P>
                                    <div class="col md-5"><center>
                                        <input type="submit" class="btn btn-info" value="Login">
                                        <a href="registrasi.php" class="btn btn-danger">Registration</a></center>
                                    </div>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col">

                </div>
            </div>
    </form>
</body>
</html>