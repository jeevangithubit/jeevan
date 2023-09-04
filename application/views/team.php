  
<div class="ht__bradcaump__area" data--black__overlay="6" style="background: rgba(0, 0, 0, 0) url(<?php echo base_url();?>assets/images/bg/5.jpg) no-repeat scroll center center / cover ;">
            <div class="ht__bradcaump__wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="bradcaump__inner text-center">
                                <h2 class="bradcaump-title">OUR TEAM</h2>
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="<?php echo base_url();?>index.php/web/index">Home</a>
                                  <span class="brd-separetor">-</span>
                                  <span class="breadcrumb-item active">OUR TEAM</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <section class="htc__team__area bg__white h1__team--one ptb--150 text__pos">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="section__title text-center">
                            <h2 class="title__line">OUR <span class="text--theme">TEAM</span></h2>
                            <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="htc__team__wrap clearfix mt--30">
                          <?php  foreach($get as $value){ ?>
                        <!-- Start Single Team -->
                        <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12">
                            <div class="team foo">
                                <div class="team__inner">
                                    <div class="team__thumb">
                                        <img src="<?php echo base_url();?>assets/uploads/<?php echo $value['image']?>" alt="team image" style=" height: 200px;">
                                    </div>
                                 
                                </div>

                                <div class="team__details">
                                    <h2><a><?php echo $value['name']?></a></h2>
                                    <h4><?php echo $value['designation']?></h4>
                                  
                                </div>
                            </div>
                        </div>
                        <?php } ?> 
                        <!-- End Single Team -->
                      
                      
                        
                    </div>
                </div>
            </div>
            
        </section>
        <!-- End Team Area -->
          <div class="wtsp_chat" style="float:right;">
                                     <a href="https://api.whatsapp.com/send?phone=9669966007&text=Hello%20Team&source=&data=&app_absent=" target="_blank"><img src="<?php echo base_url();?>assets/images/msg-700823808-140.jpg" alt="Live Chat" height="60px"></a>
                                    </div>
                                    <div class="wtsp_chat" style="float:left;">
                                     <a href="https://api.whatsapp.com/send?phone=9669966007&text=Hello%20Team&source=&data=&app_absent=" target="_blank"><img src="<?php echo base_url();?>assets/images/download.png" alt="Live Chat" height="60px"></a>
                                    </div>
        