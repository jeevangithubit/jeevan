  <?php 
foreach($get as $value){}
  ?>

  <!-- inner page banner -->
<div id="inner_banner" class="section inner_banner_section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="title-holder">
            <div class="title-holder-cell text-left">
              <h1 class="page-title">Contact</h1>
              <ol class="breadcrumb"  style="background-color: revert; display: inline-flex;">
                <li><a href="<?php echo base_url();?>index.php/web/index">Home</a></li>
                <li class="active">Contact</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end inner page banner -->
<div class="section padding_layout_1">
  <div class="container">
    <div class="row">
      <div class="col-xl-2 col-lg-2 col-md-12 col-sm-12 col-xs-12"></div>
      <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-xs-12">
        <div class="row">
          <div class="full">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 adress_cont margin_bottom_30">
              <h4>Address One</h4>
              <p><?php echo $value['address_one']?></p>
              <div class="information_bottom left-side margin_bottom_20_all">
                <div class="icon_bottom"> <i class="fa fa-road" aria-hidden="true"></i> </div>
                <div class="info_cont">
                  <h4>Phone No:</h4>
                  <p><?php echo $value['phone_no']?></p>
                </div>
              </div>
              <div class="information_bottom left-side margin_bottom_20_all">
                <!-- <div class="icon_bottom"> <i class="fa fa-user" aria-hidden="true"></i> </div>
                <div class="info_cont">
                  <h4>Open/Close</h4>
                  <p>Mon-Fri 8:30am-6:30pm</p>
                </div> -->
              </div>
              <div class="information_bottom left-side">
                <div class="icon_bottom"> <i class="fa fa-envelope" aria-hidden="true"></i> </div>
                <div class="info_cont">
                  <h4>Email Address</h4>
                  <p><?php echo $value['email_address1']?></p>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 adress_cont margin_bottom_30_all">
              <h4>Address Two</h4>
              <p><?php echo $value['address_two']?></p>
              <div class="information_bottom left-side margin_bottom_20_all">
                <div class="icon_bottom"> <i class="fa fa-road" aria-hidden="true"></i> </div>
                <div class="info_cont">
                  <h4>Whatsapp No:</h4>
                  <p><?php echo $value['whatsapp_no']?></p>
                </div>
              </div>
              <div class="information_bottom left-side margin_bottom_20_all">
               <!--  <div class="icon_bottom"> <i class="fa fa-user" aria-hidden="true"></i> </div>
                <div class="info_cont">
                  <h4>Open</h4>
                  <p>Mon-Fri 8:30am-6:30pm</p>
                </div> -->
              </div>
              <div class="information_bottom left-side">
                <div class="icon_bottom"> <i class="fa fa-envelope" aria-hidden="true"></i> </div>
                <div class="info_cont">
                  <h4>Email Address</h4>
                  <p><?php echo $value['email_address2']?></p>
                </div>
              </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 contant_form">
              <h4>Send Message</h4>
              <p>Our goal is to provide the best customer service and to answer all of your questions in a timely manner.</p>
              <div class="form_section">
                <form class="form_contant" action="<?php echo base_url()?>index.php/web/save" method="post">
                  <fieldset>
                  <div class="row">
                    <div class="field col-lg-6 col-md-6 col-sm-12 col-xs-12">
                      <label>First Name</label>
                      <input class="field_custom" name="fname" placeholder="" type="text" required />
                    </div>
                    <div class="field col-lg-6 col-md-6 col-sm-12 col-xs-12">
                      <label>Last Name</label>
                      <input class="field_custom" name="lname" placeholder="" type="text" required />
                    </div>
                    <div class="field col-lg-6 col-md-6 col-sm-12 col-xs-12">
                      <label>Email</label>
                      <input class="field_custom" name="email"placeholder="" type="email" required />
                    </div>
                    <div class="field col-lg-6 col-md-6 col-sm-12 col-xs-12">
                      <label>phone Number</label>
                      <input class="field_custom" name="phone" placeholder="" type="text" required />
                    </div>
                    <div class="field col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <label>Message</label>
                      <textarea class="field_custom" name="message" placeholder="" required ></textarea>
                    </div>

                    <div class="center">

                      <button class="btn main_bt" href="#">SUBMIT NOW</button>
                    </div>
                  </div>
                  </fieldset>
                </form>
                 <div class="map_section" style="margin-top: 40px;">
                <div id="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3643.328113313184!2d75.07072071332314!3d24.0547473844402!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39642fc5675cef09%3A0x6a09c47fd0f2886e!2sPashupatinath%20Temple%20Campus!5e0!3m2!1sen!2sin!4v1651828244289!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
             </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- section -->
