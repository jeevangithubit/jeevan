<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
<div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Add New product</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                                        
                                         <?php foreach ($get as $value){} ?>
                                          
                                   <form style="text-align: center; " action="<?php echo base_url()?>index.php/user/add_product" enctype="multipart/form-data" method="POST">
                                    
                                   
                                   <label style="font-size: 20px;">image:</label><br>
                                     <input type="file" name="file" value="" required><br>
                                   <label style="font-size: 20px;">Product name:</label><br>
                                     <input type="text" name="product" value="" required><br><br>
                                 
                                       <input type="submit" value="Submit">
                                   
                                   </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</main>
