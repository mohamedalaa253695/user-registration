<?= $this->extend('App\Views\layouts\main') ?>

<?= $this->section('content') ?>
       <div class="main-content-inner">
                <div class="row">
                    <!-- data table start -->
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                            <form method="get" action="<?php base_url('user/create');?>">
                            <button type="button" class="btn btn-outline-primary mb-3 float-right">Create User</button>
                            </form>
                                <div class="data-tables">
                                    <table id="example"class="table table-striped  table-hover">
                                        <thead class="bg-light text-capitalize">
                                            <tr>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone Number</th>
                                                <th>Address</th>
                                                 <th>role</th>
                                                 <th>#</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if(isset($users)){?>
                                            <?php foreach($users as $user){?>

                                            <tr>
                                                <td><?php echo $user['name'];?></td>
                                                <td><?php echo $user['email'];?></td>
                                                <td><?php echo $user['phone_number'];?></td>
                                                <td><?php echo $user['address'];?></td>
                                                <td><?php echo $user['email'];?></td>
                                                <td>
                                                    <div class="btn-group br-6">
                                                      <a type="button" class="btn btn-rounded btn-xs btn-danger mr-1 "><i class="ti-trash"></i></a>
                                                      <a type="button" class="btn btn-rounded btn-xs btn-primary"><i class="fa fa-edit"></i></a>
                                                     
                                                    </div>
                                                </td>
                                            </tr>
                                          <?php }}?>
                                        </tbody>
                                    </table>
                                    <?= $pager->links() ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- data table end -->
                    <!-- Primary table start -->
                    
                   
                    <!-- Dark table end -->
                </div>
            </div>
<?= $this->endSection() ?>

<script >
    
  $(document).ready(function() {
    $('#example').DataTable();
} );
</script>