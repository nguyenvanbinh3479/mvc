

<!doctype html>
<html lang="en">

<body>
    <div class="wrapper">
        <div class="sidebar" data-color="red" data-image="public/img/sidebar-2.jpg" >
            <div class="logo">
                <a href="https://quoctuan1998.github.io/" class="simple-text">
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
                        <a class="navbar-brand" href="https://quoctuan1998.github.io/">Website</a>
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
                                    <form method="post" action="admin.php">
                                        <input type="hidden" name="c" value="login">
                                        <input type="hidden" name="a" value="index">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Username</label>
                                                    <input type="email" class="form-control" name="email" required>
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
                                                    <div class="form-group label-floating">
                                                        <label class="control-label"> M.S.C Welcome to you</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-danger pull-right">Login</button>
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
                                <a href="https://quoctuan1998.github.io/">
                                    Website
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <p class="copyright pull-right">
                        &copy;
                        <script>
                            document.write(new Date().getFullYear())
                        </script>
                        <a href="https://quoctuan1998.github.io/">M.S.C Universe</a>, made with love for all songs
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