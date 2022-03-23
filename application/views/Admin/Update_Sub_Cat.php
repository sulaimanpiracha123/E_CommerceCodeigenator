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
            <form action = "<?php echo base_url().'index.php/Products/Update_SubCategory/'.$upd_Sub_Cat[0]['id']?>" class="database_operation">
            <div class="row">
                <div class="col-sm-12">
                    <label>Sub_Name</label>
                    <div class="form-group"><input type="text" value = "<?php echo $upd_Sub_Cat[0]['name']?>" name="name" class="form-control" placeholder="Enter Name">
                </div>
                </div>
            <div class="col-sm-12">
                    <label>Cat_Name</label>
                    <select class="form-control" name = "category_id">
                        <option value="">Select Sub Category
                        </option>
                        <?php 
                        foreach($Category as $cat)
                        {
                            ?>
                            <option <?php if($upd_Sub_Cat[0]['category_id']==$cat['id']){echo "selected";}?>value="<?php echo $cat['id']?>"><?php echo $cat['cat_name']?></option>
                        }
                        <?php
                        }?>
                    </select>
                </div>
          
            <div class="col-sm-12">
                <button class="btn btn-info">Update</button>
            </div>
    </div>  
</div>
</form>
</section>
</div>