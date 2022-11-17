

<?php $__env->startPush('css'); ?>
    <style>
    </style>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <h2 class="mb-4">Laporan Mingguan</h2>
    <table class="table table-striped table-hover dtabel">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Ketua</th>
                <th>Lokasi</th>
                <th>Minggu</th>
                <th>File</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>

            <tr>
                <td>
                    01
                </td>
                <td>
                    Supri
                </td>
                <td>
                    Malang
                </td>
                <td>
                    1
                </td>
                <td>
                    <a href="#" class="btn btn-info" role="button">Download</a>
                </td>
                <td>
                    <a href="editform.php" class="btn btn-success" role="button">Edit</a>
                    <a href="delete.php" class="btn btn-danger" role="button">Delete</a>
                </td>
            </tr>

        </tbody>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\laravel\kkn\resources\views/mahasiswa/laporan/list.blade.php ENDPATH**/ ?>