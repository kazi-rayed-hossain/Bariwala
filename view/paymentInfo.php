
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



         
          <div class="row">
          <?php
            $id=$_SESSION["id"];
            
            require_once "../controller/database.php";
            $database=new Database();
            $select="*";
            $table = "renter";
            $where = "Where user_id = $id";
            $extention = "";
            $result = $database->select($select, $table, $where, $extention);
            $row = mysqli_fetch_assoc($result);
            $id=$row["id"];
            $select="*";
            $table = "rent";
            $where = "Where renter_id = $id";
            $extention = "";
            $result = $database->select($select, $table, $where, $extention);
            $row = mysqli_fetch_assoc($result);
            $unit_id=$row["unit_id"];
            $rent_id=$row["id"];
            $e_bill= $row["electricity_bill"];
            $w_bill= $row["water_bill"];
            $g_bill= $row["gas_bill"];
            $u_bill= $row["utilities"];
            $rent= $row["rent"];
            $total=intval($e_bill)+intval($w_bill)+intval($g_bill)+intval($u_bill)+intval($rent);
            $select="*";
            $table = "payment";
            $where = "Where rent_id = $rent_id AND unit_id = $unit_id ";
            $extention = "";
            $result = $database->select($select, $table, $where, $extention);
 
            
              
              
                                                                     
         ?>
            
              <div class="card-body" >  
                <div class="table-responsive">
                    <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                      <thead style="background-color:gray; color:white;"> 
                        <tr style="background-color:gray; color:white;">
                          <th><strong>Date</strong></th>
                          <th><strong>Ammount</strong></th>
                          <th><strong>Transaction Id</strong></th>
                          <th><strong>Status</strong></th>
                        </tr>
                        
                      </thead>                          
                      <tbody>
                       <?php
                         while ($row = mysqli_fetch_assoc($result)) {
                       ?>
                        <tr   >
                          <td> <strong><?php echo $row["date"]?></strong>  </td>
                          <td> <strong><?php echo $total ?></strong></td>
                          <td> <strong><?php echo $row["transection_id"] ?></strong></td>
                          <td> 
                          <?php
                            if($row["status"]=="Not Verified"){
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
                          
                          
                          
                          </td>
                        </tr>
                        <?php
                      }
                    ?>
                        
                      </tbody>
                    </table>
                    
                </div>
            
            </div>
            
              <div class="row" style="width:100%">
              
               <?php
                

                $select="*";
                $table = "units";
                $where = "Where renter_id = $id";
                $extention = "limit 1";
                $result = $database->select($select, $table, $where, $extention);
                $row = mysqli_fetch_assoc($result);
                $name=$_SESSION["name"];
                $b_id=$row["building_id"];

                $select="*";
                $table = "buildings";
                $where = "Where id = $b_id";
                $extention = "";
                $result = $database->select($select, $table, $where, $extention);
                $row2 = mysqli_fetch_assoc($result);   
                $unit_id=$row["id"];
               ?>
                <div class="card-body">  
                  <div class="table-responsive">
                      <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                                                  
                        <tbody>
                          <tr>
                            <th> <strong>Renter Name </strong> </th>
                            <td><?php echo $name ?></td>
                          </tr>
                          <tr>
                            <th> <strong>Unit Name </strong> </th>
                            <td><?php echo $row["unit_name"] ?></td>
                          </tr>
                          <tr>
                            <th> <strong>Building Name </strong></th>
                            <td><?php echo $row2["name"] ?></td>
                          </tr>
                          <tr>
                            <th> <strong> Address </strong> </th>
                            <td><?php echo $row2["address"] ?></td>
                          </tr>

                          
                        </tbody>
                      </table>
                      
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
