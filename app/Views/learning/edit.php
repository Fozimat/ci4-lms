<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container mt-4">
    <h2 class="text-center">Edit Data</h2>
    <div class="d-flex justify-content-end">
        <a class="btn btn-warning " href="<?= site_url('learning'); ?>">Back</a>
    </div>
    <form action="<?= site_url('learning/update/' . $data->id); ?>" method="POST">
        <?= csrf_field(); ?>
        <input type="hidden" name="_method" value="PUT">
        <div class="mb-3">
            <label for="learning_topic" class="form-label">Learning Topic</label>
            <input required type="text" class="form-control" name="learning_topic" id="learning_topic" value="<?= old('learning_topic', $data->learning_topic); ?>">
        </div>
        <div class="mb-3">
            <label for="topic_category" class="form-label">Topic Category</label>
            <input required type="text" class="form-control" name="topic_category" id="topic_category" value="<?= old('topic_category', $data->topic_category); ?>">
        </div>
        <div class="mb-3">
            <label for="learning_category" class="form-label">Learning Category</label>
            <input required type="text" class="form-control" name="learning_category" id="learning_category" value="<?= old('learning_category', $data->learning_category); ?>">
        </div>
        <div class="mb-3">
            <label for="organizer" class="form-label">Organizer</label>
            <input required type="text" class="form-control" name="organizer" id="organizer" value="<?= old('organizer', $data->organizer); ?>">
        </div>
        <div class="mb-3">
            <label for="schedule" class="form-label">Schedule</label>
            <input required type="text" class="form-control" name="schedule" id="schedule" value="<?= old('schedule', $data->schedule); ?>">
        </div>
        <div class="mb-3">
            <label for="location" class="form-label">Location</label>
            <input required type="text" class="form-control" name="location" id="location" value="<?= old('location', $data->location); ?>">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
<?= $this->endSection(); ?>