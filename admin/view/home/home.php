<?php if ( ! defined('PATH_PUBLIC')) die ('Bad requested!');
    require_once(PATH_PUBLIC . '/template/admin/header.php');
?>

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
                        <a class="navbar-brand" href="https://quoctuan1998.github.io/">Website</a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <a href="admin.php?c=mission" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">notifications</i>
                                    <span class="notification">3</span>
                                    <p class="hidden-lg hidden-md">Mission</p>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="admin.php?c=mission">Bình you have new mission</a>
                                    </li>
                                    <li>
                                        <a href="admin.php?c=mission">Tuấn, are you done your mission?</a>
                                    </li>
                                    <li>
                                        <a href="admin.php?c=mission">Tùng checkout your mission</a>
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
                            <a href="admin.php?c=user">
                                <div class="card">
                                    <div class="card-header card-chart" data-background-color="green">
                                        <div class="ct-chart" id="dailySalesChart"></div>
                                    </div>
                                    <div class="card-content">
                                        <h4 class="title">Users</h4>
                                        <p class="category">
                                            <span class="text-success"> <?php echo count($list_user)?> </span> 
                                        </p>
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
                        <div class="col-md-4">
                            <a href="admin.php?c=luotnghe">
                                <div class="card">
                                    <div class="card-header card-chart" data-background-color="orange">
                                        <div class="ct-chart" id="emailsSubscriptionChart"></div>
                                    </div>
                                    <div class="card-content">
                                        <h4 class="title">Listenings</h4>
                                        <p class="category">
                                            <span class="text-success"> <?php echo count($list_luotnghe)?> </span> 
                                        </p>
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
                        <div class="col-md-4">  
                            <a href="admin.php?c=binhluan">
                                <div class="card">
                                    <div class="card-header card-chart" data-background-color="red">
                                        <div class="ct-chart" id="completedTasksChart"></div>
                                    </div>
                                    <div class="card-content">
                                        <h4 class="title">Comments</h4>
                                        <p class="category">
                                            <span class="text-success"> <?php echo count($list_binhluan)?></span> 
                                        </p>
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
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <a href="admin.php?c=baihat">
                                <div class="card card-stats">
                                    <div class="card-header" data-background-color="purple">
                                        <i class="material-icons">queue_music</i>
                                    </div>
                                    <div class="card-content">
                                        <p class="category">Songs</p>
                                        <h3 class="title"><?php echo count($list_baihat)?></h3>
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
                            <a href="admin.php?c=album">
                                <div class="card card-stats">
                                    <div class="card-header" data-background-color="orange">
                                        <i class="material-icons">library_music</i>
                                    </div>
                                    <div class="card-content">
                                        <p class="category">Album</p>
                                        <h3 class="title"><?php echo count($list_album)?></h3>
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
                            <a href="admin.php?c=tacgia">
                                <div class="card card-stats">
                                    <div class="card-header" data-background-color="green">
                                        <i class="material-icons">local_library</i>
                                    </div>
                                    <div class="card-content">
                                        <p class="category">Authors</p>
                                        <h3 class="title"><?php echo count($list_tacgia)?>
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
                            <a href="admin.php?c=casi">
                                <div class="card card-stats">
                                    <div class="card-header" data-background-color="blue">
                                        <i class="material-icons">face</i>
                                    </div>
                                    <div class="card-content">
                                        <p class="category">Singers</p>
                                        <h3 class="title"><?php echo count($list_casi)?></h3>
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
                            <a href="admin.php?c=theloai">
                                <div class="card card-stats">
                                    <div class="card-header" data-background-color="blue">
                                        <i class="material-icons">store</i>
                                    </div>
                                    <div class="card-content">
                                        <p class="category">Types</p>
                                        <h3 class="title"><?php echo count($list_theloai)?></h3>
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
                            <a href="admin.php?c=yeuthich">
                                <div class="card card-stats">
                                    <div class="card-header" data-background-color="red">
                                        <i class="material-icons">favorite</i>
                                    </div>
                                    <div class="card-content">
                                        <p class="category">Favorites</p>
                                        <h3 class="title"><?php echo count($list_yeuthich)?></h3>
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
                            <a href="admin.php?c=playlist">
                                <div class="card card-stats">
                                    <div class="card-header" data-background-color="black">
                                        <i class="material-icons">account_box</i>
                                    </div>
                                    <div class="card-content">
                                        <p class="category">Playlists</p>
                                        <h3 class="title"><?php echo count($list_playlist)?></h3>
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
                            <a href="admin.php?c=chitietplaylist">
                                <div class="card card-stats">
                                    <div class="card-header" data-background-color="orange">
                                        <i class="material-icons">music_note</i>
                                    </div>
                                    <div class="card-content">
                                        <p class="category">Playlist Details</p>
                                        <h3 class="title"><?php echo count($list_chitietplaylist)?></h3>
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
                        <a href="admin.php?c=profile">                        
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
                        </a>
                        </div>
                    </div>
                </div>
            </div>
<?php require_once(PATH_PUBLIC . '/template/admin/footer.php'); ?>                