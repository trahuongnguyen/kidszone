<?php include '../inc/header.php';?>
<?php include '../inc/sidebar.php';?>
<?php
	$resultDetail = selectDetail();
?>
<div class="grid_10">
    <div class="box round first grid">
        <h2>Detail List</h2>
        <div class="block scroll_block">  
            <table class="data display datatable" id="example">
			<thead>
				<tr>
					<th>Name</th>
					<th>Category</th>
					<th>Image</th>
					<th>Audio</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php
					if($resultDetail->num_rows>0){
						while($rowDetail = $resultDetail->fetch_assoc()){
							$resultCatByID = selectCatByid($rowDetail['category_id']);
							$nameCat = $resultCatByID->fetch_assoc();
							echo "<tr class='odd gradeX'>
								<td>{$rowDetail['name']}</td>
								<td>{$nameCat['name']}</td>
								<td style='width:20%; text-align:center;'><img src='../../img/{$rowDetail['image']}' alt='' style='width:20%;'></td>
								<td class='center' style='width:30%; height:auto; padding-top: 10px;'>
									<audio controls>
										<source src='../voice/{$rowDetail['audio']}' type='audio/mpeg'>
										Your browser does not support the audio element.
									</audio>
								</td>";
							if($rowDetail['deleted']==0){
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
