
<?php $__env->startSection('content'); ?> 


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="<?php echo e(asset('css/admin.css')); ?>" >
    <title>MTs Mifthaul Huda Kalipucang</title>
</head>
<body>

<?php echo $__env->make('admin.wrapper', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div id="page-content-wrapper">
    <div class="container-fluid px-4">
        <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Jenis Daftar Sampah</h2>
                </div>
                <div class="pull-right mb-2">
                    <a class="btn btn-success" href="<?php echo e(route('sampahs.create')); ?>"> Tambah Daftar</a>
                </div></br></br>
                <div class="pull-right mb-2">
                    <form action="<?php echo e(route('sampahs.index')); ?>" method="GET">
                        <label for="search" class="sr-only">
                            Search
                        </label>
                    <input type="text" name="s"
                        class="block w-full p-3 pl-10 text-sm border-gray-200 rounded-md focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400"
                        placeholder="Search..." />
                    </form>
                </div>
            </div>
        </div>
        <div class="card-body">
            <?php if(Session::has('success')): ?>
                <div class="alert alert-primary">
                    <?php echo e(Session('success')); ?>

                </div>
            <?php endif; ?>
        </div>
        <div style="overflow-x:auto;">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Jenis Sampah</th>
                    <th>Gambar Sampah</th>
                    <th width="280px">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $__empty_1 = true; $__currentLoopData = $sampahs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sampah): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td><?php echo e($sampah->id); ?></td>
                        <td><?php echo e($sampah->namaSampah); ?></td>
                        <td>
                            <img src=" <?php echo e(asset('uploads/' . $sampah->gambarSampah)); ?> " width="100">
                        </td>
                        <td>
                            <form action="<?php echo e(route('sampahs.destroy',$sampah->id)); ?>" method="POST">
                                <a class="btn btn-primary" href="<?php echo e(route('sampahs.edit',$sampah->id)); ?>">Edit</a>
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <?php echo $sampahs->links(); ?>

    </div> 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
            <script>
                var el = document.getElementById("wrapper");
                var toggleButton = document.getElementById("menu-toggle");

                toggleButton.onclick = function () {
                    el.classList.toggle("toggled");
                };
            </script>


    </body>
</html>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Asus\Downloads\bankSampah\bank_sampah\resources\views/admin/data/jenisSampah/index.blade.php ENDPATH**/ ?>