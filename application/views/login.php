<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <title>HR System</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="<?php echo base_url(); ?>assets/css/colors/blue.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
  
    <section id="wrapper" style="
    display: flex;
    height: 100vh;
    width: 100vw;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background: url('<?php echo base_url(); ?>assets/images/background/hrbbg.jpg') no-repeat center center;
    background-size: cover;
    box-sizing: border-box;
">

    <!-- Left space for background only -->
    <div style="flex: 1;"></div>

    <!-- Login Section (Right Side) -->
    <div class="login-container" style="
        flex: 0 0 40%;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 4rem 2rem;
        box-sizing: border-box;
    ">
        <div class="login-box card" style="
            width: 100%;
            max-width: 400px;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            padding: 2rem;
            border-radius: 1rem;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.2);
            color: #fff;
        ">
            <div class="card-body loginpage">
                <?php if(!empty($this->session->flashdata('feedback'))){ ?>
                    <div class="alert alert-danger">
                        <strong>Danger!</strong> <?php echo $this->session->flashdata('feedback')?>
                    </div>
                <?php } ?>
                <form class="form-horizontal form-material" method="post" id="loginform" action="login/Login_Auth">
                    <div class="text-center mb-4">
                        <img src="<?php echo base_url(); ?>assets/images/hrinv.png" alt="Logo" style="max-width: 100%; height: auto;" />
                    </div>
                    <div class="form-group">
                        <input class="form-control" name="email" value="<?php if(isset($_COOKIE['email'])) { echo $_COOKIE['email']; } ?>" type="text" required placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input class="form-control" name="password" value="<?php if(isset($_COOKIE['password'])) { echo $_COOKIE['password']; } ?>" type="password" required placeholder="Password">
                    </div>
                    <div class="form-check mb-3">
                        <input type="checkbox" name="remember" class="form-check-input" id="remember-me">
                        <label class="form-check-label" for="remember-me">Remember Me</label>
                    </div>
                    <div class="form-group text-center">
                        <button class="btn btn-success btn-block" type="submit">Log In</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</section>



    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url(); ?>assets/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?php echo base_url(); ?>assets/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="<?php echo base_url(); ?>assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo base_url(); ?>assets/js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url(); ?>assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
</body>


</html>