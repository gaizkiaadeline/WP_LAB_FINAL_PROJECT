<?php $__env->startSection('title', 'Login | XiAO DiNG DoNG'); ?>

<?php $__env->startSection('content'); ?>

    <div class="container-fluid w-50 d-flex justify-content-center">
        <h1 class="title">Login</h1>
    </div>

    <form method="POST" action="<?php echo e(route('login')); ?>">
        <?php echo csrf_field(); ?>

        <div class="form-group container-fluid w-50 mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email Address</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Has to end with '@gmail.com'"
                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> name="email" value="<?php echo e(old('email')); ?>" required
                autocomplete="email" autofocus>
            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="invalid-feedback" role="alert">
                    <strong><?php echo e($message); ?></strong>
                </span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

        </div>


        <div class="form-group container-fluid w-50 mb-3">
            <label for="exampleInputPassword2">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword2" <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                placeholder="Minimum 5 Characters, Maximum 255 Characters" name="password" required
                autocomplete="new-password">
            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="invalid-feedback" role="alert">
                    <strong><?php echo e($message); ?></strong>
                </span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

        </div>

        <div class="form-group container-fluid w-50 mb-3">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember"
                    <?php echo e(old('remember') ? 'checked' : ''); ?>>

                <label class="form-check-label" for="remember">
                    Remember Me
                </label>
            </div>

        </div>

        <div class="form-group container-fluid w-50 mb-3">
            <button type="submit" class="btn btn-primary w-100">Login</button>
        </div>

        <div class="container-fluid w-50 d-flex justify-content-center">
            <label>Don't have an account? </label>
            <a href="register">Sign Up</a>

        </div>

        

    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HP\Desktop\WebProgramming_LAB_Project\WebProgramming_LAB_Project\resources\views/login.blade.php ENDPATH**/ ?>