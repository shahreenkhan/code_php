<!-- Employee select and script -->
<?php
$sqlforjob = "SELECT DISTINCT JOB_TITLE, JOB_ID FROM job order by JOB_ID asc";
$result = mysqli_query($db, $sqlforjob) or die ("Bad SQL: $sqlforjob");

$job = "<select class='form-control' name='jobs' required>
        <option value='' disabled selected hidden>Select Job</option>";
  while ($row = mysqli_fetch_assoc($result)) {
    $job .= "<option value='".$row['JOB_ID']."'>".$row['JOB_TITLE']."</option>";
  }

$job .= "</select>";
?>
<script>  
window.onload = function() {  

  // ---------------
  // basic usage
  // ---------------
  var $ = new City();
  $.showProvinces("#province");
  $.showCities("#city");

  // ------------------
  // additional methods 
  // -------------------

  // will return all provinces 
  console.log($.getProvinces());
  
  // will return all cities 
  console.log($.getAllCities());
  
  // will return all cities under specific province (e.g Batangas)
  console.log($.getCities("Batangas")); 
  
}
</script>
<!-- end of Employee select and script -->

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body"><?php echo  $_SESSION['FIRST_NAME']; ?> are you sure do you want to logout?</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Customer Modal-->
  <div class="modal fade" id="customerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Customer</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <form role="form" method="post" action="cust_transac.php?action=add">
            <div class="form-group">
              <input class="form-control" placeholder="First Name" name="firstname" required>
            </div>
            <div class="form-group">
              <input class="form-control" placeholder="Last Name" name="lastname" required>
            </div>
            <div class="form-group">
              <input class="form-control" placeholder="Phone Number" name="phonenumber" required>
            </div>
            <hr>
            <button type="submit" class="btn btn-success"><i class="fa fa-check fa-fw"></i>Save</button>
            <button type="reset" class="btn btn-danger"><i class="fa fa-times fa-fw"></i>Reset</button>
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>      
          </form>  
        </div>
      </div>
    </div>
  </div>
  <!-- Customer Modal-->
  <div class="modal fade" id="poscustomerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Customer</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <form role="form" method="post" action="cust_pos_trans.php?action=add">
            <div class="form-group">
              <input class="form-control" placeholder="First Name" name="firstname" required>
            </div>
            <div class="form-group">
              <input class="form-control" placeholder="Last Name" name="lastname" required>
            </div>
            <div class="form-group">
              <input class="form-control" placeholder="Phone Number" name="phonenumber" required>
            </div>
            <hr>
            <button type="submit" class="btn btn-success"><i class="fa fa-check fa-fw"></i>Save</button>
            <button type="reset" class="btn btn-danger"><i class="fa fa-times fa-fw"></i>Reset</button>
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>      
          </form>  
        </div>
      </div>
    </div>
  </div>

<!-- Attendance Modal-->
  <div class="modal fade" id="attendanceModal" tabindex="1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Attendance</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <form role="form" method="post" action="atten_transac.php?action=add">
            <div class="form-group">
               <label for="name">Name :</label>
              <input class="form-control" placeholder="Name" name="name" required>
            </div>
            <div class="form-group">
               <label for="name">Date :</label>
              <input type="date" class="form-control" id="date" name="date" placeholder="Date" required>
            </div>
            <div class="form-group">
               <label for="name">Arrival Time :</label>
             <input type="time" class="form-control" id="appt" name="arrival_time" placeholder="Arrival_time" required>
  
            </div>
            <div class="form-group">
               <label for="name">Departure Time :</label>
             <input type="time" class="form-control" id="appt" name="departure_time" placeholder="departure_time" required>
  
            </div>

            <hr>
            <button type="submit" class="btn btn-success"><i class="fa fa-check fa-fw"></i>Save</button>
            <button type="reset" class="btn btn-danger"><i class="fa fa-times fa-fw"></i>Reset</button>
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>      
          </form>  
        </div>
      </div>
    </div>
  </div>


  <!-- Department Modal-->
  <div class="modal fade" id="departmentModal" tabindex="1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Department</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <form role="form" method="post" action="depart_transac.php?action=add">

            <div class="form-group">
              <input class="form-control" placeholder="Name" name="name" required>
            </div>
            
            <div class="form-group">
             <input type="role" class="form-control" id="role" name="role" placeholder="Role" required>
             </div>
           
            <div class="form-group">
             <input type="department" class="form-control" id="appt" name="department" placeholder="Company" required>  </div>

            <hr>
            <button type="submit" class="btn btn-success"><i class="fa fa-check fa-fw"></i>Save</button>
            <button type="reset" class="btn btn-danger"><i class="fa fa-times fa-fw"></i>Reset</button>
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>      
          </form>  
        </div>
      </div>
    </div>
  </div>





  <!-- Payroll Modal-->
 

  <div class="modal fade" id="payrollModal" tabindex="1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Payroll</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <form role="form" method="post" action="payroll_transac.php?action=add">
            <div class="form-group">
             
              <input type="" class="form-control" id="items" placeholder="Perticular" name="items" required>
            </div>
            <div class="form-group">
               
              <input type="name" class="form-control" id="name" name="name" placeholder="Name" required>
            </div>
            <div class="form-group">
            
             <input type="text" class="form-control" id="per_year" name="per_month" placeholder="Per Month RS." required>
  
            </div>
            <div class="form-group">
             <input type="text" class="form-control" id="per_month" name="per_year" placeholder="Per Year RS" required>
  
            </div>

            <hr>
            <button type="submit" class="btn btn-success"><i class="fa fa-check fa-fw"></i>Save</button>
            <button type="reset" class="btn btn-danger"><i class="fa fa-times fa-fw"></i>Reset</button>
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>      
          </form>  
        </div>
      </div>
    </div>
  </div>


  <!-- Leaves Modal-->
  <div class="modal fade" id="leavesModal" tabindex="1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Leaves</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <form role="form" method="post" action="leaves_transac.php?action=add">
           
            <div class="form-group">
               
              <input type="name" class="form-control" id="name" name="name" placeholder="Name" required>
            </div>

<div class="form-group">
               
              <input type="department" class="form-control" id="department" name="department" placeholder="Company" required>
            </div>

            <div class="form-group">
             <select name="leave_type" class="form-control" id="leave_type">
              <option value="leave_type">Leave Type</option>
              <option value="Holiday">Holiday</option>
              <option value="weekend">Weekend</option>
              <option value="national_holiday">National Holiday</option>
              <option value="festival">Festival</option>
              <option value="privilege_leave">Privilege Leave</option>
              <option value="casual_leave">Casual Leave</option>
            </select>
  
            </div>
            <div class="form-group">
             <input type="text" class="form-control" id="date" name="date" placeholder="Date" required>
               </div>
            

             <div class="form-group">
             <select type="text" class="form-control" id="day" name="day" >
              <option value="day_type">Type of day</option>
              <option value="full_day">Full Day</option>
              <option value="frist_half">First Half(Half Day)</option>
              <option value="second_half">Second Half( Half Day)</option>
              <option value="short_break">Short Break</option>
            </select>
             </div>
              <div class="form-group">
             <input type="text" class="form-control" id="sanctioned" name="sanctioned" placeholder="Sanctioned By...!" required>
               </div>


  <div class="form-group">
             <input type="text" class="form-control" id="blog" name="blog" placeholder="Write any thing you want!" required>
               </div>

  
           

            <hr>
            <button type="submit" class="btn btn-success"><i class="fa fa-check fa-fw"></i>Save</button>
            <button type="reset" class="btn btn-danger"><i class="fa fa-times fa-fw"></i>Reset</button>
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>      
          </form>  
        </div>
      </div>
    </div>
  </div>


 <!-- Quotation Modal-->
  <div class="modal fade" id="quotationModal" tabindex="1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Quotation</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <form role="form" method="post" action="quotation_transac.php?action=add">

            <div class="form-group">
              <input type="text" class="form-control" id="invoice_number" placeholder="Invoice Number" name="invoice_number" required>
            </div>

            <div class="form-group">   
              <input type="text" class="form-control" id="po_date" name="po_date" placeholder="product Order Date" required>
            </div>

            <div class="form-group">
             <input type="text" class="form-control" id="invoice_gen_date" name="invoice_gen_date" placeholder="Invoice Generate date." required>
              </div>  
              <div class="form-group">
             <input type="text" class="form-control" id="invoice_gen_time" name="invoice_gen_time" placeholder="Invoice Generate Time." required>
              </div>  

            <div class="form-group">
             <input type="text" class="form-control" id="supply_place" name="supply_place" placeholder="Supply Place" required>
             </div>

              <div class="form-group">
             <input type="text" class="form-control" id="bill_to" name="bill_to" placeholder="Bill To" required>
             </div>

              <div class="form-group">
             <input type="text" class="form-control" id="address" name="address" placeholder="Address" required>
             </div>

              <div class="form-group">
             <input type="text" class="form-control" id="number" name="number" placeholder="Number" required>
             </div>

              <div class="form-group">
             <input type="text" class="form-control" id="gstin_number" name="gstin_number" placeholder="GSTN Number" required>
             </div>


<div class="form-group">
             <input type="text" class="form-control" id="state" name="state" placeholder="State" required>
              </div>  

            <div class="form-group">
             <input type="text" class="form-control" id="city" name="city" placeholder="City" required>
             </div>

              <div class="form-group">
             <input type="text" class="form-control" id="ship_to" name="ship_to" placeholder="Ship To" required>
             </div>

              <div class="form-group">
             <input type="text" class="form-control" id="item_name" name="item_name" placeholder="Item Name" required>
             </div>

              <div class="form-group">
             <input type="text" class="form-control" id="hsn_sac" name="hsn_sac" placeholder="HSN" required>
             </div>

              <div class="form-group">
             <input type="text" class="form-control" id="batch_number" name="batch_number" placeholder="Batch Number" required>
             </div>
             <div class="form-group">
             <input type="text" class="form-control" id="exp_date" name="exp_date" placeholder="Expire Date." required>
              </div>  

            <div class="form-group">
             <input type="text" class="form-control" id="mgf_date" name="mgf_date" placeholder=" manufacture Date" required>
             </div>

              <div class="form-group">
             <input type="text" class="form-control" id="mrp" name="mrp" placeholder=" MRP" required>
             </div>

              <div class="form-group">
             <input type="text" class="form-control" id="quantity" name="quantity" placeholder="Quantity" required>
             </div>

              <div class="form-group">
             <input type="text" class="form-control" id="unit" name="unit" placeholder="Unit" required>
             </div>

              <div class="form-group">
             <input type="text" class="form-control" id="price_unit" name="price_unit" placeholder=" Price Unit" required>
             </div>

               <div class="form-group">
             <input type="text" class="form-control" id="gst" name="gst" placeholder="GST" required>
             </div>
             <div class="form-group">
             <input type="text" class="form-control" id="amount" name="amount" placeholder="  Amount." required>
              </div>  

            <div class="form-group">
             <input type="text" class="form-control" id="taxable_amount" name="taxable_amount" placeholder=" Taxable Amount " required>
             </div>

              <div class="form-group">
             <input type="text" class="form-control" id="cgst" name="cgst" placeholder=" CGST" required>
             </div>

              <div class="form-group">
             <input type="text" class="form-control" id="sgst" name="sgst" placeholder="SGST" required>
             </div>

              <div class="form-group">
             <input type="text" class="form-control" id="total_tax_amount" name="total_tax_amount" placeholder="Total Tax Amount" required>
             </div>

              <div class="form-group">
             <input type="text" class="form-control" id="total_invoice_amount" name="total_invoice_amount" placeholder=" Total Invoice Amount" required>
             </div>


            <hr>
            <button type="submit" class="btn btn-success"><i class="fa fa-check fa-fw"></i>Save</button>
            <button type="reset" class="btn btn-danger"><i class="fa fa-times fa-fw"></i>Reset</button>
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>      
          </form>  
        </div>
      </div>
    </div>
  </div>



 <!-- Performer invoice Modal-->
  <div class="modal fade" id="performer_invoiceModal" tabindex="1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Performer Invoice</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <form role="form" method="post" action="performer_invoice_transac.php?action=add">

            <div class="form-group">
              <input type="text" class="form-control" id="invoice_number" placeholder="Invoice Number" name="invoice_number" required>
            </div>

            <div class="form-group">   
              <input type="text" class="form-control" id="po_date" name="po_date" placeholder="product Order Date" required>
            </div>

            <div class="form-group">
             <input type="text" class="form-control" id="invoice_gen_date" name="invoice_gen_date" placeholder="Invoice Generate date." required>
              </div>  
              <div class="form-group">
             <input type="text" class="form-control" id="invoice_gen_time" name="invoice_gen_time" placeholder="Invoice Generate Time." required>
              </div>  

            <div class="form-group">
             <input type="text" class="form-control" id="supply_place" name="supply_place" placeholder="Supply Place" required>
             </div>

              <div class="form-group">
             <input type="text" class="form-control" id="bill_to" name="bill_to" placeholder="Bill To" required>
             </div>

              <div class="form-group">
             <input type="text" class="form-control" id="address" name="address" placeholder="Address" required>
             </div>

              <div class="form-group">
             <input type="text" class="form-control" id="number" name="number" placeholder="Number" required>
             </div>

              <div class="form-group">
             <input type="text" class="form-control" id="gstin_number" name="gstin_number" placeholder="GSTN Number" required>
             </div>


<div class="form-group">
             <input type="text" class="form-control" id="state" name="state" placeholder="State" required>
              </div>  

            <div class="form-group">
             <input type="text" class="form-control" id="city" name="city" placeholder="City" required>
             </div>

              <div class="form-group">
             <input type="text" class="form-control" id="ship_to" name="ship_to" placeholder="Ship To"  required>
             </div>

              <div class="form-group">
             <input type="text" class="form-control" id="item_name" name="item_name" placeholder="Item Name"  required>
             </div>

              <div class="form-group">
             <input type="text" class="form-control" id="hsn_sac" name="hsn_sac" placeholder="HSN"  required>
             </div>

              <div class="form-group">
             <input type="text" class="form-control" id="batch_number" name="batch_number" placeholder="Batch Number"  required>
             </div>
             <div class="form-group">
             <input type="text" class="form-control" id="exp_date" name="exp_date" placeholder="Expire Date."  required>
              </div>  

            <div class="form-group">
             <input type="text" class="form-control" id="mgf_date" name="mgf_date" placeholder=" manufacture Date"  required>
             </div>

              <div class="form-group">
             <input type="text" class="form-control" id="mrp" name="mrp" placeholder=" MRP"  required>
             </div>

              <div class="form-group">
             <input type="text" class="form-control" id="quantity" name="quantity" placeholder="Quantity"  required>
             </div>

              <div class="form-group">
             <input type="text" class="form-control" id="unit" name="unit" placeholder="Unit"  required>
             </div>

              <div class="form-group">
             <input type="text" class="form-control" id="price_unit" name="price_unit" placeholder=" Price Unit"  required>
             </div>

               <div class="form-group">
             <input type="text" class="form-control" id="gst" name="gst" placeholder="GST"  required>
             </div>
             <div class="form-group">
             <input type="text" class="form-control" id="amount" name="amount" placeholder="  Amount."  required>
              </div>  

            <div class="form-group">
             <input type="text" class="form-control" id="taxable_amount" name="taxable_amount" placeholder=" Taxable Amount "  required>
             </div>

              <div class="form-group">
             <input type="text" class="form-control" id="cgst" name="cgst" placeholder=" CGST"  required>
             </div>

              <div class="form-group">
             <input type="text" class="form-control" id="sgst" name="sgst" placeholder="SGST"  required>
             </div>

              <div class="form-group">
             <input type="text" class="form-control" id="total_tax_amount" name="total_tax_amount" placeholder="Total Tax Amount"  required>
             </div>

              <div class="form-group">
             <input type="text" class="form-control" id="total_invoice_amount" name="total_invoice_amount" placeholder=" Total Invoice Amount"  required>
             </div>


            <hr>
            <button type="submit" class="btn btn-success"><i class="fa fa-check fa-fw"></i>Save</button>
            <button type="reset" class="btn btn-danger"><i class="fa fa-times fa-fw"></i>Reset</button>
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>      
          </form>  
        </div>
      </div>
    </div>
  </div>







  <!-- Invoice Modal-->
  <div class="modal fade" id="invoiceModal" tabindex="1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Invoice</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <form role="form" method="post" action="invoice_transac.php?action=add">

            <div class="form-group">
              <input type="text" class="form-control" id="invoice_number" placeholder="Invoice Number" name="invoice_number" required>
            </div>

            <div class="form-group">   
              <input type="text" class="form-control" id="po_date" name="po_date" placeholder="product Order Date"  required>
            </div>

             <div class="form-group">   
              <input type="text" class="form-control" id="fssai_number" name="fssai_number" placeholder="Fssai Number"  required>
            </div> 

            <div class="form-group">   
              <input type="text" class="form-control" id="po_date" name="po_date" placeholder="product Order Date"  required>
            </div>

            <div class="form-group">
             <input type="text" class="form-control" id="invoice_gen_date" name="invoice_gen_date" placeholder="Invoice Generate date."  required>
              </div>  
              <div class="form-group">
             <input type="text" class="form-control" id="invoice_gen_time" name="invoice_gen_time" placeholder="Invoice Generate Time."  required>
              </div>  

            <div class="form-group">
             <input type="text" class="form-control" id="supply_place" name="supply_place" placeholder="Supply Place"  required>
             </div>

              <div class="form-group">
             <input type="text" class="form-control" id="bill_to" name="bill_to" placeholder="Bill To"  required>
             </div>

              <div class="form-group">
             <input type="text" class="form-control" id="address" name="address" placeholder="Address"  required>
             </div>

              <div class="form-group">
             <input type="text" class="form-control" id="number" name="number" placeholder="Number"  required>
             </div>

              <div class="form-group">
             <input type="text" class="form-control" id="gstin_number" name="gstin_number" placeholder="GSTN Number"  required>
             </div>


<div class="form-group">
             <input type="text" class="form-control" id="state" name="state" placeholder="State"  required>
              </div>  

            <div class="form-group">
             <input type="text" class="form-control" id="city" name="city" placeholder="City"  required>
             </div>

              <div class="form-group">
             <input type="text" class="form-control" id="ship_to" name="ship_to" placeholder="Ship To"  required>
             </div>

              <div class="form-group">
             <input type="text" class="form-control" id="item_name" name="item_name" placeholder="Item Name"  required>
             </div>

              <div class="form-group">
             <input type="text" class="form-control" id="hsn_sac" name="hsn_sac" placeholder="HSN"  required>
             </div>

              <div class="form-group">
             <input type="text" class="form-control" id="batch_number" name="batch_number" placeholder="Batch Number"  required>
             </div>
             <div class="form-group">
             <input type="text" class="form-control" id="exp_date" name="exp_date" placeholder="Expire Date."  required>
              </div>  

            <div class="form-group">
             <input type="text" class="form-control" id="mgf_date" name="mgf_date" placeholder=" manufacture Date"  required>
             </div>

              <div class="form-group">
             <input type="text" class="form-control" id="mrp" name="mrp" placeholder=" MRP"  required>
             </div>

              <div class="form-group">
             <input type="text" class="form-control" id="quantity" name="quantity" placeholder="Quantity"  required>
             </div>

              <div class="form-group">
             <input type="text" class="form-control" id="unit" name="unit" placeholder="Unit"  required>
             </div>

              <div class="form-group">
             <input type="text" class="form-control" id="price_unit" name="price_unit" placeholder=" Price Unit"  required>
             </div>

               <div class="form-group">
             <input type="text" class="form-control" id="gst" name="gst" placeholder="GST"  required>
             </div>
             <div class="form-group">
             <input type="text" class="form-control" id="amount" name="amount" placeholder="  Amount."  required>
              </div>  

            <div class="form-group">
             <input type="text" class="form-control" id="taxable_amount" name="taxable_amount" placeholder=" Taxable Amount "  required>
             </div>

              <div class="form-group">
             <input type="text" class="form-control" id="cgst" name="cgst" placeholder=" CGST"  required>
             </div>

              <div class="form-group">
             <input type="text" class="form-control" id="sgst" name="sgst" placeholder="SGST"  required>
             </div>

              <div class="form-group">
             <input type="text" class="form-control" id="total_tax_amount" name="total_tax_amount" placeholder="Total Tax Amount"  required>
             </div>

              <div class="form-group">
             <input type="text" class="form-control" id="total_invoice_amount" name="total_invoice_amount" placeholder=" Total Invoice Amount"  required>
             </div>


            <hr>
            <button type="submit" class="btn btn-success"><i class="fa fa-check fa-fw"></i>Save</button>
            <button type="reset" class="btn btn-danger"><i class="fa fa-times fa-fw"></i>Reset</button>
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>      
          </form>  
        </div>
      </div>
    </div>
  </div>


<!-- Supplier Modal-->
  <div class="modal fade" id="supplierModal" tabindex="-1" role="dialog" aria-labelledby="supplierModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Supplier</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <form role="form" method="post" action="sup_transac.php?action=add">
              
              <div class="form-group">
                <input class="form-control" placeholder="Company Name" name="companyname" required>
              </div>
              <div class="form-group">
                <input class="form-control"  placeholder="Province" name="province" required>
              </div>
              <div class="form-group">
                <input class="form-control" placeholder="City" name="city" required>
              </div>
              <div class="form-group">
                <input class="form-control" placeholder="Phone Number" name="phonenumber" required>
              </div>
               <div class="form-group">
                <input class="form-control"  placeholder="GST" name="GST" required>
              </div>
               <div class="form-group">
                <input class="form-control"  placeholder="Pan Card Number" name="PAN" required>
              </div>
               <div class="form-group">
                <input class="form-control"  placeholder="Adhar Card Number" name="AADHAR_CARD" required>
              </div>
               <div class="form-group">
                <input class="form-control"  placeholder="GUMASTA" name="Gumasta" required>
              </div>

            <hr>
            <button type="submit" class="btn btn-success"><i class="fa fa-check fa-fw"></i>Save</button>
            <button type="reset" class="btn btn-danger"><i class="fa fa-times fa-fw"></i>Reset</button>
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>      
          </form>  
        </div>
      </div>
    </div>
  </div>





  <!-- Employee Modal-->
  <div class="modal fade" id="employeeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Employee</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <form role="form" method="post" action="emp_transac.php?action=add">          
              <div class="form-group">
                <input class="form-control" placeholder="First Name" name="firstname" required>
              </div>
              <div class="form-group">
                <input class="form-control" placeholder="Last Name" name="lastname" required>
              </div>
              <div class="form-group">
                  <select class='form-control' name='gender' required>
                    <option value="" disabled selected hidden>Select Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                  </select>
              </div>
              <div class="form-group">
                <input class="form-control" placeholder="Email" name="email" required>
              </div>
              <div class="form-group">
                <input class="form-control" placeholder="Phone Number" name="phonenumber" required>
              </div>
              <div class="form-group">
                <?php
                  echo $job;
                ?>
              </div>
              <div class="form-group">
                <input placeholder="Hired Date" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="FromDate" name="hireddate" class="form-control" /   required>
              </div>
              <div class="form-group">
                <input class="form-control" id="province" type="text" placeholder="Province" name="province" required>
              </div>
              <div class="form-group">
                <input class="form-control" placeholder="City" name="city" id="city" type="text" required>
              </div>
              <hr>
            <button type="submit" class="btn btn-success"><i class="fa fa-check fa-fw"></i>Save</button>
            <button type="reset" class="btn btn-danger"><i class="fa fa-times fa-fw"></i>Reset</button>
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>      
          </form>  
        </div>
      </div>
    </div>
  </div>



  <!-- Delete Modal-->
  <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="DeleteModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Confirm Delete</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Are you sure do you want to delete?</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-danger btn-ok">Delete</a>
        </div>
      </div>
    </div>
  </div>
    <script>
        $('#confirm-delete').on('show.bs.modal', function(e) {
            $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
            
            $('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
        });
    </script>