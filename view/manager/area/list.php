<div class="page-header">
	<h4 class="page-title">Danh sách lĩnh vực</h4>
</div>
	<hr/ style = "color: white">
<div class="container">
	<div class="row">
		<div class="col-md-12 mb-2">
		    <a href="controller/manager/index.php?controller=AreaManagement/create" class="float-right">
		        <button type="button" class="btn btn-primary btn-md">
	        	<i class="fas fa-plus"></i>&nbsp; Thêm lĩnh vực</button>
		    </a>
		</div>
	<div class="col-md-12">
		<div class="card">
			<div class="card-body">
				<div class="table-responsive">
					<table id="myTable" class="display table table-striped table-hover" >
						<thead>
							<tr>
								<th>STT</th>
								<th>Name</th>
								<th>Edit</th>
								<th>Delete</th>
							</tr>
						</thead>
						<tbody>
							<?php
							foreach ($data as $key => $value){
								$key++;
							 ?>
							<tr>
								<td><?php echo $key ?></td>
								<td><?php echo $value["area_name"] ?></td>
								<td><a href="controller/manager/index.php?controller=AreaManagement/edit&id=<?php echo $value["id"] ?>"><i class="fas fa-edit"></i></a></td>
								<td><a onclick="window.confirm('Bạn có muốn xóa???');" href="controller/manager/index.php?controller=AreaManagement/list&id=<?php echo $value["id"]; ?>&act=delete"><i class="fas fa-trash-alt"></i></a></td>
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
	
