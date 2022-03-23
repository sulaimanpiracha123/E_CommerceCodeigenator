<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Manage_Brand</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Manage Brand</a></li>
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
                    <a href="#" class="btn btn-info float-right" data-toggle="modal" data-target="#exampleModal">Add_New</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example1">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Brand_Name</th>
                                    <th>Status</th>
                                    <th>Image</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($M_brand as $key => $brand) { ?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $key + 1 ?></td>
                                        <td><?php echo $brand['Brand_name'] ?></td>
                                        <td class="center"><input type="hidden" value="1" data-id="<?php echo $brand['id'] ?>" class="manage_user_status"><input <?php if ($brand['status'] == 1) {
                                                                                                                                                                    echo "checked";
                                                                                                                                                            } ?> type="checkbox" /></td>
                                        <td><img src = "<?php echo base_url('upload/Brand_Img/'.$brand['Brand_image'])?>"width = "100px"></td>

                                        

<td>
                                            <a class="btn btn-info" href="<?php echo base_url('index.php/Products/Update_Brand/' . $brand['id']) ?>">Update</a>
                                            <a class="btn btn-danger" href="<?php echo base_url('index.php/Products/Delete_Brand/' . $brand['id']) ?>">Delete</a>

                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbod>

                    
                        </table>
                    </div>
                </div>

            </div>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add Brand</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="<?php echo base_url() .'index.php/Products/add_Brand'?>" class="Add_new_product"enctype="multipart/form-data">
                                <div class="row">

                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Enter Category Name</label>
                                            <input type="text" name="Brand_name" id="Brand_name" required placeholder="Enter Brand Name" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Brand_Image</label>
                                            <input type="file" name="Brand_image" id="Brand_image" class="form-control">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-info float-left">Save</button>
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