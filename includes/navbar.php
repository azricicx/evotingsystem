<header class="main-header">
  <nav class="navbar navbar-static-top">
    <div class="container">
      <div class="navbar-header">
        <a href="#" class="navbar-brand"><b>Online Voting</b>System</a>
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
          <i class="fa fa-bars"></i>
        </button>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
        <ul class="nav navbar-nav">
        </ul>
      </div>
      <!-- /.navbar-collapse -->
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
            <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="<?php echo (!empty($voter['photo'])) ? 'images/'.$voter['photo'] : 'images/profile.jpg' ?>" class="user-image" alt="User Image">
                  <span class="hidden-xs"><?php echo 'Welcome'.' '.$voter['firstname'].' '.$voter['lastname']; ?></span>
                </a>
              <ul class="dropdown-menu">
                <li class="user-header">
                <img src="<?php echo (!empty($voter['photo'])) ? 'images/'.$voter['photo'] : 'images/profile.jpg' ?>" class="center" alt="User Image">
                </li>
                <li class="user-footer">
                  <a href="">
                    <span class="hidden-xs"><?php echo 'Name:'.' '.$voter['firstname'].' '.$voter['lastname']; ?></span><br>
                    <span class="hidden-xs"><?php echo 'Course:'.' '.$voter['course']; ?></span><br>
                    <span><?php echo 'Phone:'.' '.$voter['phone']; ?></span><br>
                    <span><?php echo 'Student ID:'.' '.$voter['voters_id']; ?></span><br>
                    <span><?php echo 'Email:'.' '.$voter['email']; ?></span><br>
                    <span><?php echo 'Password:'.' '.$voter['password']; ?></span> 
                  </a>
                </li>
                <li><a href="logout.php"><i class="fa fa-sign-out"></i> LOGOUT</a></li>
              </ul>
            </li>
        </ul>
      </div>
      <!-- /.navbar-custom-menu -->
    </div>
    <!-- /.container-fluid -->
  </nav>
</header>