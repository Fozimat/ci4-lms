<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?= $this->include('layout/style'); ?>

    <title><?= $title; ?></title>
</head>

<body>

    <?= $this->renderSection('content'); ?>

    <?= $this->include('layout/script'); ?>

    <?= $this->renderSection('after-script'); ?>

</body>

</html>