<?php include '../inc/header.php';?>
<?php include '../inc/sidebar.php';?>
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Inbox</h2>
                <div class="block scroll_block">        
                    <table class="data display datatable" id="example">
					<thead>
						<tr>
							<th>Serial No.</th>
							<th>Name</th>
							<th>Phone Number</th>
							<th>Email</th>
							<th>Message</th>
							<th>Time</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php
							$resultInbox = selectComment();
							if($resultInbox->num_rows>0){
								while($rowInbox = $resultInbox->fetch_assoc()){
									echo "<tr class='odd gradeX'>
										<td>{$rowInbox['id']}</td>
										<td>{$rowInbox['full_name']}</td>
										<td>{$rowInbox['phone_number']}</td>
										<td>{$rowInbox['email']}</td>
										<td>{$rowInbox['comment']}</td>
										<td>{$rowInbox['create_at']}</td>
										<td><a onclick='confirmDelete()' href='../controller/deleted.php?name='inbox'&id={$rowInbox['id']}'>Delete</a></td>
									</tr>";
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
