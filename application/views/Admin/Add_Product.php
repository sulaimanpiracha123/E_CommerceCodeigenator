<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Add_Products</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Add_Product</a></li>
                        <li class="breadcrumb-item active">Product</li>
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
                    <form action="<?php echo base_url().'index.php/Products/Add_Products'?>" method="post" class="Add_new_product" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-sm-12">
                                <label>Product Name</label>
                                <div class="form-group"><input type="text" value="" name="Prod_Name" class="form-control" placeholder="Enter Name">
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <label>Select Category</label>
                                <select class="form-control" name="Category">
                                    <option value="">Select Category</option>
                                    <?php
                                    foreach ($Cat_pro as $Cat) {
                                    ?>
                                        <option value="<?php echo $Cat['id'] ?>"><?php echo $Cat['cat_name'] ?></option>
                                        }
                                    <?php
                                    }
                                    ?>



                                </select>
                            </div>
                            <div class="col-sm-6">
                                <label>Sub Category</label>
                                <select class="form-control" name="Sub_category">
                                    <option value="">Sub_Category
                                    </option>
                                    <?php
                                    foreach ($Sub_Cat as $Sub_Category) {
                                    ?>
                                        <option value="<?php echo $Sub_Category['id'] ?>"><?php echo $Sub_Category['name'] ?> </option>
                                    <?php
                                    } ?>


                                </select>
                            </div>
                            <div class="col-sm-12">
                                <label>
                                    Select Brand
                                </label>
                                <select class="form-control" name="Brand">
                                    <option value=""> Brand Category
                                        <?php
                                        foreach ($Cat_brands as $Brand) {
                                        ?>
                                    <option value="<?php echo $Brand['id'] ?>"><?php echo $Brand['Brand_name'] ?></option>
                                    }
                                <?php
                                        } ?>




                                </option>
                                </select>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Enter Descripation</label>
                                    <textarea name="description" class="form-control">

                             </textarea>
                            </div>
                            </div>
                            <div class="col-sm-4">
                                <label>Select Image</label>
                                <input type="file" name="Image" class="form-control" />
                            </div>
                            <div class="col-sm-4">
                                <label>Qty</label>
                                <input type="text" name="qty" class="form-control" />
                            </div>
                            <div class="col-sm-4">
                                <label>Price</label>
                                <input type="text" name="price" class="form-control" />
                            </div>
                              <div class="col-sm-4">
                               

                            <div class="col-sm-12">
                                <button class="btn btn-info mt-4">Add_Product</button>
                            </div>
                        </div>
                </div>
            </form>
        </div>
    </section>
</div>