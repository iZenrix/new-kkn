

<?php $__env->startPush('css'); ?>
    <style>
    </style>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <h2 class="mb-4">List Kelompok</h2>
    <table class="table table-striped table-hover dtabel">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Ketua</th>
                <th>Lokasi</th>
                <th>Status</th>
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
                    ✅
                </td>
            </tr>

        </tbody>
        <tbody>

            <tr>
                <td>
                    02
                </td>
                <td>
                    Mali
                </td>
                <td>
                    Nganjuk
                </td>
                <td>
                    ❌
                </td>
            </tr>

        </tbody>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\laravel\kkn\resources\views/mahasiswa/dashboard.blade.php ENDPATH**/ ?>