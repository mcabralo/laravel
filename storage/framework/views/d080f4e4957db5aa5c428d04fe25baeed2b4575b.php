<?php $__env->startSection('content'); ?>
    <h1> Customers</h1>

    <form action="customers" method="POST">
       
        <div class="form-group">
            <label for="name">Name</label>
                <input type="text" name="name" placeholder="Insert your name" value='<?php echo e(old('name')); ?>' class="form-control">
        </div>
        
        <div class="form-group">
            <label for="email">Email</label>
                <input type="email" name="email" placeholder="Insert your e-mail" value='<?php echo e(old('email')); ?>' class="form-control">
        </div>

        <div>
          <?php echo e($errors->first('name')); ?>

          <?php echo e($errors->first('email')); ?>

        </div>

        <button type="Submit" class="btn btn-primary">Add Customer</button>
        <?php echo csrf_field(); ?>
    </form>

<hr>

<div>
    <ol>
        <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>Nome - <?php echo e($customer->name); ?> <span class="text-muted"><br>Email - <?php echo e($customer->email); ?></span></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ol>
</div>
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\mathe\my-first-project\resources\views/internals/customers.blade.php ENDPATH**/ ?>