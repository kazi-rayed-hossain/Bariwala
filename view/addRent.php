
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
                            <h1 class="h3 mb-0 text-gray-800">Add renter</h1>
                            
                        </div>

                        <!-- Content Row -->
                        <div class="row"> 
                        <div class="card shadow mb-12" style="width: 100%;">
                            <?php
                               require_once "../controller/database.php";
                               $database=new Database();
                               $select="*";
                               $table = "renter";
                               $where = "";
                               $extention = "";
                               $result = $database->select($select, $table, $where, $extention);
                              
                                
                            
                            ?>
                                <form action="../controller/rentControl.php" method="post">
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
                                                    <select class="btn btn-primary" style="width: 100%;" name="renter_id">
                                                        <option value="" >Select renter</option>
                                                    <?php
                                                        
                                                        while ($row = mysqli_fetch_assoc($result)) {
                                                        
                                                            $id=$row["user_id"];
                            
                                                            $select="*";
                                                            $table = "users";
                                                            $where = "WHERE id = $id";
                                                            $extention = "";
                                                            $result2 = $database->select($select, $table, $where, $extention);
                                                            $row2 = mysqli_fetch_assoc($result2);

                                                            
                                                    ?>
                                                        <option value="<?php echo $row["id"] ?>"><?php echo $row2["name"]?></option>
                                                    <?php
                                                        }
                                                    ?>
                                                    </select>
                                                </div>
                                                <div class="col-sm-4">
                                                <select class="btn btn-primary" style="width: 100%;" name="unit_id">
                                                        <option value="" >Select unit</option>
                                                    <?php
                                                        
                                                        
                                                            $select="*";
                                                            $table = "units";
                                                            $where = "";
                                                            $extention = "";
                                                            $result = $database->select($select, $table, $where, $extention);
                                                            while ($row = mysqli_fetch_assoc($result)) {
                                                            
                                                    ?>
                                                        <option value="<?php echo $row["id"] ?>"><?php echo $row["unit_name"]?></option>
                                                    <?php
                                                        }
                                                    ?>
                                                </select>
                                                
                                                </div>
                                                    
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control form-control-user" id="exampleFirstName" name="rent" placeholder="Rent">
                                                </div>
                                                    
                                                </div>
                                                <br>
                                                <br>
                                                <div class="card-header" style="margin-top : 20px !important;" >
                                                <h4>Bills</h4>
                                                </div>
                                                <br>
                                                <br>
                                                <div class="form-group row" style="width: 100%;">
                                                    <div class="col-sm-4">
                                                        <input type="text" class="form-control form-control-user" id="exampleFirstName" name="el_bill" placeholder="Electricity Bills">
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <input type="text" class="form-control form-control-user" id="exampleFirstName" name="wa_bill" placeholder="Water Bills">
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <input type="text" class="form-control form-control-user" id="exampleFirstName" name="ga_bill" placeholder="Gas Bills">
                                                    </div>

                                                    
                                                   


                                                </div>
                                                <div class="form-group row" style="width: 100%;">
                                                    <div class="col-sm-4">
                                                        <input type="text" class="form-control form-control-user" id="exampleFirstName" name="U_bill" placeholder="Utility Bills">
                                                    </div>
                                                    <div class="col-sm-1">
                                                        <label> Date : </label>
                                                        
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <input type="date" class="form-control form-control-user" id="exampleFirstName" name="Date" placeholder="Date">
                                                    </div>
                                                    

                                                    <div class="col-sm-4">
                                                        <input class="btn btn-success " style=" margin-left: 20px; height: 50px; width: 100px; " value=" Add" type="submit">
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
