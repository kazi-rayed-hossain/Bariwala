
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
                        <div class="row"> 
                            
                                <div class="card shadow mb-12" style="width: 100%;">
                                <form action="../controller/massageControl.php" method="post">
                                    <!-- Card Header - Accordion -->
                                    <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                                        <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-plus-circle"></i>&nbsp; Add User</h6>
                                    </a>
                                    <!-- Card Content - Collapse -->
                                    <div class="collapse show" id="collapseCardExample">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="form-group row" style="width: 100%; ">
                                                    <div class="col-sm-12">
                                                        <input type="text" class="form-control form-control-user" id="exampleFirstName" name="massage" placeholder="Type your masssage here" style="width: 100%; height: 150px; ">
                                                    </div>
                                                    
                                                    
                                                    
                                                    
                                                </div>
                                                <div class="form-group row" style="width: 100%;">
                                                    <div class="col-sm-4">
                                                        
                                                    </div>
                                                    
                                                    <div class="col-sm-4">
                                                        
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <input class="btn btn-success " style=" margin-left: 20px; height: 50px; width: 100px; float:right; " value=" send" type="submit">
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
