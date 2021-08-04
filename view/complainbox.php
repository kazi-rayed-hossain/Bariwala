
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
                            <h1 class="h3 mb-0 text-gray-800">Massages</h1>
                            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                        </div>

                        <!-- Content Row -->
                        
                        <?php
                                require_once "../controller/database.php";
                                $database=new Database();
                                $select="*";
                                $table="complain_box";
                                $where="";
                                
                                $result=$database->select($select,$table,$where);
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $id2=$row["id"];
                                    
                                    $id=$row["user_id"];
                                    $select="*";
                                    $table="users";
                                    $where="WHERE id = $id";
                                    
                                    $result2=$database->select($select,$table,$where);
                                    $row2 = mysqli_fetch_assoc($result2);


                                ?>
                        <div class="row">
                            <div class="card-body"> 
                                <div class="row">
                                    <div class="col-md-10">   
                                        <?php echo $row["complain"] ?>
                                    </div>    
                                    <div class="col-md-2">   
                                        <strong> Sender: </strong> <?php echo $row2["name"] ?>
                                    </div>     

                                </div>  
                                <div class="row">
                                    <div class="col-md-10">   
                                      
                                    </div>    
                                    <div class="col-md-2">
                                    <?php
                                         if( $row["status"] == "unseen" ){
                                            $target_update="../controller/editMassage.php?id=".$id2."&fl=1";
                                    ?>
                                    <a href="<?php echo $target_update ?>" class="btn btn-success ">
                                        <i class="fas fa-check"> Mark as read </i>
                                    </a>
                                    <?PHP
                                        }else{
                                            $target_update="../controller/editMassage.php?id=".$id2."&fl=2";
                                    ?>
                                    <a href="<?php echo $target_update ?>" class="btn btn-danger ">
                                         <i class="fas fa-times"> Mark as unread </i>
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
