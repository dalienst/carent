<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer SIGN UP</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/w3css/w3.css">
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="assets/css/clientlogin.css">
  </head>
<body>
     <!-- Navigation -->
     <nav class="navbar navbar-custom navbar-fixed-top" role="navigation" style="color: black">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                    </button>
                <a class="navbar-brand page-scroll text-success" href="index.php">
                  NemCo Car Rentals </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <?php
                if(isset($_SESSION['login_client'])){
            ?>
                <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                    <ul class="nav navbar-nav text-success">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="#"><span class="bi bi-person-fill text-success"></span> Welcome <?php echo $_SESSION['login_client']; ?></a>
                        </li>
                        <li>
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="bi bi-person-fill"></span> Control Panel <span class="caret"></span> </a>
                                    <ul class="dropdown-menu">
                                        <li> <a href="entercar.php">Add Car</a></li>
                                        <li> <a href="enterdriver.php"> Add Driver</a></li>
                                        <li> <a href="clientview.php">View</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="logout.php"><span class="bi bi-box-arrow-right"></span> Logout</a>
                        </li>
                    </ul>
                </div>
                <?php
                }
                else if (isset($_SESSION['login_customer'])){
            ?>
                    <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                        <ul class="nav navbar-nav text-success">
                            <li class="text-success">
                                <a href="index.php">Home</a>
                            </li>
                            <li class="text-success">
                                <a href="#"><span class="bi bi-person-fill"></span> Welcome <?php echo $_SESSION['login_customer']; ?></a>
                            </li>
                            <li class="text-success">
                                <a href="#">History</a>
                            </li>
                            <li class="text-success"> 
                                <a href="logout.php"><span class="bi bi-box-arrow-right"></span> Logout</a>
                            </li>
                        </ul>
                    </div>

                    <?php
            }
                else {
            ?>

                        <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                            <ul class="nav navbar-nav">
                                <li class="text-success">
                                    <a href="index.php">Home</a>
                                </li>
                                <li class="text-success">
                                    <a href="clientlogin.php">Employee</a>
                                </li>
                                <li class="text-success">
                                    <a href="customerlogin.php">Customer</a>
                                </li>
                                <li class="text-success">
                                    <a href="#"> FAQ </a>
                                </li>
                            </ul>
                        </div>
                        <?php   }
                ?>
                        <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <div class="container">
        <div class="card">
            <h1 class="text-center text-success">Car Rentals - Registration</h1>
            <br>
            <p class="text-center text-success">Get started by creating customer account</p>
        </div>
    </div>

    <div class="container">
        <div class="col-md-5 col-md-offset-4">
            <div class="card card-primary">
                <div class="card-body">

                    <form role="form" action="customer_registered_success.php" method="POST">

                        <div class="row">
                            <div class="mb-3">
                                <label for="customer_name" class="text-success">Full Name</label>
                                <div class="input-group">
                                    <input class="form-control" id="customer_name" type="text" name="customer_name" placeholder="Your Full Name" required>
                                    <span class="input-group-btn">
                  <label class="btn"><span class="bi bi-person-fill" aria-hidden="true"></label>
              </span>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3">
                                <label for="customer_username" class="text-success">Username </label>
                                <div class="input-group">
                                    <input class="form-control" id="customer_username" type="text" name="customer_username" placeholder="Your Username" required>
                                    <span class="input-group-btn">
                  <label class="btn"><span class="bi bi-person-fill" aria-hidden="true"></label>
              </span>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3">
                                <label for="customer_email" class="text-success">Email</label>
                                <div class="input-group">
                                    <input class="form-control" id="customer_email" type="email" name="customer_email" placeholder="Email" required>
                                    <span class="input-group-btn">
                  <label class="btn"></label>
              </span>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3">
                                <label for="customer_phone" class="text-success">Phone </label>
                                <div class="input-group">
                                    <input class="form-control" id="customer_phone" type="text" name="customer_phone" placeholder="Phone" required>
                                    <span class="input-group-btn">
                  <label class="btn"></label>
                                    </span>

                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3">
                                <label for="customer_address" class="text-success">Address </label>
                                <div class="input-group">
                                    <input class="form-control" id="customer_address" type="text" name="customer_address" placeholder="Address" required>
                                    <span class="input-group-btn">
                  <label class="btn"></label>
              </span>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3">
                                <label for="customer_password" class="text-success">Password</label>
                                <div class="input-group">
                                    <input class="form-control" id="customer_password" type="password" name="customer_password" placeholder="Password" required>
                                    <span class="input-group-btn">
                  <label class="btn"></label>
                                    </span>

                                </div>
                            </div>
                        </div>



                        <div class="row">
                            <div class="mb-3">
                                <button class="btn btn-success" style="margin-top: 10px;" type="submit">Submit</button>
                            </div>

                        </div>
                        <label>or</label> <br>
                        <label class="text-success"><a href="customerlogin.php">Have an account? Login.</a></label>

                    </form>

                </div>

            </div>

        </div>
    </div>
</body>
<footer class="card-footer">
    <div class="container">
        <hr>
        <div class="row">
            <div class="col-sm-6">
                <h5 class="text-success">© <?php echo date("Y"); ?>NemCo Car Rentals</h5>
            </div>
        </div>
    </div>
</footer>

</html>