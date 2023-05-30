<?php include '../inc/header.php';?>
<?php include '../inc/sidebar.php';?>
<?php
	$resultUser = selectUser();
?>
<div class="grid_10">
    <div class="box round first grid">
        <h2>User List</h2>
        <div class="block scroll_block">  
            <table class="data display datatable" id="example">
			<thead>
				<tr>
					<th>No.</th>
					<th>Role</th>
					<th>Username</th>
					<th>Password</th>
					<th>Email</th>
					<th>Address</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php
					if($resultUser->num_rows>0){
						while($rowUser = $resultUser->fetch_assoc()){
							$role = selectRoleById($rowUser['role_id'])->fetch_assoc();
							echo "<tr class='odd gradeX'>
								<td>{$rowUser['id']}</td>
								<td>{$role['role']}</td>
								<td>{$rowUser['username']}</td>
								<td>{$rowUser['password']}</td>
								<td>{$rowUser['email']}</td>
								<td>{$rowUser['address']}</td>			
								<td>";
							if($rowUser['deleted']==0){
								echo"0</td>
								</tr>";
							} else{
								echo"1</td>
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
