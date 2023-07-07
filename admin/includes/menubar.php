<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo (!empty($user['photo'])) ? '../images/'.$user['photo'] : '../images/profile.jpg'; ?>" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?php echo $user['firstname'].' '.$user['lastname']; ?></p>
        <a><i class="fa fa-circle text-success"></i> Super Admin</a>
      </div>
    </div>
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">DATA FULL REPORT</li>
      <li class=""><a href="adminhome.php"><i class=""></i> <span>Dashboard</span></a></li>
      <li class=""><a href="votes.php"><span class=""></span> <span>Votes</span></a></li>
      <li class="header">MANAGE THE USERS</li>
      <li class=""><a href="voters.php"><i class=""></i> <span>Voters</span></a></li>
      <li class=""><a href="positions.php"><i class=""></i> <span>Positions</span></a></li>
      <li class=""><a href="candidates.php"><i class=""></i> <span>Candidates</span></a></li>
      <li class="header">MODIFY BALLOTS</li>
      <li class=""><a href="ballot.php"><i class=""></i> <span>Ballot Preview</span></a></li>
      <li class=""><a href="#config" data-toggle="modal"><i class=""></i> <span>Election Title</span></a></li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
<?php include 'config_modal.php'; ?>