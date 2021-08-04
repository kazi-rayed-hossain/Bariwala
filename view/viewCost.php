                                      
                                    <div class="card-body">
                                        <div class="card-header">
                                            <h3>Expense List</h3>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                                                <thead style="background-color:gray; color:white;">
                                                    <tr>
                                                        <th>Expense Name</th>
                                                        <th>Ammount </th>
                                                        <th>Manager Name </th>
                                                        <th>Date</th>                                    
                                                        <th style="text-align: center;">Action</th>

                                                    </tr>
                                                </thead>
                                                <?php
                                                    require_once "../controller/database.php";
                                                    $database=new Database();
                                                    $select="*";
                                                    $table = "expense";
                                                    $where = "";
                                                    $extention = "";
                                                    $result = $database->select($select, $table, $where, $extention);
                                                    
                                                    
                                                ?>
                                                <tbody>
                                                    <?PHP
                                                        while ($row = mysqli_fetch_assoc($result)) {

                                                            $id=$row["id"];

                                                            $target_delete="../controller/editExpense.php?st=1&id=".$id;
                                                            

                                                            $id=$row["manager_id"];
                                                            $select="*";
                                                            $table = "managers";
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
                                                            
                                                        
                                                            


                                                           
                                                            
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $row["name"]?></td>
                                                        <td><?php echo $row["ammount"]?></td>
                                                        <td><?php echo $row2["name"]?></td>
                                                        <td><?php echo $row["date"]?></td>
                                            
                                                        <td style="text-align: center;">

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