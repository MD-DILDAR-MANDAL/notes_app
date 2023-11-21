<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Note Taking</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark">

<!-- Links -->
<ul class="navbar-nav">
  <li class="nav-item">
    <a class="nav-link text-light" href="/">Notes</a>
  </li>
  
</ul>

</nav>
<?php if($message = Session::get('success')): ?>
  <div class="alert alert-success alert-block">
    <strong><?php echo e($message); ?></strong>
  </div>
<?php endif; ?>

    <div class="container">
       <div class="row justify-content-center">
        <div class="col-sm-8">
          <div class="card mt-3 p-3">
            <h3>Product Edit #<?php echo e($product->name); ?></h3>
            <form action="/products/<?php echo e($product->id); ?>/update" method="post" enctype="multipart/form-data">
              <?php echo csrf_field(); ?> 
              <?php echo method_field('PATCH'); ?>
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" value="<?php echo e($product->name); ?>">
                <?php if($errors->has('name')): ?>
                <span class="text-danger"><?php echo e($errors->first('name')); ?></span>
                <?php endif; ?>
              </div>
              <div class="form-group">
                <label for="name">Description</label>
                <textarea name="description" id="description" class="form-control" cols="30" rows="10"><?php echo e($product->description); ?></textarea>
                <?php if($errors->has('description')): ?>
                <span class="text-danger"><?php echo e($errors->first('description')); ?></span>
                <?php endif; ?>
              </div>
              <!-- <div class="form-group">
                <label for="name">Image</label>
                
                <input type="file" name="image" id="image" class="form-control">
                <?php if($errors->has('image')): ?>
                <span class="text-danger"><?php echo e($errors->first('image')); ?></span>
                <?php endif; ?>
              </div> -->
              <button type="submit" class="btn btn-dark">Submit</button>
            </form>
          </div>
        </div>
       </div>
    </div>
</body>
</html><?php /**PATH C:\xampp\htdocs\app\resources\views/products/edit.blade.php ENDPATH**/ ?>