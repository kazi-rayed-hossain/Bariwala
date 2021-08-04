
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
                    require_once "topbar.php"
                    ?>
                    <!-- End of Topbar -->

                    <!-- Begin Page Content -->
                    <div class="container-fluid">

                        <!-- Page Heading -->
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                        </div>

                        <!-- Content Row -->
                         
                            <?php
                                require_once "../controller/database.php";
                                $id=$_SESSION['id'];
                                $select="*";
                                $table="complain_box";
                                $where="where user_id=$id";
                                $database=new Database();
                                $result=$database->select($select,$table,$where);
                                while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                        <div class="row">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-10">
                                        <?php echo $row["complain"] ?>
                                    </div>
                                    <div class="col-sm-2">
                                        <?php
                                            if($row["status"]=="unseen"){
                                                ?>
                                                <a href="" class="btn btn-danger btn-circle">
                                                    <i class="fas fa-times"> </i>
                                                </a>
                                                
                                        <?php                                            
                                            }else{
                                        ?>
                                            <a href="" class="btn btn-success btn-circle">
                                                <i class="fas fa-check">  </i>
                                            </a>
                                        <?php                                            
                                            }
                                        ?>
                                    </div>

                                </div>
                                
                                
                            </div>
                            </div>
                            <?php
                                }
                            ?>                           
                        

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
