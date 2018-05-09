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
                <a href="admin.php?c=home" class="simple-text">
                    M.S.C - UNIVERSE
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li>
                        <a href="admin.php?c=home">
                            <i class="material-icons">home</i>
                            <p>home</p>
                        </a>
                    </li>
                    <li class="active">
                        <a href="admin.php?c=mission">
                            <i class="material-icons">notifications</i>
                            <p>Mission</p>
                        </a>
                    </li>
                    <li>
                        <a href="admin.php?c=profile">
                            <i class="material-icons">account_box</i>
                            <p>Admin Profile</p>
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
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <a href="admin.php?c=mission" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">notifications</i>
                                    <span class="notification">3</span>
                                    <p class="hidden-lg hidden-md">Missions</p>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="admin.php?c=mission">Bình you have new mission</a>
                                    </li>
                                    <li>
                                        <a href="admin.php?c=mission">Tuấn, are you done your missions?</a>
                                    </li>
                                    <li>
                                        <a href="admin.php?c=mission">Tùng checkout your missions</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="admin.php?c=profile" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">person</i>
                                    <p class="hidden-lg hidden-md">Profile</p>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="admin.php?c=login">Logout</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <form class="navbar-form navbar-right" role="search">
                            <div class="form-group  is-empty">
                                <input type="text" class="form-control" placeholder="Search">
                                <span class="material-input"></span>
                            </div>
                            <button type="submit" class="btn btn-white btn-round btn-just-icon">
                                <i class="material-icons">search</i>
                                <div class="ripple-container"></div>
                            </button>
                        </form>
                    </div>
                </div>
            </nav>
            <div class="content">
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <h4 class="title">All Member Missions</h4>
                            <p class="category"> Please checkout your Missions
                            </p>
                        </div>
                        <div class="card-content">
                            <div class="row">
                                <div class="col-md-4">
                                    <h5>Bình Missions</h5>
                                    
                                    <div class="alert alert-success">
                                        <button type="button" aria-hidden="true" class="close" ></button>
                                        <span>Create the interface for the website to look more beautiful</span>
                                    </div>
                                    <div class="alert alert-info">
                                        <button type="button" aria-hidden="true" class="close" ></button>
                                        <span>Fix database for the website</span>
                                    </div>
                                    <div class="alert alert-success">
                                        <button type="button" aria-hidden="true" class="close" ></button>
                                        <span>Create view, controller, model for all tables</span>
                                    </div>
                                    <div class="alert alert-warning">
                                        <button type="button" aria-hidden="true" class="close" ></button>
                                        <span>Create the form login</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <h5>Tuấn Missions</h5>
                                    <div class="alert alert-info">
                                        <button type="button" aria-hidden="true" class="close" ></button>
                                        <span>Create a database for the website</span>
                                    </div>
                                    <div class="alert alert-success">
                                        <button type="button" aria-hidden="true" class="close" ></button>
                                        <span>Edit the view and controller</span>
                                    </div>
                                    <div class="alert alert-info">
                                        <button type="button" aria-hidden="true" class="close" ></button>
                                        <span>Edit api</span>
                                    </div>
                                    <div class="alert alert-warning">
                                        <button type="button" aria-hidden="true" class="close" ></button>
                                        <span>Fix the form login</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <h5>Tùng Missions</h5>
                                    <div class="alert alert-success">
                                        <button type="button" aria-hidden="true" class="close" ></button>
                                        <span>Add view, controller, model for authors</span>
                                    </div>
                                    <div class="alert alert-info">
                                        <button type="button" aria-hidden="true" class="close" ></button>
                                        <span>Create api</span>
                                    </div>
                                    <div class="alert alert-success">
                                        <button type="button" aria-hidden="true" class="close" ></button>
                                        <span>Edit api</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<?php require_once(PATH_PUBLIC . '/template/admin/footer.php'); ?>                