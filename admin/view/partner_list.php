<?php include '../inc/header.php';?>
<?php include '../inc/sidebar.php';?>
<div class="grid_10">
    <div class="box round first grid">
        <h2>Partner List</h2>
        <div class="block scroll_block">  
            <table class="data display datatable" id="example">
			<thead>
				<tr>
                    <th>No.</th>
					<th>Name</th>
					<th>Logo</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php
					$resultPartner = selectPartner();
					if($resultPartner->num_rows>0){
						while($rowPartner = $resultPartner->fetch_assoc()){
							echo "<tr class='odd gradeX'>
								<td>{$rowPartner['id']}</td>
								<td>{$rowPartner['name']}</td>
								<td style = 'width:20%;'><img src='../../img/logo/{$rowPartner['image']}' alt='' style = 'width:20%; padding-top:5px;'></td>";
							if($rowPartner['deleted']==0){
								echo"<td><a href='../view/partner_edit.php?id={$rowPartner['id']}'>Edit</a> || <a onclick='confirmDelete()' href='../controller/deleted.php?name='partner'&id={$rowPartner['id']}'>Delete</a></td>
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
