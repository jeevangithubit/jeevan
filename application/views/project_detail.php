<?php foreach( $get as $value) {} ?>

<!-- inner page banner -->
<div id="inner_banner" class="section inner_banner_section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="title-holder">
            <div class="title-holder-cell text-left">
              <h1 class="page-title">Project Detail</h1>
              <ol class="breadcrumb"  style="background-color: revert; display: inline-flex;">
                <li><a href="<?php echo base_url();?>index.php/web/index">Home</a></li>
                <li class="active">Project Detail</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end inner page banner -->
<!-- section -->
<div class="section padding_layout_1 product_detail">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="row">
          <div class="col-xl-12 col-lg-12 col-md-12">
          <!--   <div class="product_detail_feature_img hizoom hi2"> -->
              <div class='hizoom hi2' style="text-align: center;"> <img src="<?php echo base_url();?>assets/uploads/<?php echo $value['image']?>" alt="#" height="500px"> </div>
             
                <div class="col-md-12">
                  <h4 style="display: flex; justify-content: center;"><a href="<?php echo base_url();?>index.php/web/project"><?php echo $value['project_name']?></a></h4>
                </div>
              </div>
              <div class="col-md-12">
          <p style=" display: flex; justify-content: center;"><?php echo $value['contante'] ?></p>
            
            <!-- </div> -->
          </div>
         </div>
       </div>
     </div>
  </div>
</div>
<!-- end section -->



