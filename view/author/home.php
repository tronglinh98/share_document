<style type="text/css">
  a.p {
    color:#4DB266;
  }
</style>
<section>
  <div class="container mt-3">
  <div class="clearfix"></div>
        <div class="best-product">
        <?php if(isset($data)){ ?>
           <div class="products-list pl-carousel new-products">
              <ul class="pl-pages">
                 <li class="active">
                    <div class="row">
                        <?php foreach ($data as $key => $value) { ?>
                         <div class="col-md-3 col-sm-6 pl-item" style="background: #EFF6F7; margin: 10px; max-width: 23%">
                            <figure>
                               <a href="controller/author/index.php?controller=MyDoc/detaildoc&doc_id=<?php echo $value[0]?>">
                                  <img src="<?php echo $value["image"] ?>" alt="">
                               </a>
                               
                            </figure>
                            <div class="pl-caption" style="float: left; text-decoration: none; text-align: left; ">
                               <a style="text-decoration: none; " href="controller/author/index.php?controller=MyDoc/doc&token=<?php echo $value['token']?>">
                                 <p class="pl-name" style=" height: 50px; overflow: hidden;"><?php echo $value["title"] ?></p>
                               </a>
                               <a href="Controller/Author/index.php?controller=MyDoc/detaildoc&doc_id=<?php echo $value[0]?>">
                                 <p  style="color: #4DB266; " class="pl-name"><?php echo $value["user_name"] ?></p>
                               </a>
                               <span class="stars-rating stars-4"><span class="stars"></span></span>
                            </div>
                         </div>
                          <?php } ?>
                    </div>
                 </li>
              </ul>
           </div>
              <div class="gap-50"></div>
              <div class="text-center">
                 <button class="btn btn-default btn-rounded mb-2"><i class="icon-reload"></i>Load More</button>
              </div>
            <?php } ?>
     	</div>
   </div>
</section>

