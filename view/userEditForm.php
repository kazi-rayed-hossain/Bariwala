
<!DOCTYPE html>
<html lang="en">

    <?php
    require_once "header.php";
    ?>

    <body id="page-top">

        <!-- Page Wrapper -->
        <div id="wrapper">

            <!-- Sidebar -->
            <?php
            require_once "sidebar.php";
            ?>
            <!-- End of Sidebar -->

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">

                <!-- Main Content -->
                <div id="content">

                    <!-- Topbar -->
                    <?php
                    require_once "topbar.php";
                    $id=$_GET["id"];
                    
                    require_once "../controller/database.php";
                    $database=new Database();
                    $select="*";
                    $table = "users";
                    $where = "Where id=$id";
                    $extention = "";
                    $result = $database->select($select, $table, $where, $extention);
                    $row = mysqli_fetch_assoc($result);
                    
                    ?>
                    <!-- End of Topbar -->

                    <!-- Begin Page Content -->
                    <div class="container-fluid">

                        <!-- Page Heading -->
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h1 class="h3 mb-0 text-gray-800">Add user</h1>
                            
                        </div>

                        <!-- Content Row -->
                        <div class="row"> 
                            
                                <div class="card shadow mb-12" style="width: 100%;">
                                <form action="../controller/editUser.php" method="post">
                                    <!-- Card Header - Accordion -->
                                    <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                                        <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-plus-circle"></i>&nbsp; Add User</h6>
                                    </a>
                                    <!-- Card Content - Collapse -->
                                    <div class="collapse show" id="collapseCardExample">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="form-group row" style="width: 100%;">
                                                    <div class="col-sm-4">
                                                        <input type="hidden" class="form-control form-control-user" id="exampleFirstName" name="id" value="<?php echo $row["id"];?>" placeholder="Name">
                                                        <input type="text" class="form-control form-control-user" id="exampleFirstName" name="name" value="<?php echo $row["name"];?>" placeholder="Name">
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <input type="text" class="form-control form-control-user" id="exampleFirstName" name="uname" value="<?php echo $row["username"];?>" placeholder="User Name">
                                                    </div>
                                                    
                                                    <div class="col-sm-4">
                                                        <input type="password" class="form-control form-control-user" id="exampleFirstName" name="pass" placeholder="Password " required>
                                                    </div>
                                                    
                                                </div>
                                                <div class="form-group row" style="width: 100%;">
                                                    <div class="col-sm-4">
                                                        <input type="email" class="form-control form-control-user" id="exampleFirstName" name="email" value="<?php echo $row["email"];?>" placeholder="Email address ">
                                                    </div>
                                                    
                                                    <div class="col-sm-4">
                                                        <select class="btn btn-primary dropdown-toggle" style="width: 100%; text-align: center"  name="status" required>
                                                            <option value="">Select Role</option>
                                                            <option value="admin">Owner</option>
                                                            <option value="manager">Manager</option>
                                                            <option value="renter">Renter</option>


                                                        </select>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <input class="btn btn-success " style=" margin-left: 20px; height: 50px; width: 100px; " value=" Update " type="submit">
                                                    </div>


                                                </div>
                                                



                                            </div>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            

                        </div>

                        <!-- Content Row -->



                        <!-- Content Row -->

                    </div>
                    <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->

                <!-- Footer -->
                <?php
                require_once "footer.php"
                ?>

                </body>

                </html>
