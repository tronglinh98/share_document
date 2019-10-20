<section>
	<div class="container clearfix">
         <div class="row">
            <div class="container">
               <div class="col-xs-12 product-top-line">
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-6 col-lg-5 col-xs-12 product-images">
               <div class="clearfix zoom-content">
                  
                  <a href="#" class="btn btn-yet-col" id="product-pupGallery-button" data-target="#product-pupGallery-box" data-toggle="modal"><span class="icon-magnifier-add"></span></a>
                  <div aria-hidden="true" aria-labelledby="product-added" role="dialog" tabindex="-1" id="product-pupGallery-box" class="modal fade" style="display: none;">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <div class="modal-header">
                           <a aria-hidden="true" data-dismiss="modal" class="modal-close" href="#"><i class="icon_close"></i></a>
                           <h4 class="modal-title">Information</h4>
                        </div>
                        <div class="modal-body modal-body-info">
                           <div class="clearfix zoom-content-2">
                              <div class="clearfix big-image">

                                 <img id="zoom_04" src="<?php echo $data["image"] ?>" data-zoom-image="<?php echo $data["image"] ?>" alt=""/> 

                              </div>
                              <div class="clearfix thumbnails">
                                 <ul id="thumblist2" class="clearfix" >
                                    <li>
                                       <a  href="#" class="elevatezoom-gallery zoomThumbActive" data-update="" 
                                       data-image="<?php echo $data["image"] ?>" 
                                       data-zoom-image="<?php echo $data["image"] ?>">
                                          <img src="<?php echo $data["image"] ?>" width="100"  alt="" />
                                       </a>
                                    </li>
                                    <li>
                                       <a  href="#" class="elevatezoom-gallery" data-update=""
                                       data-image="https://www.elevateweb.co.uk/wp-content/themes/radial/zoom/images/small/image1.png" 
                                       data-zoom-image="https://www.elevateweb.co.uk/wp-content/themes/radial/zoom/images/large/image1.jpg">
                                          <img src="https://www.elevateweb.co.uk/wp-content/themes/radial/zoom/images/small/image1.png" width="100"  alt="" />
                                       </a>
                                    </li>
                                    <li>
                                       <a  href="#" class="elevatezoom-gallery" data-update="" 
                                       data-image="images/product_page_gallery/1-big.jpg" 
                                       data-zoom-image="<?php echo $data["image"] ?>">
                                          <img src="<?php echo $data["image"] ?>" width="100"  alt="" />
                                       </a>
                                    </li>
                                    <li>
                                       <a  href="#" class="elevatezoom-gallery" data-update=""
                                       data-image="images/product_page_gallery/1-big.jpg" 
                                       data-zoom-image="images/product_page_gallery/1-big-3x.jpg">
                                          <img src="<?php echo $data["image"] ?>" width="100"  alt="" />
                                       </a>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="clearfix big-image product-page">
                     <img id="zoom_03" src="<?php echo $data["image"] ?>" data-zoom-image="<?php echo $data["image"] ?>" alt="" class="img-fluid"/> 
                  </div>
                  <br/>
               </div>
            </div>
            <div class="col-md-6 col-lg-7 col-xs-12 product-info">
               <div id="zoom-window-container" style="position: relative;"></div>
               <div class="product-reviews">
                  <h3><?php echo $data['name'] ?></h3>
               </div>
               <div class="hr"></div>
               <div class="price">
                  <?php echo $data['cost'] ?> vnd
               </div>
               <p class="availability col-sm-pull-right col-xs-pull-left">Availability: <span><span class="in-stock"></span>In Stock</span></p>
               <div class="hr"></div>
               <p class="data-info">Product Tags: <span>Clother, Fashion</span></p>
               <p class="data-info">Category: <span><?php echo $data['category'] ?></span></p>
               <div class="hr"></div>
               <p><?php echo $data['descript'] ?></p>
               <div class="hr"></div>
               <div class="product-tabs">
                  <!-- Nav tabs -->
                  <ul role="tablist" class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" role="tab" href="#tab-description">DESCRIPTION</a></li>
                    <li><a data-toggle="tab" role="tab" href="#tab-additional-info">CONTACT INFO</a></li>
                    <li><a data-toggle="tab" role="tab" href="#tab-review" id="review-btn">REVIEWS</a></li>
                  </ul>
                  <div class="tab-content">
                     <div id="tab-description" class="tab-pane active">
                        <p><?php echo $data['descript'] ?></p>
                     </div>
                     <div id="tab-additional-info" class="tab-pane">
                        <div style="font-weight: bold; font-size: 20px"><?php echo $data['Phone'];?></div>
                        <div style="font-weight: bold; font-size: 20px"><?php echo $data['huyen'];?></div>
                     </div>
                     <div id="tab-review" class="tab-pane">
                        <form action="#">
                           <div class="row">
                              <div class="col-md-6 col-xs-12">
                                 <div class="form-group required"><label class="type-text">Name*<input type="text" class="form-control placeholder-fix"></label></div>
                              </div>
                              <div class="col-md-6 col-xs-12">
                                 <div class="form-group required"><label class="type-text">Email*<input type="text" class="form-control placeholder-fix"></label></div>
                              </div>
                              <div class="col-xs-12">
                                 <div class="data-info secondary-font-family">Your Review</div>
                                 <div class="required form-group">
                                    <textarea class="form-control placeholder-fix" rows="4"></textarea>
                                 </div>
                                 <button type="submit" class="btn btn-lg btn-sec-col col-xs-12">SUBMIT REVIEW</button>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
</section>