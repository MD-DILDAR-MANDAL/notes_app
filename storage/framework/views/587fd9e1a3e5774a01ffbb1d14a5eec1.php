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
    <div class="container">
        <div class="text-right">
            <a href="products/create" class="btn btn-dark mt-2">New notes</a>
        </div>
        
        <table class="table table-bordered mt-8">
    <thead>
      <tr>
        <th>Sno.</th>
        <th>Name</th>
        <th>Description</th>
       
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
        <td><?php echo e($loop->index+1); ?></td>
        <td><?php echo e($product->name); ?></td>
        <td><?php echo e($product->description); ?></td>
        
        <td>
            <a href="products/<?php echo e($product->id); ?>/edit" class="btn btn-dark btn-sm">Edit</a>
            <a href="products/<?php echo e($product->id); ?>/delete" class="btn btn-danger btn-sm">Delete</a>
        </td>

      </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>
    </div>
</body>
</html><?php /**PATH C:\xampp\htdocs\app\resources\views/products/index.blade.php ENDPATH**/ ?>