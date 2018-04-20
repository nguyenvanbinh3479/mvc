<?php if ( ! defined('PATH_PUBLIC')) die ('Bad requested!');
    require_once(PATH_PUBLIC . '/template/admin/header.php');
?>
<body>
    <div class="wrapper">
        <div class="sidebar" data-color="red" data-image="public/img/sidebar-2.jpg">
            <div class="logo">
                <a href="index.php" class="simple-text">
                    M.S.C - Universe
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="active">
                        <a href="index.php">
                            <i class="material-icons">home</i>
                            <p>Home</p>
                        </a>
                    </li>
                    <li>
                        <a href="./user.html">
                            <i class="material-icons">person</i>
                            <p>User Profile</p>
                        </a>
                    </li>
                    <li>
                        <a href="./table.html">
                            <i class="material-icons">content_paste</i>
                            <p>Table List</p>
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
                        <a class="navbar-brand" href="index.php"> Home </a>
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
                                        <a href="notifications.html">Mike John responded to your email</a>
                                    </li>
                                    <li>
                                        <a href="notifications.html">You have 5 new tasks</a>
                                    </li>
                                    <li>
                                        <a href="notifications.html">You're now friend with Andrew</a>
                                    </li>
                                    <li>
                                        <a href="notifications.html">Another Notification</a>
                                    </li>
                                    <li>
                                        <a href="notifications.html">Another One</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="user.html" class="dropdown-toggle" data-toggle="dropdown">
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
                      <h3>Danh sach yeuthich</h3>
                  </div>
                  <table class="table">
                      <thead>
                        <tr>
                          <th>STT</th>
                          <th>baihat</th>
                          <th>user</th>
                          <th>Edit</th>
                          <th>Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php foreach ($list_yeuthich as $yeuthich) { ?>    
                        <tr>
                          <td><?php echo increment_once($index); ?></td>
                          <td><?php echo $yeuthich->baihat_id; ?></td>
                          <td><?php echo $yeuthich->user_id; ?></td>
                          <td><a href="admin.php?c=yeuthich&a=edit&id=<?php echo $yeuthich->baihat_id; ?>">Edit</a></td>
                          <td><a href="admin.php?c=yeuthich&a=delete&id=<?php echo $yeuthich->baihat_id; ?>">Delete</a></td>
                        </tr>
                      <?php } ?>
                      </tbody>
                  </table>
<?php require_once(PATH_PUBLIC . '/template/admin/footer.php'); ?>