<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container mt-4">
    <h2 class="text-center">Add Data</h2>
    <div class="d-flex justify-content-end">
        <a class="btn btn-warning " href="<?= site_url('learning'); ?>">Back</a>
    </div>
    <form action="<?= site_url('learning/store'); ?>" method="POST">
        <?= csrf_field(); ?>
        <div class="mb-3">
            <label for="learning_topic" class="form-label">Learning Topic</label>
            <input required type="text" class="form-control" name="learning_topic" id="learning_topic">
        </div>
        <div class="mb-3">
            <label for="topic_category" class="form-label">Topic Category</label>
            <input required type="text" class="form-control" name="topic_category" id="topic_category">
        </div>
        <div class="mb-3">
            <label for="learning_category" class="form-label">Learning Category</label>
            <input required type="text" class="form-control" name="learning_category" id="learning_category">
        </div>
        <div class="mb-3">
            <label for="organizer" class="form-label">Organizer</label>
            <input required type="text" class="form-control" name="organizer" id="organizer">
        </div>
        <div class="mb-3">
            <label for="schedule" class="form-label">Schedule</label>
            <input required type="text" class="form-control" name="schedule" id="schedule">
        </div>
        <div class="mb-3">
            <label for="location" class="form-label">Location</label>
            <input required type="text" class="form-control" name="location" id="location">
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
<?= $this->endSection(); ?>