                                    <div class="card-body">
                                        <h3>Rent List</h3>
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
                                                        

                                                    </tr>
                                                    <?php
                                                        }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>


                                    
                               
                                    
                                    <div class="card-body">
                                    <h3>Renter List</h3>
                                        <div class="table-responsive">
                                            <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                                                <thead>
                                                    <tr style="background-color:gray; color:white;">
                                                        <th>Name</th>
                                                        <th>Phone Number</th>
                                                        <th>Permanet Address</th>
                                                        <th>NID</th>                                                        
                                                        

                                                    </tr>
                                                </thead>
                                                <?php
                                                    require_once "../controller/database.php";
                                                    $database=new Database();
                                                    $select="*";
                                                    $table = "renter";
                                                    $where = "";
                                                    $extention = "";
                                                    $result = $database->select($select, $table, $where, $extention);
                                                    
                                                    
                                                ?>
                                                <tbody>
                                                    <?PHP
                                                        while ($row = mysqli_fetch_assoc($result)) {

                                                            $id=$row["user_id"];
                                                            $select="*";
                                                            $table = "users";
                                                            $where = "Where id=$id";
                                                            $extention = "";
                                                            $result2 = $database->select($select, $table, $where, $extention);
                                                            $row2 = mysqli_fetch_assoc($result2);
                                                            $id=$row["id"];
                                                            $target_delete="../controller/editRenter.php?st=1&id=".$id;
                                                            
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $row2["name"]?></td>
                                                        <td><?php echo $row["phone_number"]?></td>
                                                        <td><?php echo $row["permanent_add"]?></td>
                                                        <td><?php echo $row["Nid"]?></td>                                                        
                                                       

                                                    </tr>
                                                    <?php
                                                        }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                

                                                

                       