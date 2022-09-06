<?php
include'../includes/connection.php';
include'../includes/sidebar.php';
?><?php 

                $query = 'SELECT ID, t.TYPE
                          FROM users u
                          JOIN type t ON t.TYPE_ID=u.TYPE_ID WHERE ID = '.$_SESSION['MEMBER_ID'].'';
                $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
                while ($row = mysqli_fetch_assoc($result)) {
                          $Aa = $row['TYPE'];
                   
if ($Aa=='User'){
           
             ?>    <script type="text/javascript">
                      //then it will be redirected
                      alert("Restricted Page! You will be redirected to POS");
                      window.location = "pos.php";
                  </script>
             <?php   }
                         
           
}   



  $query = 'SELECT * FROM leaves WHERE id ='.$_GET['id'];
  $result = mysqli_query($db, $query) or die(mysqli_error($db));
    while($row = mysqli_fetch_array($result))
    {   
      $id= $row['id'];
     
      $name= $row['name'];
      $department= $row['department'];
      $leave_type= $row['leave_type'];
      $date= $row['date'];
      $day= $row['day'];
      $sanctioned=$row['sanctioned'];
      $blog=$row['blog'];
    }
    $id = $_GET['id'];
?>
            


            <center><div class="card shadow mb-4 col-xs-12 col-md-8 border-bottom-primary">
            <div class="card-header py-3">
              <h4 class="m-2 font-weight-bold text-primary">LeavesDetail</h4>
            </div>
            <a href="leaves.php" type="button" class="btn btn-primary bg-gradient-primary btn-block"> <i class="fas fa-flip-horizontal fa-fw fa-share"></i> Back </a>
            <div class="card-body">
              
                    <div class="form-group row text-left">
                      <div class="col-sm-3 text-primary">
                        <h5>
                          Name<br>
                        </h5>
                      </div>
                      <div class="col-sm-9">
                        <h5>
                          : <?php echo $name; ?> <br>
                        </h5>
                      </div>
                    </div>
                    <div class="form-group row text-left">
                      <div class="col-sm-3 text-primary">
                        <h5>
                        Comapany<br>
                        </h5>
                      </div>
                      <div class="col-sm-9">
                        <h5>
                          : <?php echo $department; ?> <br>
                        </h5>
                      </div>
                    </div>
                    <div class="form-group row text-left">
                      <div class="col-sm-3 text-primary">
                        <h5>
                          Leave Type<br>
                        </h5>
                      </div>
                      <div class="col-sm-9">
                        <h5>
                          : <?php echo $leave_type; ?> <br>
                        </h5>
                      </div>
                    </div>
                     <div class="form-group row text-left">
                      <div class="col-sm-3 text-primary">
                        <h5>
                          Date <br>
                        </h5>
                      </div>
                      <div class="col-sm-9">
                        <h5>
                          : <?php echo $date; ?> <br>
                        </h5>
                      </div>
                    </div>
                     <div class="form-group row text-left">
                      <div class="col-sm-3 text-primary">
                        <h5>
                          Day<br>
                        </h5>
                      </div>
                      <div class="col-sm-9">
                        <h5>
                          : <?php echo $day; ?> <br>
                        </h5>
                      </div>
                    </div>
                     <div class="form-group row text-left">
                      <div class="col-sm-3 text-primary">
                        <h5>
                          Sanctioned<br>
                        </h5>
                      </div>
                      <div class="col-sm-9">
                        <h5>
                          : <?php echo $sanctioned; ?> <br>
                        </h5>
                      </div>
                    </div>
                     <div class="form-group row text-left">
                      <div class="col-sm-3 text-primary">
                        <h5>
                          Blog<br>
                        </h5>
                      </div>
                      <div class="col-sm-9">
                        <h5>
                          : <?php echo $blog; ?> <br>
                        </h5>
                      </div>
                    </div>



                  </div>
                </div>

<?php
include'../includes/footer.php';
?>