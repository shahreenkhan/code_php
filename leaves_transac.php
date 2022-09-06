<?php
include'../includes/connection.php';
?>
          <!-- Page Content -->
          <div class="col-lg-12">
            <?php
             
              $name = $_POST['name'];
              $department = $_POST['department'];
              $leave_type = $_POST['leave_type'];
              $date = $_POST['date'];
              $day = $_POST['day'];
              $blog = $_POST['blog'];
        
              switch($_GET['action']){
                case 'add':     
                    $query = "INSERT INTO leaves
                              ( name,department,leave_type,date, day,blog)
                              VALUES ('$name','$department','$leave_type','$date','$day','$blog')";
                    mysqli_query($db,$query)or die ('Error in updating location in Database');

                
                    
                break;
              }
            ?>
              <script type="text/javascript">window.location = "leaves.php";</script>
          </div>

<?php
include'../includes/footer.php';
?>