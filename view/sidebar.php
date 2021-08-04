<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="home.php">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-building"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Bariwala.com </div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="home.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>
      <?php
        if(strcmp($_SESSION["status"],"admin")==0){
      ?>
      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseuser" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-users"></i>
          <span>User</span>
        </a>
        <div id="collapseuser" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header"></h6>
            <a class="collapse-item" href="addUser.php"> <i class="fas fa-user-plus"> Add User</i> </a>
            <a class="collapse-item" href="viewUser.php"><i class="fas fa-eye"> View user</i></a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseRenter" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-user-tie"></i>
          <span>Renter</span>
        </a>
        <div id="collapseRenter" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header"></h6>
            <a class="collapse-item" href="addRenter.php"> <i class="fas fa-plus-circle"> Add Renter </i></a>
            <a class="collapse-item" href="viewRenter.php"><i class="fas fa-eye"> View Renter</i></a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUnit" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-dungeon"></i>
          <span>Units</span>
        </a>
        <div id="collapseUnit" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header"></h6>
            <a class="collapse-item" href="addUnit.php"> <i class="fas fa-plus-circle"> Add Unit</i>  </a>
            <a class="collapse-item" href="viewUnit.php"><i class="fas fa-eye"> View Units</i></a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseRent" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-file-invoice"></i>
          <span>Rents</span>
        </a>
        <div id="collapseRent" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header"></h6>
            <a class="collapse-item" href="addRent.php"> <i class="fas fa-plus-circle"> Add Rent</i>  </a>
            <a class="collapse-item" href="viewRent.php"><i class="fas fa-eye"> View Rent</i></a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsebuilding" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-file-invoice"></i>
          <span>Buildings</span>
        </a>
        <div id="collapsebuilding" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header"></h6>
            <a class="collapse-item" href="addBuilding.php"> <i class="fas fa-plus-circle"> Add Building</i>  </a>
            <a class="collapse-item" href="viewBuilding.php"><i class="fas fa-eye"> View Buildings</i></a>
          </div>
        </div>
      </li>
      <hr class="sidebar-divider">
      <li class="nav-item ">
        <a class="nav-link" href="paymentView.php">
        <i class="fas fa-money-check-alt"></i>
          <span>Payment info</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="manager.php">
        <i class="fas fa-tasks"></i>
          <span>Manager info</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="complainbox.php">
        <i class="fas fa-comments"></i>
          <span>Complain Box</span></a>
      </li>
        <?php
        }
          
        ?>
        <?php
          if(strcmp($_SESSION["status"],"renter")==0){
        ?>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
        <i class="far fa-comments"></i>
        
          <span>Massage</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Massages</h6>
            <a class="collapse-item" href="sendMassage.php"> <i class="fas fa-comment-dots"> Send massages </i> </a>
            <a class="collapse-item" href="viewmassages.php"><i class="fas fa-eye"> View Massages </i></a>
          </div>
        </div>
      </li>
      
      <li class="nav-item active">
        <a class="nav-link" href="paymentInfo.php">
        <i class="fas fa-money-check-alt"></i>
          <span>Payment Info</span></a>
      </li>

        <?php
          }
          if(strcmp($_SESSION["status"],"manager")==0){
        ?>
        <li class="nav-item active">
        <a class="nav-link" href="expense.php">
          <i class="fas fa-money-check-alt"></i>
            <span>Expense</span></a>
        </li>
        <li class="nav-item ">
        <a class="nav-link" href="complainbox2.php">
        <i class="fas fa-comments"></i>
          <span>Complain Box</span></a>
        </li>
        <?php
          }
          
        ?>
      <!-- Nav Item - Utilities Collapse Menu -->


      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>