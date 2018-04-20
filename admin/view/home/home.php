<?php if ( ! defined('PATH_PUBLIC')) die ('Bad requested!');
    require_once(PATH_PUBLIC . '/template/admin/header.php');
?>

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
                    <li class="active">
                        <a href="admin.php?c=home">
                            <i class="material-icons">home</i>
                            <p>home</p>
                        </a>
                    </li>
                    <li>
                        <a href="admin.php?c=home">
                            <i class="material-icons">notifications</i>
                            <p>Notifications</p>
                        </a>
                    </li>
                    <li>
                        <a href="admin.php?c=home">
                            <i class="material-icons">account_box</i>
                            <p>Admin Profile</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="material-icons">settings</i>
                            <p>Settings</p>
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
                        <a class="navbar-brand" href="#">Blog</a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">notifications</i>
                                    <span class="notification">5</span>
                                    <p class="hidden-lg hidden-md">Notifications</p>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="admin.php?c=notifications">Mike John responded to your email</a>
                                    </li>
                                    <li>
                                        <a href="admin.php?c=notifications">You have 5 new tasks</a>
                                    </li>
                                    <li>
                                        <a href="admin.php?c=notifications">You're now friend with Andrew</a>
                                    </li>
                                    <li>
                                        <a href="admin.php?c=notifications">Another Notification</a>
                                    </li>
                                    <li>
                                        <a href="admin.php?c=notifications">Another One</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="user.php" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">person</i>
                                    <p class="hidden-lg hidden-md">Profile</p>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="notifications.html">Logout</a>
                                    </li>
                                    <li>
                                        <a href="notifications.html">Settings</a>
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
                            <a href="users.php">
                                <div class="card">
                                    <div class="card-header card-chart" data-background-color="green">
                                        <div class="ct-chart" id="dailySalesChart"></div>
                                    </div>
                                    <div class="card-content">
                                        <h4 class="title">Users</h4>
                                        <p class="category">
                                            <span class="text-success"><i class="fa fa-long-arrow-up"></i> 55% </span> increase in today.
                                        </p>
                                    </div>
                                    <div class="card-footer">
                                        <div class="stats">
                                            <i class="material-icons">access_time</i> updated 4 minutes ago
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="listenings.php">
                                <div class="card">
                                    <div class="card-header card-chart" data-background-color="orange">
                                        <div class="ct-chart" id="emailsSubscriptionChart"></div>
                                    </div>
                                    <div class="card-content">
                                        <h4 class="title">Listenings</h4>
                                        <p class="category">
                                            <span class="text-success"><i class="fa fa-long-arrow-up"></i> 90% </span> increase in today.
                                        </p>
                                    </div>
                                    <div class="card-footer">
                                        <div class="stats">
                                            <i class="material-icons">access_time</i> updated 1 minutes ago
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="comments.php">
                                <div class="card">
                                    <div class="card-header card-chart" data-background-color="red">
                                        <div class="ct-chart" id="completedTasksChart"></div>
                                    </div>
                                    <div class="card-content">
                                        <h4 class="title">Comments</h4>
                                        <p class="category">
                                            <span class="text-success"><i class="fa fa-long-arrow-up"></i> 25% </span> increase in today.
                                        </p>
                                    </div>
                                    <div class="card-footer">
                                        <div class="stats">
                                            <i class="material-icons">access_time</i> updated 2 minutes ago
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <a href="songs.php">
                                <div class="card card-stats">
                                    <div class="card-header" data-background-color="purple">
                                        <i class="material-icons">queue_music</i>
                                    </div>
                                    <div class="card-content">
                                        <p class="category">Songs</p>
                                        <h3 class="title">2000
                                        </h3>
                                    </div>
                                    <div class="card-footer">
                                        <div class="stats">
                                            <i class="material-icons text-success">add</i>
                                            Create More Songs
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <a href="albums.php">
                                <div class="card card-stats">
                                    <div class="card-header" data-background-color="orange">
                                        <i class="material-icons">library_music</i>
                                    </div>
                                    <div class="card-content">
                                        <p class="category">Album</p>
                                        <h3 class="title">245</h3>
                                    </div>
                                    <div class="card-footer">
                                        <div class="stats">
                                            <i class="material-icons text-success">add</i>
                                            Create More Songs
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <a href="authors.php">
                                <div class="card card-stats">
                                    <div class="card-header" data-background-color="green">
                                        <i class="material-icons">local_library</i>
                                    </div>
                                    <div class="card-content">
                                        <p class="category">Authors</p>
                                        <h3 class="title">200
                                        </h3>
                                    </div>
                                    <div class="card-footer">
                                        <div class="stats">
                                            <i class="material-icons text-success">add</i>
                                            Create More Songs
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <a href="singers.php">
                                <div class="card card-stats">
                                    <div class="card-header" data-background-color="blue">
                                        <i class="material-icons">face</i>
                                    </div>
                                    <div class="card-content">
                                        <p class="category">Singers</p>
                                        <h3 class="title">945</h3>
                                    </div>
                                    <div class="card-footer">
                                        <div class="stats">
                                            <i class="material-icons text-success">add</i>
                                            Create More Songs
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <a href="types.php">
                                <div class="card card-stats">
                                    <div class="card-header" data-background-color="blue">
                                        <i class="material-icons">store</i>
                                    </div>
                                    <div class="card-content">
                                        <p class="category">Types</p>
                                        <h3 class="title">75</h3>
                                    </div>
                                    <div class="card-footer">
                                        <div class="stats">
                                            <i class="material-icons text-success">add</i>
                                            Create More Songs
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <a href="faforites.php">
                                <div class="card card-stats">
                                    <div class="card-header" data-background-color="red">
                                        <i class="material-icons">favorite</i>
                                    </div>
                                    <div class="card-content">
                                        <p class="category">Favorites</p>
                                        <h3 class="title">1678</h3>
                                    </div>
                                    <div class="card-footer">
                                        <div class="stats">
                                            <i class="material-icons text-success">add</i>
                                            Create More Songs
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>  
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <a href="playlists.php">
                                <div class="card card-stats">
                                    <div class="card-header" data-background-color="black">
                                        <i class="material-icons">account_box</i>
                                    </div>
                                    <div class="card-content">
                                        <p class="category">Playlists</p>
                                        <h3 class="title">275</h3>
                                    </div>
                                    <div class="card-footer">
                                        <div class="stats">
                                            <i class="material-icons text-success">add</i>
                                            Create More Songs
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>     
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <a href="playlist_details.php">
                                <div class="card card-stats">
                                    <div class="card-header" data-background-color="orange">
                                        <i class="material-icons">music_note</i>
                                    </div>
                                    <div class="card-content">
                                        <p class="category">Playlist Details</p>
                                        <h3 class="title">1045</h3>
                                    </div>
                                    <div class="card-footer">
                                        <div class="stats">
                                            <i class="material-icons text-success">add</i>
                                            Create More Songs
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>                 
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="green">
                                    <h4 class="title">Team Member</h4>
                                    <p class="category">Never Be Tired</p>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table">
                                        <thead class="text-primary">
                                            <th>Name</th>
                                            <th>From</th>
                                            <th>Phone</th>
                                            <th>Gmail</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Nguyễn Văn Bình</td>
                                                <td>Quảng Trị</td>
                                                <td>01633985817</td>
                                                <td>binh.nguyenvan01@students.hueic.edu.vn</td>
                                            </tr>
                                            <tr>
                                                <td>Nguyễn Quốc Tuấn</td>
                                                <td>Quảng Trị</td>
                                                <td>01659906611</td>
                                                <td>tuan.nguyenquoc01@students.hueic.edu.vn</td>
                                            </tr>
                                            <tr>
                                                <td>Nguyễn Văn Tùng</td>
                                                <td>Huế</td>
                                                <td>01689748352</td>
                                                <td>tung.nguyenvan@students.hueic.edu.vn</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
<?php require_once(PATH_PUBLIC . '/template/admin/footer.php'); ?>                