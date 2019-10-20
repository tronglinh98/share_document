
<section>
	<h4 class="page-title text-center">Quản lý tài liệu</h4>
</div>
<hr style="border-color: white"/>
<div class="container">
	<?php if(isset($data)){ ?>
	<div class="" style="width: 80%; float: right;">
		<?php foreach ($data as $key => $value) { ?>
            <div  class="table-responsive" style="background: #fff; margin: 10px 20px; padding: 10px; height: 150px; overflow: hidden;">
                <div style="float: left; width: 18%; height: 98%; margin-left: 20px; ">
					<img style="width: 120px; height: 100%" src="<?php echo $value["image"] ?>" alt="">
				</div>
				<div style="float: right; width: 78%; height: 98%; border: 1px solid black; ">
					<div>
						<a style="text-decoration: none; float: left; width: 70%; " href="controller/author/index.php?controller=MyDoc/doc&token=<?php echo $value['token']?>">
                        	<p class="pl-name" style=" height: 50px; overflow: hidden; font-size: 18px;"><?php echo $value["title"] ?></p>
                        </a>
                        <div style="float: left; width: 28%; font-size: 12px; color: #999; ">Ngày tải lên: <?php echo $value["create_at"] ?></div>
                    </div>
					<div></div>
				</div>
            </div>
        <?php } ?>				
	</div>
	<?php } ?>
</div>
</section>

					