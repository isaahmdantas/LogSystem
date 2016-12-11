<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>.:: Login | LogSystem .:: </title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" media="all" />
    <link rel="stylesheet" type="text/css" href="css/toastr.min.css" media="all" />
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" media="all" />
    <link rel="stylesheet" type="text/css" href="css/custom.css" media="all" />
    <link rel="shortcut icon" href="img/favicon.ico" />
</head>
<body>
    <div class="container">
        <div class="row clearfix">
              <div class="col-xs-12 col-sm-6 col-md-8">
                  <div class="form-container">
                    <form method="post" name="loginForm" class="">
                        <h2 class="text-center" >Sign in LogSystem</h2>
                        <div class="form-group">
                            <label for="name" class="control-label"> Name: </label>
                            <input type="text" name="name" class="form-control" placeholder="Name" autocomplete="off" id="name" />
                        </div>
                         <div class="form-group">
                            <label for="email" class="control-label"> E-mail: </label>
                            <input type="email" name="email" class="form-control" placeholder="E-mail" autocomplete="off" id="email" />
                        </div>
                         <div class="form-group">
                            <label for="password" class="ontrol-label">Password: </label>
                            <input type="password" name="password" class="form-control" placeholder="Password" autocomplete="off" id="password" />
                        </div>
                        <div class="form-group">
                            <div class="form-actions">
                                <button type="submit" class="btn btn-success btn-block" id="btn-login"> Login </button>   
                            </div>
                        </div>
                    </form>
                    <a href="register.php" class="pull-left"> Register </a>  <a href="index.php" class="pull-right"> Forget Password </a> 
                  </div>  
              </div>
        </div>
    </div>
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/toastr.min.js"></script>
    <script type="text/javascript" src="js/custom.js"></script>
</body>
</html>



