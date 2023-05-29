<?php include '../inc/header.php';?>
<?php include '../inc/sidebar.php';?>
<?php
	$resultCat = selectCat();
?>
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Category List</h2>
                <div class="block">        
                    <table class="data display datatable" id="example">
					<thead>
						<tr>
							<th>Serial No.</th>
							<th>Category Name</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php
							if($resultCat->num_rows>0){
								while($rowCat = $resultCat->fetch_assoc()){
									echo "<tr class='odd gradeX'>
										<td>{$rowCat['id']}</td>
										<td>{$rowCat['name']}</td>";
									if($rowCat['deleted']==0){
										echo"<td><a href=''>Edit</a> || <a onclick='confirmDelete()'>Delete</a></td>
										</tr>";
									} else{
										echo"<td><a href=''>Restore</a></td>
										</tr>";
									}	
								}
							}
						?>
						<script src="../js/deleteConfirm.js"></script>
					</tbody>
				</table>
               </div>
            </div>
        </div>
<?php include '../inc/footer.php';?>

