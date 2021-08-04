
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
                    require_once "../controller/database.php";
                    $database=new Database();
                    $id=$_GET["id"];
                    $select="*";
                    $table = "managers";
                    $where = "Where id = $id";
                    $extention = "";
                    $result = $database->select($select, $table, $where, $extention);
                    $row = mysqli_fetch_assoc($result);
                    ?>
                    <!-- End of Topbar -->

                    <!-- Begin Page Content -->
                    <div class="container-fluid">

                        <!-- Page Heading -->
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h1 class="h3 mb-0 text-gray-800">Edit Manager</h1>
                            
                        </div>

                        <!-- Content Row -->
                        <div class="row"> 
                            
                                <div class="card shadow mb-12" style="width: 100%;">
                                <form action="../controller/editManager.php" method="post">
                                    <!-- Card Header - Accordion -->
                                    <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                                        <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-plus-circle"></i>&nbsp; Edit Manager</h6>
                                    </a>
                                    <!-- Card Content - Collapse -->
                                    <div class="collapse show" id="collapseCardExample">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="form-group row" style="width: 100%;">
                                                    <div class="col-sm-1">
                                                        <lebel>Phone Number:</lebel>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <input type="hidden" class="form-control form-control-user" id="exampleFirstName" name="m_id" value="<?php echo $id ?>">   
                                                        <input type="text" class="form-control form-control-user" id="exampleFirstName" name="pnum" value="<?php echo $row["phone_number"]?>" placeholder="Phone Number">
                                                    </div>
                                                    <div class="col-sm-1">
                                                        <lebel>Parmanent Address:</lebel>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <input type="text" class="form-control form-control-user" id="exampleFirstName" value="<?php echo $row["parmanent_add"]?>" name="padd" placeholder="Parmanent Address">
                                                    </div>
                                                    <div class="col-sm-1">
                                                        <lebel>NID:</lebel>
                                                    </div>
                                                    
                                                    <div class="col-sm-3">
                                                        <input type="text" class="form-control form-control-user" id="exampleFirstName" value="<?php echo $row["nid"]?>" name="nid" placeholder="NID ">
                                                    </div>
                                                    
                                                </div>
                                                <div class="form-group row" style="width: 100%;">
                                                    <div class="col-sm-4">
                                                        
                                                    </div>
                                                    <div class="col-sm-4" style=" text-align:center;">
                                                        <input class="btn btn-success " style=" margin-left: 20px; height: 50px; width: 100px;" value=" Update " type="submit">
                                                    </div>


                                                    <div class="col-sm-4">
                                                        
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
