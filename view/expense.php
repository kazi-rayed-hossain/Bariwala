
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
                    $id=$_SESSION["id"];
                    ?>
                    <!-- End of Topbar -->

                    <!-- Begin Page Content -->
                    <div class="container-fluid">

                        <!-- Page Heading -->
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h1 class="h3 mb-0 text-gray-800">Add Expense</h1>
                            
                        </div>

                        <!-- Content Row -->
                        <div class="row"> 
                        <div class="card shadow mb-12" style="width: 100%;">
                            
                                <form action="../controller/expenseControl.php" method="post">
                                    <!-- Card Header - Accordion -->
                                    <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                                        <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-plus-circle"></i>&nbsp; Add Renter</h6>
                                    </a>
                                    <!-- Card Content - Collapse -->
                                    <div class="collapse show" id="collapseCardExample">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="form-group row" style="width: 100%;">
                                                    <div class="col-sm-4">
                                                        <input type="hidden" class="form-control form-control-user" value="<?php echo $id ?>" id="exampleFirstName" name="uid" >
                                                        <input type="text" class="form-control form-control-user" id="exampleFirstName" name="name" placeholder="Expence Name">
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <input type="text" class="form-control form-control-user" id="exampleFirstName" name="amm" placeholder="Expence Ammount">
                                                    
                                                    </div>
                                                    <div class="col-sm-1">
                                                        <label>Date :</label>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <input type="date" class="form-control form-control-user" id="exampleFirstName" name="date" placeholder="date" required>
                                                    </div>
                                                    
                                                </div>
                                                <div class="form-group row" style="width: 100%;">
                                                    <div class="col-sm-5">
                                                        
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <input class="btn btn-success " style=" margin-left: 20px; height: 50px; width: 100px; " value=" Add" type="submit">
                                                    
                                                    </div>
                                                    
                                                    <div class="col-sm-5">
                                                        
                                                    </div>
                                                    
                                                </div>
                                                
                                                
                                                



                                            </div>
                                        </div>
                                        <?php
                                         require_once"viewCost.php";
                                        ?>
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
