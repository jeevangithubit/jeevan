<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
<div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">user detials</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">

<div class="card-body px-0 pb-2">
                            <div class="table-responsive">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th>firstname</th>
                                            <th>lastname</th>
                                            <th>email</th>
                                            <th>phone no.</th>
                                            <th>message</th>
                                        </tr>
                                    </thead>
                                    <?php 
foreach ($get as $value){ ?>
                                    <tbody>
                                        <tr>
                                            <td>
                                               <?php echo $value['first_name']?>
                                            </td>

                                            <td>
                                               <?php echo $value['last_name']?>
                                            </td>
                                            <td>
                                               <?php echo $value['your_email']?>
                                            </td>
                                            <td>
                                               <?php echo $value['phone_no']?>
                                            </td>
                                              <td>
                                               <?php echo $value['message']?>
                                            </td>
                                             <td>
                                                <a   class="btn btn-primary" href="<?php echo base_url()?>index.php/user/message_delete/<?php echo $value['id']?>" onclick="return conform ('Are you sure?')"> Delete</a>
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
