<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Manage Category</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Manage Category</a></li>
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
                                    <th>#</th>
                                    <th>Sub_Name</th>
                                    <th>Cat_Name</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <?php foreach ($Sub_Cat as $key => $Man_sub_Cat) { ?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $key + 1 ?></td>

                                        <td><?php echo $Man_sub_Cat['name'] ?></td>
                                        <td><?php echo $Man_sub_Cat['Name'] ?></td>

                                        <td><img src = "<?php echo base_url('upload/Prod_Img/'.$Man_sub_Cat['Sub_Image'])?>"width = "100px"></td>

                                        <td class="center"><input type="hidden" value="1" data-id="<?php echo $Man_sub_Cat['id'] ?>" class="manage_Sub_cat_status"><input <?php if ($Man_sub_Cat['Status'] == 1) {
                                                                                                                                                                    echo "checked";
                                                                                                                                                                } ?> type="checkbox" /></td>

                                        <td>
                                            <a class="btn btn-info" href="<?php echo base_url('index.php/Products/Update_SubCategory/' . $Man_sub_Cat['id']) ?>">Update</a>
                                            <a class="btn btn-danger" href="<?php echo base_url('index.php/Products/delete_Subcat/' . $Man_sub_Cat['id']) ?>">Delete</a>

                                        </td>
                                    </tr>
                                <?php } ?>
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
                            <form action="<?php echo base_url().'index.php/Products/Add_Subcategory'?>" method="post" class="Add_new_product" enctype="multipart/form-data">
                                <div class="row">

                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Enter Category Name</label>
                                            <input type="text" name="name" id="name" required placeholder="Enter Name" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Enter_Sub_Category</label>
                                            <select class="form-control" name = "category_id">
                                                <option value = "">Select Category Name</option>
                                                <?php 
                                                foreach($Category as $Sub_cat)
                                                {
                                                    ?>
                                                    <option value = "<?php echo $Sub_cat['id']?>"><?php echo $Sub_cat['cat_name']?></option>
                                                <?php
                                               
                                                
                                                }?>
                                            </select>
                                            <label>Sub_Image</label>
                                            <input type="file" name = "Sub_img" class="form-control"/>
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