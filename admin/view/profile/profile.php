<?php if ( ! defined('PATH_PUBLIC')) die ('Bad requested!');
    require_once(PATH_PUBLIC . '/template/admin/header.php');
?>

<body>
    <div class="wrapper">
        <div class="sidebar" data-color="red" data-image="public/img/sidebar-2.jpg" >
            <div class="logo">
                <a href="https://quoctuan1998.github.io" class="simple-text">
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
                    <li>
                        <a href="admin.php?c=mission">
                            <i class="material-icons">notifications</i>
                            <p>Mission</p>
                        </a>
                    </li>
                    <li class="active">
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
                        <a class="navbar-brand" href="https://quoctuan1998.github.io">Website</a>
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
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card card-profile">
                                <div class="card-avatar">
                                    <a href="https://www.facebook.com/QuocTuan.AndroidDevloper">
                                        <img class="img" src="public/img/faces/tuan.jpg" />
                                    </a>
                                </div>
                                <div class="content">
                                    <h6 class="category text-gray">CIO / Android Developer</h6>
                                    <h4 class="card-title">Tuấn Nguyễn</h4>
                                    <p class="card-content text-info">
                                        I have a simple philosophy: Fill what’s empty. <br>Empty what full. Scratch where it itches <br>~ Alice Roosevelt ~
                                    </p>
                                    <div class="alert">
                                        <button type="button" aria-hidden="true" class="close" ></button>
                                        <span>From: Quảng Trị</span>
                                    </div>
                                    <div class="alert">
                                        <button type="button" aria-hidden="true" class="close" ></button>
                                        <span>Birthday: 20/03/1998</span>
                                    </div>
                                    <div class="alert">
                                        <button type="button" aria-hidden="true" class="close" ></button>
                                        <span>Phone: 01659906611</span>
                                    </div>
                                    <div class="alert">
                                        <button type="button" aria-hidden="true" class="close" ></button>
                                        <span>Email: tuan.nguyenquoc01@students.hueic.edu.vn</span>
                                    </div>
                                    <div class="alert">
                                        <button type="button" aria-hidden="true" class="close" ></button>
                                        <span>Github:<a href="https://github.com/QuocTuan1998"><p class="text-danger">https://github.com/QuocTuan1998</p></a></span>
                                    </div>
                                    <a href="https://www.facebook.com/QuocTuan.AndroidDevloper" class="btn btn-success btn-round">Follow</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card card-profile">
                                <div class="card-avatar">
                                    <a href="https://www.facebook.com/profile.php?id=100004294174844">
                                        <img class="img" src="public/img/faces/bk.jpg" />
                                    </a>
                                </div>
                                <div class="content">
                                    <h6 class="category text-gray">CEO / Website Developer</h6>
                                    <h4 class="card-title">Bình Nguyễn</h4>
                                    <p class="card-content text-warning">
                                        Study while others are sleeping, work while others are loafing, <br>prepare while others are playing, and dream while others are wishing. <br>~ William Arthur Ward ~
                                    </p>
                                    <div class="alert">
                                        <button type="button" aria-hidden="true" class="close" ></button>
                                        <span>From: Quảng Trị</span>
                                    </div>
                                    <div class="alert">
                                        <button type="button" aria-hidden="true" class="close" ></button>
                                        <span>Birthday: 27/10/1997</span>
                                    </div>
                                    <div class="alert">
                                        <button type="button" aria-hidden="true" class="close" ></button>
                                        <span>Phone: 01633985817</span>
                                    </div>
                                    <div class="alert">
                                        <button type="button" aria-hidden="true" class="close" ></button>
                                        <span>Email: binh.nguyenvan01@students.hueic.edu.vn</span>
                                    </div>
                                    <div class="alert">
                                        <button type="button" aria-hidden="true" class="close" ></button>
                                        <span>Github:<a href="https://github.com/nguyenvanbinh3479"><p class="text-danger">https://github.com/nguyenvanbinh3479</p></a></span>
                                    </div>
                                    <a href="https://www.facebook.com/profile.php?id=100004294174844" class="btn btn-danger btn-round">Follow</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card card-profile">
                                <div class="card-avatar">
                                    <a href="https://www.facebook.com/VanTungCoder">
                                        <img class="img" src="public/img/faces/tung.jpg" />
                                    </a>
                                </div>
                                <div class="content">
                                    <h6 class="category text-gray">CCO / Android Developer</h6>
                                    <h4 class="card-title">Tùng Nguyễn</h4>
                                    <p class="card-content text-success">
                                        What we think determines what happens to us, <br>so if we want to change our lives, we need to stretch our minds  <br>~ Wayne Dyer ~
                                    </p>
                                    <div class="alert">
                                        <button type="button" aria-hidden="true" class="close" ></button>
                                        <span>From: Huế</span>
                                    </div>
                                    <div class="alert">
                                        <button type="button" aria-hidden="true" class="close" ></button>
                                        <span>Birthday: 01/10/1998</span>
                                    </div>
                                    <div class="alert">
                                        <button type="button" aria-hidden="true" class="close" ></button>
                                        <span>Phone: 01893987597</span>
                                    </div>
                                    <div class="alert">
                                        <button type="button" aria-hidden="true" class="close" ></button>
                                        <span>Email: tung.nguyenvan@students.hueic.edu.vn</span>
                                    </div>
                                    <div class="alert">
                                        <button type="button" aria-hidden="true" class="close" ></button>
                                        <span>Github:<a href="https://github.com/tungnguyenvan"><p class="text-danger">https://github.com/tungnguyenvan</p></a></span>
                                    </div>
                                    <a href="https://www.facebook.com/VanTungCoder" class="btn btn-info btn-round">Follow</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<?php require_once(PATH_PUBLIC . '/template/admin/footer.php'); ?>                