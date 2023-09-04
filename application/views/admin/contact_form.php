<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
<div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Change address</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">

                                          
                                    <?php foreach($get as $value){} ?>

                                   <form style="text-align: center; " action="<?php echo base_url()?>index.php/user/update_address" method="POST">
                                    
                                   
                                   <label style="font-size: 15px;">Address1 :</label><br>
                                     <input type="text" name="address1" value="<?php echo $value['address_one']?>"><br>
                                     <label style="font-size: 15px;">Address2 :</label><br>
                                     <input type="text" name="address2" value="<?php echo $value['address_two']?>"><br>
                                     <label  style="font-size: 15px;">Phone: </label> <br>
                                     <input  type="text" name="phone" value="<?php echo $value['phone_no']?>"><br>
                                      <label  style="font-size: 15px;">whatsapp: </label> <br>
                                     <input  type="text" name="whatsapp" value="<?php echo $value['whatsapp_no']?>"><br>
                                     <label  style="font-size: 15px;">Email Addresss1: </label><br>
                                     <input  type="text" name="email_address1" value="<?php echo $value['email_address1']?>"><br>
                                     <label  style="font-size: 15px;">Email Addresss2: </label><br>
                                     <input  type="text" name="email_address2" value="<?php echo $value['email_address2']?>">
                                     <br><br>
                                       <input class="btn btn-primary"  type="submit" value="Change Addess">
                                   
                                   </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</main>
