<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
<div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Add new services</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">

                                          
                                    <?php foreach ($get as $value){} ?>

                                   <form style="text-align: center; " action="<?php echo base_url()?>index.php/user/add_services" enctype="multipart/form-data" method="POST">
                                    
                                   <label style="font-size: 20px;">image:</label><br>
                                     <input type="file" name="file_name" value="" required><br>
                                   <label style="font-size: 20px;">services name:</label><br>
                                     <input type="text" name="services" value="" required><br>
                                  <label  style="font-size: 20px;"> content: </label><br>
                                    <textarea type="text" rows="6" cols="80" name="content" value="" required></textarea><br>
                             <input type="submit" value="Submit">
                                   
                                   </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</main>
