<?php $__env->startSection('content'); ?>
    <div class="card-body login-card-body">
        <?php if(session('status')): ?>
            <div class="alert alert-dismissable alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="color:#ffffff; opacity:1;">
                    <span aria-hidden="true">&times;</span>
                </button>
                <strong><?php echo e(session('status')); ?></strong>
            </div>
        <?php endif; ?>
        <?php if(session('warning')): ?>
            <div class="alert alert-dismissable alert-warning">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="color:#ffffff; opacity:1;">
                    <span aria-hidden="true">&times;</span>
                </button>
                <strong><?php echo e(session('warning')); ?></strong>
            </div>
        <?php endif; ?>
        <p class="login-box-msg">Sign in to start your session</p>

        <form method="POST" action="<?php echo e(route('login')); ?>">
            <?php echo csrf_field(); ?>
            <div class="input-group mb-3">
                <input type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="<?php echo e(__('E-Mail Address')); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus>
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                    </div>
                </div>
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
            <div class="input-group mb-3">
                <input type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="<?php echo e(__('Password')); ?>" name="password" required autocomplete="current-password">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                    </div>
                </div>
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
            <div class="form-group row">
                <div class="col-12">
                    <button type="submit" class="btn btn-primary btn-block"><?php echo e(__('Login')); ?></button>
                </div>
            </div>
            <div class="form-group row mb-0">
                <?php if(Route::has('password.request')): ?>
                    <a class="btn btn-link" href="<?php echo e(route('password.request')); ?>">
                        <?php echo e(__('Forgot Your Password?')); ?>

                    </a>
                <?php endif; ?>
            </div>
            <div class="form-group row mb-0">
                <a class="btn btn-link" href="<?php echo e(route('register')); ?>">
                    <?php echo e(__('Sign Up')); ?>

                </a>
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.login_register_app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\work\pdf viewer\resources\views/auth/login.blade.php ENDPATH**/ ?>