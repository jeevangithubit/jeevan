<!-- inner page banner -->
<div id="inner_banner" class="section inner_banner_section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="title-holder">
            <div class="title-holder-cell text-left">
              <h1 class="page-title">Project</h1>
              <ol class="breadcrumb" style="background-color: revert; display: inline-flex;">
                <li><a href="<?php echo base_url();?>index.php/web/index">Home</a></li>
                <li class="active">Project</li>
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
<div class="section padding_layout_1 product_list_main">
   <div class="main_heading text_align_center">
    <h2>OUE PROJECTS</h2>
    <p class="large">Fastest repair service with best price!</p>
   </div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="row">
          <?php foreach ($get as $value ) {
             $contant=$value['contante'];

           ?>
          <div class="col-md-4 col-sm-6 col-xs-12 margin_bottom_30_all">
            <div class="product_list">
              <div class="product_img"> <img class="img-responsive" src="<?php echo base_url();?>assets/uploads/<?php echo $value['image']?>" alt="#" width="232px"> </div>
              <div class="product_detail_btm">
                <div class="center">
                  <h4 style="text-align: center;"><a href="it_shop_detail.html"><?php echo $value['project_name']?></a></h4>
                </div>
               <center> <p style="text-align: center;"><?php echo substr("$contant",0,60) ?></p></center>
               <center> <div class="bt_cont"> <a class="btn sqaure_bt" href="<?php echo base_url();?>index.php/web/project_detail/<?php echo $value['id']?>">View Details</a> </div></center>
              </div>
            </div>
          </div>
        <?php } ?>
        </div>
      </div>
   </div>
 </div>
</div>
