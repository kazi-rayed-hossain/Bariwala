                                    <div class="card-body">
                                        <div class="card-header">
                                            <h3>Payment List</h3>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                                                <thead style="background-color:gray; color:white;">
                                                    <tr>
                                                        <th>Renter Name</th>
                                                        <th>Unit Name</th>
                                                        <th>Building Name</th>
                                                        <th>Payable Amount</th>
                                                        <th>Transection ID</th>
                                                        <th>Status</th>                                                    
                                                        <th style="text-align: center;">Action</th>

                                                    </tr>
                                                </thead>
                                                <?php
                                                    require_once "../controller/database.php";
                                                    $database=new Database();
                                                    $select="*";
                                                    $table = "payment";
                                                    $where = "";
                                                    $extention = "";
                                                    $result = $database->select($select, $table, $where, $extention);
                                                    
                                                    
                                                ?>
                                                <tbody>
                                                    <?PHP
                                                        while ($row = mysqli_fetch_assoc($result)) {

                                                            $id_u=$row["id"];
                                                            

                                                            $id=$row["rent_id"];
                                                            $select="*";
                                                            $table = "rent";
                                                            $where = "Where id=$id";
                                                            $extention = "";
                                                            $result2 = $database->select($select, $table, $where, $extention);
                                                            $row2 = mysqli_fetch_assoc($result2);
                                                            $total=intval($row2["rent"])+intval($row2["electricity_bill"])+intval($row2["gas_bill"])+intval($row2["water_bill"])+intval($row2["utilities"]);
                                                            $id=$row2["renter_id"];
                                                            $select="*";
                                                            $table = "renter";
                                                            $where = "Where id=$id";
                                                            $extention = "";
                                                            $result2 = $database->select($select, $table, $where, $extention);
                                                            $row2 = mysqli_fetch_assoc($result2);
                                                            $id=$row2["user_id"];
                                                            $select="*";
                                                            $table = "users";
                                                            $where = "Where id=$id";
                                                            $extention = "";
                                                            $result2 = $database->select($select, $table, $where, $extention);
                                                            $row2 = mysqli_fetch_assoc($result2);

                                                            
                                                            $id=$row["unit_id"];
                                                            $select="*";
                                                            $table = "units";
                                                            $where = "Where id=$id";
                                                            $extention = "";
                                                            $result3 = $database->select($select, $table, $where, $extention);
                                                            $row3 = mysqli_fetch_assoc($result3);
                                                            $u_name=$row3["unit_name"];
                                                            $id=$row3["building_id"];
                                                            $select="*";
                                                            $table = "buildings";
                                                            $where = "Where id = $id";
                                                            $extention = "";
                                                            $result3 = $database->select($select, $table, $where, $extention);
                                                            $row3 = mysqli_fetch_assoc($result3);
                                                            
                                                           
                                                            
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $row2["name"]?></td>
                                                        <td><?php echo $u_name; ?></td>
                                                        <td><?php echo $row3["name"]?></td>
                                                        <td><?php echo $total?></td>
                                                        <td><?php echo $row["transection_id"] ?></td>
                                                        <td><?php echo $row["status"] ?></td>
                                                        <td style="text-align: center;">
                                                            <?php
                                                                if( $row["status"] == "Not Verified" ){
                                                                    $target_update="../controller/paymentControl.php?st=1&id=".$id_u."&fl=1";
                                                            ?>
                                                            <a href="<?php echo $target_update ?>" class="btn btn-success btn-circle">
                                                                <i class="fas fa-check"></i>
                                                            </a>
                                                            <?PHP
                                                                 }else{
                                                                    $target_update="../controller/paymentControl.php?st=1&id=".$id_u."&fl=2";
                                                             ?>
                                                             <a href="<?php echo $target_update ?>" class="btn btn-danger btn-circle">
                                                                <i class="fas fa-times"></i>
                                                            </a>
                                                             
                                                             <?php        
                                                                 }
                                                            ?>

                                                           
                                                        </td>

                                                    </tr>
                                                    <?php
                                                        }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>