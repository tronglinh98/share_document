
<div class="page-header">
	<h4 class="page-title">Danh sách tài liệu mới</h4>
</div>
	<hr/ style = "color: white">
<div class="container">
	<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-body">
				<div class="table-responsive">
					<table id="myTable" class="display table table-striped table-hover" >
						<thead>
							<tr>
								<th>STT</th>
								<th>Title</th>
								<th>Summary</th>
								<th>file_upload</th>
								<th>image</th>
								<th>author</th>
                                <th>area</th>
                                <th>created_at</th>
                                <th>updated_at</th>
							</tr>
						</thead>
						<tbody>
							<?php
							foreach ($data as $key => $value){
								$key++;
							 ?>
							<tr>
								<td><?php echo $key ?></td>
								<td><?php echo $value["title"] ?></td>
								<td><?php echo $value["summary"]; ?></td>
								<td><?php echo $value["file_upload"] ?></td>
								<td><?php echo $value["image"]; ?></td>
                                <td><?php echo $value["user_name"]; ?></td>
                                <td><?php echo $value["area_name"]; ?></td>
                                <td><?php echo $value["create_at"]; ?></td>
                                <td><?php echo $value["update_at"]; ?></td>
								<td>
									<a onclick="window.confirm('Bạn chắc chắn đồng ý???');" href="Controller/Manager/index.php?controller=ManagerProducts/Old&token=<?php echo $value["token"]; ?>&act=delete"><i class="fas fa-trash-alt"></i></a>
								</td>
							</tr>
						<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
	

