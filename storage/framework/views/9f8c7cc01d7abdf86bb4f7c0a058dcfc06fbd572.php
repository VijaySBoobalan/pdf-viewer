<aside class="main-sidebar sidebar-light-primary elevation-4">
    <a href="<?php echo e(route('/')); ?>" class="brand-link navbar-primary">
        <img src="<?php echo e(asset('img/user-160x160.png') . '?v=' . config('app.versionnumber')); ?>" alt="<?php echo e(config('app.name')); ?> Logo" class="brand-image img-circle elevation-3">
        <span class="brand-text font-weight-bold text-white"><?php echo e(config('app.name')); ?></span>
    </a>
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?php echo e(asset('img/user-160x160.png') . '?v=' . config('app.versionnumber')); ?>" class="img-circle elevation-2" alt="<?php echo e(config('app.name')); ?> User Image">
            </div>
            <div class="info">
                <a href="<?php echo e(route('/')); ?>" class="d-block"><?php echo e(ucfirst(Auth::user()->name)); ?></a>
            </div>
        </div>

         <!-- search form (Optional) -->
        <form action="<?php echo e(route('upload_files')); ?>" method="post" class="sidebar-form" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="input-group">
                <input type="file" name="file_upload" id="file_upload" class="form-control">
                <div class="input-group-append">
                    <button type="submit" class="btn btn-primary">Upload</button>
                </div>
            </div>
            <?php if($errors->has('file_upload')): ?>
                <strong style="color: red"><?php echo e($errors->first('file_upload')); ?></strong>
            <?php endif; ?>
        </form>
        <!-- /.search form -->

        <nav class="mt-2 mb-5">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <?php if(count($pdfFiles)>0): ?>
                    <?php $__currentLoopData = $pdfFiles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pdf): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="nav-item">
                            <a href="<?php echo e(route('viewfile',$pdf->id)); ?>" class="nav-link <?php if(Request::segment(1) == $pdf->id): ?> active <?php endif; ?>">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p><?php echo e($pdf->original_name); ?></p>
                            </a>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </ul>
        </nav>
    </div>
</aside><?php /**PATH C:\xampp\htdocs\work\pdf viewer\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>