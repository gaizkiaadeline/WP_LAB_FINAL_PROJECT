

<?php $__env->startSection('title', 'Update Food | XiAO DiNG DoNG'); ?>

<?php $__env->startSection('content'); ?>

    
    <link rel="stylesheet" href="<?php echo e(asset('css/UpdateFood.css')); ?>">

    

    <div class="container-fluid w-50 d-flex justify-content-center">
        <h1 class="title">更新食物 | Update Food</h1>
    </div>

    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

    <form method="POST" action="<?php echo e(route('updateFood')); ?>">
        <?php echo csrf_field(); ?>

        <div class="form-group container-fluid w-50 mb-3">
            <label for="exampleFormControlInput1" class="form-label">Food Name</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="food_name" 
                required placeholder="Must be filled and contains minimum 5 characters">
        </div>

        <div class="form-group container-fluid w-50 mb-3">
            <label for="exampleFormControlInput3" class="form-label">Brief Description</label>
            <textarea type="text" class="form-control" id="exampleFormControlInput3" name="food_brief_description"
                 required placeholder="Must be filled and less than or equal to 100 characters">
            </textarea>
        </div>

        <div class="form-group container-fluid w-50 mb-3">
            <label for="exampleFormControlInput4" class="form-label">Full Description</label>
            <textarea type="text" class="form-control" id="exampleFormControlInput4" name="food_full_description"
                 required placeholder="Must be filled and less than or equal to 255 characters">
            </textarea>
        </div>

        <div class="form-group container-fluid w-50 mb-3">
            <label for="exampleFormControlInput5" class="form-label" id="exampleFormControlInput5" name="food_category">Food
                Category</label>
            <select name="food_category" class="form-control" required>
                <option value="main_course" >Main Course
                </option>
                <option value="beverages" >Beverages</option>
                <option value="desserts" >Desserts</option>
            </select>
        </div>

        <div class="form-group container-fluid w-50 mb-3">
            <label for="exampleFormControlInput6" class="form-label">Food Price</label>
            <input type="number" class="form-control" id="exampleFormControlInput6" name="food_price" 
                required placeholder="Must be filled and has to be more than 0">
        </div>

        <div class="form-group container-fluid w-50 mb-3">
            <label for="exampleFormControlInput5" class="form-label">Food Image</label>
            <input type="file" class="form-control" id="exampleFormControlInput5" name="food_image" placeholder="">
        </div>

        <div class="form-group container-fluid w-50 mb-3">
            <input class="btn btn-primary w-30" type="submit" value="Update Food">
        </div>

    </form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HP\Desktop\WebProgramming_LAB_Project\WebProgramming_LAB_Project\resources\views/updateFood.blade.php ENDPATH**/ ?>