<?php
include'../includes/connection.php';
include'../includes/sidebar.php';

  $query = 'SELECT ID, t.TYPE
            FROM users u
            JOIN type t ON t.TYPE_ID=u.TYPE_ID WHERE ID = '.$_SESSION['MEMBER_ID'].'';
  $result = mysqli_query($db, $query) or die (mysqli_error($db));
  
  while ($row = mysqli_fetch_assoc($result)) {
            $Aa = $row['TYPE'];
                   
if ($Aa=='User'){
?>
  <script type="text/javascript">
    //then it will be redirected
    alert("Restricted Page! You will be redirected to POS");
    window.location = "pos.php";
  </script>
<?php
  }      
}   
  $query = 'SELECT * FROM leaves WHERE id ='.$_GET['id'];
  $result = mysqli_query($db, $query) or die(mysqli_error($db));
    while($row = mysqli_fetch_array($result))
    {   
      $id= $row['id'];
     
      $name= $row['name'];
      $department=$row['department'];
      $leave_type=$row['leave_type'];
      $date=$row['date'];
      $day=$row['day'];
      $sanctioned=$row['sanctioned'];
      $blog=$row['blog'];
    }  
      $id = $_GET['id'];
?>
            
            <center><div class="card shadow mb-4 col-xs-12 col-md-8 border-bottom-primary">
            <div class="card-header py-3">
              <h4 class="m-2 font-weight-bold text-primary">Edit Leaves</h4>
            </div><a  type="button" class="btn btn-primary bg-gradient-primary btn-block" href="leaves.php?"> <i class="fas fa-flip-horizontal fa-fw fa-share"></i> Back </a>
            <div class="card-body">
         
            <form role="form" method="post" action="leaves_edit1.php">
              <input type="hidden" name="id" value="<?php echo $id; ?>" />
             
              <div class="form-group row text-left text-warning">
                <div class="col-sm-3" style="padding-top: 5px;">
                 Name:
                </div>
                <div class="col-sm-9">
                  <input class="form-control" placeholder=" Name" name="name" value="<?php echo $name; ?>" required>
                </div>
              </div>
             <div class="form-group row text-left text-warning">
                <div class="col-sm-3" style="padding-top: 5px;">
                 Company:
                </div>
                <div class="col-sm-9">
                  <input class="form-control" placeholder=" Company" name="department" value="<?php echo $department; ?>" required>
                </div>
              </div>
               <div class="form-group row text-left text-warning">
                <div class="col-sm-3" style="padding-top: 5px;">
                 Leave Type:
                </div>
                <div class="col-sm-9">
                  <input class="form-control" placeholder=" Leave Type" name="leave_type" value="<?php echo $leave_type; ?>" required>
                </div>
              </div>
              <div class="form-group row text-left text-warning">
                <div class="col-sm-3" style="padding-top: 5px;">
                 date :
                </div>
                <div class="col-sm-9">
                  <input class="form-control" placeholder="date " name="date" value="<?php echo $date; ?>" required>
                </div>
              </div>
              <div class="form-group row text-left text-warning">
                <div class="col-sm-3" style="padding-top: 5px;">
                 Day:
                </div>
                <div class="col-sm-9">
                   <input class="form-control" placeholder="Day" name="day" value="<?php echo $day; ?>" required>
                </div>
              </div>
                <div class="form-group row text-left text-warning">
                <div class="col-sm-3" style="padding-top: 5px;">
                 Sanctioned:
                </div>
                <div class="col-sm-9">
                   <input class="form-control" placeholder="Sanctioned" name="sanctioned" value="<?php echo $sanctioned; ?>" required>
                </div>
              </div>
              <div class="form-group row text-left text-warning">
                <div class="col-sm-3" style="padding-top: 5px;">
                 Blog:
                </div>
                <div class="col-sm-9">
                   <input class="form-control" placeholder="Blog" name="blog" value="<?php echo $blog; ?>" required>
                </div>
              </div>

              <hr>

                <button type="submit" class="btn btn-warning btn-block"><i class="fa fa-edit fa-fw"></i>Update</button> 
              </form>  
          </div>
  </div>

<?php
include'../includes/footer.php';
?>