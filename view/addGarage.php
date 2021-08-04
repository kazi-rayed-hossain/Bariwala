                                <form action="../controller/extracontrol.php" method="post">
                                    <!-- Card Header - Accordion -->
                                    <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                                        <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-plus-circle"></i>&nbsp; </h6>
                                    </a>
                                    <!-- Card Content - Collapse -->
                                    <div class="collapse show" id="collapseCardExample">
                                        <div class="card-body">
                                            <div class="card-header" style="margin-bottom: 20px !important;" >
                                                <h4>Add Garage</h4>
                                            </div>
                                            <input type="hidden" name="id" value="<?php echo $rent_id?>">
                                            <input type="hidden" name="flag" value="1">
                                            
                                            <div class="form-group row" style="width: 100%;">
                                                <div class="col-sm-2">
                                                    <strong>Enter Month for renting Garage :</strong>
                                                </div>
                                                <div class="col-sm-4">
                                                     <input type="text" class="form-control form-control-user" id="exampleFirstName" name="garage" placeholder="Enter Month(s)">
                                                </div>
                                                
                                                    
                                                <div class="col-sm-3">
                                                    <strong>Enter Starting  month for renting Garage :</strong>
                                                </div>
                                                <div class="col-sm-3">
                                                    <input type="date" class="form-control form-control-user" id="exampleFirstName" name="date_g" placeholder="Enter Month">
                                                </div>
                                                    
                                            </div>
                                            <div class="form-group row" style="width: 100%; text-align:center;">
                                                <div class= "col-sm-10" style="width: 100%; text-align:center;" >
                                                     <strong>Rent for per month 5000 BDT</strong>
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
                                </form>
                                <br>
                                <br>
                                <br>
                                <form action="../controller/extracontrol.php" method="post">
                                    <!-- Card Header - Accordion -->
                                    <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                                        <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-plus-circle"></i>&nbsp; </h6>
                                    </a>
                                    <!-- Card Content - Collapse -->
                                    <div class="collapse show" id="collapseCardExample">
                                        <div class="card-body">
                                            <div class="card-header" style="margin-bottom: 20px !important;" >
                                                <h4>Add Party Room</h4>
                                            </div>
                                            
                                            <div class="form-group row" style="width: 100%;">
                                                <div class="col-sm-2">
                                                    <input type="hidden" name="flag" value="2">
                                                    <input type="hidden" name="id" value="<?php echo $rent_id?>">
                                                </div>
                                                <div class="col-sm-4">
                                                    <strong>Enter Month for renting Party room :</strong>
                                                </div>
                                                
                                                    
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control form-control-user" id="exampleFirstName" name="proom" placeholder="Enter Day(s)">
                                                </div>
                                                <div class="col-sm-2">
                                                    
                                                </div>
                                                    
                                            </div>
                                            <div class="form-group row" style="width: 100%; text-align:center;">
                                                <div class= "col-sm-10" style="width: 100%; text-align:center;" >
                                                     <strong>Rent for per day 500 BDT</strong>
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
                                </form>