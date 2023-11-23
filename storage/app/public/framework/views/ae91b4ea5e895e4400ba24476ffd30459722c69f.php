

<?php $__env->startSection('title', 'Profile | XiAO DiNG DoNG'); ?>

<?php $__env->startSection('content'); ?>

    
    <link rel="stylesheet" href="<?php echo e(asset('css/Profile.css')); ?>">

    

    <div class="container-fluid w-50 d-flex justify-content-center">
        <h1 class="title">编辑个人资料 | Edit Profile</h1>
    </div>

    <form method="POST" action="<?php echo e(route('updateProfile')); ?>">
        <?php echo csrf_field(); ?>

        <div class="form-group container-fluid w-50 mb-3">
            <label for="exampleFormControlInput1" class="form-label">Username</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="username"
                placeholder="Minimum 5 Characters">
        </div>

        <div class="form-group container-fluid w-50 mb-3">
            <label for="exampleFormControlInput2" class="form-label">Email</label>
            <input type="email" class="form-control" id="exampleFormControlInput2"
                placeholder="Must to end with '@gmail.com'" <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> name="email"
                value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus>
        </div>

        <div class="form-group container-fluid w-50 mb-3">
            <label for="exampleFormControlInput3" class="form-label">Phone Number</label>
            <input type="tel" class="form-control" id="exampleFormControlInput3" name="phone"
                placeholder="Must contains 12 Numbers">
        </div>
        <div class="form-group container-fluid w-50 mb-3">
            <label for="exampleFormControlInput4" class="form-label">Address</label>
            <input type="text" class="form-control" id="exampleFormControlInput4" name="address"
                placeholder="Do not have to be filled, Minimum 5 Characters">
        </div>

        <div class="form-group container-fluid w-50 mb-3">
            <label for="exampleFormControlInput5" class="form-label">New Profile Image</label>
            <input type="file" class="form-control" id="exampleFormControlInput5" name="profile_picture" placeholder="">
        </div>

        <div class="form-group container-fluid w-50 mb-3">
            <label for="exampleInputPassword6">Current Password</label>
            <input type="password" class="form-control" id="exampleInputPassword6" <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                placeholder="Has to be the same with previous password" name="current_password" required
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
            <input class="btn btn-primary w-30" type="submit" value="Update Profile">
        </div>

    </form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HP\Desktop\WebProgramming_LAB_Project\WebProgramming_LAB_Project\resources\views/profile.blade.php ENDPATH**/ ?>