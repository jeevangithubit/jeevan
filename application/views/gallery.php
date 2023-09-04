<div class="ht__bradcaump__area" data--black__overlay="6" style="background: rgba(0, 0, 0, 0) url(<?php echo base_url();?>assets/images/bg/5.jpg) no-repeat scroll center center / cover ;">
            <div class="ht__bradcaump__wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="bradcaump__inner text-center">
                                <h2 class="bradcaump-title">GALLERY</h2>
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="<?php echo base_url();?>index.php/web/index">Home</a>
                                  <span class="brd-separetor">-</span>
                                  <span class="breadcrumb-item active">GALLERY</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
    
        
        <section class="htc__service__area service__page bg__gray ptb--100">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="section__title text-center">
                            <h2 class="title__line"> <span class="text--theme">GALLERY</span></h2>
                            <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="service__section__wrap clearfix">
                        <?php  foreach($get as $value){ ?>
                        <!-- Start Single Service -->
                        <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12">
                            <div class="service foo">
                                <div class="service__thumb">
                                    <a href="single-service.html">
                                        <img src="<?php echo base_url();?>assets/uploads/<?php echo $value['image']?>" alt="service images" style=" height: 170px;" >
                                    </a>
                                    <div class="service__hover">
                                        <div class="service__action">
                                            <p><?php echo $value['contante'] ?></p>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <?php } ?> 
                        <!-- End Single Service -->
                    </div>
                </div>
            </div>
        </section>
          <div class="wtsp_chat" style="float:right;">
                                     <a href="https://api.whatsapp.com/send?phone=9669966007&text=Hello%20Team&source=&data=&app_absent=" target="_blank"><img src="<?php echo base_url();?>assets/images/msg-700823808-140.jpg" alt="Live Chat" height="60px"></a>
                                    </div>
                                    <div class="wtsp_chat" style="float:left;">
                                     <a href="https://api.whatsapp.com/send?phone=9669966007&text=Hello%20Team&source=&data=&app_absent=" target="_blank"><img src="<?php echo base_url();?>assets/images/download.png" alt="Live Chat" height="60px"></a>
                                    </div>