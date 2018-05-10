<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="public/img/msc-icon.png" />
    <link rel="icon" type="image/png" href="public/img/msc-icon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>M.S.C Universe</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="public/css/bootstrap.min.css" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="public/css/material-dashboard.css?v=1.2.0" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons" rel='stylesheet'>
</head>
<body>
    <div class="wrapper">
        <div class="sidebar" data-color="red" data-image="public/img/sidebar-2.jpg" >
            <div class="logo">
                <a href="admin.php?c=login" class="simple-text">
                    M.S.C - UNIVERSE
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="active">
                        <a href="admin.php?c=login">
                            <i class="material-icons">account_circle</i>
                            <p>Login</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <nav class="navbar navbar-transparent navbar-absolute">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="https://goo.gl/CYpD4c">Channel</a>
                        <a class="navbar-brand" href="https://nguyenvanbinh3479.github.io/">Blog</a>
                    </div>
                </div>
            </nav>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <div class="card">
                                <div class="card-header" data-background-color="red">
                                    <h4 class="title">Login</h4>
                                    <p class="category">you have to do this men</p>
                                </div>
                                <div class="card-content">
                                    <form method="post" action="">
                                        <input type="hidden" name="c" value="login">
                                        <input type="hidden" name="a" value="index">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Username</label>
                                                    <input type="email" class="form-control" name="email" required>
                                                    <!-- <p><?php //echo $show;?></p> -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Password</label>
                                                    <input type="password" class="form-control" name="password" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label><a href="admin.php?c=repass">Fogot password</a></label>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label"> M.S.C Welcome to you</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button  class="btn btn-danger pull-right" onclick=alert(
                                            "<?php
                                            if($status == 4) {                                           
                                                    header('location: admin.php?c=home');   
                                            }else {
                                                echo $show;
                                            }
                                        ?>")>Login</button>
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
            <footer class="footer">
                <div class="container-fluid">
                    <nav class="pull-left">
                        <ul>
                            <li>
                                <a href="https://goo.gl/CYpD4c">
                                    Channel
                                </a>
                            </li>
                            <li>
                                <a href="https://nguyenvanbinh3479.github.io/">
                                    Blog
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <p class="copyright pull-right">
                        &copy;
                        <script>
                            document.write(new Date().getFullYear())
                        </script>
                        <a href="admin.php?c=login">M.S.C Universe</a>, made with love for all songs
                    </p>
                </div>
            </footer>
        </div>
    </div>
</body>
<!--   Core JS Files   -->
<script src="public/js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="public/js/bootstrap.min.js" type="text/javascript"></script>
<script src="public/js/material.min.js" type="text/javascript"></script>
<!--  Charts Plugin -->
<script src="public/js/chartist.min.js"></script>
<!--  Dynamic Elements plugin -->
<script src="public/js/arrive.min.js"></script>
<!--  PerfectScrollbar Library -->
<script src="public/js/perfect-scrollbar.jquery.min.js"></script>
<!--  Notifications Plugin    -->
<script src="public/js/bootstrap-notify.js"></script>
<!-- Material Dashboard javascript methods -->
<script src="public/js/material-dashboard.js?v=1.2.0"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="public/js/demo.js"></script>
<script src="public/js/ntf.js"></script>
<script type="text/javascript">
    $(document).ready(function() {

        // Javascript method's body can be found in public/js/demos.js
        demo.initDashboardPageCharts();

    });
</script>

</html>              