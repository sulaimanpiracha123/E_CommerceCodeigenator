<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Vendor</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Users</a></li>
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
          <a href="#" class="btn btn-info float-right" data-toggle="modal" data-target="#exampleModal">Add_New</a>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover" id="dataTables-example1">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Mobile Number</th>
                  <th>Status</th>
                  <th>Action</th>

                </tr>
              </thead>
              <tbody>
                <?php foreach($users as $key => $usr){?>
                <tr class="odd gradeX">
                  <td><?php echo $key+1?></td>
                  <td><?php echo $usr['name']?></td>
                  <td><?php echo $usr['email']?></td>
                  <td class="center"><?php echo $usr['mobile']?></td>
                  <td class="center"><input type="hidden" value="0" data-id ="<?php echo $usr['id'] ?>"class = "manage_user_status"><input <?php  if($usr['status']==1){echo "checked";}?> type="checkbox"/></td>

                  <td>
                    <a class = "btn btn-info" href = "<?php echo base_url('index.php/Users/Update_vendor/'.$usr['id'])?>">Update</a>
                    <a class = "btn btn-danger" href = "<?php echo base_url('index.php/Users/Delete_user/'.$usr['id'])?>">Delete</a>

                  </td>
                </tr>
                <?php }?>
              </tbody>
            </table>
          </div>
        </div>

      </div>
      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Add New Vendor</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form action = "<?php echo base_url().'index.php/Users/add_vendor'?>"class="database_operation">
              <div class="row">

                <div class="col-sm-12">
                  <div class="form-group">
                    <label>Enter Name</label>
                    <input type="text" name="name" id="name" required placeholder="Enter Name" class="form-control">
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="form-group">
                    <label>Enter Email</label>
                    <input type="email" name="email" id="email" required placeholder="Enter Name" class="form-control">
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="form-group">
                    <label>Enter Mobile Number</label>
                    <input type="text" name="mobile" id="mobile" required placeholder="Enter Name" class="form-control">
                  </div>
                </div>

                <div class="col-sm-12">
                  <div class="form-group">
                    <label>Enter Password</label>
                    <input type="password" name="password" id="password" required placeholder="Enter Name" class="form-control">
                  </div>
                </div>
                <!--Footer-->
                <div class="modal-footer">
                  <button class="btn btn-info float-left">Save</button>
                </div>
              </div>
            </div>
           </form>
          
          </div>

        </div>
      </div>
    </div>

</div>
</div>
</section>
</div>
</section>
</div>