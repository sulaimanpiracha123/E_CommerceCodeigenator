<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>
<body>
<h1>CHECKOUT</h1>
<div class="checkout">
    <div class="row">
        <?php if(!empty($error_msg)){ ?>
        <div class="col-md-12">
            <div class="alert alert-danger"><?php echo $error_msg; ?></div>
        </div>
        <?php } ?>
		
        <div class="col-md-4 order-md-2 mb-4">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-muted">Your Cart</span>
                <span class="badge badge-secondary badge-pill"><?php echo $this->cart->total_items(); ?></span>
            </h4>
            <ul class="list-group mb-3">
                <?php if($this->cart->total_items() > 0){ foreach($cartItems as $item){ ?>
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <?php $imageURL = !empty($item["image"])?base_url('uploads/product_images/'.$item["image"]):base_url('assets/images/pro-demo-img.jpeg'); ?>
                        <img src="<?php echo $imageURL; ?>" width="75"/>
                        <h6 class="my-0"><?php echo $item["name"]; ?></h6>
                        <small class="text-muted"><?php echo '$'.$item["price"]; ?>(<?php echo $item["qty"]; ?>)</small>
                    </div>
                    <span class="text-muted"><?php echo '$'.$item["subtotal"]; ?></span>
                </li>
				            <?php } }else{ ?>
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <p>No items in your cart...</p>
                </li>
                <?php } ?>
                <li class="list-group-item d-flex justify-content-between">
                    <span>Total (USD)</span>
                    <strong><?php echo '$'.$this->cart->total(); ?></strong>
                </li>
            </ul>
            <a href="<?php echo base_url('products/'); ?>" class="btn btn-block btn-info">Add Items</a>
        </div>
        <div class="col-md-8 order-md-1">
            <h4 class="mb-3">Contact Details</h4>
            <form method="post">
                <div class="mb-3">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" value="<?php echo !empty($custData['name'])?$custData['name']:''; ?>" placeholder="Enter name" required>
                    <?php echo form_error('name','<p class="help-block error">','</p>'); ?>
                </div>
                <div class="mb-3">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" value="<?php echo !empty($custData['email'])?$custData['email']:''; ?>" placeholder="Enter email" required>
                    <?php echo form_error('email','<p class="help-block error">','</p>'); ?>
                </div>
                <div class="mb-3">
                    <label for="phone">Phone</label>
                    <input type="text" class="form-control" name="phone" value="<?php echo !empty($custData['phone'])?$custData['phone']:''; ?>" placeholder="Enter contact no" required>
                    <?php echo form_error('phone','<p class="help-block error">','</p>'); ?>
                </div>
                <div class="mb-3">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" name="address" value="<?php echo !empty($custData['address'])?$custData['address']:''; ?>" placeholder="Enter address" required>
                    <?php echo form_error('address','<p class="help-block error">','</p>'); ?>
                </div>
                <input class="btn btn-success btn-lg btn-block" type="submit" name="placeOrder" value="Place Order">
            </form>
        </div>
    </div>
</div>
</body>
</html>