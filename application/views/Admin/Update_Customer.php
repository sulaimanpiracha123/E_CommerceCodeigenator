<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Update_Customer</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Update_Customer</a></li>
            <li class="breadcrumb-item active">Vendor</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="card">
          <div class="card-header">
        </div>
      
        <div class="card-body">
            <form action = "<?php echo base_url().'index.php/Users/update_customer/'.$upd_cus[0]['id']?>" class="database_operation">
            <div class="row">
                <div class="col-sm-12">
                    <label>Name</label>
                    <div class="form-group"><input type="text" value = "<?php echo $upd_cus[0]['name']?>" name="name" class="form-control" placeholder="Enter Name">
                </div>
                </div>
            <div class="col-sm-12">
                    <label>Email</label>
                    <div class="form-group"><input type="email" name="email" value="<?php echo $upd_cus[0]['email']?>" class="form-control" placeholder="Enter Name"></div>
                </div>
            <div class="col-sm-12">
                    <label>Mobile Number</label>
                    <div class="form-group"><input type="text" name="mobile" value = "<?php echo $upd_cus[0]['mobile']?>" class="form-control" placeholder="Enter Name"></div>
                </div>
            <div class="col-sm-12">
                    <label>Password</label>
                    <div class="form-group"><input type="password" name="password"  class="form-control" placeholder="Enter Passwod"></div>
                </div>
            <div class="col-sm-12">
                <button class="btn btn-info">Update</button>
            </div>
    </div>  
</div>
</form>
</section>
</div>