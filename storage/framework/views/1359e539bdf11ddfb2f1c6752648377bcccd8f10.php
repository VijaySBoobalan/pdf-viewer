<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo $__env->yieldContent('title'); ?> | <?php echo e(config('app.name')); ?></title>
    <link rel="stylesheet" href="<?php echo e(asset('css/fontawesome-free-all.min.css')); ?>">
    <link href="<?php echo e(asset('css/bootstrap-toggle.min.css')); ?>" rel="stylesheet">
    <?php echo $__env->yieldContent('css-plugin'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/adminlte.min.css')); ?>">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('css/custom.css') . '?v=' . config('app.versionnumber')); ?>">
    <?php echo $__env->yieldContent('css-custom'); ?>
    <link href="<?php echo e(asset('css/sweetalert.css')); ?>" rel="stylesheet">
    <link rel="shortcut icon" href="<?php echo e(asset('img/favicon.ico') . '?v=' . config('app.versionnumber')); ?>" type="image/x-icon" />
</head>
<body class="hold-transition sidebar-mini text-sm">
    <div class="wrapper">
        <?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->yieldContent('content'); ?>
        <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    
    <script src="<?php echo e(asset('js/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/bootstrap.bundle.min.js')); ?>"></script>
    <?php echo $__env->yieldContent('js-plugin'); ?>
    <script src="<?php echo e(asset('js/adminlte.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/bootstrap-toggle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/custom.js') . '?v=' . config('app.versionnumber')); ?>"></script>
    <?php echo $__env->yieldContent('js-custom'); ?>
    <?php echo $__env->yieldContent('js-custom-1'); ?>
    <script src="<?php echo e(asset('js/sweetalert.js')); ?>"></script>
    <script>
        $(function () {
            $('#sidebar-form').on('submit', function (e) {
                e.preventDefault();
            });
            
            $('.nav li.active').data('lte.pushmenu.active', true);

            $('#search-input').on('keyup', function () {
                var term = $('#search-input').val().trim();
                if (term.length === 0) {
                    $('.nav li').each(function () {
                        $(this).show(0);
                        $(this).removeClass('active');
                        if ($(this).data('lte.pushmenu.active')) {
                            $(this).addClass('active');
                        }
                    });
                    return;
                }

                $('.nav li').each(function () {
                    if ($(this).text().toLowerCase().indexOf(term.toLowerCase()) === -1) {
                        $(this).hide(0);
                        $(this).removeClass('pushmenu-search-found', false);

                        if ($(this).is('.nav-item')) {
                            $(this).removeClass('active');
                        }
                    } else {
                        $(this).show(0);
                        $(this).addClass('pushmenu-search-found');

                        if ($(this).is('.nav-item')) {
                            $(this).addClass('active');
                        }

                        var parent = $(this).parents('li').first();
                        if (parent.is('.nav-item')) {
                            parent.show(0);
                        }
                    }

                    if ($(this).is('.header')) {
                        $(this).show();
                    }
                });

                $('.nav li.pushmenu-search-found.nav-item').each(function () {
                    $(this).find('.pushmenu-search-found').show(0);
                });
            });

            $('input[type="file"]').change(function(){
                var imageSizeArr = 0;
                var fileid = $(this)[0].id;
                var fileName = $(this)[0].name;
                var imageFiles = $(this)[0].files;
                var imageCount = imageFiles.length;
                var files = "";
                var appendFiles = "";
                
                var defaultattachmentSize = '<?php echo e(config('app.attachmentfilesize')); ?>';
                var defaultattachmentSizeinmb = '<?php echo e(config('app.attachmentfilesizeinmb')); ?>';
                var attachmentSize = defaultattachmentSize*1000;
                checkFileUploadConfigure(defaultattachmentSizeinmb,attachmentSize,imageSizeArr,fileid,imageFiles,imageCount,files,appendFiles);
                
            });

            function checkFileUploadConfigure(defaultattachmentSizeinmb,attachmentSize,imageSizeArr,fileid,imageFiles,imageCount,files,appendFiles){
                for (var i = 0; i < imageCount; i++){
                    var imageSize = imageFiles[i].size;
                    var selectedimageSize = imageSize/1024/1000;
                    var selectedFile = imageFiles[i].name;
                    if (imageSize > attachmentSize) {
                        var imageSizeArr = 1;
                    }else{
                        var imageSizeArr = 0;
                    }
                    if (imageSizeArr == 1){
                        files += "<p style='font-size:16px;'>"+selectedFile +" file size is <span style='color:red;'>" + (selectedimageSize.toFixed(0))+" MB </span></p>";
                    }
                }
                if(files!=""){
                    swal({
                        title: '<p class="text-bold"><span> Default Size is ' + defaultattachmentSizeinmb + ' </span></p>'+ files,
                        buttons: {
                            cancel: false,
                            confirm: false,
                        }
                    });
                    $('#'+fileid).val("");
                }
            }
        });
    </script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\work\pdf viewer\resources\views/layouts/master.blade.php ENDPATH**/ ?>