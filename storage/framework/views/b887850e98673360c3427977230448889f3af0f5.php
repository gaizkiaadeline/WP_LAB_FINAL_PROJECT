<?php $__env->startSection('title', 'Login'); ?>

<?php $__env->startSection('content'); ?>

    <div class="container-fluid w-50 d-flex justify-content-center">
        <p class="" style="background-color: #f5ec9a;">Login</p>
    </div>
    <div class="form-group container-fluid w-50 mb-3" style="background-color: #f5ec9a;">
        <label for="exampleFormControlInput1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>
    <div class="form-group container-fluid w-50 mb-3" style="background-color: #f5ec9a;">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
    <div class="form-group container-fluid w-50 mb-3" style="background-color: #f5ec9a;">
        <input type="checkbox" aria-label="Checkbox for following text input">
        <label>Remember me</label>
    </div>
    <div class="form-group container-fluid w-50 mb-3" style="background-color: #f5ec9a;">
        <input class="btn btn-primary w-100" type="submit" value="Login">
    </div>
    <div class="container-fluid w-50 d-flex justify-content-center">
        <label>Don't have an account?</label>
        <a href="register">Sign Up</a>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\KULIAH\KULIAH ODD 2324\WEB PROGRAMMING\LAB\WebProgramming_LAB_Project\resources\views/login.blade.php ENDPATH**/ ?>