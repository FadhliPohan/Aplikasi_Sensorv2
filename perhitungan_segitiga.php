<?php
include "head.php";
?>

<?php
include'sidebar.php';
?>
<link rel="stylesheet" type="text/css" href="css/jquery.dataTables.css">
	
	
    <style type="text/css">
<!--
.style1 {font-size: 24px}
-->
    </style>
    <div class="main-panel">
		

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            
                            <div class="content table-responsive table-full-width">
							<h3 class="style1" style="text-align:center">Input Form</h3>
                           	<form action="hasil_perhitungan_segitiga.php" method="POST">
						<table class='table table-bordered'>
							<tr>
								<td>Time</td>
								<td>
							
								<select id="tanggal" class="form-control" onclick="fungsi_nama_toko()">
									<option value="">Select Data Based On Time</option>
									<?php
									$data = "select * from node_1";
									$sql=mysqli_query($konek, $data);
										while($row=mysqli_fetch_array($sql)){
											echo"
												<option value='".$row['id']."'>".$row['time']."</option>
											";
										}
									?>
								</select>
								
								</td>
							</tr>
						<tbody id="div_data">
							<tr>
								<td>Temperature</td>
								<td><input type="text" name="suhu" class="form-control" required></td>
							</tr>
							<tr>
								<td>Soil Moisture</td>
								<td><input type="text" name="sm" class="form-control" required></td>
							</tr>
							<tr>
								<td>Humidity</td>
								<td><input type="text" name="hm" class="form-control" required></td>
							</tr>
							<tr>
								<td>Intensity</td>
								<td><input type="text" name="li" class="form-control" required></td>
							</tr>
						</tbody>
							<tr>
								<td><input type="submit" value="Save" class="btn btn-warning"></td>
							</tr>
					</table>
				</form>
					
                            </div>
                        </div>
                    </div>




                </div>
            </div>
        </div>

        <footer class="footer">
            <div class="container-fluid">
              
              
            </div>
        </footer>


    </div>
</div>


</body>

  <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script type="text/javascript" language="javascript" src="js/jquery.dataTables.js"></script>
	<script>
$(document).ready(function() {
	$('#example').DataTable();
} );

	</script>

<script>
function fungsi_nama_toko(){
	// var variabel = document.getElementById("nama_toko").value;
		
				if($('#tanggal').val()!=""){
						$.ajax({
								url   :'http://localhost/aplikasi/perhitungan2.php?id='+$('#tanggal').val(),
								type  : 'GET',
											 
								async : false,
								cache : false,
											  //dataType : 'jsonp',
											  processData : false,
											  contentType : false,
											  success:function (data){
												 
												  $("#div_data").html(data);
											  }
						})
										}
}	

</script>
</html>
