<!-- inner page banner  -->
<div id="inner_banner" class="section inner_banner_section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="title-holder">
            <div class="title-holder-cell text-left">
              <h1 class="page-title">Services List</h1>
              <ol class="breadcrumb"  style="background-color: revert; display: inline-flex;">
                <li><a href="<?php echo base_url();?>index.php/web/index">Home</a></li>
                <li class="active">Services List</li>
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
<div class="section padding_layout_1 service_list">
   <div class="main_heading text_align_center">
    <h2>OUE SERVICES</h2>
    <p class="large">Fastest repair service with best price!</p>
   </div>
  <div class="container">
    <div class="row">
    
      <?php foreach ($get as $value) { ?>
      <!--   $contant=$value['contante']; -->
  
      <div class="col-md-4 service_blog margin_bottom_50">
        <div class="full">
          <div class="center">
          <div class="service_img"> <img class="img-responsive" src="<?php echo base_url();?>assets/uploads/<?php echo $value['image']?>" alt="#" height="200px"> </div>
          <div class="service_cont">
            <h3 class="service_head"><?php echo $value['service_name']?></h3>
            <p><?php echo $value['contante'] ?></p>
           <div class="bt_cont" style="margin-top: 20px"> <a class="btn sqaure_bt" href="<?php echo base_url();?>index.php/web/contacts">View Service</a> </div>
          </div>
         </div>
        </div>
      </div>
      
    <?php } ?>
    </div>
  </div>
</div>
<!-- end section -->


<!-- echo substr("$contant",0,60)