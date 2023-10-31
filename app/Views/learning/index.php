<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container mt-4">
    <h2 class="text-center">List Of Learning</h2>
    <?php if (session()->getFlashdata('status')) : ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong><?= session()->getFlashdata('status'); ?></strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

        </div>
    <?php endif; ?>
    <a href="<?= site_url('learning/create'); ?>" class="btn btn-success mb-2">Add Data</a>
    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Learning Topics</th>
                <th>Topic Category</th>
                <th>Learning Category</th>
                <th>Organizer</th>
                <th>Schedule</th>
                <th>Location</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>

            <?php $i = 1; ?>
            <?php foreach ($data as $d) : ?>
                <tr>
                    <td><?= $i++; ?></td>
                    <td><?= $d->learning_topic; ?></td>
                    <td><?= $d->topic_category; ?></td>
                    <td><?= $d->learning_category; ?></td>
                    <td><?= $d->organizer; ?></td>
                    <td><?= $d->schedule; ?></td>
                    <td><?= $d->location; ?></td>
                    <td>
                        <a href="<?= site_url('learning/edit/' . $d->id); ?>" class="btn btn-info">edit</a> |
                        <form action="<?= site_url('learning/delete/' . $d->id); ?>" method="POST" class="d-inline">
                            <input type="hidden" name="_method" value="DELETE">
                            <button onclick="return confirm('Apakah anda yakin?')" type="submit" class="btn btn-danger">delete</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>

        </tbody>
    </table>
</div>
<?= $this->endSection(); ?>

<?= $this->section('after-script'); ?>
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
<script>
    new DataTable('#example');
</script>
<?= $this->endSection(); ?>