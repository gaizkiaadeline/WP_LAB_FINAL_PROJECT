

<?php $__env->startSection('title', 'Home | XiAO DiNG DoNG'); ?>

<?php $__env->startSection('content'); ?>

    
    <link rel="stylesheet" href="<?php echo e(asset('css/Home.css')); ?>">

    

    <h1 class="title-menu">菜单 Menu</h1>

    <div class="button-group">
        <form method="POST" action="<?php echo e(route('filterCategory')); ?>>
            <button href="#" class="btn btn-secondary"
            value="main-course">主菜 | Main Course</button>
            <button href="#" class="btn btn-secondary" value="beverage">饮料 | Beverage</button>
            <button href="#" class="btn btn-secondary" value="dessert">甜点 | Dessert</button>
        </form>

    </div>

    <div class="banner-category">
        <?php if($category === 'main-course'): ?>
            <p>主菜 | Main Course</p>
        <?php elseif($category === 'beverage'): ?>
            <p>饮料 | Beverage</p>
        <?php elseif($category === 'dessert'): ?>
            <p>甜点 | Dessert</p>
        <?php endif; ?>
    </div>

    <div class="row row-cols-1 row-cols-md-4 g-4 m-2">
        <?php $__currentLoopData = $foods; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $f): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col">
                <div class="card h-100 text-white text-center bg-dark mb-3" style="width: 90%">
                    <img class="card-img-top" src="<?php echo e(asset('storage/images/' . $f->food_image)); ?>" alt="Image Not Found"
                        style="width: 100%; height:90%">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo e($f->food_name); ?></h5>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <div class="m-5 d-flex justify-content-center">
            
            
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HP\Desktop\WebProgramming_LAB_Project\WebProgramming_LAB_Project\resources\views/home.blade.php ENDPATH**/ ?>