<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <!-- NAVBAR START  -->
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand">Navbar</a>
            <form class="d-flex" role="search">
                <a class="btn btn-danger" href="#">Sin Up</a>
                <a class="btn btn-info mx-3" href="#">Login</a>
            </form>
        </div>
    </nav>
    <!-- NAVBAR END  -->

    <div class="login-singup-from">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h2>Sing Up Now</h2>
                    <p class="lead">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                    <form action="./includes/singup.php" method="POST" class="row g-3">
                        <div class="col-md-12">
                            <label for="userid" class="form-label">User Name</label>
                            <input name="userid" type="text" class="form-control" id="userid">
                        </div>
                        <div class="col-md-12">
                            <label for="password" class="form-label">Password</label>
                            <input name="password" type="password" class="form-control" id="password">
                        </div>
                        <div class="col-md-12">
                            <label for="reppassword" class="form-label">Repeat Password</label>
                            <input name="reppassword" type="password" class="form-control" id="reppassword">
                        </div>
                        <div class="col-md-12">
                            <label for="email" class="form-label">Email</label>
                            <input name="email" type="text" class="form-control" id="email">
                        </div>
                        <div class="col-12">
                            <button name="submit" type="submit" class="btn btn-danger">Sign Up</button>
                        </div>
                    </form><!--singup form end -->
                </div>
                <div class="col-sm-6">
                    <h2>Login Now</h2>
                    <p class="lead">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                    <form action="" method="POST" class="row g-3">
                        <div class="col-md-12">
                            <label for="username" class="form-label">User Name</label>
                            <input type="text" class="form-control" id="username">
                        </div>
                        <div class="col-md-12">
                            <label for="password" class="form-label">Password</label>
                            <input name="password" type="password" class="form-control" id="password">
                        </div>
                        <div class="col-12">
                            <button name="submit" type="submit" class="btn btn-info">Log In</button>
                        </div>
                    </form><!--login form end -->
                </div>
            </div>
        </div>
    </div>








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>