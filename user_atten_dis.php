<?php
include'../includes/connection.php';
include'../pages/user_header.php';
?>

<!-- -------------PDF GENERATEOR --------------- -->

<button id="pdf-generate">Download</button>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<link rel="stylesheet" href="https://kendo.cdn.telerik.com/2017.1.223/styles/kendo.common.min.css" />
<script src="https://kendo.cdn.telerik.com/2017.1.223/js/jszip.min.js"></script>
<script src="https://kendo.cdn.telerik.com/2017.1.223/js/kendo.all.min.js"></script>
 
    <div id="example">
    <div class="box wide hidden-on-narrow">
    </div>

    <div class="page-container hidden-on-narrow">
        <div class="pdf-page size-a4">
            <page size="A4">
               
               <!-- PDF CONTENT START -->

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style>
		 *{
        margin: 0;
        padding: 0;
        font-family: 'cinzel',serif;
        font-size: ;
    }
	</style>
</head>
<body class="A4">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<div class="card-body">
	<div class="table-responsive">
		<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
			<thead>
				<tr>
					 <th>Name</th>
					 <th>Date </th>
					 <th>Arrival Time </th>
					</tr>
				</thead>
				<tbody>
			
				<?php                  
                      $query = 'SELECT * FROM attendance';
                      $result = mysqli_query($db, $query) or die (mysqli_error($db));
        
                      while ($row = mysqli_fetch_assoc($result)) {
                      echo '<tr>';
                     
                      echo '<td>'. $row['name'].'</td>';
                      echo '<td>'. $row['date'].'</td>';
                      echo '<td>'. $row['ar_time'].'</td>';
					}
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
         
				</body>
				</html>
				<!-- PDF CONTENT END -->


<div class="responsive-message"></div>

<style>
	/*
		Use the DejaVu Sans font for display and embedding in the PDF file.
		The standard PDF fonts have no support for Unicode characters.
	*/
	.pdf-page {
		font-family: "DejaVu Sans", "Arial", sans-serif;
	}
</style>

<script>
	// Import DejaVu Sans font for embedding

	// NOTE: Only required if the Kendo UI stylesheets are loaded
	// from a different origin, e.g. cdn.kendostatic.com
	kendo.pdf.defineFont({
		"DejaVu Sans"             : "https://kendo.cdn.telerik.com/2016.2.607/styles/fonts/DejaVu/DejaVuSans.ttf",
		"DejaVu Sans|Bold"        : "https://kendo.cdn.telerik.com/2016.2.607/styles/fonts/DejaVu/DejaVuSans-Bold.ttf",
		"DejaVu Sans|Bold|Italic" : "https://kendo.cdn.telerik.com/2016.2.607/styles/fonts/DejaVu/DejaVuSans-Oblique.ttf",
		"DejaVu Sans|Italic"      : "https://kendo.cdn.telerik.com/2016.2.607/styles/fonts/DejaVu/DejaVuSans-Oblique.ttf"
	});
</script>

<!-- Load Pako ZLIB library to enable PDF compression -->
<!-- <script src="../content/shared/js/pako.min.js"></script> -->

<script>
  function getPDF(selector) {
	kendo.drawing.drawDOM($(selector)).then(function(group){
	  kendo.drawing.pdf.saveAs(group, 'invoice.pdf');
	});
  }
</script>
<style>
* {
	box-sizing: border-box;
}
body {
	  font-family: 'Montserrat', sans-serif;
}
page[size="A4"] {  
  width: 790px;
  height: 1000px; 
}
page {
  background: white; 
  display: block;
  margin: 0 auto;
}

</style>

</div>

<script type="text/javascript">
   $('#pdf-generate').click(function(){
	 getPDF('.pdf-page');
   })
</script>				