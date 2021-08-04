
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



          <?php
            if(strcmp($_SESSION["status"],"admin")==0){
              require_once "viewCost.php";
              require_once "paymentList.php";
              
          ?>

          <!-- Content Row -->
       
              <!-- rentar r dash board r kaaj -->
          <?php
              
            }elseif(strcmp($_SESSION["status"],"renter")==0){
                          
          ?>
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

 
            while ($row = mysqli_fetch_assoc($result)) {
              $rent_id=$row["id"];
              $e_bill= $row["electricity_bill"];
              $w_bill= $row["water_bill"];
              $g_bill= $row["gas_bill"];
              $u_bill= $row["utilities"];
              $rent= $row["rent"];
              $extra=$row["extra"];
              $date=$row["date"];
              $total=intval($e_bill)+intval($w_bill)+intval($g_bill)+intval($u_bill)+intval($rent)+intval($extra);
              
                                                                     
         ?>
            <div class="col-md-7">
              <div class="card-body" >  
              <strong>
                <?php
                  echo "Date  : ";
                  echo $date;
                
                  
                ?>
              </strong>
                <div class="table-responsive">
                    <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                      <thead style="background-color:gray; color:white;"> 
                        <tr>
                          <th><strong>Biil Name</strong></th>
                          <th><strong>Ammount</strong></th>
                        </tr>
                        
                      </thead>                          
                      <tbody>
                        <tr>
                          <td> <strong>Rent</strong></td>
                          <td><?php echo $rent ?></td>
                        </tr>
                        <tr>
                          <td> <strong>Electicity Bill</strong></td>
                          <td><?php echo $e_bill ?></td>
                        </tr>
                        <tr>
                          <td> <strong>Gas Bil</strong></td>
                          <td><?php echo $g_bill ?></td>
                        </tr>
                        <tr>
                          <td> <strong>Water Bill</strong></td>
                          <td><?php echo $w_bill ?></td>
                        </tr>
                        <tr>
                          <td> <strong>Utilities</strong> </td>
                          <td><?php echo $u_bill ?></td>
                        </tr>
                        <tr>
                          <td> <strong>Extras</strong> </td>
                          <td><?php echo $extra ?></td>
                        </tr>
                        <tr  style="background-color:gray; color:white;" >
                          <td> <strong Bill>Total Bill</strong>  </td>
                          <td> <strong><?php echo $total ?></strong></td>
                        </tr>

                        
                      </tbody>
                    </table>
                    <?php
                      }
                    ?>
                </div>
            </div>
            </div>
            <div class="col-md-5">
              <div class="row">
              
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
            <div class="row" style="margin-top:20px;">
              <div class="col-md-6">
                <button class="btn btn-primary" style="margin-left:10px; ">Download as Pdf</button>
              </div>
              <div class="col-md-6">
              <a class="btn btn-info" href="#" data-toggle="modal" data-target="#paymentmodel">
                  Pay Bill 
                </a>
              </div>
            </div>



                
          </div>
          </div>
          
          <?php
            require_once "addGarage.php";
          
            }else{
              require_once "managerShow.php";

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


        <div class="modal fade" id="paymentmodel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Please Enter Transection Id to varify </h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>
              <form action="../controller/paymentControl.php" method="post">
                <div class="modal-body">
                  <div class="row">
                    <div class="col-sm-2">
                      <img src="../images/bkash.svg" alt="Bkash" width="70" height="70" style="padding-bottom:10px">  
                    </div>
                    <div class="col-sm-10" style="padding-top:20px;" >
                       Bkash Number (personal) : 017000000000
                    </div>
                  </div>
                
                  <div class="form-group row" style="width: 100%;">
                    <div class="col-sm-8">
                      <input type="hidden" class="form-control form-control-user" id="exampleFirstName" value="<?php echo $rent_id ?>" name="r_id" >
                      <input type="hidden" class="form-control form-control-user" id="exampleFirstName" value="<?php echo $unit_id ?>" name="unit_id" >
                    </div>
                    <input type="text" class="form-control form-control-user" id="exampleFirstName" name="t_id" placeholder="Transection ID">
                  
                  </div>
                  <div class="form-group row" style="width: 100%;">
                    <div class="col-sm-4">
                      
                    </div>
                    <div class="col-sm-5">
                      
                  </div>
                    <div class="col-sm-3">
                    
                    </div>
                  
                  </div>
                
              
                </div>
                <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                  <input class="btn btn-success " style=" margin-left: 20px; height: 40px; width: 100px; " value=" submit " type="submit">
                </div>
              </form>
            </div>
          </div>
        </div>

</body>

</html>
