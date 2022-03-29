<?php $__env->startSection('title', 'Dashboard'); ?>
<?php $__env->startSection('css-plugin'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/ionicons.min.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <?php if(Request::segment(1) != NULL): ?>
                            <form action="<?php echo e(route('update_files',Request::segment(1))); ?>" method="post" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('PUT'); ?>
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
                        <?php endif; ?>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="container-fluid">
                <?php if(!empty($streampdf)): ?>
                    <embed class="loadpdf" src="<?php echo e(asset('uploads/PdfFiles/' . $streampdf->saveasfilename."#toolbar=0&navpanes=0&scrollbar=0")); ?>" style="width: 100%; max-width: 100%; height: 600px;"/>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\work\pdf viewer\resources\views/dashboard/admin.blade.php ENDPATH**/ ?>