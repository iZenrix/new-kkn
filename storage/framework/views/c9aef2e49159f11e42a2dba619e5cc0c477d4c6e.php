

<?php $__env->startSection('content'); ?>
    <h2 class="mb-4">Upload Laporan Mingguan</h2>

    <form role="form" action="insert-aksi.php" method="post">
        <div class="form-group">
            <label>Nama Ketua</label>
            <input type="text" name="judul_bk" class="form-control">
        </div>
        <div class="form-group">
            <label>Lokasi</label>
            <input type="text" name="penulis_bk" class="form-control">
        </div>
        <div class="form-group">
            <label>Minggu</label>
            <input type="text" name="terbit_bk" class="form-control">
        </div>
        <div class="form-group">
            <label>File</label>
            <input type="file" name="terbit_bk" class="form-control">
        </div>
        <button type="submit" class="btn btn-info btn-block">Submit</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layouts-dosen', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\laravel\kkn\resources\views/dosen/laporan/form.blade.php ENDPATH**/ ?>