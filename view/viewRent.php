
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
                            <h1 class="h3 mb-0 text-gray-800">Rent view List</h1>
                            
                        </div>

                        <!-- Content Row -->
                        <div class="row">     

                        <div class="col-sm-12">
                                <div class="card mb-12" style="margin-top: 10px;">
                                    <div class="card-header">

                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                                                <thead style="background-color:gray; color:white;">
                                                    <tr>
                                                        <th>Unit Name</th>
                                                        <th>Renter Name</th>
                                                        <th>Building Name</th>
                                                        <th>Rent</th>
                                                        <th>Electricity Bill</th>
                                                        <th>Gas Bill</th>
                                                        <th>Water Bill</th>
                                                        <th>Utility Bill</th>
                                                        <th>Total Amount</th> 
                                                        <th>Date</th>                                                        
                                                        <th style="text-align: center;">Action</th>

                                                    </tr>
                                                </thead>
                                                <?php
                                                    require_once "../controller/database.php";
                                                    $database=new Database();
                                                    $select="*";
                                                    $table = "rent";
                                                    $where = "";
                                                    $extention = "";
                                                    $result = $database->select($select, $table, $where, $extention);
                                                    
                                                    
                                                ?>
                                                <tbody>
                                                    <?PHP
                                                        while ($row = mysqli_fetch_assoc($result)) {

                                                            $id=$row["id"];

                                                            $target_delete="../controller/editRent.php?st=1&id=".$id;

                                                            $id=$row["unit_id"];
                                                            $select="*";
                                                            $table = "units";
                                                            $where = "Where id=$id";
                                                            $extention = "";
                                                            $result2 = $database->select($select, $table, $where, $extention);
                                                            $row2 = mysqli_fetch_assoc($result2);
                                                            $id2=$row2["building_id"];
                                                            $select="*";
                                                            $table = "buildings";
                                                            $where = "Where id=$id2";
                                                            $extention = "";
                                                            $result4 = $database->select($select, $table, $where, $extention);
                                                            $row4 = mysqli_fetch_assoc($result4);
                                                            $id=$row["renter_id"];
                                                            $select="*";
                                                            $table = "renter";
                                                            $where = "Where id=$id";
                                                            $extention = "";
                                                            $result3 = $database->select($select, $table, $where, $extention);
                                                            $row3 = mysqli_fetch_assoc($result3);
                                                        
                                                            $id=$row3["user_id"];
                                                            $select="*";
                                                            $table = "users";
                                                            $where = "Where id = $id";
                                                            $extention = "";
                                                            $result3 = $database->select($select, $table, $where, $extention);
                                                            $row3 = mysqli_fetch_assoc($result3);
                                                            $total=intval($row["rent"])+intval($row["electricity_bill"])+intval($row["gas_bill"])+intval($row["water_bill"])+intval($row["utilities"]);
                                                           
                                                            
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $row2["unit_name"]?></td>
                                                        <td><?php echo $row3["name"]?></td>
                                                        <td><?php echo $row4["name"]?></td>
                                                        <td><?php echo $row["rent"]?></td>
                                                        <td><?php echo $row["electricity_bill"]?></td> 
                                                        <td><?php echo $row["gas_bill"]?></td> 
                                                        <td><?php echo $row["water_bill"]?></td> 
                                                        <td><?php echo $row["utilities"]?></td> 
                                                        <td><?php echo $total ?></td> 
                                                        <td><?php echo $row["date"]?></td>                                                         
                                                        <td style="text-align: center;"><a href="" class="btn btn-info btn-circle">
                                                                <i class="far fa-edit"></i>
                                                            </a>

                                                            <a href='<?php echo $target_delete ?>' class="btn btn-danger btn-circle">
                                                                <i class="fas fa-trash"></i>
                                                            </a>
                                                        </td>

                                                    </tr>
                                                    <?php
                                                        }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

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
