<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
<center><a style="padding: 15px; color: #14e113; color: #fff;  margin-top: 50px; display: inline-grid; background-color: crimson;
 " class="btn bnt-primary" href="<?php echo base_url()?>index.php/user/service_form"   >Add New</a></center>
<center><?php echo $this->session->flashdata('success')?></center>
<div  style="margin-top: 50px;" class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">services</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">

<div class="card-body px-0 pb-2">
                            <div class="table-responsive">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th>image</th>
                                            <th>services name</th>
                                            <th>content</th>
                                            
                                        </tr>
                                    </thead>
                                    <?php 
foreach ($get as $value){ ?>
                                    <tbody>
                                        <tr>
                                            <td>
                                                  <img src="<?php echo base_url();?>assets/uploads/<?php echo $value['image']?>" height="80px"> 
                                            </td>
                                            <td>
                                               <?php echo $value['service_name']?>
                                            </td>

                                            <td>
                                               <?php echo $value['contante']?>
                                            </td>
                                            <td>
                                                <a  class="btn btn-primary" href="<?php echo base_url()?>index.php/user/services_delete/<?php echo $value['id']?>" onclick="return conform ('Are you sure?')"> Delete</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <?php } ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</main>
