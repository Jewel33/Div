<?php
    require_once '../vendor/autoload.php';
    use App\Classes\Login;
    $login = new Login();
    $msg = "";
    if(isset($_POST['btn'])){
      $msg = $login->adminLogin($_POST);
    }
?>


<html>
    <head>
        <title>Admin Login</title>
        <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    </head>

    <body>
        <div class="container" style="margin-top: 300px">
            <div class="row">
                <div class="col-md-6 m-auto">
                    <div class="card">
                        <div class="card-title">
                            <h3 class="text-center">Admin Login</h3>
                        </div>

                        <div class="card-body">
                            <h3><?php echo $msg; ?></h3>
                          <form method="post" action="">
                            <div class="form-group row">
                                <label class="col-form-label col-md-3">Email Address</label>
                                <div class="col-md-9">
                                    <input type="email" class="form-control" name="email">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-3">Password</label>
                                <div class="col-md-9">
                                    <input type="password" class="form-control" name="password">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="offset-3 col-md-9">
                                    <input type="submit" class="btn btn-primary btn-block" name="btn">
                                </div>
                            </div>
                          </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>