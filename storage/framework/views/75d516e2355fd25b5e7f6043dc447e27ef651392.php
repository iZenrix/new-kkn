

<?php $__env->startSection('content'); ?>
    <h2 class="mb-4">Pengantar Dosen</h2>

    <table class="table table-striped table-hover dtabel">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Ketua</th>
                <th>Lokasi</th>
                <th>Minggu</th>
                <th>File</th>
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
                    <a href="#" class="btn btn-info" role="button">Upload</a>
                </td>
            </tr>

        </tbody>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layouts-dosen', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\laravel\kkn\resources\views/dosen/pengantar.blade.php ENDPATH**/ ?>