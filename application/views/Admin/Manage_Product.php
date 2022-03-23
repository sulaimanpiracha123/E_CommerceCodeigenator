<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Manage_Products</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Manage Products</a></li>
                        <li class="breadcrumb-item active">Products</li>
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
                    <a href="<?php echo base_url().'index.php/Products/Add_Products'?>" class="btn btn-info float-right"  >Add_New</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example1">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Product Name</th>
                                    <th>Category</th>
                                    <th>SubCategory</th>
                                    <th>Brands</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($Manage_Prod as $key => $Prod) { 
                                    ?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $key + 1 ?></td>
                                        <td><?php echo $Prod['Prod_Name']?></td>
                                        <td><?php echo $Prod['Cat_Name']?></td>
                                        <td><?php echo $Prod['sub_cat']?></td>
                                        <td><?php echo $Prod['brand_cat']?></td>
                                        <td><img src = "<?php echo base_url('upload/Prod_Img/'.$Prod['Image'])?>"width = "100px"></td>
                                        <td><input type = "checkbox"name = ""/></td>

                                           <td> <a class="btn btn-info" href="<?php echo base_url('index.php/Products//' . $Prod['id']) ?>">Update</a>
                                            <a class="btn btn-danger" href="<?php echo base_url('index.php/Products/Delete_Product/'.$Prod['id']) ?>">Delete</a></td>

                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>


                    
                        </table>
                    </div>
                </div>

            </div>
           <!-- Modal -->
 

        </div>
</div>
</section>
</div>
</section>
</div>